<?php
/**
 * 后台直播分类管理
 * @author wangjun@chuyouyun.com
 * @version chuyouyun2.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class AdminLiveCateAction extends AdministratorAction
{
	/**
	 * 初始化，
	 */
	public function _initialize(){
        $this->pageTitle['index'] = '直播分类';

		parent::_initialize();
	}

    /**
     * 直播分类列表
     */
    public function index(){
        $treeData = model ( 'CategoryTree' )->setTable ( 'zy_live_category' )->getNetworkList ();
        $this->displayTree ( $treeData, 'zy_live_category');
    }


}