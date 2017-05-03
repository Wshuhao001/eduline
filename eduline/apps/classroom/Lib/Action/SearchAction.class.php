<?php
/**
 * 云课堂搜索模块
 * Created by Ashang.
 * Email: ashangmanage@phpzsm.com
 * Date: 14-10-21
 * Time: 下午2:50
 */

class SearchAction extends Action{
    protected $pagesize=null;//分页大小
    protected $key=null;//搜索内容
    protected $tagid=null;
    protected $video_where=null;//课程搜索条件
    protected $wenda_where=null;//问答搜索条件
    protected $wdvideo_where=null;//课程问答搜索条件
    public function _initialize(){
        $this->key=trim(t($_GET['searchkey']));//获取搜索的内容

        //获取问答分类
        $wenda_cate = M('zy_wenda_category')->findAll();
        foreach($wenda_cate as &$val){
            $this->wenda_where = array(
                'wd_description'=>array("like","%$this->key%"),
                'type'=>$val['zy_wenda_category_id'],
                'is_del'=>0
            );
            $val['count'] = M('zy_wenda')->where($this->wenda_where)->count();
        }
            
        //课程查询条件
        $this->video_where=array(
            'video_title'=>array("like","%$this->key%"),
            'video_intro'=>array("like","%$this->key%"),
            'is_del'=>0
        );
        //开始统计课程数量
        $video_count=D("ZyVideo")->where($this->video_where)->count();

        $this->assign("searchkey",$this->key);//搜索内容
        $this->assign("video_count",$video_count);//课程数量
        $this->assign("wenda_cate",$wenda_cate);

    }
    /**
     * 课程搜索结果
     */
    public function index(){

     //课程查询条件
     $videolist=D("ZyVideo")->where($this->video_where)->findPage($this->pagesize);
     //循环计算课程的价格

     foreach($videolist as $val){
         $val['t_price']=getPrice($val,$this->mid);
         $val['video_score']=$val['video_score']/20;
     }
    /* dump($videolist);
     die();*/
     $this->assign("data",$videolist);
     $this->display();
    }

    /**
     * 问答搜索结果
     */

    public function wenda(){
        $type=intval($_GET['type']);//获取问答类型
        $this->wenda_where['type']=$type;
        $wendalist=D('ZyWenda')->where( $this->wenda_where)->findPage($this->pagesize);
        foreach($wendalist['data'] as &$val){
            $val['ctime']=getDateDiffer($val['ctime']);//格式化时间数据
            $val['tags']=D('ZyWenda','wenda')->getWendaTags($val['tag_id']);//取出问答的标签
            $val['wd_comment']=D('ZyWendaComment','wenda')->getNowWenda($val['id'],1);//取最新的一条评论
        }
       /* dump($wendalist);
        die();*/
        $this->assign("data",$wendalist);
        $this->display("index");

    }

    /**
     *课程问答搜索
     */
    public function videowd(){
        $videowd_list=D('ZyQuestion')->where($this->wdvideo_where)->findPage($this->pagesize);
        //格式化数据
        foreach($videowd_list['data'] as &$val){
            $val['ctime']=getDateDiffer($val['ctime']);//格式化时间数据
            if($val['type']==1){
                $tablename="ZyVideo";
                $val['href']=U('classroom/Video/view',array('id'=>$val['oid']));//生成来源url
            }else{
                $tablename="ZyAlbum";
                $val['href']=U('classroom/Album/view',array('id'=>$val['oid']));//生成来源url
            }
            $map['id']=$val['oid'];
            $val['videoinfo']=M($tablename)->where($map)->find();

            if($val['type']==1){
                $val['video_title']= $val['videoinfo']['video_title'];
            }else{
                $val['video_title']= $val['videoinfo']['album_title'];
            }
        }
        $this->assign("data",$videowd_list);
        $this->display("index");
    }


}


?>