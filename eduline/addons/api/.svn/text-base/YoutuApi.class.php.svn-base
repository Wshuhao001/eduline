<?php
//加载httpful
require implode(DIRECTORY_SEPARATOR, array(SITE_PATH,'server', 'Youtu','include.php'));
use TencentYoutuyun\Youtu;
use TencentYoutuyun\Conf;

class YoutuApi extends Api
{

    /**
     * 配置
     */
    private $conf;
    
    /**
     * 初始化方法
     */
    protected function _initialize(){
        //获取配置信息
        $this->conf = unserialize(M('system_data')->where(['key'=>'youtu','list'=>'admin_Config'])->getField('value'));
        //调用配置方法
        Conf::setAppInfo($this->conf['appid'], $this->conf['secretId'], $this->conf['secretKey'], $this->conf['userid'],conf::API_YOUTU_END_POINT );
        return $this;
    }

    /**
     * 创建个体（注册）
     * faceimg 加密图片
     * uid     用户ID
     */
    public function newperson(){
        //接收参数
        $pic = $_POST['faceimg'];
        $uid = intval($_POST['uid']);
        //判断用户信息
        if(!$uid){
            $this->exitJson(['找不到用户信息，请重新登录'],4000);

        }
//            $data = M('user')->getUserInfo($uid);
//            $uname = $data['uname'];
//            $data['face_id'] = saveFaceImage($pic);
//            $re = M('user')->where(['uid'=>$uid])->save($data);
//            $this->exitJson($re);
            // 使用本地图片
        $uploadRet = YouTu::newpersonbase64($pic, "$uid", ["200"]);
        $data['face_id'] = $uploadRet['face_id'];
        if($uploadRet['face_id'] == 0){
            $this->exitJson(['null'],4005);
        }
        M('user')->where(['uid'=>$uid])->save($data);
        Log::write("$uploadRet");//日志记录
            // 使用远程图片
            //$url = getAttachUrlByAttachId($attach);
            //$uploadRet = YouTu::newpersonurl(SITE_PATH.$url, '1', ['uname']);
            //$uploadRet = YouTu::newpersonurl('http://fun.youth.cn/yl24xs/201702/W020170227510976500117.png', '2', ['username']);
            //var_dump($uploadRet);exit;
        $this->exitJson($uploadRet);
    }
    
    /**
     * 添加人脸(用户成功创建,其后在添加更多的人脸)
     */
    public function addFace(){
        // 假设均为人脸链接
        $face_arr = [
           $this->attach_ids,
        ];
        // 通过添加链接方式添加
        $uploadRet = YouTu::addfaceurl('1',$face_arr);
        var_dump($uploadRet);exit;
    }
    
    /**
     * 获取应用下的分组列表
     * @param string group_id 分组ID
     */
    public function getPersonListByAppId(){
        $app_id = t($this->app_id);
        if(!$app_id){
            // 选择分组
            $this->exitJson([],0,'请选择应用');
        }
        $list = YouTu::getgroupids($app_id);
        
        $this->exitJson($list['group_ids'],1);
    }
    
    /**
     * 获取成员列表(个体列表)
     * @param string group_id 分组ID
     */
    public function getPersonListByGroupId(){
        $group_id = t($this->group_id);
        if(!$group_id){
            // 选择分组
            $this->exitJson([],0,'请选择分组');
        }
        $list = YouTu::getpersonIds($group_id);
        
        $this->exitJson($list['person_ids'],1);
    }
    /**
     * 获取人脸列表
     * @param string person_id 个体ID
     */
    public function getFaceListByPersonId(){
        $person_id = t($this->person_id);
        if(!$person_id){
            // 选择个体
            $this->exitJson([],0,'请选择人物');
        }
        //获取列表
        $list = YouTu::getfaceIds($person_id);
        
        $this->exitJson($list['face_ids'],1);
    }
    
    /**
     * 获取个人的信息
     * @param string person_id 个体ID
     */
    public function getPersonInfoById(){
        $person_id = t($this->person_id);
        if(!$person_id){
            // 选择个体
            $this->exitJson([],0,'请选择人物');
        }
        //获取信息
        $info = YouTu::getinfo($person_id);
        $data = [
            'person_id' => $info['person_id'],
            'person_name' => $info['person_name'],
            'tag'         => $info['tag'],
            'face_ids'    => $info['face_ids'],
            'group_ids'   => $info['group_ids'],
            'session_id'  => $info['session_id']
        ];
        $this->exitJson($data,1);
    }
    
    /**
     * 人脸匹配
     * @param string face_url 需要匹配的人脸URL
     * @param string group_id 分组ID
     */
    public function getFaceidentify(){
        $face_url = $this->face_url;
        $group_id = t($this->group_id);
        if(!$face_url || !$group_id){
            // 选择分组和设置需要匹配的图片
            $this->exitJson([],0,'请指定需要匹配的人脸和所属小组');
        }
        $info = YouTu::faceidentifyurl($face_url,$group_id);
        $data = [
            'session_id' => $info['session_id'],
            'candidates' => $info['candidates']
        ];
        $this->exitJson($data,1);
    }
    
    /**
     * 人脸验证(用于用户扫描登录)
     * @param string faceimg 加密图片
     * @param int  uid 用户ID
     */
    public function faceverify(){
        //接收参数
        $pic = $_POST['faceimg'];
        $uid = intval($_POST['uid']);
        //判断用户信息
        if(!$uid) {
            $this->exitJson(['找不到用户信息，请重新登录'],4000) ;
        }
//            $data  = M('user')->getUserInfo($uid);
            // 使用本地图片
            $uploadRet = YouTu::faceverifybase64($pic, "$uid");
//            $uploadRet = Youtu::delperson($data['uid']);
            // 使用远程图片
            //$url = getAttachUrlByAttachId($attach);
            //$uploadRet = YouTu::newpersonurl(SITE_PATH.$url, '1', ['uname']);
            //$uploadRet = YouTu::newpersonurl('http://fun.youth.cn/yl24xs/201702/W020170227510976500117.png', '2', ['username']);
        $this->exitJson($uploadRet);
    }

    /**
     * 获取系统时间
     */
    public function getTime()
    {
        $time = base64_encode(time());
        $this->exitJson($time);
    }

    /**
     * @param $uid      用户id
     * @param $vid      视频id
     * @param $sid      课时id
     * @param $time 当前视频播放时间
     */
    public function videoplayTime()
    {
        //获取参数
        $uid = intval($_POST['uid']);
        $vid = intval($_POST['vid']);
        $sid = intval($_POST['sid']);
        $time = intval($_POST['playtime']);
        Log::write("$uid-$vid-$sid-$time");
//        $uid=1;
//        $vid=334;
//        $sid=5;
//        $playtime=time();
        if($uid == 0 && $vid == 0 && $time == 0 && $sid == 0){
            $this->exitJson(['null'],4000);
        }
        //组成where条件
        $map = [
            'uid' => $uid,
            'vid' => $vid,
            'sid' => $sid,
        ];

        $data['playtime'] = $time;
        $result = M('learn_record')->where($map)->save($data);
        Log::write($result);
        $this->exitJson($result,2000);

    }

    /**
     * 获取视频播放的最后时间及视频弹出验证
     */
    public function getPlaytime()
    {
        //获取参数
        $uid = intval($_POST['uid']);
        $sid = intval($_POST['sid']);
//        $uid=1;
//        $sid=98;
        //根据map条件获取播放时间信息
        $map  = [
            'uid' => $uid,
            'sid' => $sid,
        ];
        $time = M('learn_record')->where($map)->find();
        //获取视频验证时间
        $verifity        = unserialize(M('system_data')->where(['key' => 'youtu', 'list' => 'admin_Config'])->getField('value'));
        $systime = time() + 120;//系统时间+2分钟
        //拼接返回信息
        $dataAll = base64_encode('playtime:' . $time['playtime'] . '/Mintime:' . $verifity['Mintime'] . '/Maxtime:' . $verifity['Maxtime'] . '/systime:' . $systime);
//        $re=base64_decode($dataAll);

        $this->exitJson($dataAll);
    }

    /**
     * 获取优图开发者APPID
     */
    public function appID()
    {
        //获取优图开发者信息
        $data            = unserialize(M('system_data')->where(['key' => 'youtu', 'list' => 'admin_Config'])->getField('value'));
        $systime = time() + 120;//系统时间+2分钟
        $app             = base64_encode('appid:' . $data['appid'] . '/secretId:' . $data['secretId'] . '/secretKey:' . $data['secretKey'] . '/userid:' . $data['userid'] . '/systime:' . $systime);

        $this->exitJson($app);
    }

    /**
     * app版本
     */
    public function version()
    {
        //设置版本号
        $version = "2.0.1";
        $systime = time() + 120;//系统时间+2分钟
        $res     = base64_encode('version:' . $version . '/systime:' . $systime);

        $this->exitJson($res);
    }

}
