<?php
/**
 * @author ashangmanage <ashangmanage@phpzsm.com>
 * @version CY1.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class AdminVipAction extends AdministratorAction{
    /**
     * 初始化，配置内容标题
     * @return void
     */
    public function _initialize()
    {
        parent::_initialize();
    }
    
	/**
	 * 初始化专题配置
	 * @return void
	 */
	private function _initTabSpecial() {
		// Tab选项
		$this->pageTab [] = array (
				'title' => 'vip等级列表',
				'tabHash' => 'index',
				'url' => U ( 'classroom/AdminVip/index' ) 
		);
		$this->pageTab [] = array (
				'title' => '添加vip等级',
				'tabHash' => 'addVip',
				'url' => U ( 'classroom/AdminVip/addVip' ) 
		);
       
	}

    public function index(){
        $this->pageKeyList = array( 'id','title','sort','vip_year','DOACTION' );
        $this->_initTabSpecial();
        $this->pageButton[] = array('title'=>'删除vip等级','onclick'=>"admin.delVipAll('delVip')");
        $this->assign('pageTitle','vip等级管理');
        $data = M('user_vip')->where('is_del=0')->order("sort DESC")->findPage(20);
        foreach($data['data'] as &$val){
        	$val['ctime']  = date('Y-m-d H:i', $val['ctime']);
          	$val['DOACTION'].="<a href=".U('classroom/AdminVip/addVip',array('id'=>$val['id'])).">编辑</a>";
          	$val['DOACTION'].=" | <a href=javascript:admin.delVip(".$val['id'].",'delVip');>删除</a>";
        }
        $this->displayList($data);
    }
    
    /**
     * 添加vip等级
     * Enter description here ...
     */
    public function addVip(){
    	$id = $_GET['id'];
    	$this->_initTabSpecial();
    	$this->pageKeyList = array ( 'title','sort','vip_year');
    	$this->notEmpty = array ( 'title','sort','vip_year' );
    	$this->savePostUrl = U ( 'classroom/AdminVip/doAddVip');
    	if($id){
    		$this->pageKeyList = array ('id', 'title','sort','vip_year');
    		$res = M('user_vip')->where( 'id=' .$id )->find();
    		$this->assign('pageTitle','编辑vip等级-'.$es['title']);
    		//说明是编辑
    		$this->displayConfig($res);
    	}else{
    		$this->savePostUrl = U ('classroom/AdminVip/doAddVip');
    		$this->assign('pageTitle','添加vip等级');
    		//说明是添加
    		$this->displayConfig();
    	}
    
    }
    
    /**
     * 处理添加vip等级
     */
    public function doAddVip(){
    	$id = intval($_POST['id']);
    	//要添加的数据
    	$data['title']     = t($_POST['title']);
    	$data['vip_year']  = $_POST['vip_year'];
    	$data['sort']      = $_POST['sort'];
    	$data['ctime']     = time();
    	//数据验证
    	if(!$data ['title']){
    		$this->error('请输入名称');
    	}
    	if(!$data ['sort']){
    		$this->error('请输入vip等级');
    	}
    	if(!$data ['vip_year']){
    		$this->error('请输入vip年费');
    	}
    
    	if( $id ){ //修改
    		$res = M('user_vip')->where('id=' . $id)->save($data);
    		if( $res !== false) {
    			$this->success('修改成功');
    		} else {
    			$this->error('修改失败');
    		}
    	}else {
    		$res = M('user_vip')->add($data);
    		if($res ) {
    			$this->success('添加成功');
    		} else {
    			$this->error('添加失败');
    		}
    	}
    }

    /**
     * 删除vip等级
     */
    public function delVip(){
        $ids = implode(",",$_POST['ids']);
        $ids = trim(t($ids),",");
        if($ids==""){
            $ids=intval($_POST['ids']);
        }
        $msg = array();
        $where = array(
            'id'=>array('in',$ids)
        );
        $data['is_del']=1;
        $res = M('user_vip')->where($where)->save($data);

        if( $res !== false){
            $msg['data']   = '删除成功';
            $msg['status'] = 1;
            echo json_encode($msg);
        }else{
            $msg['data']="删除失败!";
            echo json_encode($msg);
        }
    }

}
?>