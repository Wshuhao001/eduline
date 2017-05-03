<?php
/**
 * 云课堂后台配置
 * 分类管理
 * @author ashangmanage <ashangmanage@phpzsm.com>
 * @version CY1.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
class AdminVideoCategoryAction extends AdministratorAction
{
	/**
	 * 初始化，配置内容标题
	 * @return void
	 */
	public function _initialize()
	{
		// 管理标题项目
		$this->pageTitle['index'] 			= '课程分类配置';
		//$this->pageTitle['albumCategory'] 	= '专辑分类配置';
		//$this->pageTitle['subjectCategory'] = '科目分类配置';
		// 管理分页项目
		$this->pageTab[] = array('title'=>$this->pageTitle['index'],'tabHash'=>'index','url'=>U('classroom/AdminVideoCategory/index'));
		$this->pageTab[] = array('title'=>$this->pageTitle['albumCategory'],'tabHash'=>'albumCategory','url'=>U('classroom/AdminVideoCategory/albumCategory'));
		$this->pageTab[] = array('title'=>$this->pageTitle['subjectCategory'],'tabHash'=>'subjectCategory','url'=>U('classroom/AdminVideoCategory/subjectCategory'));
		parent::_initialize();
	}
	
	//课程分类列表
	public function index(){
		$treeData = model('VideoCategory')->getNetworkList(0,1);
		$this->displayTree($treeData,'zy_video_category',2);
	}

}