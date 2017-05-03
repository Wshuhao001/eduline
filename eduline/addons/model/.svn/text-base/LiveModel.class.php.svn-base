<?php
/**
 * 直播模型 - 业务逻辑模型
 * @author zivss <guolee226@gmail.com>
 * @version TS3.0
 */
class LiveModel extends Model{
	protected $tableName = 'zy_live';

	/**
	 * 根据条件获取所有的直播课堂信息
	 * @param $limit
	 *        	结果集数目，默认为20
	 */
	public function getLiveInfo($limit,$order,$map){
		$data = $this->order($order)->where($map)->findPage($limit);
		return($data);
	}

	/**
	 * 根据条件查直播课堂信息
	 */
	public function findLiveAInfo($map,$field){
		$data = $this->where($map)->field($field)->find();
		return($data);
	}

    public function updateLiveInfo($map,$data){
        $data = $this->where($map)->save($data);
        return($data);
    }

    /**
     * 展示互动
     *————————————————————————————————————
	 * 根据条件获取所有的展示互动直播间信息
	 * @param $limit 分页
	 *        	结果集数目，默认为20
	 */
	public function getZshdLiveInfo($order,$limit,$map){
		$data = M('zy_live_zshd')->order($order)->where($map)->findPage($limit);
		return($data);
	}
	public function getZshdLiveRoomInfo($map,$field){
		$data = M('zy_live_zshd')->where($map)->find($field);
		return($data);
	}

	public function updateZshdLiveInfo($map,$data){
		$data = M('zy_live_zshd')->where($map)->save($data);
		return($data);
	}

    /**
     * 光慧
     *————————————————————————————————————
     * 根据条件获取所有的展示互动直播间信息
     * @param $limit 分页
     *        	结果集数目，默认为20
     */
    public function getGhLiveInfo($order,$map,$limit){
        $data = M('zy_live_gh')->order($order)->where($map)->findPage($limit);
        return($data);
    }

    public function updateGhLiveInfo($map,$data){
        $data = M('zy_live_gh')->where($map)->save($data);
        return($data);
    }
}