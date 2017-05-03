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



<!--content start-->
<div class="content">
	<div class="wrap">
    	<ul class="content-nav">
    		<li class="active"><a href="javascript:;" onclick="cateBang(this,0)"><span>全部课程</span></a></li>
    		<?php if(is_array($selCate)): ?><?php $i = 0;?><?php $__LIST__ = $selCate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li onmouseover="mouseups(this);" onmouseout="mouseouts(this);">
	        		<a href="javascript:;"  onclick="cateBang(this,<?php echo ($vo["zy_video_category_id"]); ?>)"><?php echo ($vo["title"]); ?></a>
	        		<?php if($vo['childlist']){ ?>
			        	<div class="content-nav-child">
			        		<?php if(isset($vo["childlist"])): ?><?php foreach($vo["childlist"] as $key=>$li): ?><a href="javascript:;"  onclick="cateBang(this,<?php echo ($li["zy_video_category_id"]); ?>)"><?php echo ($li["title"]); ?></a><?php endforeach; ?><?php endif; ?>
		        		</div>
	        		<?php } ?>
	        	</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
        </ul>
        <div class="content-con">
        	<ul class="content-lei">
                <li class="active"><a href="javascript:;" id="video_default" onclick="order()">综合排序</a></li>
                <li><a href="javascript:;" id="video_collect" class="up-default">销量</a></li>
                <li><a href="javascript:;" id="video_score" class="up-default">评分</a></li>
            </ul>
            <ul class="ind-list"></ul>
        </div>
    </div>
</div>
<script>
    var mid = "<?php echo ($mid); ?>";
    //追加html
    function appendHtml(data){
        $(".more").remove();
        if(data.data!=""){
        $(".ind-list").append(data.data);
        if(data.nowPage+1>data.totalPages){
            return;
        }else{
            var html="<div class=\"more\" ><a href=\"javascript:void(0)\" id=\"getList\">查看更多</a></div>"
            $(".ind-list").append(html);
            p=data.nowPage+1;//下一页

        }
        }else{
         $(".ind-list").append("<script>对不起，暂无此分类课程T_T<\/script>");
        }
    }
    //页面加载完毕执行
    $(function(){
        $.ajax({
            type: "GET",
            url:"<?php echo U('classroom/Video/getList');?>",
            data:"p=1",
            dataType:"json",
            success:function(data){
                appendHtml(data);
            }
        });
    });
    
    //综合排序
   function order(){
       $(".ind-list").html("");
       $('#video_default').parent('li').addClass('active');
       $("#video_collect").parent('li').removeClass('active');
       $("#video_score").parent('li').removeClass('active');
       orderBy="default";
       p=1;
       ajaxBang();
   }
    //销量点击事件
    $("#video_collect").click(
            function(){
            	var _this = this;
                $(".ind-list").html("");
                var i_class = $(_this).attr('class');
                //判断是否有背景
                if( $(_this).parent('li').hasClass('active') ){
                	//判断箭头状态
                    if(i_class == "up-default"){
                    	$(_this).removeClass("up-default").addClass("down-default");
                        orderBy="saleasc";
                    }else{
                    	$(_this).removeClass("down-default").addClass("up-default");
                        orderBy="saledesc";
                    }
                }else{
                	$(_this).parent('li').addClass('active');
                	$('#video_default').parent('li').removeClass('active');
                	$('#video_score').parent('li').removeClass('active');
                	if(i_class == "up-default"){
                		$(_this).removeClass("up-default").addClass("down-default");
                   		orderBy="saledesc";
                    }else{
                    	$(_this).removeClass("down-default").addClass("up-default");
                   		orderBy="saleasc";
                   	}
                }
                p = 1;
                ajaxBang();
            }
    );
    //评论点击事件
    $("#video_score").click(
    		function(){
            	var _this = this;
                $(".ind-list").html("");
                var i_class = $(_this).attr('class');
                //判断是否有背景
                if( $(_this).parent('li').hasClass('active') ){
                	//判断箭头状态
                    if(i_class == "up-default"){
                        orderBy="scoreasc";
                    }else{
                        orderBy="scoredesc";
                    }
                }else{
                	$(_this).parent('li').addClass('active');
                	$('#video_default').parent('li').removeClass('active');
                	$('#video_collect').parent('li').removeClass('active');
                	if(i_class == "up-default"){
                   		orderBy="scoredesc";
                    }else{
                   		orderBy="scoreasc";
                   	}
                }
                p = 1;
                ajaxBang();
            }
    );

    //查看更多点击事件
    $("#getList").live("click",
         function(){
	         $(this).remove();
	         ajaxBang();
         }
    );
    //排序请求事件 TODO
    function ajaxBang(){
        $.ajax({
            type: "GET",
            url:"<?php echo U('classroom/Video/getList');?>",
            data:"p="+p+"&orderBy="+orderBy+"&cateId="+cateId+"&pType="+pType,
            dataType:"json",
            success:function(data){
                appendHtml(data);
            }
        });
    }
    //分类点击
    function cateBang(cate,id){
        $(".ind-list").html("");
        $(cate).parent('li').addClass('active').siblings('li').removeClass('active');
        cateId=id;
        p=1;
        ajaxBang();
    }
    //类型点击
    function redBang(type){
        $(".ind-list").html("");
        pType=type;
        p=1;
        ajaxBang();
    }
    
    function mouseups(cate){
		var left=$(cate).offset().left;
		$(cate).find(".content-nav-child").css("display","block");
   	}
   	function mouseouts(cate){
   		$(cate).find(".content-nav-child").css("display","none");
   	}

</script>
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