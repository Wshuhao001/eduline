<?php
/*登录类型配置接口*/
/**
 * Created by PhpStorm.
 * User: 597369566@qq.com
 * Date: 2017/3/17 0017
 * Time: 9:34
 */
class ConfigApi extends Api
{

    //获取登录类型
    public function get_login_type()
    {
        //获取类型ID
        $config_id = $_GET['configid'];
        //解密参数
        $result = dec($config_id);
        //根据类型ID查询登录类型
        $type = $this->get_config($result['config_id']);
        $this->exitJson($type,1001);
    }

    //登录配置
    private function get_config($condition)
    {
        //查询config数据表信息
        $value = M('config')->where(['config_id'=>$condition])->find();
        //获取config_value的值，1普通登录；2普通登录和人脸识别；3人脸登录
        if($value['config_value'] == 2){
            return 2;
        }else if($value['config_value'] == 3){
            return 3;
        }else if($value['config_value'] == 1){
            return 1;
        }
    }
}