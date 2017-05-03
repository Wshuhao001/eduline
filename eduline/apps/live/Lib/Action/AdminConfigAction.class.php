<?php
/**
 * 后台直播管理
 * @author wangjun@chuyouyun.com
 * @version chuyouyun2.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class AdminConfigAction extends AdministratorAction
{
	
	protected $config = array();
	/**
	 * 初始化，
	 */
	public function _initialize() {
		$this->pageTitle['baseConfig'] = '基础配置';
		$this->pageTitle['zshdConfig'] = '直播1配置';
		$this->pageTitle['smConfig']   = '直播2配置';
		$this->pageTitle['ghConfig']   = '直播3配置';

		$this->pageTab[] = array('title'=>'基础配置','tabHash'=>'baseConfig','url'=>U('live/AdminConfig/baseConfig'));
		$config = model('Xdata')->get('live_AdminConfig:baseConfig');
		if($config['live_opt'] == 1){
			$this->pageTab[] = array('title'=>'直播1配置','tabHash'=>'zshdConfig','url'=>U('live/AdminConfig/zshdConfig'));
		}else if($config['live_opt'] == 2) {
			$this->pageTab[] = array('title' => '直播2配置', 'tabHash' => 'smConfig', 'url' => U('live/AdminConfig/smConfig'));
		}else if($config['live_opt'] == 3) {
			$this->pageTab[] = array('title' => '直播3配置', 'tabHash' => 'ghConfig', 'url' => U('live/AdminConfig/ghConfig'));
		}
		parent::_initialize();
	}
	
	//直播配置
	public function baseConfig(){
		$_REQUEST['tabHash'] = 'baseConfig';
		$this->pageKeyList = array (
				'live_opt',
		);
		$this->opt ['live_opt'] =  array (
				//'1' => '展示互动',//展示互动
//				'2' => '三芒',//三芒
				'3' => '光慧',//光慧
		);
		$this->displayConfig ();
	}
	
	//展视互动配置
	public function zshdConfig(){
		$_REQUEST['tabHash'] = 'zshdConfig';
		$this->pageKeyList = array (
				'api_key',
				'api_pwd',
				'api_url',
//				'api_sec',
		);
		$this->displayConfig ();
	}
	
	//三芒配置
	public function smConfig(){
		$_REQUEST['tabHash'] = 'smConfig';
		$this->pageKeyList = array (
				'uname',
				'password',
				'api_url',
				'video_url',
		);
		$this->displayConfig ();
	}
	
	//光慧配置
	public function ghConfig(){
		$_REQUEST['tabHash'] = 'ghConfig';
		$this->pageKeyList = array (
				'customer',
				'secretKey',
				'api_url',
				'video_url',
		);
		$this->displayConfig ();
	}
	
	
}