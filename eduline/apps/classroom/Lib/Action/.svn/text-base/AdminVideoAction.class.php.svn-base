<?php
/**
 * 云课堂后台配置
 * 1.课程管理 - 目前支持1级分类
 * @author ashangmanage <ashangmanage@phpzsm.com>
 * @version CY1.0
 */
tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');
require_once './api/qiniu/rs.php';

class AdminVideoAction extends AdministratorAction
{
	/**
	 * 初始化，配置内容标题
	 * @return void
	 */
	public function _initialize(){
		parent::_initialize();
	}

	//通过审核课程列表
	public function index(){
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();
		$this->pageKeyList = array('id','video_title','cover','v_price','user_title','video_collect_count','video_comment_count','video_question_count','video_note_count','video_score','video_order_count','activity','ctime','DOACTION');
		$this->pageButton[] =  array('title'=>'搜索课程','onclick'=>"admin.fold('search_form')");
		$this->searchKey = array('id','video_title','uid');
		$this->searchPostUrl = U('classroom/AdminVideo/index');
		$listData = $this->_getData(20,0,1);
		$this->displayList($listData);
	}

	//未通过审核课程列表
	public function unauditList(){
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();
		$this->pageButton[] = array("title"=>"批量审核","onclick"=>"admin.crossVideos('','crossVideos','批量审核','课程')");
		$this->pageKeyList = array('id','video_title','user_title','activity','ctime','DOACTION');
		$listData = $this->_getData(20,0,0);
		$this->displayList($listData);
	}

	//待审核课程列表
	public function forwordUnauditList(){
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();
		$this->pageButton[] = array("title"=>"批量审核","onclick"=>"admin.crossVideos('','crossVideos','批量审核','课程')");
		$this->pageKeyList = array('id','video_title','user_title','activity','ctime','DOACTION');
		$listData = $this->_getData(20,0,0);
		$this->displayList($listData);
	}
	
	//课程回收站(被隐藏的课程)
	public function recycle(){
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();
		$this->pageButton[] = array("title"=>"批量审核","onclick"=>"admin.crossVideos('','crossVideos','批量审核','课程')");
		$this->pageKeyList = array('id','video_title','user_title','activity','ctime','DOACTION');
		$listData = $this->_getData(20,1);
		$this->displayList($listData);
	}

	//文件库
	public function videoLib(){
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();
		$this->pageButton[] =  array('title'=>'搜索文件','onclick'=>"admin.fold('search_form')");
		$this->pageButton[] = array("title"=>"添加文件","onclick"=>"admin.addVideoLib()");
		$this->pageKeyList  = array('id','uid','title','type','ctime','status_txt','DOACTION');
		$this->searchKey    = array('id','title','uid','type','status',array('ctime','ctime1'));
		$this->searchPostUrl = U('classroom/AdminVideo/videoLib');
		$this->opt['type']   = array('0'=>'不限','1'=>'视频','1'=>'文档');
		$this->opt['status'] = array('-1'=>'不限','0'=>'禁用','1'=>'正常');

		!empty($_POST['id']) && $map['id'] = intval( $_POST['id'] );
		!empty($_POST['uid']) && $map['uid'] = intval( $_POST['uid'] );
		!empty($_POST['title']) && $map['title'] = t( $_POST['title'] );
		!empty($_POST['status']) && $map['status'] = intval( $_POST['status'] );
		!empty($_POST['type']) && $map['type'] = intval( $_POST['type'] );
		$ctime = $_POST['ctime'];
		!empty($_POST['ctime']) && $map['ctime'] = array( array('gt',strtotime($ctime[0]) ) , array('lt', strtotime ($ctime[1]) ) );
		$map['is_del'] = 0;
		if( !is_admin($this->mid)) {
			$map['uid'] = $this->mid;
		}
		$listData = M('zy_video_data')->where($map)->order('ctime desc')->findPage(20);
		foreach ($listData['data'] as &$value){
			$value['type']        = ( $value['type'] == 1  ) ? '视频' : '文档';
			$value['uid']         = getUserName($value['uid']);
			$value['status_txt']  = $value['status'] ? '正常' : '禁用';
			$value['ctime']       = date('Y-m-d H:i',$value['ctime']);
			$value['DOACTION']  = '<a href="'.U('classroom/AdminVideo/addVideoLib',array('id'=>$value['id'],'tabHash'=>'addVideoLib')).'">编辑</a> | ';
			$value['DOACTION'] .=  $value['status'] ? '<a onclick="admin.opervideo('.$value['id'].' , \'status\', 0);" href="javascript:void(0)">禁用</a>  | ' : '<a onclick="admin.opervideo('.$value['id'].',\'status\', 1);" href="javascript:void(0)">恢复</a>  | ';
			$value['DOACTION'] .= '<a onclick="admin.opervideo('.$value['id'].', \'is_del\', 1);" href="javascript:void(0)">删除</a> ';
		} 
		$this->displayList($listData);
	}


	//添加文件
	public function addVideoLib(){
		if($_POST) {
			//格式化七牛数据
			$videokey = t($_POST['videokey']);
			//获取上传空间 0本地 1七牛 2阿里云 3又拍云
			if($_POST['type'] == 3) {
				$video_address = $_POST['content'];
			} else {
				if(getAppConfig('upload_room','basic') == 0 ) {
					if( $_POST['attach'][0]) {
						$video_address = getAttachUrlByAttachId( $_POST['attach'][0] );
					} else {
						$video_address = $_POST['video_address'];
					}
				} else {
					$video_address="http://".getAppConfig('qiniu_Domain','qiniuyun')."/".$videokey;
				}
			}

			if( $_POST['id'] ) {//修改
				$data['title'] = t($_POST['title']);
				$res = M('zy_video_data')->where('id='.intval($_POST['id']))->save($data);
			} else {//添加
				$data['uid']            = $this->mid;
				$data['title']          = t($_POST['title']);
				$data['type']           = intval($_POST['type']);
				$data['video_address']  = $video_address;
				$data['videokey']       = t($_POST['videokey']);
				$data['ctime']          = time();
				$res = M('zy_video_data')->add($data);
			}
			if( $res !== false) {
				if($_POST['id']){
					$this->assign('jumpUrl', U('classroom/AdminVideo/videoLib'));
					$this->success('编辑成功');
				} else {
					$this->assign('jumpUrl', U('classroom/AdminVideo/videoLib'));
					$this->success('添加成功');
				}
			} else {
				$this->assign('jumpUrl', U('classroom/AdminVideo/addVideoLib'));
				$this->error('操作失败');
			}
		} else {
			$this->_initClassroomListAdminMenu();
			$this->_initClassroomListAdminTitle();

			//如果上传到七牛服务器
			if(getAppConfig('upload_room','basic') == 1 ) {
				//生成上传凭证
				$bucket = getAppConfig('qiniu_Bucket','qiniuyun');
				Qiniu_SetKeys(getAppConfig('qiniu_AccessKey','qiniuyun'), getAppConfig('qiniu_SecretKey','qiniuyun'));
				$putPolicy = new Qiniu_RS_PutPolicy($bucket);
				$filename="eduline".rand(5,8).time();
		          $str = "{$bucket}:{$filename}";
		          $entryCode = Qiniu_Encode($str);
		          $putPolicy->PersistentOps= "avthumb/mp4/ab/192k/ar/44100/r/30/vb/5m/vcodec/libx264/acodec/libfaac/s/1920x1080/autoscale/1/strpmeta/0|saveas/".$entryCode;
		    	     $upToken = $putPolicy->Token(null);

		    	//获取配置上传空间   0本地 1七牛
				$upload_room = getAppConfig('upload_room','basic');
		    	$this->assign('upload_room' , $upload_room);
		    	$this->assign("filename" , $filename);
		    	$this->assign("uptoken" , $upToken);
			}
			if( $_GET['id'] ) {
				$data = M('zy_video_data')->where('id='.intval($_GET['id']))->find();
				$this->assign($data);
			}
			
			$this->display();
		}
	}

	//视频操作
	public function opervideo(){
		$map['id'] = intval($_POST['id']);
		$data[$_POST['field']]  = $_POST['val']; 
		if( M('zy_video_data')->where($map)->save($data) ){
			exit(json_encode(array('status'=>1,'data'=>'操作成功')));
		} else {
			exit(json_encode(array('status'=>0,'data'=>'操作失败')));
		}
	}

	//课程课时管理
	public function lesson(){
		$_REQUEST['tabHash'] = 'lesson';
		$vid = intval( $_GET['vid'] );
		$v_title = M('zy_video')->where('id='.$vid)->getField('video_title');
		$this->pageTitle['lesson'] 			= $v_title.'-课时管理';
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();

		$vid = intval( $_GET['vid'] );
		$treeData = D('VideoSection')->setTable('zy_video_section')->getNetworkList(0,$vid);
		$this->assign('tree' , $treeData);
		$this->assign('stable' , 'zy_video_section');
		$this->assign('level' , 2);
		$this->assign('vid',$vid);
		$this->display();
	}

	/**
 	 * 添加章节页面
 	 * @return void
 	 */
    public function addLesson()
    {
    	   $id      = intval($_GET['id']);
        $stable  = t($_GET['stable']);
        $vid     = intval($_GET['vid']);


        $this->assign('id', $id);
        $this->assign('stable', $stable);
        $this->assign('vid', $vid);
        $this->assign('oper', 'add');
        $this->assign('lev', intval($_GET['lev']));
        //$this->assign('list' , $this->getVideoList());

    	$this->display();
    }

    /**
 	 * 编辑章节页面
 	 * @return void
 	 */
    public function upLesson()
    {
    	$id  = intval($_GET['id']);
    	$stable  = t($_GET['stable']);

        // 获取该分类的信息
        $res =  D('VideoSection')->setTable('zy_video_section')->getCategoryById($id);
        $this->assign($res);
        $this->assign('id', $id);
        $this->assign('stable', $stable);
        $this->assign('oper', 'up');
        //$this->assign('list' , $this->getVideoList());
    	$this->display('addLesson');
    }

    //文件库
    public function getVideoList(){
    	$map['status'] = 1;
    	$map['is_del'] = 0;
    	if($_POST['s_title']) {
    		$map['title'] = array('like' , '%'.t( $_POST['s_title']).'%' );
    	}
    	if($_POST['s_type']) {
    		$map['type'] =intval( $_POST['s_type'] );
    	}

    	if( !is_admin($this->mid)) {
			$map['uid'] = $this->mid;
		}
		$total = M('zy_video_data')->where($map)->count();//总记录数
		$page      = intval($_POST['pageNum']); //当前页  
		$pageSize  = 10; //每页显示数 
		$totalPage = ceil($total/$pageSize); //总页数 
		 
		$startPage = $page*$pageSize; //开始记录 
		//构造数组 
		$list['total']     = $total; 
		$list['pageSize']  = $pageSize; 
		$list['totalPage'] = $totalPage; 

    	
    	$list['data'] = M('zy_video_data')->where($map)->order('id desc')->limit("{$startPage} , {$pageSize}")->findAll();
    	foreach($list['data'] as &$val) {
    		$val['type']  = $val['type'] == 1 ? '视频' : ($val['type'] == 2 ? '音频' : '文档');
    		$val['uid']   = getUserName($val['uid']);
    		$val['ctime'] = date('Y-m-d' , $val['ctime']);
    	}
    	exit( json_encode($list) ) ;
    }

    /**
     * 添加章节操作
     * @return json 返回相关的JSON信息
     */
    public function doAddLesson()
    {
    	$pid     = intval($_POST['pid']);
    	$title   = t($_POST['title']);
    	$stable  = t($_POST['stable']);


		if( intval($_POST['vid']) ){
			$data['vid'] = $_POST['vid'];
		}
		if( intval($_POST['cid']) ){
			$data['cid'] = $_POST['cid'];
		}

		if( t($_POST['oper']) == 'add') {
			$result = D('VideoSection')->setTable($stable)->addTreeCategory($pid, $title, $data);
		} else {
			$result = D('VideoSection')->setTable($stable)->upTreeCategory($pid, $title, $data);
		}
    	
    	$res = array();
    	if($result !== false) {
    		$res['status'] = 1;
    		if( t($_POST['oper']) == 'add') {
    			$res['data'] = '添加章节成功';
    		} else {
    			$res['data'] = '修改章节成功';
    		}
    	} else {
    		$res['status'] = 0;
    		if( t($_POST['oper']) == 'add') {
    			$res['data'] = '添加章节失败';
    		} else {
    			$res['data'] = '修改章节失败';
    		}
    	}
    	exit(json_encode($res));
    }

    //学习记录
    

    public function learn(){
        $this->_initClassroomListAdminMenu();
        $_REQUEST['tabHash'] = 'learn';    
        $id = intval( $_GET['id'] );
        $this->pageButton[] = array('title'=>'删除记录','onclick'=>"admin.delLearnAll('delArticle')");
		$this->pageButton[]  = array('title'=>'搜索记录','onclick'=>"admin.fold('search_form')");
        $this->pageKeyList  = array('id','uname','video_title','sid','time','ctime','DOACTION');
        $this->searchKey    = array('id','uid');
        $this->searchPostUrl= U(APP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME, array('id'=>$id, 'tabHash'=>ACTION_NAME));
        
        !empty($_POST['id']) && $map['id'] = intval($_POST['id']);
        !empty($_POST['uid']) && $map['uid'] = intval($_POST['uid']);
        !empty($id) && $map['vid'] = $id;
        $learn = M('learn_record')->where($map)->order("ctime DESC")->findPage(20);
        foreach($learn['data'] as &$val){
        	$val['video_title'] = M('zy_video')->where(array('id'=>$id))->getField('video_title');
        	$val['uname']       = getUserName($val['uid']);
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
        $video_title = M('zy_video')->where('id='.$id)->getField("video_title");
        $this->_listpk = 'id';
        $this->assign('pageTitle','学习记录--'.$video_title);
        $this->displayList($learn);
    }

    //显示/隐藏 学习记录
    public function closelearn(){
        $id = implode(",", $_POST['id']);
        $id = trim(t($id), ",");
        if ($id == "") {
            $id = intval($_POST['id']);
        }
        $msg = array();
        $where = array(
            'id' => array('in', $id)
        );
        $is_del = M('learn_record')->where($where)->getField('is_del');
        if ($is_del == 1) {
            $data['is_del'] = 0;
        } else {
            $data['is_del'] = 1;
        }
        $res = M('learn_record')->where($where)->save($data);

        if ($res !== false) {
            $msg['data'] = '操作成功';
            $msg['status'] = 1;
            echo json_encode($msg);
        } else {
            $msg['data'] = "操作失败!";
            $msg['status'] = 0;
            echo json_encode($msg);
        }
    }

	
	//编辑、添加课程
	public function addVideo(){
		$this->_initClassroomListAdminMenu();
		$this->_initClassroomListAdminTitle();
		if($_GET['id']){
			$data = D('ZyVideo','classroom')->getVideoById(intval($_GET['id']));
			$this->assign($data);
		}
		//查询讲师列表
		$trlist = $this->teacherList();
		//获取会员等级
		$vip_levels = M('user_vip')->where('is_del=0')->order('sort desc')->getField('sort,title');
		$this->assign('vip_levels' , $vip_levels);
		$this->assign('trlist' , $trlist);
		$this->assign('album_list' , $album_list);
		$this->display();
	}
	
	//添加课程操作
	public function doAddVideo(){
		$post = $_POST;
		if(empty($post['video_title'])) exit(json_encode(array('status'=>'0','info'=>"请输入课程标题")));
		if(empty($post['video_levelhidden'])) exit(json_encode(array('status'=>'0','info'=>"请选择课程分类")));
		if(empty($post['video_intro'])) exit(json_encode(array('status'=>'0','info'=>"请输入课程简介")));
		if(empty($post['cover_ids'])) exit(json_encode(array('status'=>'0','info'=>"请上传课程封面")));
		if(empty($post['trid'])) exit(json_encode(array('status'=>'0','info'=>"请选择讲师")));
		if(empty($post['listingtime'])) exit(json_encode(array('status'=>'0','info'=>"请选择上架时间")));
		if(empty($post['uctime'])) exit(json_encode(array('status'=>'0','info'=>"请选择下架时间")));
		$data['listingtime']  = $post['listingtime'] ? strtotime($post['listingtime']) : 0; //上架时间
		$data['uctime'] 	  = $post['uctime'] ? strtotime($post['uctime']) : 0; //下架时间
		if( $data['uctime'] < $data['listingtime'] ){
			exit(json_encode(array('status'=>'0','info'=>'下架时间不能小于上架时间')));
		}

		if( isset($post['is_tlimit']) ) {
			if($post['limit_discount'] > 1 || $post['limit_discount'] < 0){
				exit(json_encode(array('status'=>'0','info'=>'请输入0-1的数字')));
			}
			if(empty($post['starttime'])) exit(json_encode(array('status'=>'0','info'=>"请选择打折开始时间")));
			if(empty($post['endtime'])) exit(json_encode(array('status'=>'0','info'=>"请选择打折结束时间")));
			$data['starttime']  = $post['starttime'] ? strtotime($post['starttime']) : 0; //上架时间
			$data['endtime'] 	= $post['endtime'] ? strtotime($post['endtime']) : 0; //下架时间
			if($data['endtime'] < $data['starttime'] ){
				exit(json_encode(array('status'=>'0','info'=>'打折结束时间不能小于打折开始时间')));
			}
		}

		$myAdminLevelhidden 		= getCsvInt(t($post['video_levelhidden']),0,true,true,',');  //处理分类全路径
		$fullcategorypath 			= explode(',',$post['video_levelhidden']);
		$category 					= array_pop($fullcategorypath);
		$category					= $category == '0' ? array_pop($fullcategorypath) : $category; //过滤路径最后为0的情况
		$data['fullcategorypath'] 	= $myAdminLevelhidden; //分类全路径
		$data['video_category']		 = $category == '0' ? array_pop($fullcategorypath) : $category;
		$data['is_activity'] 	 	 = is_admin($this->mid) ? 1 : 0;
		$data['video_title'] 		 = t($post['video_title']); //课程名称
		$data['video_intro'] 		 = t($post['video_intro']); //课程简介
		$data['v_price'] 			 = $post['v_price']; //市场价格
		$data['vip_level'] 			 = $post['vip_levels']; //vip等级
		$data['is_tlimit']           = isset($post['is_tlimit']) ? intval($post['is_tlimit']) : 0; //限时打折
		$data['starttime'] 			 = $post['starttime'] ? strtotime($post['starttime']) : 0; //限时开始时间
		$data['endtime'] 			 = $post['endtime'] ? strtotime($post['endtime']) : 0; //限时结束时间
		$data['limit_discount'] 	 = isset($post['is_tlimit']) && ($post['limit_discount'] <= 1 && $post['limit_discount'] >= 0) ? $post['limit_discount'] : 1; //限时折扣
		$data['teacher_id']          = intval($_POST['trid']);//获取讲师
		$data['cover'] 			 	 = intval($post['cover_ids']); //封面
		$data['is_best'] 			 = intval($post['is_best']); //封面
		$data['videofile_ids'] 		 = isset($post['attach'][0]) ? intval($post['attach'][0]) : 0; //课件id
		$video_tag					 = t($post['video_tag']);//课程标签

		if($post['id']){
			$data['utime'] = time();
			$result = M('zy_video')->where('id = '.$post['id'])->data($data)->save();
		} else {
			$data['ctime'] = time();
			$data['utime'] = time();
			$data['uid']   = $this->mid;
			$result = M('zy_video')->data($data)->add();
		}
		if($result){
			unset($data);
			if($post['id']){
				//添加标签
				model('Tag')->setAppName('classroom')->setAppTable('zy_video')->deleteSourceTag($post['id']);
				$tag_reslut = model('Tag')->setAppName('classroom')->setAppTable('zy_video')->addAppTags($post['id'],$video_tag);
			} else {
				$tag_reslut = model('Tag')->setAppName('classroom')->setAppTable('zy_video')->addAppTags($result,$video_tag);
			}
			$data['str_tag'] = implode(',' ,getSubByKey($tag_reslut,'name'));
			$data['tag_id']  = ','.implode(',',getSubByKey($tag_reslut,'tag_id')).',';
			$map['id'] = $post['id'] ? $post['id'] : $result;
			M('zy_video')->where($map)->data($data)->save();
			if($post['id']){
				exit(json_encode(array('status'=>'1','info'=>'编辑成功')));
			} else {
				exit(json_encode(array('status'=>'1','info'=>'添加成功')));
			}
		} else {
			exit(json_encode(array('status'=>'0','info'=>'操作失败，请检查数据是否完整')));
		}
	}

	//批量审核课程
	public function crossVideos(){
		$map['id'] = is_array($_POST['id']) ? array('IN',$_POST['id']) : intval($_POST['id']);
		$table = M('zy_video');
		$data['is_activity']  = 1;
		$result = $table->where($map)->data($data)->save();
		if($result){
			$this->ajaxReturn('审核成功');
		} else {
			$this->ajaxReturn('系统繁忙，稍后再试');
		}
	}

	//删除(隐藏)课程
	public function delVideo(){
		if(!$_POST['id']){
			exit(json_encode(array('status'=>0,'info'=>'请选择要删除的对象!')));
		}
		$map['id'] = intval($_POST['id']);
		$data['is_del'] = $_POST['is_del'] ? 0 : 1; //传入参数并设置相反的状态
		if(M('zy_video')->where($map)->data($data)->save()){
			exit(json_encode(array('status'=>1,'info'=>'操作成功')));
		} else {
			exit(json_encode(array('status'=>1,'info'=>'操作失败')));
		}
	}
	
	/**
	 * 删除视频(删除存储空间的视频)
	 */
	public function deletevideo(){
		$videokey=t($_POST['videokey']);//获取视频key
	
		$bucket =  getAppConfig('qiniu_Bucket','qiniuyun');
		Qiniu_SetKeys(getAppConfig('qiniu_AccessKey','qiniuyun'),  getAppConfig('qiniu_SecretKey','qiniuyun'));
		$client = new Qiniu_MacHttpClient(null);
		$err = Qiniu_RS_Delete($client, $bucket, $videokey);
	
		if ($err !== null) {
			exit(json_encode(array('status'=>'0','info'=>"删除失败或视频已不存在！")));
		}else{
			$data['qiniu_key']="";
			D('ZyVideo')->where(array("qiniu_key"=>$videokey))->save($data);
			exit(json_encode(array('status'=>'1','info'=>'删除成功，请添加新视频！')));
		}
	}
	
	//讲师列表
	private function teacherList(){
		$map = array(
				'is_del'=>0
		);
		$teacherlist=D('ZyTeacher')->where($map)->order("ctime DESC")->select();
		return $teacherlist;
	}
	
	//获取课程数据
	private function _getData($limit = 20, $is_del = 0, $is_activity = 1){
		if(isset($_POST)){
			$_POST['id'] && $map['id'] = intval($_POST['id']);
			$_POST['video_title'] && $map['video_title'] = array('like', '%'.t($_POST['video_title']).'%');
			$_POST['uid'] && $map['uid'] = intval($_POST['uid']);
		}
		$map['is_del'] = $is_del; //搜索非隐藏内容
		if(isset($is_activity)){
			$map['is_activity'] = $is_activity;
		}
		if( !is_admin($this->mid)) {
			$map['uid'] = $this->mid;
		}
		$list = M('zy_video')->where($map)->order('ctime desc,id desc')->findPage($limit);
		foreach ($list['data'] as &$value){
			$value['video_title'] = msubstr($value['video_title'],0,20);
			$value['user_title']  = getUserSpace($value['uid']);
			$value['activity']    = $value['is_activity'] == '1' ? '<span style="color:green">已审核</span>' : '<span style="color:red">未审核</span>';
			$value['best']        = $value['is_best'] == '1' ? '<span style="color:green">是</span>' : '<span style="color:red">否</span>';
			$value['ctime'] = friendlyDate($value['ctime']);
			$value['cover'] = "<img src=".getCover($value['cover'] , 60 ,60)." width='60px' height='60px'>";

			$value['DOACTION'] = '<a href=" '.U('classroom/AdminVideo/lesson',array('vid'=>$value['id'])).' ">课时管理</a> | ';
			$value['DOACTION'] .= '<a href=" '.U('classroom/AdminVideo/learn',array('uid'=>$value['uid'],'id'=>$value['id'])).' ">学习记录</a> | ';
			$value['DOACTION'] .= '<a target="_blank" href=" '.U('classroom/Video/watch',array('id'=>$value['id'],'type'=>1)).' ">查看</a> | ';
			$value['DOACTION'] .= '<a href="'.U('classroom/AdminVideo/askVideo',array('tabHash'=>'askVideo','id'=>$value['id'])).'">提问</a> | ';
			$value['DOACTION'] .= '<a href="'.U('classroom/AdminVideo/noteVideo',array('tabHash'=>'noteVideo','id'=>$value['id'])).'">笔记</a> | ';
			$value['DOACTION'] .= '<a href="'.U('classroom/AdminVideo/reviewVideo',array('tabHash'=>'reviewVideo','id'=>$value['id'])).'">评价</a> | ';
			if( $value['is_del'] == 0 && $value['is_activity'] == 0 && is_admin($this->mid) ){
				$value['DOACTION'] .= '<a href="javascript:void();" onclick="admin.crossVideo('.$value['id'].',true)">通过审核</a> | ';
			}
			$value['DOACTION'] .= $value['is_del'] ? '<a href="'.U('classroom/AdminVideo/addVideo',array('id'=>$value['id'],'tabHash'=>'editVideo')).'">编辑</a> | 
					<a onclick="admin.delObject('.$value['id'].',\'Video\','.$value['is_del'].');" href="javascript:void(0)">恢复</a>' : '<a href="'.U('classroom/AdminVideo/addVideo',array('id'=>$value['id'],'tabHash'=>'editVideo')).'">编辑</a> | 
							<a onclick="admin.delObject('.$value['id'].',\'Video\','.$value['is_del'].');" href="javascript:void(0)">删除</a> ';
		}
		return $list;
	}
	
	
	
	
	
	/**
	 * 课程对应的提问
	 */
	public function askVideo(){
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$this->pageTab[] = array('title'=>'课程提问列表','tabHash'=>'askVideo','url'=>U('classroom/AdminVideo/askVideo'));
		$this->pageTitle['askVideo'] = '课程问题列表';
		if(!$_GET['id']) $this->error('请选择要查看的课程');
		$field = 'id,uid,oid,qst_description,qst_comment_count';
		$this->pageKeyList = array('id','qst_description','uid','oid','qst_comment_count','DOACTION');
		$map['oid'] = intval($_GET['id']);
		$map['parent_id'] = 0; //父类id为0
		$map['type'] = 1;
		$data = D('ZyQuestion','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="'.U('classroom/AdminVideo/answerVideo',array('oid'=>$vo['oid'],'id'=>$vo['id'],'tabHash'=>'answerVideo')).'">查看回答</a> | <a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'ask\')">删除(连带删除回答及回答的评论)</a>';
		}
		$this->displayList($data);
	}

	/**
	 * 提问对应的回答
	 */
	public function answerVideo(){
		if(!$_GET['id']) $this->error('请选择要查看的问题');
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$this->pageTab[] = array('title'=>'回答列表','tabHash'=>'answerVideo','url'=>U('classroom/AdminVideo/answerVideo'));
		$this->pageTitle['answerVideo'] = '回答列表';
		$field = 'id,uid,oid,qst_description,qst_comment_count';
		$this->pageKeyList = array('id','qst_description','uid','oid','qst_comment_count','DOACTION');
		$map['parent_id'] = intval($_GET['id']); //父类id为问题id
		$map['oid'] = intval($_GET['oid']);
		$map['type'] = 1;
		$data = D('ZyQuestion','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="'.U('classroom/AdminVideo/commentVideo',array('oid'=>$vo['oid'],'id'=>$vo['id'],'tabHash'=>'commentVideo')).'">查看评论</a> | <a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'ask\')">删除(连带删除评论)</a>';
		}
		$this->displayList($data);
	}

	/**
	 * 对回答的评论
	 */
	public function commentVideo(){
		if(!$_GET['id']) $this->error('请选择要查看的回答');
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$field = 'id,uid,oid,qst_description';
		$this->pageTab[] = array('title'=>'评论列表','tabHash'=>'commentVideo','url'=>U('classroom/AdminVideo/commentVideo'));
		$this->pageTitle['commentVideo'] = '评论列表';
		$this->pageKeyList = array('id','qst_description','uid','oid','DOACTION');
		$map['parent_id'] = intval($_GET['id']); //父类id为问题id
		$map['oid'] = intval($_GET['oid']);
		$map['type'] = 1;
		$data = D('ZyQuestion','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'ask\')">删除</a>';
		}
		$this->displayList($data);
	}

	/******************************************提问结束，笔记开始 ************/

	/**
	 * 课程对应的笔记
	 */
	public function noteVideo(){
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$this->pageTab[] = array('title'=>'课程笔记列表','tabHash'=>'noteVideo','url'=>U('classroom/AdminVideo/askVideo'));
		$this->pageTitle['askVideo'] = '课程笔记列表';
		if(!$_GET['id']) $this->error('请选择要查看的课程');
		$field = 'id,uid,oid,note_title,note_comment_count';
		$this->pageKeyList = array('id','note_title','uid','oid','note_comment_count','DOACTION');
		$map['oid'] = intval($_GET['id']);
		$map['parent_id'] = 0; //父类id为0
		$map['type'] = 1;
		$data = D('ZyNote','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="'.U('classroom/AdminVideo/noteCommentVideo',array('oid'=>$vo['oid'],'id'=>$vo['id'],'tabHash'=>'noteCommentVideo')).'">查看评论</a> | <a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'note\')">删除(连带删除回答及回答的评论)</a>';
		}
		$this->displayList($data);
	}

	/**
	 * 笔记对应的评论
	 */
	public function noteCommentVideo(){
		if(!$_GET['id']) $this->error('请选择要查看的评论');
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$this->pageTab[] = array('title'=>'评论列表','tabHash'=>'noteCommentVideo','url'=>U('classroom/AdminVideo/answerVideo'));
		$this->pageTitle['answerVideo'] = '评论列表';
		$field = 'id,uid,oid,note_title,note_comment_count';
		$this->pageKeyList = array('id','note_title','uid','oid','note_comment_count','DOACTION');
		$map['parent_id'] = intval($_GET['id']); //父类id为问题id
		$map['oid'] = intval($_GET['oid']);
		$map['type'] = 1;
		$data = D('ZyNote','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="'.U('classroom/AdminVideo/noteReplayVideo',array('oid'=>$vo['oid'],'id'=>$vo['id'],'tabHash'=>'noteReplayVideo')).'">查看回复</a> | <a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'note\')">删除(连带删除评论)</a>';
		}
		$this->displayList($data);
	}

	/**
	 * 对笔记评论的回复
	 */
	public function noteReplayVideo(){
		if(!$_GET['id']) $this->error('请选择要查看的评论');
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$field = 'id,uid,oid,note_title';
		$this->pageTab[] = array('title'=>'回复列表','tabHash'=>'noteReplayVideo','url'=>U('classroom/AdminVideo/commentVideo'));
		$this->pageTitle['commentVideo'] = '回复列表';
		$this->pageKeyList = array('id','note_title','uid','oid','DOACTION');
		$map['parent_id'] = intval($_GET['id']); //父类id为问题id
		$map['oid'] = intval($_GET['oid']);
		$map['type'] = 1;
		$data = D('ZyNote','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'note\')">删除</a>';
		}
		$this->displayList($data);
	}

	/*******************************************笔记操作结束,评论开始******************/
	/**
	 * 课程对应的评价
	 */
	public function reviewVideo(){
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$this->pageTab[] = array('title'=>'课程评价列表','tabHash'=>'reviewVideo','url'=>U('classroom/AdminVideo/reviewVideo'));
		$this->pageTitle['reviewVideo'] = '课程评价列表';
		if(!$_GET['id']) $this->error('请选择要查看的评价');
		$field = 'id,uid,oid,review_description,star,review_comment_count';
		$this->pageKeyList = array('id','review_description','uid','oid','star','review_comment_count','DOACTION');
		$map['oid'] = intval($_GET['id']);
		$map['parent_id'] = 0; //父类id为0
		$map['type'] = 1;
		$data = D('ZyReview','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="'.U('classroom/AdminVideo/reviewCommentVideo',array('oid'=>$vo['oid'],'id'=>$vo['id'],'tabHash'=>'reviewCommentVideo')).'">查看评论</a> | <a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\',\'review\')">删除(连带删除回复)</a>';
			$data['data'][$key]['start'] = $vo['start']/ 20;
		}
		$this->displayList($data);
	}

	/**
	 * 评价对应的回复
	 */
	public function reviewCommentVideo(){
		if(!$_GET['id']) $this->error('请选择要查看的评论');
		$this->_initClassroomListAdminTitle();
		$this->_initClassroomListAdminMenu();
		$this->pageTab[] = array('title'=>'评论列表','tabHash'=>'reviewCommentVideo','url'=>U('classroom/AdminVideo/reviewCommentVideo'));
		$this->pageTitle['reviewCommentVideo'] = '评论列表';
		$field = 'id,uid,oid,review_description';
		$this->pageKeyList = array('id','review_description','uid','oid','DOACTION');
		$map['parent_id'] = intval($_GET['id']); //父类id为问题id
		$map['oid'] = intval($_GET['oid']);
		$map['type'] = 1;
		$data = D('ZyReview','classroom')->getListForId($map,20,$field);
		foreach ($data['data'] as $key => $vo){
			$data['data'][$key]['oid'] = D('ZyVideo','classroom')->getVideoTitleById($vo['oid']);
			$data['data'][$key]['uid'] = getUserName($vo['uid']);
			$data['data'][$key]['DOACTION'] = '<a href="javascript:void();" onclick="admin.delContent('.$vo['id'].',\'Video\'\'review\')">删除</a>';
		}
		$this->displayList($data);
	}

	//****************************评论结束***********************//
	/**
	 * 删除提问、回答、评论
	 *
	 */
	public function delProperty(){
		if(!$_POST['id']) exit(json_encode(array('status'=>0,'info'=>'错误的参数')));
		if(!$_POST['property'] || !in_array($_POST['property'], array('ask','note','review'))) exit(json_encode(array('status'=>0,'info'=>'参数错误')));
		if($_POST['property'] == 'ask'){
			$result = D('ZyQuestion','classroom')->doDeleteQuestion(intval($_POST['id']));
		}  else if($_POST['property'] == 'note'){
			$result = D('ZyNote','classroom')->doDeleteNote(intval($_POST['id']));
		} else if($_POST['property']){
			$result = D('ZyReview','classroom')->doDeleteReview(intval($_POST['id']));
		}
		if($result['status'] == 1){
			exit(json_encode(array('status'=>1,'info'=>'删除成功')));
		} else {
			exit(json_encode(array('status'=>0,'info'=>'删除失败，请稍后再试')));
		}
	}

	/**
	 * 审核课程
	 */
	public function crossVideo(){
		if(!$_POST['id']) exit(json_encode(array('status'=>0,'info'=>'错误的参数')));
		$map['id'] = intval($_POST['id']);
		$data['is_activity'] = $_POST['cross'] == 'true' ? 1 : 0; //0为未通过状态
		if(M('zy_video')->where($map)->data($data)->save()){
			exit(json_encode(array('status'=>1,'info'=>'操作成功')));
		} else {
			exit(json_encode(array('status'=>0,'info'=>'操作失败')));
		}
	}


	/**
	 * 课程后台管理菜单
	 * @return void
	 */
	private function _initClassroomListAdminMenu(){
		$this->pageTab[] = array('title'=>'通过审核课程列表','tabHash'=>'index','url'=>U('classroom/AdminVideo/index'));
		$this->pageTab[] = array('title'=>'未通过审核课程列表','tabHash'=>'unauditList','url'=>U('classroom/AdminVideo/unauditList'));
		//$this->pageTab[] = array('title'=>'前台投稿待审课程列表','tabHash'=>'forwordUnauditList','url'=>U('classroom/AdminVideo/forwordUnauditList'));
		$this->pageTab[] = array('title'=>'课程回收站','tabHash'=>'recycle','url'=>U('classroom/AdminVideo/recycle'));
		$this->pageTab[] = array('title'=>'添加课程','tabHash'=>'addVideo','url'=>U('classroom/AdminVideo/addVideo'));
		$this->pageTab[] = array('title'=>'文件库','tabHash'=>'videoLib','url'=>U('classroom/AdminVideo/videoLib'));
		
	}

	/**
	 * 课程后台的标题
	 */
	private function _initClassroomListAdminTitle(){
		$this->pageTitle['index'] = '通过审核课程';
		$this->pageTitle['forwordUnauditList'] = '前台投稿待审课程列表';
		$this->pageTitle['unauditList'] = '未通过审核课程';
		$this->pageTitle['recycle'] 	= '课程回收站';
		$this->pageTitle['addVideo']    = '添加课程';
		$this->pageTitle['videoLib']    = '文件库';
	}

}