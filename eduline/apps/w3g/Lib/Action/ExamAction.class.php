<?php
/**
 * 首页模块控制器
 * @author dengjb <dengjiebin@higher-edu.cn>
 * @version GJW2.0
 */
tsload(APPS_PATH . '/classroom/Lib/Action/CommonAction.class.php');
class ExamAction extends CommonAction
{
	//初始化
	public function _initialize() { 

	}
	public function index() {
		$tp = C('DB_PREFIX');
        $str='<img class="tkimg" alt="2000" /><img class="tkimg" alt="20" /><img class="tkimg" alt="2" />';
        if(preg_match_all("/<[a-z]+ [a-z]+=\"[a-z]+\" [a-z]+=\"[0-9]+\" \/>/",$str,$match)) { 
        }
        $result = M('')->query('SELECT `exam_category_id`,`exam_category_name` FROM '.$tp.'ex_exam_category ORDER BY exam_category_insert_date');
        $data=D("ExUserExam","exam")->getUserExamList($this->mid);
        $this->assign('selCate',$result);
        $this->assign('data',$data);
        $this->display();
	}	
	public function exam(){
        $tp = C('DB_PREFIX');
        $exam_id=intval($_GET["id"]);
        if($exam_id==0){
            $this->error('参数错误');
        }
        $paper_id  = M("ex_exam")->where("exam_id=".$exam_id)->getField('paper_id');
        $exam_info = D('ExExam','exam')->getExam($exam_id,$paper_id);
        if($exam_info['exam_begin_time'] > time() || $exam_info['exam_end_time'] < time() ){
            $this->error('考试未开始或已经结束');
        }
        $user_exam_time= D("ExUserExam" ,'exam')->getUserExam($exam_id,$this->uid);
        if($user_exam_time>=$exam_info["exam_times_mode"] &&  $exam_info["exam_times_mode"] != 0){
            if( $exam_info['exam_publish_result_tm_mode'] == 0 || ($exam_info['exam_publish_result_tm_mode'] == 1 && $exam_info['exam_publish_result_tm'] <= time() ) ) {
                //$this->assign('jumpUrl' , U('exam/UserExam/exam_info',array('exam_id'=>$exam_id,'paper_id'=>$paper_id)));
                $this->error('你已经参加过此次考试了');
            }
            $this->error('你已经参加过此次考试了<br/>答案将在'.date('Y-m-d H:i' , $exam_info['exam_publish_result_tm']).'公布');
        }
        $data=M('ExPaper','exam')->getPaper($paper_id);
        if(!$data){
            $this->error('该试卷暂未抽选出题!');
        }
        $question_type=M('')->query('SELECT question_type_id,question_type_title,COUNT(paper_content_paperid) AS sum, Sum(paper_content_point) as score FROM '.$tp.'ex_paper_content pc,'.$tp.'ex_question q,'.$tp.'ex_question_type qt WHERE pc.paper_content_questionid=q.question_id AND q.question_type=qt.question_type_id AND pc.paper_content_paperid='.$paper_id.' GROUP  BY question_type_id');
        $this->assign('exam_info',$exam_info);
        $this->assign('data',$data);
        $this->assign('exam_id',$exam_id);
        $this->assign('subscript',array("A","B","C","D","E","F","G","H","I","J","K"));
        $this->assign('question_type',$question_type);
        $this->assign('begin_time',time());
        $this->assign('sum',count($data["question_list"]));
         $this->display();
    }
	/**
     * 取得考试分类
     * @param boolean $return 是否返回数据，如果不是返回，则会直接输出Ajax JSON数据
     * @return void|array
     */
    public function getList($return = false) {
        $tp = C('DB_PREFIX');
        //排序
        $order = 'sort asc';
        $time = time();
        $where="";
        $cateId=$_GET["cateId"];
        if ($cateId> 0) {
            $where= " exam_categoryid=$cateId and";
        }
        $where .= " exam_is_del=0 AND exam_status=1 ";
        $data = M("ex_exam_category ec")->join("`{$tp}ex_exam` e ON ec.exam_category_id=e.exam_categoryid")->where($where)->order($order)->findPage(10);
        foreach ($data['data'] as $key=> $vo) {
            $data['data'][$key]["exam_begin_time"]=date("Y-m-d H:i:s",$vo["exam_begin_time"]);
            $data['data'][$key]["exam_end_time"]=date("Y-m-d H:i:s",$vo["exam_end_time"]);
            if($vo["exam_total_time"]==0){
                $data['data'][$key]["exam_total_time"]="不限制时长";
            }else{
                $data['data'][$key]["exam_total_time"]=$vo["exam_total_time"]."分钟";
            }
        }
        if ($data['data']) {
            $this->assign('listData', $data['data']);
            $this->assign('where', $where);
            $this->assign('cateId',$_GET['cateId']);//定义分类
            $html = $this->fetch('index_list');
        } else {
            $html = $this->fetch('index_list');
        }
        $data['data'] = $html;
        if ($return) {
            return $data;
        } else {
            echo json_encode($data);
            exit();
        }
    }

	public function exam_info(){
        $user_id=$this->uid;
        $exam_id=intval($_GET["exam_id"]);
        $paper_id=intval($_GET["paper_id"]);
        $user_exam_number=intval($_GET["user_exam_number"]);
        $user_exam=D("ExUserExam","exam")->getUserExamCount($exam_id,$paper_id,$user_id,$user_exam_number);
        $where=array(
            'user_id'=>$user_id,
            'user_exam_id'=>$exam_id,
            'user_paper_id'=>$paper_id,
            'user_exam_time'=>$user_exam["user_exam_number"]
            );
        $user_answer=M("ex_user_answer")->where($where)->field('user_question_answer,user_question_id')->select();
        $exam_info=D('ExExam',"exam")->getExam($exam_id,$paper_id);
        $question_type=M('')->query('SELECT question_type_id,question_type_title,COUNT(paper_content_paperid) AS sum, Sum(paper_content_point) as score FROM '.C('DB_PREFIX').'ex_paper_content pc,'.C('DB_PREFIX').'ex_question q,'.C('DB_PREFIX').'ex_question_type qt WHERE pc.paper_content_questionid=q.question_id AND q.question_type=qt.question_type_id AND pc.paper_content_paperid='.$paper_id.' GROUP  BY question_type_id');
        $data=M('ExPaper',"exam")->getPaper($paper_id);
        
        
        //考试排名
        $my['uname'] = getUserName($this->mid);
        $user_rank = M('ex_user_exam')->where('user_exam='.$exam_id)->field('user_id , user_exam_score')->order('user_exam_score desc')->limit(10000)->findAll();
        $iscore = 0;
        foreach ( $user_rank as &$val ) {
            $iscore ++;
            $val['user_id'] == $this->mid && $rank = $iscore;
            $val['rank'] = ( string ) $iscore;
            $val['uname'] = getUserName($val['user_id']);
        }
        empty ( $rank ) && $rank = 10000; // 一万名后不再作排名，以提高性能
        
        $my['rank']  = $rank;
        $my['lists'] = $user_rank;

        $this->assign('user_exam',$user_exam);
        $this->assign('my',$my);
        $this->assign('exam_info',$exam_info);
        $this->assign('user_answer',$user_answer);
        $this->assign('data',$data);
        $this->assign('subscript',array("A","B","C","D","E","F","G","H","I","J","K"));
        $this->assign('question_type',$question_type);
        $this->display();
    }
}