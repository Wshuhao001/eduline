<?php
/**
 * @name 直播模型
 * @version 1.0
 */
class ZyLiveModel extends Model{
	protected $tableName = 'zy_live';
    public $mid = 0;
    protected $is_buy_lives = [];
    
    /**
     * @name 获取列表
     * @param array $map 查询列表条件
     * @param string $order 排序方式
     * @param int $limit 分页数量
     */
    public function getList(array $map,$order = 'ctime desc', $limit){
        $data = $this->where($map)->order($order)->limit($limit)->select();
        if($data){
            $data = $this->haddleData($data);
        }
        return $data;
    }
    /**
     * @name 数据解析
     * @param array $data 初始数据
     * @param boolean $has_user_info 是否需要获取用户信息
     * @return array 解析后的数据
     */
    protected function haddleData($data = array(),$has_user_info = true){
        if(!is_array($data) || empty($data)){
            return [];
        }
        $_category = M('zy_live_category');
        foreach($data as &$v){
            $v['cover'] = getCover($v['cover'] , 280 , 160);
            $has_user_info && $v['user'] = model('User')->getUserInfoByUids($v['uid'])[$v['uid']];
            $v['live_id'] = (int)$v['id'];
            $v['score'] = (int)$v['score'];
            $v['live_category'] = $_category->where(['zy_live_category_id'=>$v['cate_id']])->getField('title');
            // 是否已购买
            $is_buy = $this->is_free($v['live_id']) || M('zy_order_live')->where('live_id='.$v['live_id'] .' and uid='.$this->mid)->count() > 0;
            $v['is_buy'] = $is_buy ? 1 : 0;
            $v['iscollect'] = D ( 'ZyCollection' ,'classroom')->isCollect ( $v ['live_id'], 'zy_live', intval ( $this->mid ) );
            $v['order_count'] = M('zy_order_live')->where('live_id='.$v['id'])->count();
            $v['teacher_id'] = M( 'zy_live_gh' )->where ( 'live_id='.$v['id'] )->order('beginTime ASC')->getField('speaker_id');
            $v['beginTime'] = floor($v['beginTime'] / 1000);
            $v['endTime'] = floor($v['endTime'] / 1000);
            unset($v['id'],$v['cate_id'],$v['uid']);
        }
        return $data;
    }
    /**
     * @name 获取单个直播课程的详情
     * @param int $live_id 直播课程ID
     * @param boolean $has_user_info 是否需要获取用户
     * @return array 数据信息
     */
    public function getLiveInfoById($live_id = 0,$has_user_info = false){
        $data = [];
        if($live_id){
            $info[0] = $this->where(['id'=>$live_id,'is_del'=>0])->find();
            if($info){
                $data = $this->haddleData($info,$has_user_info)[0];
                $data['sections'] = $this->getSections($live_id);
            }
        }
        return $data;
    }
    /**
     * @name 获取指定直播课程的课程章节信息
     * @param int $live_id 直播课程ID
     * @param int $pid 课程章节父ID  default:0 表示获取所有的章节列表
     * @return array 课程章节列表
     */
    public function getSections($live_id = 0 ,$pid = 0){
        $info = M('zy_live')->where('id='.$live_id)->find();
        if($info['live_type'] == 1) {//展视互动
            $map['live_id']   = $info['id'];
            $map['is_del']    = 0;
            $map['is_active'] = 1;
            $data = M('zy_live_zshd')->where($map)->findAll();
            foreach($data as &$val) {
                $val['title'] = $val['subject'];
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
        }
        return $data ? : [];
    }
    /**
     * @name 获取直播课程分类
     * @param int $pid 直播课程分类父ID
     * @return array 分类数据
     */
    public function getCategoryList($pid = 0){
        $data = M('zy_live_category')->where('pid='.$pid)->field(['title','zy_live_category_id'])->order('sort ASC')->select();
        if($data){
            foreach($data as &$v){
                $childs = $this->getCategoryList($v['zy_live_category_id']);
                if($childs){
                    $v['childs'] = $childs;
                }
            }
        }
        return $data ?:[];
    }
    /**
     * @name 根据直播课程章节ID获取直播播放地址信息
     * @param int | string $section_id 直播课程章节ID
     * @return array 播放地址列表数据
     */
    public function getLiveUrlBySectionId($section_id = 0){
        $data = M('zy_live_section')->where(['zy_live_section_id'=>$section_id])->find();
        if($data){
            //获取当前章节的播放地址
            $url = $this->getLiveUrlBySectionData($data);
            if(!$url) return false;
            //$data['live_url'] = $url;
        }
        return $url ?:'';
    }
    /**
     * @name 获取所有章节的直播地址 -- 暂时弃用
     */
    public function getSectionsUrl($sections = []){
        $data = [];
        if(is_array($sections) && !empty($sections)){
            foreach($sections as $v){
                if(isset($v['child_sections'])){
                    $urls = $this->getSectionsUrl($v['child_sections']);
                    $urls && $data['child_sections_url'] = $urls;
                    continue;
                }
                $data[] = ['section_id'=>(int)$v['zy_live_section_id'],'live_url'=>$url];
            }
        }
        return $data;
    }
    /**
     * @name 检测指定直播课程是否为免费课程
     */
    public function is_free($live_id = 0){
        return $this->where(['id'=>$live_id])->getField('price') > 0 ? false : true;
    }
    /**
     * @name 分析单个章节数据并获取直播地址
     * @param 单个章节的数据信息
     * @return string $url 地址
     */
    private function getLiveUrlBySectionData($data = []){
        //type: 1= zy_live_zshd 3:zy_live_gh
        $url = '';
        if($data['type'] == 1){
            $res = M( 'zy_live_zshd' )->where ( 'id='. $data['room_id'])->find ();
            //如果当前直播课程ID 不在 当前模型下已经购买的课程里
            $uname = '学生_'.rand(11111,99999);
            if(!in_array($data['lid'],$this->is_buy_lives)){
                $tid = M('ZyTeacher')->where("uid=".$this->mid)->getField('id');
                //当前请求的用户不是演讲者
    			if($tid != $res['speaker']){
    			     // 是否免费 ,是否已购买
    				$is_buy = $this->is_free($data['lid']) || M('zy_order_live')->where('live_id='.$data['lid'] .' and uid='.$this->mid)->count() > 0 ;
    				if(!$is_buy){
    					$this->error = '请先购买';
                        return false;
    				}
                    array_push($this->is_buy_lives,$data['lid']);
    				if($res['startDate'] >= time()){
    					$this->error = '还未到直播时间';
                        return false;
    				}
    				if($res['invalidDate'] <= time()){
    					$this->error = '直播已经结束';
                        return false;
    				}
    				$field = 'uname';
    				$userInfo = model('User')->findUserInfo($this->mid,$field);
    				$uname = $userInfo['uname'];
    			}
            }
			$url = $res['studentJoinUrl']."?nickname=".$uname."&token=".$res['studentToken'];
        }elseif($data['type'] == 3){
            $res = M('zy_live_gh')->where('id=' . $data['room_id'])->find();
            if(!in_array($data['lid'],$this->is_buy_lives)){
        		// 是否已购买
        		$is_buy = $this->is_free($data['lid']) || M('zy_order_live')->where('live_id='.$data['lid'] .' and uid='.$this->mid)->count() > 0;
        		if(!$is_buy){
        			$this->error = '请先购买';
                    return false;
        		}
        		array_push($this->is_buy_lives,$data['lid']);
            }
    		$gh_config   =  model('Xdata')->get('live_AdminConfig:ghConfig');
    		if ( $res['endTime'] / 1000 >= time() ) {
    			$url = $gh_config['video_url'] . '/student/index.html?liveClassroomId='.$res['room_id'].'&customerType=taobao&customer=seition&sp=0';
    		} else {//直播结束
    			$url = $gh_config['video_url'] . '/playback/index.html?liveClassroomId='.$res['room_id'].'&customerType=taobao&customer=seition&sp=0';
    		}
        }
        return $url;
    }
    /**
     * @name 获取章节子分类
     */
    private function getSubSections($pid = 0){
        $data = M('zy_live_section')->where(['pid'=>$pid])->field(['zy_live_section_id'])->select();
        if(!empty($data)){
            foreach($data as &$v){
                $subSections = $this->getSections($v['zy_live_section_id']);
                $subSections && $v['child_sections'] = $subSections;
            }
        }
        return $data;
    }
    /**
     * @name 获取指定直播课程指定用户可以使用的优惠券
     */
    public function getCanuseCouponList($live_id = 0){
        if($live_id){
            $price = $this->where(['id'=>$live_id])->getField('price');
            $coupons = model('Coupon')->getCanuseCouponList($this->mid,1,'AND c.use_type = 2');
            if($coupons){
                //过滤全额抵消的优惠券
                foreach($coupons as $k=>$v){
                    if($price - $v['price'] <= 0){
                        unset($coupons[$k]);
                    }
                }
            }
        }
        return $coupons ?:[];
    }
    
    /**
     * @name 购买直播课程
     */
    public function buyLive($live_id = 0,$coupon_id = 0){
        //检测是否已经购买
        if($this->is_buy($live_id)){
            $this->error = '你已购过买该直播课程,无需重复购买';
            return false;
        }
        //是否免费
        if($this->is_free($live_id)){
            return $this->addBuyLive($live_id);
        }
        //获取直播课程信息
        $live_info = $this->where(['id'=>$live_id])->find();
        $pay_price = $live_info['price'];
        //是否使用了优惠券
        if((int)$coupon_id > 0){
            //执行使用优惠券,并返回差价
            $pay_price = $this->useCoupon($coupon_id,$live_info);
            if($pay_price === false){
                return false;
            }
        }
        //扣除余额
        $learnc = D('ZyLearnc' , 'classroom' );
    	if (!$learnc->consume($this->mid ,$pay_price)) {
    		$this->error = '余额不足';
            return false;
    	}
        //添加流水记录
    	$learnc->addFlow($this->mid, 0, $pay_price, '购买直播课程<'.$live_info['title'].'>', $live_id, 'zy_order_live');
        $this->addBuyLive($live_id,$pay_price);
        return true;
    }
    /**
     * @name 检测某用户是否已经购买了直播课程
     */
    public function is_buy($live_id = 0){
        return M('zy_order_live')->where('live_id='.$live_id .' and uid='.$this->mid)->count() > 0 ? true : false;
    }
    /**
     * @name 添加购买直播课程
     */
    private function addBuyLive($live_id = 0,$price = '0.00'){
        //订单数据
        $data = array(
            'uid'     => $this->mid,
            'live_id' => $live_id,
            'price'   => $price,
            'ctime'   => time(),
        );
        if (!$id = M('zy_order_live')->add($data) ) {
            $this->error = '购买失败,请重新尝试';
            return false;
        }
        return $id;		
    }
    /**
     * @name 使用优惠券
     */
    private function useCoupon($coupon_id,$live){
        if($coupon_id && $live['price']){
            //检测优惠券是否可以使用
            $coupon = model('Coupon')->canUse($coupon_id,$this->mid);
            if(!$coupon){
                $this->error = '该优惠券已经无法使用';
                return false;
            }
            //优惠券类型是否符合
            if($coupon['type'] !=1 || $coupon['use_type'] != 2){
                $this->error = '该优惠券不能用于购买直播课程';
                return false;
            }
            //金额检测
            if($live['price'] - $coupon['price'] <= 0){
                $this->error = '已超过最高优惠价格,不能使用优惠券';
                return false;
            }
            //使用优惠券
            if(M('coupon_user')->where(['id'=>$coupon_id])->setField('status',1)){
                return round($live['price']-$coupon['price'],2);
            }
        }
        $this->error = '使用优惠券失败,请重新尝试';
        return false;
    }
    
    /**
     * @name 获取我购买的直播课程列表
     */
    public function getMyLiveList($map,$limit){
        $data = $this->where($map)->join("as d INNER JOIN `".C('DB_PREFIX')."zy_order_live` o ON o.live_id = d.id AND o.uid = ".$this->mid)->field('d.*,o.id as oid')->limit($limit)->select();
        if($data){
            $data = $this->haddleData($data);
        }
        return $data;
    }
}