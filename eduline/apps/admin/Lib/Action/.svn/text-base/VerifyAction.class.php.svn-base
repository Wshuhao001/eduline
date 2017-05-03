<?php
/**
 * 验证码管理
 */
// 加载后台控制器
tsload ( APPS_PATH . '/admin/Lib/Action/AdministratorAction.class.php' );
class VerifyAction extends AdministratorAction {	

	/**
	 * 初始化，配置内容标题
	 * @return void
	 */
	public function _initialize(){
		parent::_initialize();
		$this->pageTab[] = array( 'title' =>'验证码管理', 'tabHash' => 'index', 'url' => U('admin/Verify/index') );
	}
	
	/**
	 * 单页列表
	 */
	public function index(){
		$this->pageTitle ['index'] = '验证码管理';
		$this->pageKeyList = array ('id','phone','code','stime',);
		$list = M('resphone_code')->order('stime desc')->findPage(20);
		foreach($list['data'] as &$val){
			$val['stime'] = date('Y-m-d H:i' , $val['stime']);
		}
		$this->displayList($list);
	}
	
	
}