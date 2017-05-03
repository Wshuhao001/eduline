<?php

/**
 * Eduline课堂首页控制器
 * @author Ashang <ashangmanage@phpzsm.com>
 * @version CY1.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class CateTestAction extends AdministratorAction {
    /**
	 * 初始化，配置内容标题
	 * @return void
	 */
	public function _initialize()
	{
		parent::_initialize();
	}
	
	public function index(){
		
		echo "111";
	}
}

