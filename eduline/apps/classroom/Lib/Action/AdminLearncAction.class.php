<?php
/**
 * 学币列表信息管理控制器
 * @author ashangmanage <ashangmanage@phpzsm.com>
 * @version CY1.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class AdminLearncAction extends AdministratorAction {
    /**
     * 初始化，访问控制及配置
     * @return void
     */
    public function _initialize() {
        parent::_initialize();
        $this->pageTab[] = array('title'=>'云课堂用户列表','tabHash'=>'index','url'=>U('classroom/AdminLearnc/index'));
        $this->pageTab[] = array('title'=>'所有流水记录','tabHash'=>'flow','url'=>U('classroom/AdminLearnc/flow'));
		$this->pageTab[] = array('title'=>'用户充值记录', 'tabHash'=>'recharge', 'url'=>U('classroom/AdminLearnc/recharge'));
    }
    
    /**
     * 学币列表信息管理
     * @return void
     */
    public function index(){
        // 页面具有的字段，可以移动到配置文件中！
        $this->pageKeyList = array('uname','realname','idcard','catagroy','balance','frozen','count','vip_type','vip_expire','DOACTION');
        $this->pageTitle['index'] = '云课堂用户列表';
        //按钮
        $this->pageButton[] = array('title'=>'搜索','onclick'=>"admin.fold('search_form')");
        //搜索项
        $this->searchKey = array('uid', 'vip_type');
        $vip_type = M('user_vip')->where('is_del=0')->getField('id,title');
        
        $this->opt['vip_type']    = $vip_type;
        $this->opt['vip_type'][0] = '全部';
        $this->searchPostUrl = U('classroom/AdminLearnc/index', array('tabHash'=>'index'));
        //根据用户查找
        if(!empty($_POST['uid'])){
            $_POST['uid'] = t($_POST['uid']);
            $map['uid'] = array('in', $_POST['uid']);
        }
        if(!empty($_POST['vip_type'])){
            $map['vip_type'] = $_POST['vip_type'];
        }

        $list = D('ZyLearnc')->where($map)->order('id DESC')->findPage();
        foreach($list['data'] as &$value){
            $user = M('user_verified')->where("uid=".$value["uid"])->find();
            $count = M('zy_order')->where(['uid'=>$value["uid"],'is_del'=>0])->count();
            $user_group = model ( 'UserGroupLink' )->getUserGroup ( $value['uid'] );
            $user_group = model ( 'UserGroup' )->getUserGroup ( $user_group[$value['uid']] );
            $user_groups = '';
            foreach($user_group as &$val) {
                $user_groups .= $val['user_group_name'].'<br/>';
            }
            $value['realname']    = $user["realname"];
            $value['idcard']      = $user["idcard"];
            $value['catagroy']    = $user_groups;
            $value['uname']       = getUserSpace($value['uid'], null, '_blank');
            $value['balance']     = '<span style=color:red>￥'.$value['balance'].'</span>';
            $value['frozen']      = '<span style=color:green>￥'.$value['frozen'].'</span>';
            $value['count']       =$count;
            if( $value['vip_type'] ) {
                $value['vip_type'] = M('user_vip')->where('sort= '.$value['vip_type'])->getField('title');
                $value['vip_expire']    = date('Y-m-d H:i:s',$value['vip_expire']);
            } else {
                $value['vip_type']    = '-';
                $value['vip_expire']    = "-";
            }

            $value['DOACTION']  = '<a href="'.U(APP_NAME.'/'.MODULE_NAME.'/edit', array('id'=>$value['id'], 'tabHash'=>'edit')).'">编辑</a>';
            $value['DOACTION'] .=  '| <a href="'.U('classroom/AdminLearnc/learn',array('uid'=>$value['uid'],'tabHash'=>'learn')).'">TA的学习记录</a>';
            $value['DOACTION'] .=   '| <a href="'.U('classroom/AdminLearnc/uflow',array('uid'=>$value['uid'],'tabHash'=>'uflow')).'">TA的学币账户流水</a>';
            $value['DOACTION'] .=   '| <a href="'.U('classroom/AdminLearnc/classlearn',array('uid'=>$value['uid'],'tabHash'=>'classlearn')).'">课堂管理</a>';

        }

        $this->displayList($list);
    }


    /**
     * 编辑操作
     */
    public function edit(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST['vip_type'] = intval($_POST['vip_type']);
            if($_POST['vip_type'] == 0){
                $_POST['vip_expire'] = 0;
            }else{
                $_POST['vip_expire'] = strtotime($_POST['vip_expire'])+0;
            }
            $_POST['balance'] = floatval($_POST['balance']);
            $_POST['frozen'] = floatval($_POST['frozen']);
            $set = array(
                'id' => intval($_POST['id']),
                'vip_type' => $_POST['vip_type'],
                'vip_expire' => $_POST['vip_expire'],
                'balance'    => $_POST['balance'],
                'frozen'     => $_POST['frozen'],
            );
            $name = getUserName( M('zy_learncoin')->where('id=' . intval($_POST['id']))->getField('uid') );
            if(false !== D('ZyLearnc')->save($set)){
                LogRecord('admin_classroom','editBalance',array('uname'=>$name,'balance'=>$_POST['balance']),true);
                $this->success('保存成功！');
            }else{
                $this->error('保存失败！');
            }
            exit;
        }
        $_GET['id'] = intval($_GET['id']);
        $this->pageTab[] = array('title'=>'查看/修改','tabHash'=>'edit','url'=>U(APP_NAME.'/'.MODULE_NAME.'/edit', array('id'=>$_GET['id'],'tabHash'=>'edit')));
        $this->pageTitle['edit'] = '用户信息查看/修改';
        $this->savePostUrl = U(APP_NAME.'/'.MODULE_NAME.'/edit');
        $this->submitAlias = '确 定';
        $this->pageKeyList = array('id','uid','balance','frozen','vip_type','vip_expire');
        $this->opt['vip_type'] = M('user_vip')->where('is_del=0')->getField('sort,title');
        $this->opt['vip_type'][0] = '请选择';
        $data = D('ZyLearnc')->find($_GET['id']);
        $data['uid'] = getUserSpace($data['uid'], null, '_blank');
        $data['vip_expire'] = $data['vip_expire']>0?date('Y-m-d H:i:s', $data['vip_expire']):'';
        $this->displayConfig($data);
    }

    //学习记录
    public function learn($limit=20){
        $_REQUEST['tabHash'] = 'learn'; 
        $this->pageButton[] = array('title'=>'删除记录','onclick'=>"admin.delLearnAll('delArticle')");
        //$this->pageButton[] = array('title'=>'搜索记录','onclick'=>"admin.fold('search_form')");
        $this->pageKeyList  = array('id','uname','video_title','sid','time','ctime','DOACTION');
        $this->searchKey    = array('id','uid','video_title','sid');
        $uid = intval( $_GET['uid'] );
        $learn = D('learn_record')->where('uid='.$uid)->order("ctime DESC")->findPage($limit);
        foreach($learn['data'] as &$val){
            $val['video_title'] = M('zy_video')->where(array('id'=>$val['vid']))->getField('video_title');
            $val['sid']         = M('zy_video_section')->where(array('zy_video_section_id'=>$val['sid']))->getField('title');
            $val['ctime']       = date('Y-m-d H:i:s',$val['ctime']) ;
            $val['time']        = round ( $val['time'] / 60 , 1);
            if($val['is_del'] == 1) {
                $val['DOACTION'] = '<a href="javascript:admin.mzLearnEdit(' . $val['id'] . ',\'closelearn\',\'显示\',\'学习记录\');">显示</a>';
            }else {
                $val['DOACTION'] = '<a href="javascript:admin.mzLearnEdit(' . $val['id'] . ',\'closelearn\',\'隐藏\',\'学习记录\');">隐藏</a>';
            }
        }
        unset($val);
        $val['uname']       = getUserName($uid);
        $this->assign('pageTitle','学习记录--'.$val['uname']);
        $this->_listpk = 'id';
        $this->displayList($learn);
    }

    /**
     * 流水列表
     */
    public function flow(){
        $this->_flow(false);
    }

    /**
     * 用户流水列表
     */
    public function uflow(){
        $this->_flow(intval($_GET['uid']));
    }

    /**
     * 课堂管理
     * 课堂列表展示
     */
    public function classlearn(){
        $_REQUEST['tabHash'] = 'classlearn';
        $uid = intval( $_GET['uid'] );
        $val['uname']       = getUserName($uid);
        $this->pageTitle['classlearn'] 	= $val['uname'].'-课时管理';
        $this->_initClassroomListAdminTitle();

        $learn = M('ZyOrder as o')->field('o.id,v.video_title')->join('el_zy_video as v on o.video_id=v.id')->where(['o.uid'=>$uid,'o.is_del'=>0])->order("o.ctime DESC")->findPage(20);
        $this->assign('learn' , $learn['data']);
        $this->assign('stable','zy_video');
        $this->assign('uid',$uid);
        $this->display();
    }

    /**
     * 添加课堂页面
     */
    public function addclasslearn()
    {
        $id      = intval($_GET['id']);//0
        $stable  = t($_GET['stable']);
        $uid     = intval($_GET['uid']);

        $this->assign('id', $id);
        $this->assign('stable', $stable);
        $this->assign('uid', $uid);
        $this->assign('oper', 'add');

        $this->display();
    }

    /**
     * 购买课堂操作
     */
    public function buyOperating()
    {
        if (! $this->mid)  $this->mzError ( '请先登录!' );

        $vid = intval ( $_POST ['vid'] );
        $uid = intval ( $_POST ['uid'] );
        $map = array(
            'video_id'=>$vid,
            'uid'=>$uid,
        );

        $data['video_id'] = $vid;
        $data['uid'] = $uid;
        $i = M ( 'zy_order' )->add($data);
        if ($i == true) {
            $res['status'] = 1;
            $res['data'] = '购买成功';
        } else {
            $res['status'] = 0;
            $res['data'] = '购买失败';
        }

        exit(json_encode($res));
    }

    /**
     * 添加课堂的弹框页面获取的数据
     */
    public function getClassList()
    {
//        $map['is_starty'] = 1;
        $map['is_del'] = 0;
        if($_POST['s_title']) {
            $map['title'] = array('like' , '%'.t( $_POST['s_title']).'%' );
        }
        if($_POST['s_type']) {
            $map['type'] = intval( $_POST['s_type'] );
        }

        $uid=intval($_POST['uid']);
        $condition = array('uid'=>$uid,'is_del'=>0);
        $vtotal = M('zy_video')->where($map)->count();//课程总记录数
        $ototal = M('zy_order')->where($condition)->count();//订单总记录
        $total = $vtotal - $ototal;
        $page      = intval($_POST['pageNum']); //当前页
        $pageSize  = 10; //每页显示数
        $totalPage = ceil($total/$pageSize); //总页数

        $startPage = $page*$pageSize; //开始记录
        //构造数组
        $list['total']     = $total;
        $list['pageSize']  = $pageSize;
        $list['totalPage'] = $totalPage;

//          $list['data'] = M('zy_video')->where('id not in '.$subQuery)->order('id desc')->limit("{$startPage} , {$pageSize}")->findAll();

        $SQL="select el_zy_video.id,el_zy_video.uid,el_zy_video.video_title,el_zy_video.ctime from el_zy_video where id not in (select video_id from el_zy_order where uid=$uid)";
        $list['data']=M()->query($SQL);
        foreach($list['data'] as &$val) {
            $val['uid']   = getUserName($val['uid']);
            $val['ctime'] = date('Y-m-d' , $val['ctime']);
        }
        exit( json_encode($list) ) ;
    }

    /**
     * 删除课堂
     */
    public function delLearn(){
        $ids=implode(",",$_POST['ids']);
        $ids=trim(t($ids),",");
        if($ids==""){
            $ids=intval($_POST['ids']);
        }
        $msg=array();
        $where=array(
            'id'=>array('in',$ids)
        );
        $data['is_del']=1;
        $res=D('ZyOrder')->where($where)->save($data);

        if($res!==false){
            $msg['data']=L('PUBLIC_DELETE_SUCCESS');
            $msg['status']=1;
            echo json_encode($msg);
        }else{
            $msg['data']="删除失败!";
            echo json_encode($msg);
        }
    }


    public function _flow($uid){
        
        $this->pageKeyList = array('id','uname','realname','idcard','catagroy','type','num','balance','rel_id','note','ctime');
        $this->pageButton[] = array('title'=>'搜索记录','onclick'=>"admin.fold('search_form')");
        $this->pageTitle[ACTION_NAME] = $uid?'账户流水-'.getUserName($uid):'所有流水记录';
        if($uid){
            $this->pageTab[]    = array('title'=>'账户流水-'.getUserName($_GET['uid']),'tabHash'=>ACTION_NAME,'url'=>U(APP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME,array('uid'=>$uid)));
            $this->pageButton[] = array('title'=>'&lt;&lt;&nbsp;返回来源页','onclick'=>"admin.zyPageBack()");
            $this->searchKey    = array('type','note','startTime','endTime');
        }else{
            $this->searchKey    = array('uid','type','note','startTime','endTime');
        }

        $this->opt['type']  = array('全部','消费','充值','冻结','解冻','冻结扣除','分成收入');
        $this->searchPostUrl= U(APP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME, array('uid'=>$uid, 'tabHash'=>ACTION_NAME));

        $map = array();
        if($uid){
            $map['uid'] = $uid;
        }elseif(!empty($_POST['uid'])){
            $_POST['uid'] = t($_POST['uid']);
            $map['uid'] = array('in', $_POST['uid']);
        }

        if(!empty($_POST['type']) && $_POST['type']>0){
            $map['type'] = $_POST['type']-1;
        }
        if(!empty($_POST['note'])){
            $map['note'] = array('like', '%'.t($_POST['note']).'%');
        }
        //时间范围内进行查找
        if(!empty($_POST['startTime'])){
            $map['ctime'][] = array('gt', strtotime($_POST['startTime']));
        }
        if(!empty($_POST['endTime'])){
            $map['ctime'][] = array('lt', strtotime($_POST['endTime']));
        }

        $list = D('ZyLearnc')->flowModel()->where($map)->order('ctime DESC,id DESC')->findPage();
        $relTypes = D('ZyLearnc')->getRelTypes();
        foreach($list['data'] as $key=>$value){
            $user=D('user_verified')->where("uid=".$value["uid"])->find();
            $user_group = model ( 'UserGroupLink' )->getUserGroup ( $value['uid'] );
            $user_group = model ( 'UserGroup' )->getUserGroup ( $user_group[$value['uid']] );
            $user_groups = '';
            foreach($user_group as &$val) {
                $user_groups .= $val['user_group_name'].'<br/>';
            }
            $list['data'][$key]['realname']  = $user["realname"];
            $list['data'][$key]['idcard']    = $user["idcard"];
            $list['data'][$key]['catagroy']  = $user_groups;
            $list['data'][$key]['uname']       = getUserSpace($value['uid'], null, '_blank');
            switch ($value['type']){
                case 0:$list['data'][$key]['type'] = "消费";break;
                case 1:$list['data'][$key]['type'] = "充值";break;
                case 2:$list['data'][$key]['type'] = "冻结";break;
                case 3:$list['data'][$key]['type'] = "解冻";break;
                case 4:$list['data'][$key]['type'] = "冻结扣除";break;
                case 5:$list['data'][$key]['type'] = "分成收入";break;
            }
            if($value['ctime'] == 0){
                $list['data'][$key]['ctime']    =  '-';
            }else{
                $list['data'][$key]['ctime']    = date('Y-m-d H:i:s', $value['ctime']);
            }
            
            $list['data'][$key]['num']        = '<span style=color:red>￥'.$value['num'].'</span>';        
            $list['data'][$key]['balance']    = '<span style=color:green>￥'.$value['balance'].'</span>';
            $list['data'][$key]['rel_id']     = $value['rel_id']>0?$value['rel_id']:'-';
            if(isset($relTypes[$value['rel_type']])&&$value['rel_id']>0){
                $list['data'][$key]['rel_id'] = $relTypes[$value['rel_type']].'-ID:'.$value['rel_id'];
            }
        }
        $this->displayList($list);
    }

	public function recharge(){
		$this->pageTitle['recharge'] = '用户充值记录';
		$this->pageKeyList = array('id','uname','realname','idcard','catagroy','money','type','vip_length','note','ctime','status','stime','pay_order','pay_type');
          $this->pageButton[] = array('title'=>'搜索记录','onclick'=>"admin.fold('search_form')");
		$this->searchKey    = array('uid','startTime','endTime');
		$this->searchPostUrl= U(APP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME, array('uid'=>$uid, 'tabHash'=>ACTION_NAME));
		$recharge = D('ZyRecharge');
		$map['status'] = array('gt', 0);
		if(!empty($_POST['uid'])){
            $_POST['uid'] = t($_POST['uid']);
            $map['uid'] = array('in', $_POST['uid']);
        }
		//时间范围内进行查找
        if(!empty($_POST['startTime'])){
            $map['ctime'][] = array('gt', strtotime($_POST['startTime']));
        }
        if(!empty($_POST['endTime'])){
            $map['ctime'][] = array('lt', strtotime($_POST['endTime']));
        }
		$data = $recharge->where($map)->order('stime DESC,id DESC')->findPage();
		$types = array('学币充值', '会员充值');
		$status= array('未支付', '已成功', '失败');
		$payType = array('alipay'=>'支付宝', 'unionpay'=>'银联');
		foreach($data['data'] as &$val){
            $user=D('user_verified')->where("uid=".$val["uid"])->find();
            $user_group = model ( 'UserGroupLink' )->getUserGroup ( $val['uid'] );
            $user_group = model ( 'UserGroup' )->getUserGroup ( $user_group[$val['uid']] );
            $user_groups = '';
            foreach($user_group as &$value) {
                $user_groups .= $value['user_group_name'].'<br/>';
            }
            $val['realname'] = $user["realname"];
            $val['idcard']   = $user["idcard"];
            $val['catagroy'] = $user_groups;
			$val['uname']   = getUserSpace($val['uid'], null, '_blank');
			$val['ctime'] = friendlyDate($val['ctime']);
			$val['type']  = isset($types[$val['type']])?$types[$val['type']]:'-';
			$val['money'] = '￥'.$val['money'];
			$val['status']= $status[$val['status']];
			$val['stime'] = friendlyDate($val['stime']);
			$val['stime'] = $val['stime']?$val['stime']:'-';
			$val['pay_type']  = isset($payType[$val['pay_type']])?$payType[$val['pay_type']]:'-';
		}
		$this->displayList($data);
	}

    //整合数据结果order
    public function formatData($val)
    {
        //购买用户
        $val['uid'] = getUserSpace($val['uid'], null, '_blank');
        //取得课程名称
        $val['video_id'] = '<div style="width:300px;">' . getVideoNameForID($val['video_id']) . '</div>';
        return $val;
    }

    /**
     * 课堂后台的标题
     */
    private function _initClassroomListAdminTitle(){
        $this->pageTitle['index'] = '云课堂用户列表';
        $this->pageTitle['flow'] = '所有流水记录';
        $this->pageTitle['recharge'] = '用户充值记录';
    }

    /**
     * 错误提示
     * @return void
     */
    public function mzError($msg,$url='',$data=array()){
        $this->mzajaxReturn($msg,0,$url,$data);
    }

}