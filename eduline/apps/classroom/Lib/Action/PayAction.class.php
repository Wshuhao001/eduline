<?php

tsload(APPS_PATH.'/classroom/Lib/Action/CommonAction.class.php');
class PayAction extends CommonAction
{
    /**
     * 充值学币
     */
    public function recharge()
    {
        ini_set('display_errors', '1');
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            exit;
        }

        //使用后台提示模版
        $this->assign('isAdmin', 1);

        //必须要先登陆才能进行操作
        if ($this->mid <= 0) {
            $this->error('请先登录在进行充值');
        }
        $pay_list = array('alipay', 'unionpay', 'wxpay');
        if (!in_array($_POST['pay'], $pay_list)) {
            $this->error('支付方式错误');
        }

        $money = floatval($_POST['money']);
        if ($money <= 0) {
            $this->error('请选择或填写充值金额');
        }
        $rechange_base = getAppConfig('rechange_basenum');
        if ($rechange_base > 0 && $money % $rechange_base != 0) {
            if ($rechange_base == 1) {
                $this->error('充值金额必须为整数');
            } else {
                $this->error("充值金额必须为{$rechange_base}的倍数");
            }
        }
        $money = 0.01;
        $re = D('ZyRecharge');
        $id = $re->addRechange(array(
            'uid' => $this->mid,
            'type' => '0',
            'money' => $money,
            'note' => "学币充值-{$money}元",
            'pay_type' => $_POST['pay'],
        ));
        if (!$id) {
            $this->error('操作异常');
        }
        if ($_POST['pay'] == 'alipay') {
            $this->alipay(array(
                'out_trade_no' => $id,
                'subject' => '学币充值',
                'total_fee' => $money,
            ));
        } elseif ($_POST['pay'] == 'unionpay') {
            $this->unionpay(array(
                'id' => $id,
                'money' => $money,
                'subject' => '学币充值',
            ));
        } elseif ($_POST['pay'] == 'wxpay') {
            $res = $this->wxpay(array(
                'out_trade_no' => $id,
                'total_fee' => $money * 100, //单位：分
            ));
            if ($res) {
                $this->assign('code_url', $res);
                $html = $this->fetch('wxpay');
                $data = array('status' => 1, 'data' => ['html' => $html, 'trade_no' => $id]);
                echo json_encode($data);
                exit;
            }
        }
    }

    /**
     * 充值VIP.
     */
    public function rechargeVip()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            exit;
        }

        //使用后台提示模版
        $this->assign('isAdmin', 1);

        //必须要先登陆才能进行操作
        if ($this->mid <= 0) {
            $this->error('请先登录在进行充值');
        }

        //检查支付方式
        if ($_POST['pay'] != 'alipay' && $_POST['pay'] != 'unionpay' && $_POST['pay'] != 'wxpay') {
            $this->error('支付方式错误');
        }

        //检查充值类型
        if ($_POST['type'] != 1 && $_POST['type'] != 0) {
            $this->error('支付类型错误');
        }
        $type = intval($_POST['user_vip']);
        $vip_length = '+1 year';
        $vip = M('user_vip')->where('id='.$type)->find();
        $money = $vip['vip_year'];

        $money = 0.01;
        $re = D('ZyRecharge');
        $id = $re->addRechange(array(
            'uid' => $this->mid,
            'type' => $type,
            'vip_length' => $vip_length,
            'money' => $money,
            'note' => "{$vip['title']}充值",
            'pay_type' => $_POST['pay'],
        ));
        if (!$id) {
            $this->error('操作异常');
        }
        if ($_POST['pay'] == 'alipay') {
            $this->alipay(array(
                'out_trade_no' => $id,
                'subject' => "{$vip['title']}充值",
                'total_fee' => $money,
            ));
        } elseif ($_POST['pay'] == 'unionpay') {
            $this->unionpay(array(
                'id' => $id,
                'money' => $money,
                'subject' => "{$vip['title']}充值",
            ));
        } elseif ($_POST['pay'] == 'wxpay') {
            $res = $this->wxpay(array(
                'out_trade_no' => $id,
                'total_fee' => $money * 100, //单位：分
                'subject' => "{$vip['title']}充值",
            ));
            if ($res) {
                $this->assign('code_url', $res);
                $html = $this->fetch('wxpay');
                echo json_encode(['status' => 1, 'data' => ['html' => $html, 'trade_no' => $id]]);
                exit;
            }
        }
    }
    /**
     * 支付宝支付.
     *
     * @author martinsun <syh@sunyonghong.com>
     * @datetime 2017-01-19T15:17:32+080
     *
     * @version  1.0
     *
     * @param array $args 参数信息包括但不限于以下字段
     *                    'out_trade_no' : 订单号  必须
     *                    'subject':订单名称 必须
     *                    'total_fee':支付金额 必须
     *                    'body':订单描述 可选
     *                    'show_url':商品展示地址 可选
     *
     * @return [type] [description]
     */
    protected function alipay($args)
    {
        $alipay_config = $this->getAlipayConfig();
        // 初始化类
        tsload(implode(DIRECTORY_SEPARATOR, array(SITE_PATH, 'api', 'pay', 'alipay_v2', 'Alipay.php')));
        $alipayClass = new \Alipay($alipay_config);
        // 设置支付的Data信息
        $alipayClass->setConfig(array(
            'out_trade_no' => $args['out_trade_no'].'h'.date('YmdHis', time()).mt_rand(1000, 9999), //商户网站订单系统中唯一订单号，必填
            'subject' => $args['subject'], //订单名称
            'total_fee' => $args['total_fee'], //付款金额
            'body' => isset($args['body']) ? $args['body'] : '', //订单描述
            'show_url' => isset($args['show_url']) ? $args['show_url'] : '', //商品展示地址
            'exter_invoke_ip' => get_client_ip(), //客户端的IP地址
            '_input_charset' => trim(strtolower($alipay_config['input_charset'])),
            'notify_url' => 'http://'.strip_tags($_SERVER['HTTP_HOST']).'/alipay_alinu.html', //异步通知处理地址,所有的支付都应该在这个接口做处理
            'return_url' => 'http://'.strip_tags($_SERVER['HTTP_HOST']).'/alipay_aliru.html', //页面同步跳转地址,表示支付完成后跳转的页面地址链接
        ));
        // 添加自己的自定义参数,保存为json字符串传输
        // $alipayClass->addData('extra_common_param', json_encode(array('money' => $args['total_fee'])));
        // dump($alipayClass->getConfig());//查看当前配置
        // dump($alipayClass->getData());//查看当前请求数据包
        // 调用阿里的服务,默认调用PC端支付
        $res = $alipayClass->goAliService();
        echo $res;
        exit;
    }

    /**
     * 阿里支付回调 服务器异步通知页面路径.
     * (将该方法写入到伪静态即可).
     *
     * @author martinsun <syh@sunyonghong.com>
     * @datetime 2017-01-19T14:38:16+080
     *
     * @version  1.0
     */
    public function alinu()
    {
        //写入日志
        file_put_contents('alipayNotify.txt', json_encode($_POST));
        $alipay_config = $this->getAlipayConfig();
        //引入类
        tsload(implode(DIRECTORY_SEPARATOR, array(SITE_PATH, 'api', 'pay', 'alipay_v2', 'AlipayNotify.php')));
        //初始化
        $alipayNotify = new \AlipayNotify($alipay_config);
        //验证结果
        $verify_result = $alipayNotify->verifyNotify();
        if (!$verify_result) {
            exit('fail');
        }
        file_put_contents('alipay_success.txt', json_encode($_POST));
        //商户订单号
        $out_trade_no = stristr($_POST['out_trade_no'], 'h', true);
        //支付宝交易号
        $trade_no = $_POST['trade_no'];
        //交易状态
        $trade_status = $_POST['trade_status'];
        //
        $extra_common_param = json_decode($_POST['extra_common_param'], true);
        $re = D('ZyRecharge');
        if ($trade_status == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS') {
            // 这个代表支付成功,做其他的逻辑处理
        }
        echo 'success';
    }

    /**
     * 阿里支付回调 页面跳转同步通知页面路径.
     *
     * @author martinsun <syh@sunyonghong.com>
     * @datetime 2017-01-19T14:36:18+080
     *
     * @version  1.0
     */
    public function aliru()
    {
        //去除网站参数,不参与加密运算
        unset($_GET['app'], $_GET['mod'], $_GET['act']);
        $alipay_config = $this->getAlipayConfig();
        //引入回调通知类
        tsload(implode(DIRECTORY_SEPARATOR, array(SITE_PATH, 'api', 'pay', 'alipay_v2', 'AlipayNotify.php')));
        //初始化
        $alipayNotify = new \AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyReturn();
        $this->assign('isAdmin', 1);
        // 如果自己有扩展字段,可以直接在第一步支付中的 extra_common_param填写json数据,这里接收并转为数组处理
        // $extra_common_param = json_decode($_GET['extra_common_param'], true);
        // 签名认证状态 验证是不是支付宝发送的合法数据
        if (!$verify_result) {
            $this->error('操作异常');
        }
        //商户订单号
        $out_trade_no = stristr($_GET['out_trade_no'], 'h', true);
        //支付宝交易号
        $trade_no = $_GET['trade_no'];
        //交易状态
        $trade_status = $_GET['trade_status'];
        if ($trade_status == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS') {
            // 这里表示支付成功且订单处理完毕,下面写自己的代码
        }
        // 页面跳转
    }
    /**
     *
     **/
    public function unionnu()
    {
        include SITE_PATH.'/api/pay/unionpay/quickpay_service.php';
        try {
            $response = new quickpay_service($_POST, quickpay_conf::RESPONSE);
            if ($response->get('respCode') != quickpay_service::RESP_SUCCESS) {
                $err = sprintf('Error: %d => %s', $response->get('respCode'), $response->get('respMsg'));
                throw new Exception($err);
            }

            $arr_ret = $response->get_args();
            $id = $arr_ret['orderNumber'] - 10000000;
            $qid = $arr_ret['qid'];
            $re = D('ZyRecharge');
            $result = $re->setSuccess($id, $qid);
            if ($result) {
                echo 'success';
            } else {
                echo 'fail';
            }
        } catch (Exception $exp) {
            exit('fail');
            //后台通知出错
            //file_put_contents('notify.txt', var_export($exp, true));
        }
    }

    public function unionru()
    {
        include SITE_PATH.'/api/pay/unionpay/quickpay_service.php';
        $this->assign('isAdmin', 1);
        $this->assign('jumpUrl', U('classroom/User/recharge'));
        try {
            $response = new quickpay_service($_POST, quickpay_conf::RESPONSE);
            if ($response->get('respCode') != quickpay_service::RESP_SUCCESS) {
                $err = sprintf('Error: %d => %s', $response->get('respCode'), $response->get('respMsg'));
                throw new Exception($err);
            }
            $arr_ret = $response->get_args();
            $id = $arr_ret['orderNumber'] - 10000000;
            $qid = $arr_ret['qid'];
            $re = D('ZyRecharge');
            $result = $re->setSuccess($id, $qid);
            if ($result) {
                $this->success('充值成功！');
            } else {
                $this->error('充值失败！');
            }
        } catch (Exception $exp) {
            $this->error('操作异常！');
            //$str .= var_export($exp, true);
            //die("error happend: " . $str);
        }
    }

    protected function unionpay($args)
    {
        include SITE_PATH.'/api/pay/unionpay/quickpay_service.php';
        $param['transType'] = quickpay_conf::CONSUME;  //交易类型，CONSUME or PRE_AUTH
        $param['commodityName'] = $args['subject'];
        $param['orderAmount'] = $args['money'] * 100;        //交易金额
        $param['orderNumber'] = $args['id'] + 10000000; //订单号，必须唯一
        $param['orderTime'] = date('YmdHis');   //交易时间, YYYYmmhhddHHMMSS
        $param['orderCurrency'] = quickpay_conf::CURRENCY_CNY;  //交易币种，CURRENCY_CNY=>人民币
        $param['customerIp'] = get_client_ip();//客户端的IP地址
        //$param['frontEndUrl']   = SITE_URL.'/classroom/Pay/unionru';    //前台回调URL
        //$param['backEndUrl']    = SITE_URL.'/classroom/Pay/unionnu';    //后台回调URL
        $param['frontEndUrl'] = U('classroom/Pay/unionru');    //前台回调URL
        $param['backEndUrl'] = U('classroom/Pay/unionnu');    //后台回调URL
        //print_r($param);exit;
        $pay_service = new quickpay_service($param, quickpay_conf::FRONT_PAY);
        $html = $pay_service->create_html();
        header('Content-Type: text/html; charset='.quickpay_conf::$pay_params['charset']);
        echo $html; //自动post表单
    }
     /**
      * 获取阿里支付的配置参数.
      *
      * @author martinsun <syh@sunyonghong.com>
      * @datetime 2017-01-19T14:45:39+080
      *
      * @version  1.0
      *
      * @return array 最终合并后的配置参数数组
      */
     protected function getAlipayConfig()
     {
         $config = array(
             'cacert' => implode(DIRECTORY_SEPARATOR, array(SITE_PATH, 'api', 'pay', 'alipay_v2', 'cacert.pem')),
             'input_charset' => strtolower('utf-8'),
             'sign_type' => strtoupper('RSA'),
         );
         $conf = unserialize(M('system_data')->where("`list`='admin_Config' AND `key`='alipay'")->getField('value'));
         if (is_array($conf)) {
             $config = array_merge($config, array(
                 'partner' => $conf['alipay_partner'],
                 'key' => $conf['alipay_key'],
                 'seller_id' => $conf['alipay_partner'],
                 'private_key_path' => $conf['private_key'],
                 'ali_public_key_path' => $conf['public_key'],
             ));
         }

         return $config;
     }


    //app支付宝支付回调
    public function appAlipayCallback(){
        $out_trade_no = t( $_POST['out_trade_no'] );
         //支付宝交易号
        $trade_no = $_POST['trade_no'];
        //交易状态
        $trade_status = $_POST['trade_status'];
        if ($trade_status == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS') {
            if(D('ZyRecharge')->setSuccess($out_trade_no, $trade_no)) {
                echo 'success';
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }
    }

    /**
     * @name 微信支付
     * @packages protected
     */
    protected function wxpay($data)
    {
        $url = '';
        if ($data) {
            require_once SITE_PATH.'/api/pay/wxpay/WxPay.php';
            $input = new WxPayUnifiedOrder();
            $body = isset($data['subject']) ? $data['subject'] : '充值中心';
            $out_trade_no = $data['out_trade_no'].'y'.date('YmdHis', time()).mt_rand(1000, 9999);//stristr
            $input->SetBody($body);
            $input->SetOut_trade_no($out_trade_no);
            $input->SetTotal_fee($data['total_fee']);
            $input->SetTime_start(date('YmdHis'));
            $input->SetTime_expire(date('YmdHis', time() + 600));
            $input->SetNotify_url('http://'.$_SERVER['HTTP_HOST'].'/api/pay/wxpay/notify.php');
            $input->SetTrade_type('NATIVE');
            $input->SetProduct_id($data['out_trade_no']);
            $notify = new NativePay();
            $result = $notify->GetPayUrl($input);
            $url = $result['code_url'];
        }

        return $url;
    }

    /**
     * @name 微信回调 临时处理
     */
    public function wxpay_success()
    {
        if ($_GET['openid']) {
            $re = D('ZyRecharge');
            $result = $re->setSuccess($_GET['out_trade_no'], $_GET['transaction_id']);
        }
    }
    /**
     * @name 查询支付状态
     */
    public function getPayStatus()
    {
        $id = $_POST['order'];
        if (M('zy_recharge')->where(['id' => $id])->getField('status') == 1) {
            echo json_encode(['status' => 1]);
            exit;
        } else {
            echo json_encode(['status' => 0]);
            exit;
        }
    }
}
