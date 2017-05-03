<?php
/**
 * @name 直播API
 */

class LiveApi extends Api{
    protected $mod = '';//当前操作的模型
    /**
     * 初始化模型
     */
    public function _initialize() {
        //$this->mod 	 = D('ZyGoods','classroom');
        $this->mod = model('ZyLive');
        $this->mod->mid = $this->mid;
    }
    /**
     * @name 获取直播分类
     */
    public function getLiveCategoryList(){
        $cate_id = (int)$this->cate_id ?:0;
        $list = $this->mod->getCategoryList($cate_id);
        $list ? $this->exitJson($list,1) : $this->exitJson([],0,'暂时没有直播分类');
    }
    /**
     * @name 获取直播课程列表
     */ 
    public function getLiveList(){
        $map = [];
        $this->cate_id && $map['cate_id'] = intval($this->cate_id);
        $this->keyword && $map['title'] = array('like','%'.h($this->keyword).'%');
        $map['is_del'] = 0;
        $data = $this->mod->getList($map,'beginTime desc', $this->_limit());
    
        $data ? $this->exitJson($data,1) : $this->exitJson((object)[],1,'暂时没有更多直播课程');
        
    }
    /**
     * @name 获取直播课程详情
     * @param int live_id 直播课程ID
     * @param int has_user_info 是否需要获取用户信息  1:是 0；否 default:0
     */
    public function getDetail(){
        $info = [];
        if((int)$this->live_id){
            $has_user_info = $this->has_user_info == 1 ? true : false;
            $info = $this->mod->getLiveInfoById($this->live_id,$has_user_info);
        }
        $info ? $this->exitJson($info,1) : $this->exitJson((object)[],0,'未能查询到直播信息');
    }
    /**
     * @name 获取直播地址
     * @param int section_id 直播课程的章节编号ID
     */
    public function getLiveUrl(){
        $data = [];
        if((int)$this->section_id){
            $url = $this->mod->getLiveUrlBySectionId($this->section_id);
            $url ? $this->exitJson(['live_url'=>$url],1) : $this->exitJson((object)[],0,$this->mod->getError());
        }
        $this->exitJson((object)[],0,'未能查询到直播信息');
    }
    /**
     * @name 获取指定用户可使用的优惠券
     */
    public function getCanUseCouponList(){
        $list = $this->mod->getCanuseCouponList($this->live_id);
        $list ? $this->exitJson($list,1) : $this->exitJson((object)[],0,'没有可用优惠券');
    }
    /**
     * @name 购买直播课程
     */
    public function buyOperating(){
        $this->coupon_id = (int)$this->coupon_id ?:0;
        if($this->mod->buyLive($this->live_id,$this->coupon_id)){
            $this->exitJson(['live_id'=>(int)$this->live_id],1,'购买成功');
        }
        $this->exitJson((object)[],0,$this->mod->getError());
    }
    /**
     * @name 获取我购买的直播课程
     */
    public function getMyLiveList(){
        $this->cate_id && $map['cate_id'] = intval($this->cate_id);
        $this->keyword && $map['title'] = array('like','%'.h($this->keyword).'%');
        $data = $this->mod->getMyLiveList($map,$this->_limit());

        $data ? $this->exitJson($data,1) : $this->exitJson((object)[],1,'暂时没有更多直播课程');
    }

    // 我收藏的课程
    public function getCollectLiveList(){
        $uid        = intval($this->mid);
        //拼接两个表名
        $vtablename = C('DB_PREFIX').'zy_live';
        $ctablename = C('DB_PREFIX').'zy_collection';
        
        $fields     = '';
        $fields .= "{$ctablename}.`uid`,{$ctablename}.`collection_id` as `cid`,";
        
        $fields .="{$vtablename}.*";
        //拼接条件
        $where      = "{$ctablename}.`source_table_name`='zy_live' and {$ctablename}.`uid`={$uid}";
        //取数据
        $data = M('ZyCollection')->join("{$vtablename} on {$ctablename}.`source_id`={$vtablename}.`id`")->where($where)->field($fields)->limit($this->_limit())->select();
        //循环计算课程价格
        foreach($data as &$val){
            $val['live_id'] = $val['id'];
            $val['cover']   = getCover($val['cover']  , 280 , 160);
        }
        $data ? $this->exitJson($data,1) : $this->exitJson((object)[],1,'你还没有收藏任何直播课程');
    }


}