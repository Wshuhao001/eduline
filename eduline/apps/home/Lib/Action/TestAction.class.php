<?php
/**
 * 测试控制器
 * @author jason <yangjs17@yeah.net> 
 * @version TS3.0
 */
class TestAction extends Action {


	public function index() {
		$res = M('zz')->field('test_id,year')->select();
		foreach($res as &$val){
			$data['year'] = trim($val['year'] ,'}' );
			$map['test_id'] = $val['test_id'];
dump($data);
			M('zz')->where($map)->save($data);
			echo M()->getLastSql();
		}
	}

	public function aa(){
		$res = M('zz')->field('test_id,date')->select();
		foreach($res as &$val){
			$date = explode(':', $val['date']);
			$date = $date[2];

			$data['date'] = date('Y-m-d', trim($date ,'}' ) / 1000 );
			$map['test_id'] = $val['test_id'];
			M('zz')->where($map)->save($data);
			echo M()->getLastSql();
		}
	}

	public function stu(){
		$res = M('zz')->field('stu_id')->select();
		foreach($res as &$val){
			$map['stu_id'] = $val['stu_id'];
			$info = M('student')->where($map)->field('class_id,admin_id')->find();

			$data['class_id'] = $info['class_id'];
			$data['admin_id'] = $info['admin_id'];
			M('zz')->where($map)->save($data);
			echo M()->getLastSql();
		}
	}
	
}	           
