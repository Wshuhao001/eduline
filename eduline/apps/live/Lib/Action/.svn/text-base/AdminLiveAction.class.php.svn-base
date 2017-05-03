<?php
/**
 * 后台直播管理
 * @author wangjun@chuyouyun.com
 * @version chuyouyun2.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class AdminLiveAction extends AdministratorAction
{
	
	protected $base_config = array();
	protected $gh_config = array();
	protected $zshd_config = array();
	/**
	 * 初始化，
	 */
	public function _initialize() {
		$this->base_config =  model('Xdata')->get('live_AdminConfig:baseConfig');
		$this->gh_config   =  model('Xdata')->get('live_AdminConfig:ghConfig');
		$this->zshd_config =  model('Xdata')->get('live_AdminConfig:zshdConfig');

		if($this->base_config['live_opt'] == 1){//展示互动直播
		}else if($this->base_config['live_opt'] == 2){//三芒直播
		}else if($this->base_config['live_opt'] == 3){//光慧直播
		}
        $this->pageTitle['index']     = '直播课堂列表';
        //$this->pageTitle['closeLive'] = '直播课堂列表';
        $this->pageTitle['addLive']   = '创建直播课堂';

        $this->pageTab[] = array('title'=>'直播课堂列表','tabHash'=>'index','url'=>U('live/AdminLive/index'));
        //$this->pageTab[] = array('title'=>'直播课堂回收列表','tabHash'=>'closeLive','url'=>U('live/AdminLive/closeLive'));
        $this->pageTab[] = array('title'=>'创建直播课堂','tabHash'=>'addLive','url'=>U('live/AdminLive/addLive'));

		parent::_initialize();
	}

    /**
     * 直播课堂列表
     */
    public function index(){
        $_REQUEST['tabHash'] = 'index';

        $this->pageKeyList = array('id','uid','title','price','score','cover','beginTime',
                             'endTime','is_open','DOACTION');
        //搜索字段
        $this->searchKey = array('id', 'uid','title','price','score',array('beginTime','beginTime2'),array('endTime','endTime2'));
        $this->pageButton[] = array('title' => "搜索直播课堂", 'onclick' => "admin.fold('search_form')");

        $this->opt['score']     = array('0'=>'不限','1'=>'★ （一星）','2'=>'★★ （二星）','3'=>'★★★ （三星）','4'=>'★★★★ （四星）','5'=>'★★★★★ （五星）');
        // 数据的格式化
        $order = 'id desc';
        $list = $this->_getLiveList('index',20,$order,null);

        $this->displayList($list);
    }
    /**
     * 直播课堂列表
     */
    public function closeLive(){
        $_REQUEST['tabHash'] = 'closeLive';

        $this->pageKeyList = array('id','uid','title','price','score','cover','beginTime',
                             'endTime','is_open','DOACTION');
        //搜索字段
        $this->searchKey = array('id', 'uid','title','price','score',array('beginTime','beginTime2'),array('endTime','endTime2'));
        $this->pageButton[] = array('title' => "搜索直播课堂", 'onclick' => "admin.fold('search_form')");

        $this->opt['score']     = array('0'=>'不限','1'=>'★ （一星）','2'=>'★★ （二星）','3'=>'★★★ （三星）','4'=>'★★★★ （四星）','5'=>'★★★★★ （五星）');
        $this->opt['is_re']   	= array('0'=>'不限','1'=>'否','2'=>'是');
        $this->opt['is_charge'] = array('0'=>'不限','1'=>'否','2'=>'是');
        // 数据的格式化
        $order = 'id desc';
        $map['is_del'] = 1;
        $list = $this->_getLiveList('closeLive',20,$order,$map);

        $this->displayList($list);
    }

    /**
     * 创建课堂直播课堂
     */
    public function addLive(){
        if( isset($_POST) ) {
            if(empty($_POST['title'])){$this->error("名称不能为空");}
            if(empty($_POST['live_levelhidden'])){$this->error("请选择分类");}
            if(empty($_POST['cover'])){$this->error("请上传直播课堂封面");}
            if(empty($_POST['info'])){$this->error("直播课堂信息不能为空");}
            if($_POST['price'] == ''){$this->error("价格不能为空");}
            if(!is_numeric($_POST['price'])){$this->error('价格必须为数字');}
            if(empty($_POST['beginTime'])){$this->error("上架时间不能为空");}
            if(empty($_POST['endTime'])){$this->error("下架时间不能为空");}
            if(strtotime($_POST['endTime']) < strtotime($_POST['beginTime'])){$this->error("下架时间不能小于上架时间");}

            $myAdminLevelhidden 		= getCsvInt(t($_POST['live_levelhidden']),0,true,true,',');  //处理分类全路径
            $fullcategorypath 			= explode(',',$_POST['live_levelhidden']);
            $category 					= array_pop($fullcategorypath);
            $category					= $category == '0' ? array_pop($fullcategorypath) : $category; //过滤路径最后为0的情况
            $data['fullcategorypath']	= $myAdminLevelhidden; //分类全路径
            $data['cate_id']		    = $category == '0' ? array_pop($fullcategorypath) : $category;

            $data['uid']  	= $this->mid;
            $data['title']  = t($_POST['title']);
            $data['cover']  = intval($_POST['cover']);
            $data['info']   = $_POST['info'];
            $data['score']  = intval($_POST['score']);
            $data['price']  = floatval($_POST['price']);
            $data['beginTime']  = strtotime($_POST['beginTime']);
            $data['endTime']    = strtotime($_POST['endTime']);
            $data['live_type']  = $this->base_config['live_opt'];

            $res = M('zy_live')->add($data);
            if($res){
                $this->assign('jumpUrl',U('live/AdminLive/index'));
                $this->success("添加成功");
            }else{
                $this->error("添加失败");
            }
        } else {
            $_REQUEST['tabHash'] = 'addLive';

            $this->pageKeyList   = array('title','live_cate','cover','price','info','score','beginTime','endTime');

            $this->onsubmit = 'admin.checkLive(this)';
            $this->opt['score']     = array('1'=>'★ （一星）','2'=>'★★ （二星）','3'=>'★★★ （三星）','4'=>'★★★★ （四星）','5'=>'★★★★★ （五星）');
            $this->opt['is_re']   	= array('0'=>'否','1'=>'是');
            $this->opt['is_charge'] = array('0'=>'否','1'=>'是');

            ob_start();
            echo W('CategoryLevel', array('table' => 'zy_live_category', 'id' => 'live_level'));
            $output = ob_get_contents();
            ob_end_clean();
            $this->savePostUrl = U('live/AdminLive/addLive');
            $this->displayConfig(array('live_cate'=>$output));
        }
    }
    /**
     * 创建课堂直播课堂
     */
    public function editLive(){
        if( isset($_POST) ) {
            if(empty($_POST['title'])){$this->error("名称不能为空");}
            if(empty($_POST['live_levelhidden'])){$this->error("请选择分类");}
            if(empty($_POST['cover'])){$this->error("请上传直播课堂封面");}
            if(empty($_POST['info'])){$this->error("直播课堂信息不能为空");}
            if($_POST['price'] == ''){$this->error("价格不能为空");}
            if(!is_numeric($_POST['price'])){$this->error('价格必须为数字');}
            if(empty($_POST['beginTime'])){$this->error("上架时间不能为空");}
            if(empty($_POST['endTime'])){$this->error("下架时间不能为空");}
            if(strtotime($_POST['endTime']) < strtotime($_POST['beginTime'])){$this->error("下架时间不能小于上架时间");}

            $myAdminLevelhidden 		= getCsvInt(t($_POST['live_levelhidden']),0,true,true,',');  //处理分类全路径
            $fullcategorypath 			= explode(',',$_POST['live_levelhidden']);
            $category 					= array_pop($fullcategorypath);
            $category					= $category == '0' ? array_pop($fullcategorypath) : $category; //过滤路径最后为0的情况
            $data['fullcategorypath']	= $myAdminLevelhidden; //分类全路径
            $data['cate_id']		    = $category == '0' ? array_pop($fullcategorypath) : $category;

            $data['uid']  	= $this->mid;
            $data['title']  = t($_POST['title']);
            $data['cover']  = intval($_POST['cover']);
            $data['info']   = $_POST['info'];
            $data['score']  = intval($_POST['score']);
            $data['price']  = floatval($_POST['price']);
            $data['beginTime']  = strtotime($_POST['beginTime']);
            $data['endTime']    = strtotime($_POST['endTime']);

            $map['id'] = intval($_POST['id']);
            $res = model('Live')->updateLiveInfo($map,$data);
            if($res !== false){
                $this->assign('jumpUrl',U('live/AdminLive/index'));
                $this->success("编辑成功");
            }else{
                $this->error("编辑失败");
            }
        } else {
            $_REQUEST['tabHash'] = 'editLive';

            $this->pageKeyList   = array('id','title','live_cate','cover','price','info','score','beginTime','endTime');

            $this->onsubmit = 'admin.checkLive(this)';
            $this->opt['score']     = array('1'=>'★ （一星）','2'=>'★★ （二星）','3'=>'★★★ （三星）','4'=>'★★★★ （四星）','5'=>'★★★★★ （五星）');
            $live_id = intval($_GET['id']);

            $live_info = model('Live')->findLiveAInfo(array('id'=>$live_id));
            $live_info['beginTime']  = date('Y-m-d H:i:s',$live_info["beginTime"]);
            $live_info['endTime']    = date('Y-m-d H:i:s',$live_info["endTime"]);

            $this->pageTitle['editLive'] = '编辑直播课堂-' . $live_info['title'];

            ob_start();
            echo W('CategoryLevel', array('table' => 'zy_live_category', 'id' => 'live_level', 'default' => trim($live_info['fullcategorypath'], ',')));
            $output = ob_get_contents();

            ob_end_clean();
            $live_info['live_cate'] = $output;

            $this->savePostUrl = U('live/AdminLive/editLive');
            $this->displayConfig($live_info);
        }
    }

    //直播间列表
    public function liveRoomIndex(){
        $_REQUEST['tabHash'] = 'liveRoomIndex';
        $live_id  = intval($_GET['id']);
        $liveInfo = model('Live')->findLiveAInfo(array('id'=>$live_id),'id, live_type , title');
        if(!$liveInfo){
            $this->error("参数错误");
        }
        $this->pageTitle['liveRoomIndex'] = $liveInfo['title'].' 直播课堂—直播间列表';

        if( $liveInfo['live_type'] == 1){
            //展示互动
            $this->zshdLiveRrom($live_id);
        }else if( $liveInfo['live_type'] == 2){
            $this->sm($live_id);
            //三芒
        }else if( $liveInfo['live_type'] == 3){
            //光慧
            $this->ghLiveRrom($live_id);
        }
    }

    /*
     * 第三方直播间-展示互动
     */
    public function zshdLiveRrom($live_id){
        $_REQUEST['tabHash'] = 'zshdLiveRrom';

        $this->pageKeyList = array('id','uame', 'subject', 'speaker_name', 'teacherToken','assistantToken', 'studentClientToken',
                             'studentToken', 'startDate', 'invalidDate', 'clientJoin', 'webJoin', 'is_active',
                             'is_open', 'SDK_ID', 'DOACTION');
        //搜索字段
        $this->searchKey = array('number', 'subject', 'SDK_ID');
        $this->pageButton[] = array('title' => "搜索直播课堂", 'onclick' => "admin.fold('search_form')");
        // 数据的格式化
        $order = 'id desc';
        $map['live_id'] = $live_id;

        $list = $this->_getZshdLiveList('zshdLiveRrom',20,$order,$map);

        $this->displayList($list);
    }

    /*
     * 第三方直播间-光慧
     */
    public function ghLiveRrom($live_id){
        $this->pageKeyList = array('id','uname','title','account','passwd','maxNum','beginTime','endTime',
                             'supportMobile','is_active', 'is_open','DOACTION');

        $order = 'id desc';
        $map['live_id'] = $live_id;

        $list = $this->_getGhLiveList('ghLiveRrom',20,$order,$map);

        $this->displayList($list);
    }

    /**
     * 添加直播间
     */
    public function addLiveRoom(){
        $_REQUEST['tabHash'] = 'addLiveRoom';

        $live_id = intval($_GET['id']);
        $liveInfo = model('Live')->findLiveAInfo(array('id'=>$live_id),'id,title');
        if(!$liveInfo){
            $this->error("参数错误");
        }
        $this->pageTitle['addLiveRoom'] = $liveInfo['title'].' 直播课堂—新建直播课时';

        if($this->base_config['live_opt'] == 1){
            //展示互动
            $this->addZshdLiveRoom($live_id);
        }else if($this->base_config['live_opt'] == 2){
            $this->addSmLiveRrom($live_id);
            //三芒
        }else if($this->base_config['live_opt'] == 3){
            //光慧
            $this->addGhLiveRoom($live_id);
        }else{
            $this->displayList();
        }
    }

    /**
     * 新建直播间-光慧
     */
    public function addGhLiveRoom($live_id){
        $live_id = $live_id;
        if( isset($_POST) ) {
            $url  = $this->gh_config['api_url'].'/openApi/createLiveRoom';
            $data = $_POST;
            unset($data['systemdata_list']);
            unset($data['systemdata_key']);
            unset($data['pageTitle']);
            $data['beginTime'] = strtotime($data['beginTime']) * 1000;
            $data['endTime']   = strtotime($data['endTime']) * 1000;
            $data['uid']       = $this->mid;
            $data['is_active'] = 1;
            $id = M('zy_live_gh')->add($data);
            if( $id ) {
                $data['id'] = $id;
                $gh_data = M('zy_live_gh')->where('id='.intval($data['id']) )->find();
                $teacher_info = t(M('zy_teacher')->where('id='.intval($gh_data['speaker_id']))->getField('inro'));
                $data['teachers']  = json_encode( array( array('account'=>$data['account'] , 'passwd'=>base64_encode( md5($data['passwd'] , true) ) , 'info'=>$teacher_info ) ) );
                $data = array_merge($data , $this->_ghdata() );
                $res = json_decode( request_post($url , $data) , true);
                if($res['code'] == 0) {
                    $data['room_id'] = $res['liveRoomId'];
                    M('zy_live_gh')->where('id='.$id)->save( $data );
                    $this->assign( 'jumpUrl',U('live/AdminLive/liveRoomIndex',array('id'=>$data['live_id'])));
                    $this->success('创建成功');
                } else {
                    //删除本地数据
                    M('zy_live_gh')->where('id='.$id)->delete();
                    $this->error('创建失败');
                }
            } else {
                $this->error('创建失败');
            }
        } else {
            $_REQUEST['tabHash'] = 'addGhLiveRoom';
            $this->pageKeyList   = array('live_id','title','introduce','speaker_id','maxNum','supportMobile','liveMode','account','passwd','beginTime','endTime');
            $this->opt['speaker_id'] = M('zy_teacher')->where('is_del=0')->getField('id,name');
            $this->opt['supportMobile'] = array('0'=>'不支持','1'=>'支持');
            $this->opt['liveMode']      = array('1'=>'通用','2'=>'大视频','3'=>'1对1');

            $this->savePostUrl = U('live/AdminLive/addGhLiveRoom');
            $this->displayConfig(array('live_id'=>$live_id));
        }
    }
    /**
     * @return 修改光慧直播间
     */
    public function editGhLiveRoom(){
        if( isset($_POST) ) {
            $url = $this->gh_config['api_url'].'/openApi/updateLiveRoom';
            $data = $_POST;
            unset($data['systemdata_list']);
            unset($data['systemdata_key']);
            unset($data['pageTitle']);
            $gh_data = M('zy_live_gh')->where('id='.intval($data['id']) )->find();
            $teacher_info = t(M('zy_teacher')->where('id='.intval($gh_data['speaker_id']))->getField('inro'));
            $data['beginTime'] = strtotime($data['beginTime']) * 1000;
            $data['endTime']   = strtotime($data['endTime']) * 1000;
            $data['teachers']  = json_encode( array( array('account'=>$data['account'] , 'passwd'=>base64_encode( md5($data['passwd'] , true) ) , 'info'=>$teacher_info ) ) );
            $data = array_merge($data , $this->_ghdata());
            $res  = json_decode( request_post($url , $data) , true);
            if($res['code'] == 0) {
                unset($data['teachers']);
                $data['uid'] = $this->mid;
                $res = M('zy_live_gh')->where('id='.$data['id'])->save( $data );
                if( $res !== false ) {
                    $live_id = M('zy_live_gh')->where('id='.intval($data['id']) )->getField('live_id');
                    $this->assign( 'jumpUrl', U('live/AdminLive/liveRoomIndex',array('id'=>$live_id)) );
                    $this->success('修改成功');
                } else {
                    $this->error('修改失败');
                }
            } else {
                $this->error('修改失败');
            }
        } else {
            $_REQUEST['tabHash'] = 'editGhLiveRoom';
//            $this->pageKeyList   = array('id','subject','speaker_id','startDate','invalidDate','clientJoin','webJoin','teacherToken','assistantToken','studentToken','studentClientToken','scheduleInfo','description');

            $this->pageKeyList   = array('id','title','introduce','speaker_id','maxNum','supportMobile','liveMode','account','passwd','beginTime','endTime');
            $data = M('zy_live_gh')->where('id='.intval($_GET['id']) )->find();
            $live_info = model('Live')->findLiveAInfo(array('id'=>$data['live_id']));
            $this->pageTitle['editGhLiveRoom'] = $live_info['title'].' 直播课堂—修改直播课时:'.$data['title'];

            $this->opt['speaker_id'] = M('zy_teacher')->where('is_del=0')->getField('id,name');
            $this->opt['supportMobile'] = array('0'=>'不支持','1'=>'支持');
            $this->opt['liveMode']      = array('1'=>'通用','2'=>'大视频','3'=>'1对1');
            $data['beginTime'] = date('Y-m-d H:i:s' , $data['beginTime'] / 1000);
            $data['endTime']   = date('Y-m-d H:i:s' , $data['endTime'] / 1000);

            $this->savePostUrl = U('live/AdminLive/editGhLiveRoom');
            $this->displayConfig($data);
        }
    }

    /*
     * 新建直播间-展示互动
     */
    public function addZshdLiveRoom($live_id){
        $live_id = $live_id;
        if(isset($_POST)){
            $startDate = strtotime($_POST['startDate']);
            $invalidDate = strtotime($_POST['invalidDate']);

            $newTime = time();
            $map['subject'] = trim(t($_POST['subject']));
            $field = 'subject';
            $liveSubject = model('Live')->getZshdLiveRoomInfo($map,$field);

            if(empty($_POST['subject'])){$this->error('直播课时名称不能为空');}
            if($_POST['subject'] == $liveSubject['subject']){$this->error('已有此直播课时名称,请勿重复添加');}
            if(empty($_POST['speaker_id'])){$this->error('演讲人不能为空');}
            if(empty($startDate)){$this->error('开始时间不能为空');}
            if($startDate < $newTime ){$this->error('开始时间必须大于当前时间');}
            if(empty($invalidDate)){$this->error('结束时间不能为空');}
            if($invalidDate < $startDate){$this->error('结束时间不能小于开始时间');}
            if($_POST['clientJoin'] == 0){$clientJoin = 'false';}else{$clientJoin = 'true';}
            if($_POST['webJoin'] == 0){$webJoin = 'false';}else{$webJoin = 'true';}
            if(!$clientJoin && !$webJoin){$this->error('Web端学生加入或客户端开启学生加入必须开启其一');}
            if(empty($_POST['teacherToken'])){$this->error('老师口令不能为空');}
            if(!is_numeric($_POST['teacherToken'])){$this->error('老师口令必须为数字');}
            if(strlen($_POST['teacherToken'])< 6 || strlen($_POST['teacherToken']) >15 ){$this->error('老师口令只能为6-15位数字');}
            if(empty($_POST['assistantToken'])){$this->error('助教口令不能为空');}
            if(!is_numeric($_POST['assistantToken'])){$this->error('助教口令必须为数字');}
            if(strlen($_POST['assistantToken'])< 6 || strlen($_POST['assistantToken']) >15 ){$this->error('助教口令只能为6-15位数字');}
            if(empty($_POST['studentToken'])){$this->error('学生WEB端口令不能为空');}
            if(!is_numeric($_POST['studentToken'])){$this->error('学生WEB端口令必须为数字');}
            if(strlen($_POST['studentToken'])< 6 || strlen($_POST['studentToken']) >15 ){$this->error('学生WEB端口令只能为6-15位数字');}
            if($_POST['teacherToken'] == $_POST['assistantToken'] || $_POST['teacherToken'] == $_POST['studentClientToken'] || $_POST['teacherToken'] == $_POST['studentToken'] || $_POST['assistantToken'] == $_POST['studentClientToken']
                || $_POST['assistantToken'] == $_POST['studentToken'] || $_POST['studentClientToken'] == $_POST['studentToken']){
                $this->error('四个口令的值不能相同');
            }
            if(empty($_POST['scheduleInfo'])){$this->error('直播课时安排信息不能为空');}
            if(empty($_POST['description'])){$this->error('直播课时信息不能为空');}

            $speaker = M('zy_teacher')->where("id={$_POST['speaker']}")->field('id,name,inro')->find();
            $url   = $this->zshd_config['api_url'].'/room/created?';
            $param = 'subject='.urlencode(t($_POST['subject'])).'&startDate='.t($startDate*1000).
                '&invalidDate='.t($invalidDate*1000).'&teacherToken='.t($_POST['teacherToken']).
                '&assistantToken='.t($_POST['assistantToken']).'&studentClientToken='.t($_POST['studentClientToken']).
                '&studentToken='.t($_POST['studentToken']).'&scheduleInfo='.urlencode(t($_POST['scheduleInfo'])).
                '&description='.urlencode(t($_POST['description'])).'&clientJoin='.$clientJoin.'&webJoin='.$webJoin.
                '&speakerInfo='.urlencode(t($speaker['inro']));
            $hash  = $param.'&loginName='.$this->zshd_config['api_key'].'&password='.md5($this->zshd_config['api_pwd']).'&sec=true';
            $url   = $url.$hash;
            $addLive = $this->getDataByUrl($url);

            if($addLive['code'] == 0) {
                if(empty($addLive["number"])){$this->error('服务器创建失败');}
                //查此次插入数据库的课堂名称
                $url   = $this->zshd_config['api_url'].'/room/info?';
                $param = 'roomId='.$addLive["id"];
                $hash  = $param.'&loginName='.$this->zshd_config['api_key'].'&password='.md5($this->zshd_config['api_pwd']).'&sec=true';
                $url   = $url.$hash;
                $live = $this->getDataByUrl($url);
                if(empty($live["number"])){$this->error('服务器查询失败');}

                if($addLive["clientJoin"]){$liveClientJoin = 1;}else{$liveClientJoin = 0;}
                if($addLive["webJoin"]){$liveWebJoin = 1;}else{$liveWebJoin = 0;}

                $data["uid"]                = $this->mid;
                $data["number"]             = $addLive["number"];
                $data["subject"]            = $live['subject'];
                $data["speaker_id"]         = intval($_POST['speaker_id']);
                $data["startDate"]          = $addLive["startDate"]/1000;
                $data["invalidDate"]        = $addLive["invalidDate"]/1000;
                $data["teacherJoinUrl"]     = $addLive["teacherJoinUrl"];
                $data["studentJoinUrl"]     = $addLive["studentJoinUrl"];
                $data["teacherToken"]       = $addLive["teacherToken"];
                $data["assistantToken"]     = $addLive["assistantToken"];
                $data["studentClientToken"] = $addLive["studentClientToken"];
                $data["studentToken"]       = $addLive["studentToken"];
                $data["scheduleInfo"]       = t($_POST['scheduleInfo']);
                $data["description"]        = t($_POST['description']);
                $data["clientJoin"]         = $liveClientJoin;
                $data["webJoin"]            = $liveWebJoin;
                $data["SDK_ID"]             = $addLive["id"];
                $data["is_active"]          = 1;
                $data["live_id"]            = intval($_POST['live_id']); //直播课id
                $result = M('zy_live_zshd')->add($data);
                if(!$result){$this->error('创建失败!');}
                $this->success('创建成功');
            } else {
                $this->error('服务器出错啦');
            }
        }else{
            $_REQUEST['tabHash'] = 'addZshdLiveRoom';
            $this->pageKeyList   = array('live_id','subject','speaker_id','startDate','invalidDate','maxNum','clientJoin','webJoin','teacherToken','assistantToken','studentClientToken','studentToken','description' ,'scheduleInfo');

            $this->opt['speaker_id']= M('zy_teacher')->where('is_del=0')->getField('id,name');
            $this->opt['clientJoin']        	= array('1'=>'开启','0'=>'不开启');
            $this->opt['webJoin'] 				= array('1'=>'开启','0'=>'不开启');

            $this->savePostUrl = U('live/AdminLive/addZshdLiveRoom');
            $this->displayConfig(array('live_id'=>$live_id));
        }
    }

    /**
     *编辑直播课时-展示互动
     */
    public function editZshdLiveRoom(){
        if( isset($_POST) ) {
            $startDate = strtotime($_POST['startDate']);
            $invalidDate = strtotime($_POST['invalidDate']);

            if(empty($_POST['subject'])){$this->error('课程名称不能为空');}
            if(empty($_POST['speaker_id'])){$this->error('演讲人不能为空');}
            if(empty($startDate)){$this->error('开始时间不能为空');}
            if(empty($invalidDate)){$this->error('结束时间不能为空');}
            if($invalidDate < $startDate){$this->error('结束时间不能小于开始时间');}
            if($_POST['clientJoin'] == 0){$clientJoin = 'false';}else{$clientJoin = 'true';}
            if($_POST['webJoin'] == 0){$webJoin = 'false';}else{$webJoin = 'true';}
            if(!$clientJoin && !$webJoin){$this->error('Web端学生加入或客户端开启学生加入必须开启其一');}
            if(empty($_POST['teacherToken'])){$this->error('老师口令不能为空');}
            if(!is_numeric($_POST['teacherToken'])){$this->error('老师口令必须为数字');}
            if(strlen($_POST['teacherToken'])< 6 || strlen($_POST['teacherToken']) >15 ){$this->error('老师口令只能为6-15位数字');}
            if(empty($_POST['assistantToken'])){$this->error('助教口令不能为空');}
            if(!is_numeric($_POST['assistantToken'])){$this->error('助教口令必须为数字');}
            if(strlen($_POST['assistantToken'])< 6 || strlen($_POST['assistantToken']) >15 ){$this->error('助教口令只能为6-15位数字');}
            if(empty($_POST['studentToken'])){$this->error('学生WEB端口令不能为空');}
            if(!is_numeric($_POST['studentToken'])){$this->error('学生WEB端口令必须为数字');}
            if(strlen($_POST['studentToken'])< 6 || strlen($_POST['studentToken']) >15 ){$this->error('学生WEB端口令只能为6-15位数字');}
            if($_POST['teacherToken'] == $_POST['assistantToken'] || $_POST['teacherToken'] == $_POST['studentClientToken'] || $_POST['teacherToken'] == $_POST['studentToken'] || $_POST['assistantToken'] == $_POST['studentClientToken']
                || $_POST['assistantToken'] == $_POST['studentToken'] || $_POST['studentClientToken'] == $_POST['studentToken']){
                $this->error('四个口令的值不能相同');
            }
            if(empty($_POST['scheduleInfo'])){$this->error('课程安排信息不能为空');}
            if(empty($_POST['description'])){$this->error('课程信息不能为空');}

            $speaker = M('ZyTeacher')->where("id={$_POST['speaker']}")->field('id,name,inro')->find();
            $url   = $this->zshd_config['api_url'].'/room/modify?';
            $param = 'id='.t($_POST['SDK_ID']).'&subject='.urlencode(t($_POST['subject'])).'&startDate='.t($startDate*1000).
                '&invalidDate='.t($invalidDate*1000).'&teacherToken='.t($_POST['teacherToken']).
                '&assistantToken='.t($_POST['assistantToken']).'&studentClientToken='.t($_POST['studentClientToken']).
                '&studentToken='.t($_POST['studentToken']).'&scheduleInfo='.urlencode(t($_POST['scheduleInfo'])).
                '&description='.urlencode(t($_POST['description'])).'&clientJoin='.$clientJoin.'&webJoin='.$webJoin.
                '&speakerInfo='.urlencode(t($speaker['inro']));
            $hash  = $param.'&loginName='.$this->zshd_config['api_key'].'&password='.md5($this->zshd_config['api_pwd']).'&sec=true';
            $url   = $url.$hash;

            $upLive = $this->getDataByUrl($url);
            if($upLive['code'] == 0){
                //查此次插入数据库的课堂名称
                $url   = $this->zshd_config['api_url'].'/room/info?';
                $param = 'roomId='.$_POST['SDK_ID'];
                $hash  = $param.'&loginName='.$this->zshd_config['api_key'].'&password='.md5($this->zshd_config['api_pwd']).'&sec=true';
                $url   = $url.$hash;
                $live = $this->getDataByUrl($url);
                if(empty($live["number"])){$this->error('服务器查询失败');}

                if($live["clientJoin"]){$liveClientJoin = 1;}else{$liveClientJoin = 0;}
                if($live["webJoin"]){$liveWebJoin = 1;}else{$liveWebJoin = 0;}

                $data["subject"] = $live['subject'];
                $data["speaker_id"] = intval($_POST['speaker_id']);
                $data["startDate"] = $live['startDate']/1000;
                $data["invalidDate"] = $live['invalidDate']/1000;
                $data["teacherToken"] = $live['teacherToken'];
                $data["assistantToken"] = $live['assistantToken'];
                $data["studentClientToken"] = $live['studentClientToken'];
                $data["studentToken"] = $live['studentToken'];
                $data["scheduleInfo"] = t($_POST['scheduleInfo']);
                $data["description"] = t($_POST['description']);
                $data["maxNum"] = intval($_POST['maxNum']);
                $data["clientJoin"] = $liveClientJoin;
                $data["webJoin"] = $liveWebJoin;

                $map = array('SDK_ID'=>t($_POST['SDK_ID']));
                $result = model('Live')->updateZshdLiveInfo($map,$data);
                if( $result !== false) {
                    $this->success('修改成功');
                } else {
                    $this->error('修改失败!');
                }

            }else {
                $this->error('服务器出错啦');
            }
        }else{
            $_REQUEST['tabHash'] = 'editZshdLiveRoom';

            // 数据的格式化
            $data = M('zy_live_zshd')->where('id='.intval($_GET['id']) )->find();
            $live_info = model('Live')->findLiveAInfo(array('id'=>$data['live_id']));
            $this->pageTitle['editZshdLiveRoom'] = $live_info['title'].' 直播课堂—修改直播课时:'.$data['subject'];

            $data['startDate'] = date('Y-m-d H:i:s',$data["startDate"]);
            $data['invalidDate'] = date('Y-m-d H:i:s',$data["invalidDate"]);
            if($data['webJoin'] == 1 && $data['clientJoin'] == 1){
                $this->pageKeyList   = array('SDK_ID','subject','speaker_id','startDate','invalidDate','maxNum','clientJoin','webJoin','teacherToken','assistantToken','studentToken','studentClientToken','description','scheduleInfo');
            }else if($data['webJoin'] == 1){
                $this->pageKeyList   = array('SDK_ID','subject','speaker_id','startDate','invalidDate','maxNum','clientJoin','webJoin','teacherToken','assistantToken','studentToken','description','scheduleInfo');
            }else if($data['clientJoin'] == 1){
                $this->pageKeyList   = array('SDK_ID','subject','speaker_id','startDate','invalidDate','maxNum','clientJoin','webJoin','teacherToken','assistantToken','studentToken','studentClientToken','description','scheduleInfo');
            }
            $this->opt['speaker_id'] = M('zy_teacher')->where('is_del=0')->getField('id,name');
            $this->opt['clientJoin'] = array('1'=>'开启','0'=>'不开启');
            $this->opt['webJoin'] 	 = array('1'=>'开启','0'=>'不开启');

            $this->savePostUrl = U('live/AdminLive/editZshdLiveRoom');
            $this->displayConfig($data);
        }
    }

    /**
     * 解析直播课堂列表数据
     * @param integer $limit 结果集数目，默认为20
     * @param $order 排序
     * @return array 解析后的直播列表数据
     */
    private function _getLiveList($type,$limit,$order,$map) {
        if(isset($_POST)){
            $_POST['id'] && $map['id']          = intval($_POST['id']);
            $_POST ['uid'] && $map ['uid']      = array('in', (string)$_POST ['uid']);
            $_POST['title'] && $map['title']    = array('like', '%'.t($_POST['title']).'%');
            $_POST['price'] && $map['price']    = floatval($_POST['price']);
            if($_POST ['score'] != 0){
                $_POST ['score'] && $map ['score'] = intval($_POST['score']);
            }

            if (! empty ( $_POST ['beginTime'] [0] ) && ! empty ( $_POST ['beginTime'] [1] )) { // 时间区间条件
                $map ['beginTime'] = array ('BETWEEN',array (strtotime ( $_POST ['beginTime'] [0] ),
                    strtotime ( $_POST ['beginTime'] [1] )));
            } else if (! empty ( $_POST ['beginTime'] [0] )) {// 时间大于条件
                $map ['beginTime'] = array ('GT',strtotime ( $_POST ['beginTime'] [0] ));
            } elseif (! empty ( $_POST ['beginTime'] [1] )) {// 时间小于条件
                $map ['beginTime'] = array ('LT',strtotime ( $_POST ['beginTime'] [1] ));
            }
            if (! empty ( $_POST ['endTime'] [0] ) && ! empty ( $_POST ['endTime'] [1] )) { // 时间区间条件
                $map ['endTime'] = array ('BETWEEN',array (strtotime ( $_POST ['endTime'] [0] ),
                    strtotime ( $_POST ['endTime'] [1] )));
            } else if (! empty ( $_POST ['endTime'] [0] )) {// 时间大于条件
                $map ['endTime'] = array ('GT',strtotime ( $_POST ['endTime'] [0] ));
            } elseif (! empty ( $_POST ['endTime'] [1] )) {// 时间小于条件
                $map ['endTime'] = array ('LT',strtotime ( $_POST ['endTime'] [1] ));
            }
        }

        $liveInfo = model('Live')->getLiveInfo($limit,$order,$map);

        foreach($liveInfo['data'] as &$val){
            $val['title']     = msubstr($val['title'],0,20);
            $val['uid']       = getUserSpace($val['uid'], null, '_blank');
            $val['beginTime'] = date('Y-m-d H:i:s',$val["beginTime"]);
            $val['endTime']   = date('Y-m-d H:i:s',$val["endTime"]);
            $val['cover']     = "<img src=".getCover($val['cover'] , 80 ,40)." width='80' height='40'>";
            if($val['is_del'] == 0){
                $val['is_open'] = "<p style='color: green;'>否</p>";
            }else if($val['is_del'] == 1){
                $val['is_open'] = "<p style='color: red;'>是</p>";
            }

            if ($val['clientJoin'] == 0) {$val['data'][$key]['clientJoin'] = '<span style="color: red;">关闭</span>';}else{$val['data'][$key]['clientJoin'] = '开启';}

            $val['DOACTION'] .= '<a href="'.U('live/AdminLive/addLiveRoom',array('id'=>$val['id'])).'">新建直播间</a> | ';
            $val['DOACTION'] .= '<a href="'.U('live/AdminLive/liveRoomIndex',array('id'=>$val['id'])).'" title="查看此直播课堂下直播课时">管理直播间</a> | ';
            $val['DOACTION'] .= '<a href="'.U('live/AdminLive/editLive',array('id'=>$val['id'])).'">编辑</a> | ';
            if ($val['is_del'] == 0) {
                $val['DOACTION'] .= '<a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'ColseLive\''.',9)">禁用</a>';
            } else {
                $val['DOACTION'] .= '<a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'OpenLive\''.',9)">启用</a>';
            }
            //$val['DOACTION'] .= ' | <a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'DeleteLive\''.',9)">删除</a>';
        }
        return $liveInfo;
    }

    /**
     * 解析展示互动直播间列表数据
     * @param integer $limit 结果集数目，默认为20
     * @param $order 排序
     * @return array 解析后的直播列表数据
     */
    private function _getZshdLiveList($type,$limit,$order,$map) {
        $liveInfo = model('Live')->getZshdLiveInfo($order,$limit,$map);

        foreach($liveInfo['data'] as $key => $val) {
            $liveInfo['data'][$key]['subject']  = mb_substr($val['subject'],0,7,'utf-8')."...";
            $liveInfo['data'][$key]['uame'] = getUserName($val['uid']);
            $liveInfo['data'][$key]['startDate'] = date('Y-m-d H:i:s', $val["startDate"]);
            $liveInfo['data'][$key]['invalidDate'] = date('Y-m-d H:i:s', $val["invalidDate"]);
            $speaker = M('ZyTeacher')->where("id={$val['speaker_id']}")->field('name')->find();
            $liveInfo['data'][$key]['speaker_name'] = $speaker['name'];

            if ($val['clientJoin'] == 0) {
                $liveInfo['data'][$key]['clientJoin'] = '<p style="color: red;">不支持</p>';
            } else {
                $liveInfo['data'][$key]['clientJoin'] = "<p style='color: green;'>支持</p>";
            }
            if ($val['webJoin'] == 0) {
                $liveInfo['data'][$key]['webJoin'] = '<p style="color: red;">不支持</p>';
            } else {
                $liveInfo['data'][$key]['webJoin'] = "<p style='color: green;'>支持</p>";
            }
            if ($val['is_del'] == 0) {
                $liveInfo['data'][$key]['is_open'] = "<p style='color: green;'>开启</p>";
            } else {
                $liveInfo['data'][$key]['is_open'] = '<p style="color: red;">关闭</p>';
            }
            if ($val['is_active'] == 1) {
                $liveInfo['data'][$key]['is_active'] = "<p style='color: green;'>已审核</p>";
            } else {
                $liveInfo['data'][$key]['is_active'] = '<span title="审核此直播间" href="javascript:;" onclick="admin.doaction('.$val['id'].',\'ActiveLiveRoom\''.',1)" style="color: red;">未审核</span> ';
            }
            $liveInfo['data'][$key]['DOACTION'] = '<a title="查看直播课堂详细信息" href="' . U('live/Admin/checkLive', array('tabHash' => 'checkLive', 'id' => $val["id"])) . '">查看</a> | ';
            $liveInfo['data'][$key]['DOACTION'] .= '<a href="' . U('live/AdminLive/editZshdLiveRoom', array('id' => $val["id"])) . '">编辑</a> | ';
            if ($val['is_del'] == 0) {
                $liveInfo['data'][$key]['DOACTION'] .= '<a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'ColseLiveRoom\''.',1)">禁用</a> | ';
            } else {
                $liveInfo['data'][$key]['DOACTION'] .= '<a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'OpenLiveRoom\''.',1)">启用</a> | ';
            }
            $liveInfo['data'][$key]['DOACTION'] .= '<a target="_blank" href="' . U('live/Index/live_teacher', array('id' => $val["id"])) . '">教师讲课</a>';
           if ($val['is_del'] == 1){
               $liveInfo['data'][$key]['DOACTION'] .= ' | <a title="此操作会彻底删除数据" href="javascript:void(0)"  onclick="admin.doaction('.$val['id'].',\'DelLiveRoom\''.',1)">彻底关闭</a>  ';
           }
            switch(strtolower($type)) {
            case 'index':
                break;
            }
        }
        return $liveInfo;
    }

    /**
     * 解析光慧直播间列表数据
     * @param integer $limit 结果集数目，默认为20
     * @param $order 排序
     * @return array 解析后的直播列表数据
     */
    private function _getGhLiveList($type,$limit,$order,$map) {
        $list = model('Live')->getGhLiveInfo($order,$map,$limit);

        foreach($list['data'] as &$val){
            if ($val['is_del'] == 0) {
                $val['is_open'] = "<p style='color: green;'>开启</p>";
            } else {
                $val['is_open'] = '<p style="color: red;">关闭</p>';
            }
            if ($val['is_active'] == 1) {
                $val['is_active'] = "<p style='color: green;'>已审核</p>";
            } else {
                $val['is_active'] = '<span title="审核此直播间" href="javascript:;" onclick="admin.doaction('.$val['id'].',\'ActiveLiveRoom\''.',3)" style="color: red;">未审核</span> ';
            }

            $val['uname'] = getUserSpace($val['uid'], null, '_blank');
            $val['supportMobile'] = $val['supportMobile'] ? '<p style="color: green;">支持</p>' : '<p style="color: red;">不支持</p>';
            $val['beginTime'] = date('Y-m-d H:i' , $val['beginTime'] / 1000);
            $val['endTime']   = date('Y-m-d H:i' , $val['endTime'] / 1000);
            $val['DOACTION']  = '<a href="'.U('live/AdminLive/editGhLiveRoom',array('tabHash'=>'editGhLiveRoom','id'=>$val['id'])).'">编辑</a> | ';
            if ($val['is_del'] == 0) {
                $val['DOACTION'] .= '<a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'ColseLiveRoom\''.',3)">禁用</a> | ';
            } else {
                $val['DOACTION'] .= '<a href="javascript:void(0)" onclick="admin.doaction('.$val['id'].',\'OpenLiveRoom\''.',3)">启用</a> | ';
            }
            $val['DOACTION'] .= '<a target="_blank" href="'.$this->gh_config['video_url'].'/student/index.html?liveClassroomId='.$val['room_id'].'&customer='.$this->gh_config['customer'].'&customerType=taobao&sp=0">学生观看</a> | ';
            $val['DOACTION'] .= '<a target="_blank" href="'.$this->gh_config['video_url'].'/teacher/index.html?liveClassroomId='.$val['room_id'].'&customer='.$this->gh_config['customer'].'&customerType=taobao&sp=0">老师讲课</a> | ';
            $val['DOACTION'] .= '<a target="_blank" href="'.$this->gh_config['video_url'].'/playback/index.html?liveClassroomId='.$val['room_id'].'&customer='.$this->gh_config['customer'].'&customerType=taobao&sp=0">回放观看</a>';
           if ($val['is_del'] == 1){
               $val['DOACTION'] .= ' | <a title="此操作会彻底删除数据" href="javascript:void(0)"  onclick="admin.doaction('.$val['id'].',\'DelLiveRoom\''.',3)">彻底关闭</a>  ';
           }
            switch(strtolower($type)) {
                case 'index':
                    break;
            }
        }
        return $list;
    }

    /**
     * 激活直播间
     */
    public function doactionActiveLiveRoom(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $map = array('id' => $id,);
        $data = array('is_active'=>1,);

        if($type == 1){
            $result = model('Live')->updateZshdLiveInfo($map,$data);
        }else if($type == 3){
            $result = model('Live')->updateGhLiveInfo($map,$data);
        }
        if(!$result){
            $this->ajaxReturn(null,'审核失败',0);
        } else {
            $this->ajaxReturn(null,'审核成功',1);
        }
    }

    /**
     * 禁用直播间
     */
    public function doactionColseLive(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $map = array('id' => $id,);
        $data = array('is_del'=>1,);
//        $type = 0;
        $result = model('Live')->updateLiveInfo($map,$data);
        if(!$result){
            $this->ajaxReturn(null,'禁用失败',0);
        } else {
            $this->ajaxReturn(null,'禁用成功',1);
        }
    }
    /**
     * 启用直播间
     */
    public function doactionOpenLive(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $map = array('id' => $id,);
        $data = array('is_del'=>0,);
//        $type = 0;
        $result = model('Live')->updateLiveInfo($map,$data);
        if(!$result){
            $this->ajaxReturn(null,'启用失败',0);
        } else {
            $this->ajaxReturn(null,'启用成功',1);
        }
    }
    /**
     * 启用直播间
     */
    public function doactionDeleteLive(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $map = array('id' => $id,);
//        $type = 9;
        $result = model('Live')->where($map)->delete();
        if(!$result){
            $this->ajaxReturn(null,'彻底删除失败',0);
        } else {
            $this->ajaxReturn(null,'彻底删除成功',1);
        }
    }
    /**
     * 禁用直播间
     */
    public function doactionColseLiveRoom(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $map = array('id' => $id,);
        $data = array('is_del'=>1,);
        if($type == 1){
            $result = model('Live')->updateZshdLiveInfo($map,$data);
        }else if($type == 3){
            $result = model('Live')->updateGhLiveInfo($map,$data);
        }
        if(!$result){
            $this->ajaxReturn(null,'禁用失败',0);
        } else {
            $this->ajaxReturn(null,'禁用成功',1);
        }
    }
    /**
     * 启用直播间
     */
    public function doactionOpenLiveRoom(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $map = array('id' => $id,);
        $data = array('is_del'=>0,);
        if($type == 1){
            $result = model('Live')->updateZshdLiveInfo($map,$data);
        }else if($type == 3){
            $result = model('Live')->updateGhLiveInfo($map,$data);
        }
        if(!$result){
            $this->ajaxReturn(null,'启用失败',0);
        } else {
            $this->ajaxReturn(null,'启用成功',1);
        }
    }

    /**
     * 彻底删除直播间
     */
    public function doactionDelLiveRoom(){
        $id = intval($_POST['id']);
        $type = intval($_POST['type']);
        if(!$id || !$type){
            $this->ajaxReturn(null,'参数错误',0);
        }
        $gh_map = array('id' => $id,);
        $zshd_map = array('SDK_ID' => $id,);

        if($type == 1){
            $url   = $this->zshd_config['api_url'].'/room/deleted?';
            $param = 'roomId='.$id;
            $hash  = $param.'&loginName='.$this->zshd_config['api_key'].'&password='.md5($this->zshd_config['api_pwd']).'&sec=true';
            $url   = $url.$hash;
            $delzshdLive = $this->getDataByUrl($url);

            if($delzshdLive['code'] == 0) {
                $result = M('zy_live_zshd')->where($zshd_map)->delete();
                if($result){
                    $this->ajaxReturn(null,'彻底删除成功',1);
                } else {
                    $this->ajaxReturn(null,'彻底删除失败',0);
                }
            }else{
                $this->ajaxReturn(null,'彻底删除失败',0);
            }
        }else if($type == 3){
            $data['id'] = intval($_POST['id']);
            $data = array_merge($data , $this->_ghdata() );
            $url  = $this->gh_config['api_url'].'/openApi/deleteLiveRoom';
            $res = json_decode( request_post($url , $data) , true);
            if($res['code'] == 0) {
                $result = M('zy_live_gh')->where($gh_map)->delete();
                if($result){
                    $this->ajaxReturn(null,'彻底删除成功',1);
                } else {
                    $this->ajaxReturn(null,'彻底删除失败',0);
                }
            }else{
                $this->ajaxReturn(null,'彻底删除成功',1);
            }
        }
    }

    //获取光慧直播的公共参数
    private function _ghdata(){
        $data['customer']      = $this->gh_config['customer'];
        $data['timestamp']     = time() * 1000;
        $str = md5( $data['customer'] . $data['timestamp'] . $this->gh_config['secretKey'] );
        $data['s'] = substr($str , 0 , 10 ) . substr($str ,-10 );
        $data['fee'] = 0;
        return $data;
    }
    
	//根据url读取文本
	private function getDataByUrl($url , $type = true){
		return json_decode(file_get_contents($url) , $type);
	}
	
}