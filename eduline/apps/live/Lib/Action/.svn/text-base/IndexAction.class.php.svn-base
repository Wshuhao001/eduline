<?php

/**
 * Eduline直播首页控制器
 * @author Ashang <ashangmanage@phpzsm.com>
 * @version CY1.0
 */
tsload(APPS_PATH . '/classroom/Lib/Action/CommonAction.class.php');
class IndexAction extends CommonAction {
	
	protected $video = null; // 课程模型对象
	protected $category = null; // 分类数据模型
	protected $base_config = array();//直播配置
	protected $zshd_config = array();//展示互动

	/**
	 * 初始化
	 */
	public function _initialize() {
		$this->zshd_config =  model('Xdata')->get('live_AdminConfig:zshdConfig');
		$this->base_config =  model('Xdata')->get('live_AdminConfig:baseConfig');
	}

	
    /**
     * Eduline直播首页方法
     * @return void
     */ 
    public function index() {
		$cate_id = intval ( $_GET ['cateId'] );
		$cate = model('ZyLive')->getCategoryList($cate_id);
		$this->assign ( 'mid', $this->mid );
		$this->assign ( 'cate', $cate);

		$this->display ();
    }
    
    /**
     * 取得直播列表
     * @param boolean $return 是否返回数据，如果不是返回，则会直接输出Ajax JSON数据
     * @return void|array
     */
    public function getList($return = false) {
    	$cateId = intval ( $_GET ['cateId'] );
		if ( $cateId > 0) {
			$map['fullcategorypath'] = array('like' , '%,'.$cateId.',%');
		}
		$map['is_del'] = 0;
		$data = M('zy_live')->order('beginTime desc')->where($map)->findPage(12);
		foreach($data['data'] as &$val){
    		if($val['beginTime'] <= time() && $val['endTime']  >= time() ) {
				$val['note'] = '直播中';
			}

			if($val['beginTime'] > time()){
				$val['note'] = '未开始';
			}

			if($val['endTime'] < time()){
				$val['note'] = '已结束';
			}
		}
		if($data['data']) {
			$this->assign ( 'listData', $data ['data'] );
			$html = $this->fetch ( 'index_list' );
		} else {
			$html = '暂无直播课程';
		}

		$data ['data'] = $html;
		$this->assign ( 'cateId', $cateId ); // 定义分类
		
		$this->assign ( 'live_opt', $this->base_config['live_opt'] );
		
		if ($return) {
			return $data;
		} else {
			exit( json_encode ( $data ) );
		}
    }

    /**
     * 取得课程目录
     * @param int $return 
     * @return void|array
     */
    public function getcatalog() {
        $id = intval($_POST['id']);
        $info = M('zy_live')->where('id='.$id)->find();
        if($info['live_type'] == 1) {//展视互动
        	$map['live_id']   = $info['id'];
        	$map['is_del']    = 0;
        	$map['is_active'] = 1;
        	$data = M('zy_live_zshd')->where($map)->findAll();
        	foreach($data as &$val) {
        		$val['title']     = $val['subject'];
        		$val['beginTime'] = $val['startDate'];
        		$val['endTime']   = $val['invalidDate'] ;
        		if($val['startDate']  <= time() && $val['invalidDate']   >= time() ) {
					$val['note'] = '直播中';
				}

				if($val['startDate']  > time()){
					$val['note'] = '未开始';
				}

				if($val['invalidDate'] < time()){
					$val['note'] = '已结束';
				}
        	}
        } elseif($info['live_type'] == 2){//三芒

        } elseif($info['live_type'] == 3){//光慧
        	$map['live_id']   = $info['id'];
        	$map['is_del']    = 0;
        	$map['is_active'] = 1;
        	$data = M('zy_live_gh')->where($map)->findAll();
        	foreach($data as &$val) {
        		$val['beginTime'] = $val['beginTime'] / 1000;
        		$val['endTime']   = $val['endTime'] / 1000;
        		if($val['beginTime'] <= time() && $val['endTime']  >= time() ) {
					$val['note'] = '直播中';
				}

				if($val['beginTime'] > time()){
					$val['note'] = '未开始';
				}

				if($val['endTime'] < time()){
					$val['note'] = '已结束';
				}
        	}
        }else {//其他
        	$map['live_id']   = $info['id'];
        	$map['is_del']    = 0;
        	$map['is_active'] = 1;
        	$data = M('zy_live_gh')->where($map)->findAll();
        	foreach($data as &$val) {
        		$val['beginTime'] = $val['beginTime'] / 1000;
        		$val['endTime']   = $val['endTime'] / 1000;
        	}
        }
        $this->assign('data', $data);
        $result = $this->fetch('_menu');
        exit( json_encode($result) );
    }
    
    public function view() {
    	$id = intval($_GET['id']);
    	$map['id']     = $id;
		$map['is_del'] = 0;
		$data = M( 'zy_live' )->where ( $map )->find();

		if (! $data) {
			$this->assign ( 'isAdmin', 1 );
			$this->error ( '直播课程不存在' );
		}

		if( $data['live_type'] == 1) {//展示互动
			unset($map);
    		$map['live_id'] = $id;
    		// $map['startDate']   = array('elt' , time() );
    		// $map['invalidDate'] = array('egt' , time() );
			$speaker_id = M( 'zy_live_zshd' )->where ( $map)->order('startDate ASC')->getField('speaker_id');
			$data['teacher'] = M('zy_teacher')->where('id='.$speaker_id)->find();
    	} else if($data['live_type'] == 2) {//三芒
    		unset($map);
    	} else if($data['live_type'] == 3) {//光慧
    		unset($map);
    		$map['live_id'] = $id;
    		// $map['beginTime'] = array('elt' , time()*1000 );
    		// $map['endTime']   = array('egt' , time()*1000 );
    		$speaker_id = M( 'zy_live_gh' )->where ( $map)->order('beginTime ASC')->getField('speaker_id');
    		$data['teacher'] = M('zy_teacher')->where('uid='.$speaker_id)->find();
    	}

		//账号余额
		$data['balance'] = D("zyLearnc" ,'classroom' )->getUser($this->mid);
		// 是否已购买
		$data['is_buy']      = M('zy_order_live')->where('live_id='.$id .' and uid='.$this->mid)->count();
		$data['order_count'] = M('zy_order_live')->where('live_id='.$id)->count();
		$this->assign ( 'id', $data['id'] );
		$this->assign ( 'data', $data );
		$this->assign ( 'live_type', $data['live_type'] );
		$this->display ();
    }
    
    /**
     * Eduline直播首页方法
     * @return void
     */
    public function watch() {
    	$id = intval($_GET['id']);

		if(!$this->mid){
			$this->error('请先登录');
		}
		if (! $id) {
			$this->error ( '直播课程不存在' );
		}

		$info = M('zy_live')->where('id='.$id)->find(); 

    	if( $info['live_type'] == 1) {//展示互动
    		$map['live_id'] = $id;
    		$map['startDate']   = array('elt' , time() );
    		$map['invalidDate'] = array('egt' , time() );
			$res = M( 'zy_live_zshd' )->where ( $map)->order('startDate ASC')->find();
			$unmae = getUserName($this->mid);
			if( !$res ) {
				$this->error ( '直播未开始或已经结束' );
			}
			if( ($this->mid != $res['speaker_id']) && !is_admin($this->mid)){
				// 是否已购买
				$is_buy = M('zy_order_live')->where('live_id='.$id .' and uid='.$this->mid)->count();
				if($info['price'] > 0 && $is_buy <= 0){
					$this->error('请先购买');
				}
				if($res['startDate'] >= time()){
					$this->error ( '还未到直播时间' );
				}
				if($res['invalidDate'] <= time()){
					$this->error ( '直播已经结束' );
				}
			}
			$url = $res['studentJoinUrl']."?nickname=".$unmae."&token=".$res['studentToken'];
    	} else if($info['live_type'] == 2) {//三芒
    		
    	} else if($info['live_type'] == 3) {//光慧
    		$map['live_id'] = $id;
    		$map['beginTime'] = array('elt' , time()*1000 );
    		$map['endTime']   = array('egt' , time()*1000 );
    		$res = M('zy_live_gh')->where($map)->order('beginTime ASC')->find();
    		if( ($this->mid != $res['speaker_id']) && !is_admin($this->mid)){
    			// 是否已购买
    			$is_buy = M('zy_order_live')->where('live_id='.$id .' and uid='.$this->mid)->count();
	    		if($info['price'] > 0 && $is_buy <= 0){
	    			$this->error('请先购买');
	    		}
	    		if($res['beginTime'] / 1000 >= time()){
					$this->error ( '还未到直播时间' );
				}
				if($res['endTime'] / 1000 <= time()){
					$this->error ( '直播已经结束' );
				}
	    	}

    		$gh_config   =  model('Xdata')->get('live_AdminConfig:ghConfig');
    		if ( $res['endTime'] / 1000 >= time() ) {
    			$url = $gh_config['video_url'] . '/student/index.html?liveClassroomId='.$res['room_id'].'&customerType=taobao&customer=seition&sp=0';
    		} else {//直播结束
    			$url = $gh_config['video_url'] . '/playback/index.html?liveClassroomId='.$res['room_id'].'&customerType=taobao&customer=seition&sp=0';
    		}
    	}
    	$this->assign('url' , $url);
    	$this->display();
    }
    
    // 购买直播
    public function buyOperating() {
    	if ( !$this->mid ) {
    		$this->mzError ( '请先登录!' );
    	}
    	$id = intval ( $_POST ['id'] );
    	//取得课程
		$res = D('zy_live')->where('id='.$id)->find();

    	//找不到直播课程
    	if ( !$res ) {
    		$this->mzError ( '找不到直播课程' );
    	}

    	$learnc = D('ZyLearnc' , 'classroom' );
    	if (!$learnc->consume($this->mid ,$res['price'])) {
    		$this->mzError ( '余额不足!' ); //余额扣除失败，可能原因是余额不足
    	}
    	//订单数据
    	$data = array(
    			'uid'     => $this->mid,
    			'live_id' => $id,
    			'price'   => $res['price'],
    			'ctime'   => time(),
    	);
    	$id = M('zy_order_live')->add($data);
    	if ( !$id ) {
    		$this->mzError ( '购买失败!' );
    	}
    	//添加流水记录
    	$learnc->addFlow($this->mid, 0, $res['price'], '购买直播课程<'.$res['title'].'>', $id, 'zy_order_live');
    	// 记录购买的直播课程的ID
    	session ( 'mzbugvideoid', $id );
    	$this->mzSuccess ( '购买成功', 'selfhref' );
    }

	/**
	 * 教师/助教加入直播课堂-展示互动
	 */
	public function doLive_login(){
		$this->display();
	}

	/**
	 * 教师/助教加入直播课堂-展示互动
	 */
	public function live_teacher(){
		if($this->base_config['live_opt'] == 1) {
			if($_GET['id']){
				$map['id'] = intval($_GET['id']);
				$liveInfo  = M( 'zy_live_zshd' )->where ( $map )->find ();
				if($liveInfo['is_active'] == 0){
					$this->error('直播课堂还未审核成功，请等待审核');
				}
				$speaker = M('ZyTeacher')->where("id={$liveInfo['speaker']}")->field('id,name,inro')->find();
				$teacherJoinUrl = $liveInfo['teacherJoinUrl']."?nickname=".$speaker['name']."&token=".$liveInfo['teacherToken'];
			}else {
				$number = intval($_POST['number']);
				$token = intval($_POST['token']);

				if (empty($number)) {
					$this->error('课程编号不能为空');
				}
				if (!is_numeric($number)) {
					$this->error('课程编号必须为数字');
				}
				if (empty($token)) {
					$this->error('口令不能为空');
				}
				if (!is_numeric($token)) {
					$this->error('口令必须为数字');
				}

				$field = 'uname';
				$userInfo = model('User')->findUserInfo($this->mid, $field);

				//直播课堂信息  数据的格式化
				$map['is_del'] = 0;
				$map = array('number' => $number,);
				$map['invalidDate'] = array('gt', time());
				$liveInfo = M('live')->where($map)->find();

				if (!$liveInfo) {
					$this->error('课程编号不正确');
				}
				if ($token != $liveInfo['teacherToken']) {
					$this->error('口令不正确');
				}
				$teacherJoinUrl = $liveInfo['teacherJoinUrl'] . "?nickname=" . $userInfo['uname'] . "&token=" . $token;
			}
			//改变直播状态
			$data['is_live'] = 1;
			$pmap = array('number'=>$number);
			$is_live = M('live')->where($pmap)->save($data);

			$this->assign('teacherJoinUrl',$teacherJoinUrl);
		}
		$this->display();
	}
  
}

