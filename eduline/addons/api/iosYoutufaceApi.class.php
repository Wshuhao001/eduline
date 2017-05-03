<?php
//加载httpful
require implode(DIRECTORY_SEPARATOR, array(SITE_PATH,'server', 'Youtu','include.php'));
//require('./server/Youtu/include.php');
use TencentYoutuyun\Youtu;
use TencentYoutuyun\Conf;

class YoutufaceApi extends Api
{

    /**
     * 配置
     */
    private $conf;
//    private $attach_ids;
    
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
     * 创建个体(测试接口,关于创建用户的步骤)
     */
    public function newpersonbase(){
       $errmess = '';
        $pic = $_POST['mydatapic'];
        //获取用户uid
        if($this->mid){
            $data = M('user')->getUserInfo($this->mid);
            $uname = $data['uname'];
        }else{
            $errmess = '找不到用户信息，请重新登录';
        }

        if($errmess == '' && $uname != ''){

            // 使用本地图片
            $uploadRet = YouTu::newpersonbase64($pic, $data['uid'],['1'],$data['uname']);
            // 使用远程图片
            //$url = getAttachUrlByAttachId($attach);
            //$uploadRet = YouTu::newpersonurl(SITE_PATH.$url, '1', ['uname']);
            //$uploadRet = YouTu::newpersonurl('http://fun.youth.cn/yl24xs/201702/W020170227510976500117.png', '2', ['username']);
            //var_dump($uploadRet);exit;
            if($uploadRet['errorcode'] == 0){
                return 'ok';
            }
        }
        if($errmess==''){
            $errmess='true';
        }
        echo $errmess;
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
     * @param string person_id 个体ID
     * @param string face 待验证人脸
     * @param int type 1:使用本地图片 2:使用链接 default:2
     */
    public function faceverify(){
        $uname = isset($this->data['uname']) ? t(urldecode($this->data['uname'])) :'';
        $person_id = t($this->person_id);
        if(!$person_id){
            // 选择个体
            $this->exitJson([],0,'请选择人物');
        }
        // 以上测试案例中 可以直接百度图片“李一桐”复制链接验证
        $img = $this->face;
        if(!$img){
            // 选择个体
            $this->exitJson([],0,'请指定或上传待验证人脸');
        }
        $type = in_array($this->type,[1,2]) ? $this->type : 2;
        
        if($type == 1){
            // 本地图片
            $res = YouTu::faceverify($img, $person_id);
        }else{
            // 图片链接
            $res = YouTu::faceverifyurl($img,$person_id);
        }
        unset($res['errorcode'],$res['errormsg']);
        $this->exitJson($res,1);
    }



}
