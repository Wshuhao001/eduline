<?php
tsload(APPS_PATH . '/classroom/Lib/Action/CommonAction.class.php');
class NewsAction extends CommonAction
{
	
	public function index() {
        $cate_name_one = M('zy_topic')->where(array('zy_topic_category_id'=>$_GET['cate']))->getField('title');
		$cate = model('Topics')->getCate(0);
		$_GET['cate'] = $_GET['cate'] ? $_GET['cate'] : 0;
		$data = model('Topics')->getTopic($_GET['type'],$_GET['cate']);
        $this->assign('cate_name_one',$cate_name_one);
        $this->assign('ad_list',$ad_list);
        $this->assign('cate',$cate);
        $this->assign('topic_data',$data);
        $this->display();
	}
	
	public function getTopicList(){
        $_GET['cate'] = $_GET['cate'] ? $_GET['cate'] : 0;
        $data = model('Topics')->getTopic($_GET['type'],$_GET['cate']);
        $this->assign('topic_data',$data);
	    $html = $this->fetch('ajax_topic');
	    $data['data']=$html;
	    exit( json_encode($data) );
	}



	public function view(){
	    $id = $_GET['id'] ? intval($_GET['id']) : $this->error('参数错误');
		$data = model ('Topics')->getOnedata($id);
        $data['uname'] = M('user') ->where('uid ='.$data['uid'])->getField('uname');
        //推荐阅读
        $map['id'] = array('neq',$id);
        $recData = M('zy_topic')->where($map)->order('readcount desc')->field('id,title,image')->limit(5)->select();

		if(!$data['id']){
			$this->error('不存在的数据');
		}
        //阅读量+1
        model ('Topics')->addread($id);

        //获取上一篇
        $down = model ('Topics')->downPage ($id);
        $up = model ('Topics')->where('id<'.$id.'')->order('dateline DESC ')->find();

        if($data['from'] == '0' || $data['from'] == "")
        {
            $data['from'] = "未知";
        }
        $collect['source_table_name'] = "zy_topic";
        $collect['source_id'] = $id;
        $mid = $this -> mid;
        $collect['uid'] = $mid;

         $collect = M('zy_collection') -> where($collect)->getField('collection_id');
        $collectcount['source_table_name'] = "zy_topic";
        $collectcount['source_id'] = $id;
        $video_collect_count = M('zy_collection') -> where($collectcount)->count();
        $this->assign('lid',$id);
        $this->assign('mid',$mid);
        $this->assign('collect',$collect);
        $this->assign('video_collect_count',$video_collect_count);
        $this->assign('down',$down);
        $this->assign('up',$up);
        $this->assign('data',$data);
        $this->assign('down',$down);
        $this->assign('up',$up);
        $this->assign('recData',$recData);
        $this->display();
	}
	
}