<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php if(($_title)  !=  ""): ?><?php echo ($_title); ?> - <?php echo ($site["site_name"]); ?><?php else: ?><?php echo ($site["site_name"]); ?> - <?php echo ($site["site_slogan"]); ?><?php endif; ?></title>
<meta content="<?php if(($_keywords)  !=  ""): ?><?php echo ($_keywords); ?><?php else: ?><?php echo ($site["site_header_keywords"]); ?><?php endif; ?>" name="keywords">
<meta content="<?php if(($_description)  !=  ""): ?><?php echo ($_description); ?><?php else: ?><?php echo ($site["site_header_description"]); ?><?php endif; ?>" name="description">
<meta name="viewport" charset="UTF-8" content="user-scalable=no"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta property="qc:admins" content="1403267155765154541656375" />
<meta property="wb:webmaster" content="fdcd9430a88b1552" />

<link href="__THEME__/image/favicon.ico?v=<?php echo ($site["sys_version"]); ?>" type="image/x-icon" rel="shortcut icon">
<!-- 站点css -->
<link href="__THEME__/css/css.php?t=css&f=base.css,common.css,index.css,logincss.css,media.css,style.css,wenda.css&v=<?php echo ($site["sys_version"]); ?>.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/js/tbox/box.css?20110820" rel="stylesheet" type="text/css" />
<script>
//全局变量
var SITE_URL  = '<?php echo SITE_URL; ?>';
var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
var THEME_URL = '__THEME__';
var APPNAME   = '<?php echo APP_NAME; ?>';
var MID		  = '<?php echo $mid; ?>';
var UID		  = '<?php echo $uid; ?>';
var initNums  =  '<?php echo $initNums; ?>';
var SYS_VERSION = '<?php echo $site["sys_version"]; ?>';
var _ROOT_    = '__ROOT__';
// Js语言变量
var LANG = new Array();
//注册登录模板
var REG_LOGIN="<?php echo U('public/Passport/regLogin');?>";
//邮箱验证地址
var CLICK_EMIL="<?php echo U('public/Passport/clickEmail');?>";
//异步注册地址
var REG_ADDRESS="<?php echo U('public/Passport/ajaxReg');?>";
//异步登录
var LOGIN_ADDRESS="<?php echo U('public/Passport/ajaxLogin');?>";
//退出登录
var LOGINOUT_ADDRESS="<?php echo U('public/Passport/logout');?>";
</script>
<?php if(!empty($langJsList)) { ?>
<?php if(is_array($langJsList)): ?><?php $i = 0;?><?php $__LIST__ = $langJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo ($vo); ?>?v=<?php echo ($site["sys_version"]); ?>"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php } ?>
<!-- 站点js -->
<!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
<script src="__THEME__/js/js.php?t=js&f=jquery-1.7.1.min.js,jquery.form.js,common.js,core.js,module.js,module.common.js,jwidget_1.0.0.js,jquery.atwho.js,jquery.caret.js,ui.core.js,ui.draggable.js,plugins/core.comment.js,plugins/core.digg.js&v=<?php echo ($site["sys_version"]); ?>.js"></script>
<script src="__THEME__/js/user/user.js"></script>
<script src="__THEME__/js/cyjs/title_common.js"></script>
<script src="__THEME__/js/cyjs/cyjs_common.js"></script>
<script src="__THEME__/js/cyjs/offlights.js"></script>

</head>

<body>



<?php if(empty($_SESSION['mid'])){ ?>
	<script>
/**
 * 取消注册
 */
function remove_login(){
    $("#transparent_login").css("display","none");
}
</script>
<div id="transparent_login">
  <div id="loging-worap-regsiter"> <a class="loging-Cancel" href="javascript:;" onclick="remove_login()">×</a>
      <!--登录-->
    <div id="loging-worap">
          <div class="title">登录</div>
          <div class="loging">
              <ul>
                  <li>
                      <label class="label">帐&nbsp; &nbsp;&nbsp;&nbsp;号:</label>
                      <input name="log_username" id="log_username" class="regsiter-width" maxlength="30"  type="text" placeholder="用户名/邮箱/手机">

                  </li>
                  <li>
                      <label class="label">密&nbsp; &nbsp;&nbsp;&nbsp;码:</label>
                      <input name="log_pwd" id="log_pwd"  class="regsiter-width" maxlength="30" type="password" placeholder="请输入登录密码">
                  </li>

              </ul>
              <div class="loging-xy">
                  <div class="loging-xy-bottom">
                      <input name=""  id="logSub" onclick="logSub()"  class="loging-xy-submit" type="submit" value="登录"/>
                      <a href="<?php echo U('home/Repwd/index');?>">忘记密码？</a></div>
                  <style>
                      .ico-sina{background:url("__THEME__/image/LOGO_48x48.png");}
                      .ico-qzone{background:url("__THEME__/image/QQ_Logo_wiki4848.png");}
                      .ico-renren{background:url("__THEME__/image/Renren_logo_48×48.png");}
                      .ico-weixin{background:url("__THEME__/image/Weixin_logo_48×48.png");}
                  </style>

                  <div class="loging-bottom">
                      <?php if(Addons::requireHooks('login_input_footer') ): ?>
                      <div class="login-ft" style="">
                          <?php echo Addons::hook('login_input_footer');?>
                      </div>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
    </div>
  </div>
  <div id="loging-back"></div>
</div>

	<script>
var CLICK_VERIFY="<?php echo U('public/Passport/clickVerify');?>";
var CLICK_UNAME="<?php echo U('public/Passport/clickUname');?>";
var CLICK_PHONE="<?php echo U('public/Passport/clickPhone');?>";
var CLICK_PHONEVER="<?php echo U('public/Passport/clickPhoneVer');?>";
var SETUSERFACE="<?php echo U('public/Passport/setUserFace');?>";
var GET_PHONEVERIFY="<?php echo U('public/Passport/getVerify');?>";

//更换验证码
function changeverify(){
	var date = new Date();
    var ttime = date.getTime();
    var url = "__ROOT__/public/captcha.php";
    $('#verifyimg').attr('src',url+'?'+ttime);

};

/**
 * 取消注册
 */
function remove_reg(){
    $("#transparent_reg").css("display","none");
}
</script>
<div id="transparent_reg">

  <div id="loging-worap-regsiter"> <a class="loging-Cancel" href="javascript:;" onclick="remove_reg()">×</a>
    <!--注册-->
    <div id="regsiter-worap">
      <div class="title">注册</div>
      <form>
        <div class="regsiter">
          <?php if($register_type['account_type'] == 'phone') { ?>
              <div class="teb"><a href="javascript:;" class="f3"onclick="phoneReg(this)" >手机注册</a></div>
          <?php }elseif($register_type['account_type'] == 'email'){ ?>
              <div class="teb"><a href="javascript:;"  onclick="emailReg(this)">邮箱注册</a></div>
          <?php }else{ ?>
              <div class="teb"><a href="javascript:;" class="f3"onclick="phoneReg(this)" >手机注册</a>
              &nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="javascript:;"  onclick="emailReg(this)">邮箱注册</a>
              </div>
          <?php } ?>
          
          <?php if($register_type['account_type'] == 'phone' || $register_type['account_type'] == 'all') { ?>
          <ul id="phoneReg">
           <li>
              <label class="label">手机号码:</label>
              <input class="regsiter-width" type="text" id="prphone" maxlength="11" placeholder="请输入手机号码">
            </li>
            <li>
              <label class="label">验&nbsp;证&nbsp;码:</label>
              <input class="width130" type="text" id="prverify" maxlength="6" placeholder="请输入收到的验证码">
              <a class="width80" href="javascript:;" onclick="getPhoneVerify()">获取验证码</a><span class="width97"  style="display:none" ><a id="dtime"></a> 重新发送</span> </li>
            <li>
              <label class="label">账户密码:</label>
              <input class="regsiter-width" id="prpassword" maxlength="30" type="password" placeholder="请输入用户密码，6-20个字符">
            </li>
            <li>
              <label class="label">&nbsp;</label>
              <input name="" onclick="phoneNext()" class="regsiter-xy-submit" type="button" value="下一步"/>
            </li>
          </ul>
          <?php } ?>

          <?php if($register_type['account_type'] == 'email' || $register_type['account_type'] == 'all') { ?>
          <!--邮箱注册-->
          <ul id="emailReg"  <?php if($register_type['account_type'] == 'all'){ ?>style="display: none"<?php } ?> >
            <li>
              <label class="label">邮箱地址</label>
              <input value="" class="regsiter-width" id="erusername" maxlength="30" type="text" placeholder="请输入您的常用邮箱地址">
            </li>
            <li>
              <label class="label">图片验证</label>
              <input class="width121" type="text" id="erverify" maxlength="6" placeholder="请输入右侧验证码">
              <a  href="#"><img class="width108" src="__ROOT__/public/captcha.php" title="点击刷新" onclick="changeverify()" id="verifyimg"></a> 
            </li>
            <li>
              <label class="label">账户密码</label>
              <input value="" class="regsiter-width" id="erpasswrod" maxlength="30" type="password" placeholder="请输入用户密码，6-20个字符">
            </li>

            <li>
              <label class="label">&nbsp;</label>
            <!--  <p class="p">错误提示</p>-->
              <input name="" onclick="onemaliNext()" class="regsiter-xy-submit" type="button" value="下一步"/>
            </li>
          </ul>
          <?php } ?>
        </div>
      </form>
    </div>
  </div>
  <!--邮箱提示-->
 <!-- <div class="regsiter-main-msg">
    <h3><i class="tru"></i>验证邮件已发送，请前往邮箱点击激活链接完成注册</h3>
    <p class="p">注册邮箱：1111566555@admin.com</p>
    <div class="bottom"><a href="#" class="span">(20)重新发送</a><a href="#" class="a">前往邮箱 >></a></div>
  </div>-->
  <!--头像设置-->
   <!--<div class="regsiter-main-headerworap">
   <iframe src="<?php echo U('public/Passport/setUserFace');?>" frameborder="0" scrolling="no" width="814" height="426"></iframe>
   </div>-->
  <!--用户信息-->
	<div class="regsiter-main">
	    <h2>让学友们更了解你！</h2>
	    <form>
	      <ul class="">
	        <li>
	          <label class="label">昵称:</label>
	          <input class="width" id="uname" type="text" maxlength="6" placeholder="请输入用户昵称">
	        </li>
	        <li>
	          <label class="label">性别</label>
	          <input id="sex"  name="sex" type="radio" value="1"  checked="checked" />
	          <label>男</label>
	          <input id="sex" name="sex" type="radio" value="2" />
	          <label>女</label>
	        </li>
	        <li>
	          <label class="label">地区:</label>
	         <?php echo W('Area',array('curPro'=>$user['province'],'curCity'=>$user['city'],'area'=>$user['area'],'city_names'=>$user['location'],'tpl'=>'zyCardArea'));?>
	        </li>
	        <li>
	          <label class="label">职业:</label>
	          <input id="profession" class="width" type="text" maxlength="10" placeholder="请输入您的职业,10个字符内">
	        </li>
	        <li>
	          <label class="label">个人简介:</label>
	          <textarea id="intro" class="textareawidth" maxlength="500" placeholder="请输入个人简介,6-500个字符内" cols="" rows=""></textarea>
	        </li>
	      </ul>
	      <div class="bntbox"><a class="bnt" href="javascript:;" onclick="setUserInfo()">完成填写，注册！</a><a href="javascript:;" class="a" onclick="prevBang()">返回</a> </div>
	    </form>
    </div>
    <div id="loging-back"></div>
</div>

<?php } ?>
<!--header-->
<div class="header">
    <div class="header-top">
    	<div class="wrap">
            <div class="header-logo">
                <a href="/" title="Eduline"><img src="<?php echo ($site["logo_head"]); ?>"/></a>
            </div>
            <div class="header-search index">
                <form>
                	<input type="hidden" name="app" value="classroom" >
			        <input type="hidden" name="mod" value="Search" >
			        <input type="hidden" name="act" value="index" >
                    <input type="text" id="searchkey" name="searchkey" placeholder="搜索关键词">
                    <input type="submit" class="submit">
                </form>
            </div>
            <div class="header-login">
                <div class="login-ewm">
                	<!--<img src="__THEME__/images/appdownload.png" class="lazyloading">  -->
                	<div id="qrcode"></div>
                    <p>远程教育<br>客户端下载</p>
                </div>
                <?php if(empty($_SESSION['mid'])){ ?>
                	<div class="login-nav">
                		<a href="javascript:;" onClick="reg_login('login')">登录</a><span>/</span><a href="javascript:;" onClick="reg_login('reg')">注册</a>
			    	</div>
			    <?php }else{ ?>
			    	<div class="login-box">
	                    <a href="<?php echo U('classroom/UserShow/index',array('uid'=>$_SESSION['mid']));?>"><img src="<?php echo getUserFace($_SESSION['mid']);?>" class="lazyloading"><span><?php echo getUserName($_SESSION['mid']);?></span></a>
	                    <dl class="login-after-position">
					         <dd class="login-after-bdbt"><a href="<?php echo U('classroom/Home/wenda');?>">我的问答</a></dd>
					         <dd class="login-after-bdbt"><a href="<?php echo U('classroom/Home/note');?>">我的笔记</a></dd>
					         <dd class="login-after-bdbt"><a href="<?php echo U('classroom/User/setInfo');?>">我的设置</a></dd>
					         <dd class="login-after-bdbt"><a href="<?php echo U('public/Message/index');?>">我的消息</a></dd>
					         <?php if( is_admin($_SESSION['mid']) ) { ?>
					         	 <dd class="login-after-bdbt"><a href="<?php echo U('admin');?>">后台管理</a></dd>
					         <?php } ?>
					         <dd class="login-after-bdbt"><a href="javascript:;" onClick="logout()">退出</a></dd>
					     </dl>
	                </div>
	                <!--消息提示-->
				    <ul class="news-msg"
				          <?php if(!empty($mid) &&(!empty($unreadnum) || !empty($systemnum) || !empty($commentnum))){ ?>
				          		style="display:block;"
				          <?php }else{ ?>
				        		style="display:none;"
				          <?php } ?> >
				          <a class="shanchu-ico" href="javascript:;" onClick="closeMsg()">×</a>
				          <?php if(!empty($unreadnum) && !empty($mid)){ ?>
				                <li><?php echo ($unreadnum); ?>条新的私信，&nbsp;<a href="<?php echo U('public/Message/index');?>">查看消息</a></li>
				          <?php } ?>
				          <?php if(!empty($systemnum) && !empty($mid)){ ?>
				                <li><?php echo ($systemnum); ?>条新的系统消息，&nbsp;<a href="<?php echo U('public/Message/notify');?>">查看消息</a></li>
				          <?php } ?>
				          <?php if(!empty($commentnum) && !empty($mid)){ ?>
				                <li><?php echo ($commentnum); ?>条新的评论消息，&nbsp;<a href="<?php echo U('public/Message/comment');?>">查看消息</a></li>
				         <?php } ?>
				     </ul>
			    <?php } ?>
                
            </div>
        </div>
    </div>
    <div class="header-bot">
    	<div class="wrap">
            <ul class="header-nav">
                <?php if(is_array($site_top_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_top_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><?php if($vo["app_name"] == more): ?><li onmouseover="mouseup(this);" onmouseout="mouseout(this);">
		                <a href="<?php echo ($vo['url']); ?>" ><?php echo ($vo['navi_name']); ?></a>
		                <div id="menu_box">
		                  <?php if(is_array($vo['child'])): ?><?php $i = 0;?><?php $__LIST__ = $vo['child']?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$val): ?><?php ++$i;?><?php $mod = ($i % 2 )?><a target="<?php echo ($val['target']); ?>" href="<?php echo ($val['url']); ?>" ><?php echo ($val['navi_name']); ?></a><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
		                </div>
		              </li>
		            <?php else: ?>
		      			  <li <?php if(APP_NAME == $vo['app_name'] || ( APP_NAME == 'classroom' && MODULE_NAME == $vo['app_name'] ) ){echo "class='active'";} ?>><a target="<?php echo ($vo['target']); ?>" href="<?php echo ($vo['url']); ?>" ><?php echo ($vo['navi_name']); ?></a></li><?php endif; ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?> 
	        	<?php if(!empty($_SESSION['mid'])){ ?>
	        		<li <?php if(MODULE_NAME == "Home" || MODULE_NAME=="User"){echo "class='active'";} ?> ><a href="<?php echo U('classroom/Home/video');?>" >管理中心</a></li>
	        	<?php } ?>
	        	
            </ul>
        </div>
    </div>
</div>
<!--右边浮动-->
<?php $videolisturl =  $mid ? U('classroom/Video/merge') :  "javascript:reg_login();"; ?>
<div id="albumShop" class="shopfixed"> 
<!--
	<a href="<?php echo $videolisturl; ?>" class="shop">&nbsp; 
		<span id="albumNum" class="shop-msg">
			  <?php if(function_exists('getVideoMergeNum')){ ?>
			  		<?php echo getVideoMergeNum($mid,session_id());?>
			  <?php } else { ?>
			  		0
			  <?php } ?>
	    </span>
	</a> 
	
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($site["site_qq"]); ?>&site=www.51eduline.com&menu=yes"   class="qa">&nbsp;</a> 
	<a href="#" class="wx">&nbsp;<div class="erwm"><img  src="<?php echo getAttachUrlByAttachId($site['site_qrcode']);?>"><i></i></div></a> -->
</div>

<script type="text/javascript" src="__THEME__/js/jquery.qrcode.min.js"></script>
<script>
function mouseup(cate){
  var left=$(cate).offset().left;
  $("#menu_box").css("display","block");
}
function mouseout(cate){
  $("#menu_box").css("display","none");
}

function closeMsg(){
    $(".news-msg").remove();
}



//生成二维码
function qrcode(_id,_text,_width,_height,_render){
	var width  = arguments[2] ? arguments[2] : '100';
	var height = arguments[3] ? arguments[3] : '100';
	var render = arguments[4] ? arguments[4] : 'canvas';
	_id.qrcode({ 
	    render: render, //table方式 
	    width: width, //宽度 
	    height:height, //高度 
	    text: _text //任意内容 
	}); 
}
var url = "<?php echo U('home/Index/appDownload');?>";
qrcode($('#qrcode') ,url,'86','86');
</script>



<div class="mask"></div>
<!--content start-->
<div class="page-palce">
	<div class="wrap"><a href="/">首页</a><span>&gt;</span><a href="<?php echo U('classroom/Video/index');?>"><?php echo ($data["video_category_name"]); ?></a><span>&gt;</span><span><?php echo ($data["video_title"]); ?></span></div>
</div>
<div class="page-top">
	<div class="wrap">
    	<div class="page-top-wrap">
            <div class="pic">
            <?php if(($data['is_buy']) OR ($data['vipLevel'] != 0) OR ($data['mzprice']['price'] == 0)): ?><a href="<?php echo U('classroom/Video/watch',array('id'=>$_GET['id']));?>">
            <?php else: ?>
              <a href="javascript:;"><?php endif; ?>
              <img src="<?php echo getCover($data['cover'] ,520 , 320 );?>" class="lazyloading"></a>
            </div>
            <div class="tit">
            	<a class="a f3" href="<?php echo U('classroom/Video/watch',array('id'=>$_GET['id']));?>"><?php echo ($data["video_title"]); ?></a>
	            <?php if(!empty($mid)){ ?>
	          		<span id="collectAlbum" class="video-hesc <?php if($data['iscollect']): ?>after<?php endif; ?> before" >
	          		<?php if($data['iscollect']): ?>已收藏<?php else: ?>收藏<?php endif; ?></span>
	      		<?php } ?>
      		</div>
            <div class="dis" style="height:auto;"><?php echo ($data["video_intro"]); ?></div>
            <div class="info">
            	<div class="num">购买人数：<?php echo ($data["video_order_count"]); ?></div>
            	<div class="star">
            	<?php if($data["video_score"]  > 0 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($data["video_score"]  > 1 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($data["video_score"]  > 2 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($data["video_score"]  > 3 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($data["video_score"]  > 4 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             	（<?php echo ($data["reviewCount"]); ?>）
            	</div>
            </div>
            <div class="price">￥<?php echo ($data['mzprice']['price']); ?><span class="cgreen" style="font-size:16px;"><?php if($data['is_tlimit']): ?>(限时打折)<?php endif; ?></span></div>
            <div class="ebtn">
              <?php if($data['is_buy']){ ?>
                  <a class="bm" href="<?php echo U('classroom/Video/watch',array('id'=>$_GET['id']));?>">已购买</a>
              <?php }else{ ?>
                  <a class="bm" id="charge" href="javascript:void(0);">立即购买</a>
              <?php } ?>

	            <a class="ks" href="javascript:void(0);">开始学习</a>
   

            </div>
        </div>
    </div>
</div>
<!-- 开始学习确认弹出框 -->
<div class="buyOperating">
	<div class="w-close"><a class="mr15 mt5">×</a></div>
	<div class="w-notice">
    	<h4>提示：该课程需要支付<em class="coin_num_l"><?php echo ($data['mzprice']['price']); ?></em>学币，您当前账户余额为<em class="coin_num_l"><?php echo ($data['balance']['balance']); ?></em>学币。是否继续？</h4>
	</div>
    <div class="agreement">
    	<a><span id="protocol" class="agree"></span>我已经阅读并同意</a>
        <a>《收费课程服务协议》</a>
    </div>
	<div class="buy-btn">
        <a class="btn"  onclick="buyOperat(<?php echo ($_GET['id']); ?>,'video');">确认支付</a>
        <a class="btn" href="<?php echo U('classroom/User/recharge');?>">充值</a>
        <a class="btn cancel">暂不支付</a>
    </div>
</div>

<!-- 购买确认弹出框 -->
<div class="buyOperating">
	<div class="w-close"><a class="mr15 mt5">×</a></div>
	<div class="w-notice">
    	<h4>提示：该课程需要支付<em class="coin_num_l"><?php echo ($data['mzprice']['price']); ?></em>学币，您当前账户余额为<em class="coin_num_l"><?php echo ($data['balance']['balance']); ?></em>学币。是否继续？</h4>
	</div>
    <div class="agreement">
    	<a><span id="protocol" class="agree"></span>我已经阅读并同意</a>
        <a>《收费课程服务协议》</a>
    </div>
	<div class="buy-btn">
        <a class="btn"  onclick="buyOperat(<?php echo ($_GET['id']); ?>,'video');">确认支付</a>
        <a class="btn" href="<?php echo U('classroom/User/recharge');?>">充值</a>
        <a class="btn cancel">暂不支付</a>
    </div>
</div>
<!--content start-->
<div class="content bgb pt30">
	<div class="wrap">
        <div class="content-con">
        	<div class="content-main">
            	<div class="page-title">
                	<ul class="page-title-ul">
                        <li class="on"><a href="javascript:;" onclick="switchnav(this,'video_dir')">目录</a></li>
                        <li><a href="javascript:;" onclick="switchnav(this,'video_question')">提问</a></li>
                        <li><a href="javascript:;" onclick="switchnav(this,'video_note')">笔记</a></li>
                        <li><a href="javascript:;" onclick="switchnav(this,'video_comment')">点评</a></li>
                    </ul>
                </div>
                <!-- 目录 -->
                <div class="class-conent" id="video_dir">
                  <dl class="class-list" id="dirVideo"></dl>
                </div>
                <!-- 提问 -->
                <div class="page-conent" id="video_question">
                	<?php echo W('Resource',array('type'=>1,'ispage'=>true,'kztype'=>1,'kzid'=>$id,'template'=>'album_question'));?>
                </div>
                <!-- 笔记 -->
                <div class="page-conent" id="video_note">
                	<?php echo W('Resource',array('type'=>3,'ispage'=>true,'kztype'=>1,'kzid'=>$id,'template'=>'album_note'));?>
                </div>
                <!-- 评论 -->
                <div class="page-conent" id="video_comment">
                	<?php echo W('Resource',array('type'=>2,'ispage'=>true,'kztype'=>1,'kzid'=>$id,'template'=>'album_review'));?>
                </div>
                
            </div>
            <div class="content-sider w340">
                <div class="sider-tit">讲师信息</div>
                <?php if(!empty($data['teacher_id'])){ ?>
                	<dl class="sider-originator auto">
	                	<dt>
	                    	<div class="pic"><a href="<?php echo U('classroom/Teacher/view',array('id'=>$data['user']['id']));?>"><img src="<?php echo getAttachUrlByAttachId($data['user']['head_id']);?>" class="lazyloading"></a></div>
	                    	<h3><a href="<?php echo U('classroom/Teacher/view',array('id'=>$data['user']['id']));?>"><?php echo ($data["user"]["name"]); ?></a><em><?php echo ($data["user"]["title"]); ?></em></h3>
	                    </dt>
	                    <dd>
	                    	<div class="txt"><?php echo ($data["user"]["inro"]); ?></div>
	                    </dd>
	                </dl>
   				<?php } ?>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
var id  = '<?php echo ($id); ?>';
var uid = '<?php echo ($uid); ?>';
var collectStatus = 1;
var arr=['他妈的', '你妈的', '傻×', '衮蛋', '你妹儿'];
$(function(){
    $.post("<?php echo U('classroom/Video/getcatalog');?>",{id:id},function(txt){
        var txt = eval('('+txt+')');
        $('#dirVideo').append(txt);
    })
})

    $(document).ready(function(){
        //收藏课程
        $('#collectAlbum').live('click',function(){
            
            if(id<=0){
                reg_login();
                return false;
            }
            if($(this).hasClass('hasCollect')){
                collectStatus = 0;
            }else{
            	collectStatus = 1;
            }
            var _this = $(this);
            _this.data('lock',false);
            if(_this.data('lock')) return;
            _this.data('lock',true);
            $.post("<?php echo U('classroom/Public/collect');?>",{source_id:id,type:collectStatus,sctype:2},function(data){
                if(data.status == 0){
                    notes(data.info,'failure');
                    _this.data('lock',false);
                    return false;
                }
                if($('#collectAlbum').hasClass('hasCollect')){
                    $('#collectAlbum').text('收藏').removeClass().addClass("video-hesc before");
                }else{
                    $('#collectAlbum').text('已收藏').removeClass().addClass("video-hesc after");
                }
                _this.data('lock',false);
            },'json');
        });

		//点击购买
		$('#charge').live('click',function(){
			if(id<=0){
				reg_login();
				return false;
			}
			$('.buyOperating').show();
			var mask_height = $(document).height();
			$('.mask').height(mask_height).show();
		});
		//开始学习
		$('.ks').live('click',function(){
			if(uid<=0){
				reg_login();
				return false;
			}
			self.location.href="<?php echo U('classroom/Video/watch',array('id'=>$_GET['id']));?>";
		});
		//同意协议
		$('.agreement #protocol').click(function(){
			var type = $(this).attr('class');
			if(type == 'no-agree'){
				$(this).attr('class','agree');
			}else{
				$(this).attr('class','no-agree');	
			}
		});
		//暂不支付
		$('.w-close a,.buy-btn .cancel').click(function(){
			$('.buyOperating,.mask').hide();
		});
        //加入课程组合
        $("#buy").click(function(){
            $.get("<?php echo U('classroom/Video/addVideoMerge');?>",{id:$(this).attr('kid')},function(txt){
                if(txt.status){
                    $("#showStatus").removeClass('text_wrong');
                    $("#showStatus").addClass('text_true');
                    //window.href="<?php echo U('classroom/Video/merge');?>";
                }
            },'json');
        });
        //同问
        $('.tongwen').live('click',function(){
            var t_id = $(this).attr('t_id');
            var t_type = $(this).attr('type');
            var _this = $(this);
            eval('var tw_type='+t_type+'_type');//分类类型 1:提问,2:点评,3:笔记
            $.post("<?php echo U('classroom/Index/tongwen');?>",{rid:t_id,type:tw_type},function(txt){
                if(txt.status == 1){
                    var num = parseInt(_this.find('.t_num').text())+1;
                    _this.find('.t_num').text(num);
                }else{
                    notes(txt.info,'failure');
                }
            },'json');
        });
        //显示/隐藏 问题、笔记、点评输入框
        $('.title a,.js-ipt-cancel').click(function(){
            if(id<=0){
                reg_login();
                return false;
            }
            var types = $(this).attr('type');
            $('#'+types+'-comments').toggle();
        });
        $(".js-reply-ipt-default").mousedown(function(){
            $(".qa-reply-footright").css("display","block");
        });
        $("#video_insearch").mousedown(function(){
            $(".qa-reply-footright").css("display","block");
        });
        
        //点击评论取消按钮
        $('.js-ipt-cancel').live('click',function(){
            var cancel_id = $(this).siblings('button.js-ipt-submit').attr('sub_id');
            var cancel_type = $(this).siblings('button.js-ipt-submit').attr('type');
            $("#"+cancel_type+'_'+cancel_id).prev().find('.js-qa-tr-num').show();
            $("#"+cancel_type+'_'+cancel_id).prev().find('.qa-tr-up').hide();
            $("#"+cancel_type+'_'+cancel_id).hide();


            //背景样式
            $("#"+cancel_type+'_'+cancel_id).prev().find(".qa-total-reply.qa-icon").css("background-position","-25px -83px");
            $("#"+cancel_type+'_'+cancel_id).prev().find(".js-qa-tr-num").css("display", "inline");
        });
      //点击收起评论
        $('.qa-total-reply span.qa-tr-up').live('click',function(){
            var cancel_id = $(this).attr('cancel_id');
            var ctype = $(this).attr('type');
            $("#"+ctype+"_"+cancel_id).hide();

            $(this).css("display", "none");
            $(this).siblings(".qa-total-reply .qa-icon").css("background-position","-25px -83px");
            $(this).siblings(".js-qa-tr-num").css("display", "inline");
        });


      //显示评论
      $('.qa-total-reply .js-qa-tr-num').live('click',function(){
    	  if(MID ==0){
    		  reg_login();
    		  return;
    	  }
          $(this).css("display", "none"); //隐藏js-qa-tr-num
          $(this).siblings(".qa-icon").css("background-position","-25px -107px"); //显示js-qa-tr-num同级的qa-icon  hover事件
          $(this).siblings(".qa-tr-up").css({"display":"inline","color":"#333333"}); //显示js-qa-tr-num同级的qa-tr-up
          var show_id = $(this).attr('show_id');
          var stype = $(this).attr('type');
          eval('var kztype='+stype+'_kztype');  //数据分类 1:课程;2:专辑;
          eval('var kzid='+stype+'_kzid');  //课程或者专辑ID
          eval('var type='+stype+'_type');  //分类类型 1:提问,2:点评,3:笔记
         // eval('var limit='+stype+'_limit');  //查询条数
          eval('var page='+stype+'_page');  //当前分页
          $("#"+stype+"_"+show_id).show();
          $.post("<?php echo U('widget/Resource/getListForId');?>",{id:show_id,type:type,limit:6},function(txt){
              showComment(txt.data,stype,show_id,txt.nowPage,txt.count);
              
          },'json');//post
      });


      //显示更多
      $('.qa-reply-more .loadMore').live('click',function(){
          var id = $(this).attr('more_id');
          var moreType = $(this).attr('type');
          var page = $(this).attr('page');
          eval('var moreTypes='+moreType+'_type');  //分类类型 1:提问,2:点评,3:笔记
          eval('var limit='+moreType+'_limit');  //查询条数
          $.post("<?php echo U('widget/Resource/getListForId');?>",{id:id,type:moreTypes,limit:limit,p:page},function(txt){
              showComment(txt.data,moreType,id,txt.nowPage,txt.count);
          },'json');
      });
      


    //@回复
      $('.qst_reply').live('click',function(){
          var atype = $(this).attr('type');
          var reply_id = $(this).attr('reply_uid');
          var id = $(this).attr('reply_id');
          var name = $(this).parents('.qa-reply-item-foot').siblings('.username').find('a').text();
          $('#'+atype+'f_'+id).val('回复@'+name+':');
          $(this).parents('.qa-reply-c').siblings('.qa-reply-ibox').find('.reply_uid').val(reply_id);
          //$('#'+atype+'_'+reply_id).val(reply_uid).attr('checktxt','回复@'+name);
      });


    //点评前判断
      $('.js-reply-ipt-default').live('click',function(){
          if(id<=0){
              reg_login();
              return false;
          }
      });
    //提交评论
      $('button.js-ipt-submit').live('click',function(){
          if(id<=0){
              reg_login();
              return false;
          }
          var sub_id = $(this).attr('sub_id');
          var stype = $(this).attr('type');
          var sub_this = $(this);
          eval('var type='+stype+'_type');  //分类类型 1:提问,2:点评,3:笔记
          var content = $("#"+stype+'f_'+sub_id).val();
          //@用户id
          var reply_uid = parseInt($("#"+stype+'f_'+sub_id).siblings('.reply_uid').val());
          var checktxt = $("#"+stype+'f_'+sub_id).siblings('.reply_uid').attr('checktxt');
          content=content.replace(/&nbsp;/ig, "");
          content = content.replace(/[ ]/g,"");//去除空格
          content = content.replace(/<[^>].*?>/g,"");//去html标签
          //@用户验证
          if(reply_uid != 0){
              content = content.replace(/^回复@[^:：\s]*[:：\s]*/, '');
          }
          if(content == ""){
              notes('请输入评论!','failure');
              return false;
          }
          for(var i=0; i<arr.length; i++)
          {
              if(content.indexOf(arr[i])>-1)
              {
                  notes('评论不得包含敏感词!','failure');
                  return false;
              }
          }
          $.post("<?php echo U('classroom/Index/dowrite');?>",{rid:sub_id,content:content,type:type,rep_uid:reply_uid},function(txt){
              if(txt.status == 1){
                  var  html = '';
                  html += '<div class="qa-reply-item">';
                  html += '<a class="qa-reply-item-author" href="'+txt.data.user_src+'" title="'+txt.data.username+'"><img width="40" height="40" src="'+txt.data.userface+'"></a>';
                  html += '<div class="qa-reply-item-inner">';
                  html += '<p class="username"> <a href="'+txt.data.user_src+'" class="qa-reply-nick">'+txt.data.username+'</a> : </p>';
                  html += '<p class="q-reply-item-c">'+txt.data.description+' </p>';
                  html += '<div class="qa-reply-item-foot clearfix"> <span class="reply-item-index r">#</span> <span>'+txt.data.strtime+'</span> <span class="qa-reply-item-reply js-reply-item-reply qst_reply" reply_uid="'+txt.data.uid+'" type="'+stype+'" reply_id="'+txt.data.parent_id+'"><i class="qa-icon"></i>回复</span> </div>';
                  html += '</div>';
                  html += '</div>';
                  if($("#"+stype+'_'+sub_id+' .qa-reply-c .qa-reply-item').size() <= 0){
                      $("#"+stype+'_'+sub_id+' .qa-reply-c').append(html);
                  }else{
                      $("#"+stype+'_'+sub_id+' .qa-reply-c .qa-reply-item').first().before(html);
                  }
                  //评论条数+1
                  var com_num = parseInt($("#"+stype+'_'+sub_id).prev().find('span.com_num').text())+1;
                  $("#"+stype+'_'+sub_id).prev().find('span.com_num').text(com_num);
                  $("#"+stype+'f_'+sub_id).val('');
              }else{
                  notes(txt.info,'xq_transparent');    
              }
          },'json');
      });


        //设置首页轮播
        setInterval("nextBang()",5000);

    });//控制回答别人回复下面的textarea 提交按钮

var nextBang=function(){
    index = $('.switch-tab .current').index();
    $(this).attr('class')=='prev'? index-=1 : index+=1;
    var silder_size = $('.switch-tab a').size();
    if(index < 0) index = silder_size-1;
    if(index >=silder_size) index = 0;
    $('.switch-tab a').removeClass().eq(index).addClass('current');
    silder(index);
}
	
	//购买操作
var buyOperat = function(id,type){
	if(!id || !type){
		return;
	}
	if($(".agree").size() < 1){
		notes("购买专辑必须同意《收费课程服务协议》",'failure');
		return;
	}
	var id = '<?php echo $_GET["id"]; ?>';
	$.post(U('classroom/Video/buyOperating'),{id:id},function(txt){
		if(txt.status == '0'){
			$(".buyOperating").hide();
			$(".mask").hide();
			$("#charge").attr('id','');
			notes(txt.info,'failure');
		} else {
			$(".buyOperating").hide();
			$("#charge").attr('id','');
			$(".mask").hide();
			notes(txt.info,'success');
			window.location.href = window.location.href;
		}
	},'json');
}


  //处理显示评论
    function showComment(data,type,id,nowPage,count){
        var html = '';
        $.each(data,function(i,k){
            html += '<div class="qa-reply-item">';
            html += '<a class="qa-reply-item-author" href="'+k.user_src+'" title="&#12288;"><img width="40" height="40" src="'+k.userface+'"></a>';
            html += '<div class="qa-reply-item-inner">';
            html += '<p class="username"> <a href="'+k.user_src+'" class="qa-reply-nick">'+k.username+'</a> : </p>';
            if(k.reply_user != ''){
                html += '<p class="q-reply-item-c">回复@<span class="user-reply">'+k.reply_user+'</span>:'+k.content+' </p>';
            }else{
                    html += '<p class="q-reply-item-c">'+k.content+' </p>';
            }
            html += '<div class="qa-reply-item-foot clearfix"> <span class="reply-item-index r">#</span> <span>'+k.strtime+'</span> <span class="qa-reply-item-reply js-reply-item-reply qst_reply" reply_uid="'+k.uid+'" type="'+type+'" reply_id="'+k.parent_id+'"><i class="qa-icon"></i>回复</span> </div>';
            html += '</div>';
            html += '</div>';
        });
        html += '<div class="qa-reply-more"><a page="'+(parseInt(nowPage)+1)+'" class="loadMore" type="'+type+'" more_id="'+id+'" href="javascript:;">击显示更多</a></div>';
        if(nowPage <= 1){
            $("#"+type+"_"+id).find('.qa-reply-c').html('');
        }
        $("#"+type+"_"+id).find('.qa-reply-c').append(html);
        $("#"+type+"_"+id).show();
        if(count <= $("#"+type+"_"+id).find('.qa-reply-item').size()){
            $("#"+type+"_"+id).find('div.qa-reply-more').hide();
        }
     }
function switchnav(obj , id){
	$('li').removeClass('on');
	$(obj).parent().addClass('on');
	if( id == 'video_dir') {
		$('#video_dir').css('display','block');
		$('#video_question').css('display','none');
		$('#video_note').css('display','none');
		$('#video_comment').css('display','none');
	}
	if( id == 'video_question') {
		$('#video_question').css('display','block');
		$('#video_note').css('display','none');
		$('#video_comment').css('display','none');
		$('#video_dir').css('display','none');
	}
	if( id == 'video_note') {
		$('#video_note').css('display','block');
		$('#video_question').css('display','none');
		$('#video_comment').css('display','none');
		$('#video_dir').css('display','none');
	}
	if( id == 'video_comment') {
		$('#video_comment').css('display','block');
		$('#video_question').css('display','none');
		$('#video_note').css('display','none');
		$('#video_dir').css('display','none');
	}
}
  
  
</script>
<!--footer-->
<!--footer-->
<div class="footer">
	<div class="wrap">
    	<div class="footer-main">
        	<div class="footer-logo">
            	<a href="/" title="eduline"><img src="<?php echo ($site["logo_foot"]); ?>" class="logo-img"></a>
                <ul class="logo-ul">
                	<li class="l1"><a href="javascript:;"></a></li>
                    <li class="l2"><a href="javascript:;"></a></li>
                    <li class="l3"><a href="javascript:;"></a></li>
                    <li class="l4"><a href="javascript:;"></a></li>
                </ul>
            </div>
            <?php if(is_array($pageCategory)): ?><?php $i = 0;?><?php $__LIST__ = $pageCategory?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><div class="footer-link">
	            	<dl>
	                	<dt><?php echo ($key); ?></dt>
	                	<?php if(is_array($vo)): ?><?php $i = 0;?><?php $__LIST__ = $vo?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$v): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd><a target="_blank" <?php if($v['url']) { ?> href="<?php echo ($v['url']); ?>" <?php }else{ ?> href="<?php echo U('public/Single/info',array('id'=>$v['id']));?>" <?php } ?> ><?php echo ($v["title"]); ?></a></dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
	                </dl>
	            </div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
            
        </div>
    </div>
    <div class="copyright"><?php echo ($site['site_footer']); ?></div>
</div>

<!-- 统计代码-->
<div id="site_analytics_code" style="display:none;">
<?php echo (base64_decode($site["site_analytics_code"])); ?>
</div>
<?php if(($site["site_online_count"])  ==  "1"): ?><script src="<?php echo SITE_URL;?>/online_check.php?uid=<?php echo ($mid); ?>&uname=<?php echo ($user["uname"]); ?>&mod=<?php echo MODULE_NAME;?>&app=<?php echo APP_NAME;?>&act=<?php echo ACTION_NAME;?>&action=trace"></script><?php endif; ?>


<!--百度推广网页转化-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9efa5e6b982a815a97700d8e78129b16' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>