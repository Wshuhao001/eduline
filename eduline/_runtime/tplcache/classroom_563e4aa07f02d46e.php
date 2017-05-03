<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php if(($_title)  !=  ""): ?><?php echo ($_title); ?> - <?php echo ($site["site_name"]); ?><?php else: ?><?php echo ($site["site_name"]); ?> - <?php echo ($site["site_slogan"]); ?><?php endif; ?></title>
    <meta content="<?php if(($_keywords)  !=  ""): ?><?php echo ($_keywords); ?><?php else: ?><?php echo ($site["site_header_keywords"]); ?><?php endif; ?>" name="keywords">
    <meta content="<?php if(($_description)  !=  ""): ?><?php echo ($_description); ?><?php else: ?><?php echo ($site["site_header_description"]); ?><?php endif; ?>" name="description">
    <meta name="viewport" charset="UTF-8" content="user-scalable=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
    <link href="__THEME__/image/favicon.ico?v=<?php echo ($site["sys_version"]); ?>" type="image/x-icon" rel="shortcut icon">
    <link href="__THEME__/css/base.css" rel="stylesheet" type="text/css" />
    <link href="__THEME__/css/index.css" rel="stylesheet" type="text/css" />
    <link href="__THEME__/css/hdft.css" rel="stylesheet" type="text/css" />
    <link href="__THEME__/css/logincss.css" rel="stylesheet" type="text/css" />
    <link href="__THEME__/css/wenda.css" rel="stylesheet" type="text/css" />
    <link href="__THEME__/css/video.css" rel="stylesheet" type="text/css" />
	<!--模态层-->
	<style>
		 /* 定义模态对话框外面的覆盖层样式 */
        #modal-overlay {
            display: none;
            position: absolute;
            left: 0;
            top: 0;
            width:100%;
            height:100%;
            text-align:center;
            z-index: 1000;
            background-color: #333;
			/* IE 4-9 兼容性写法*/
            filter:alpha(opacity=50);
            background: rgba(0,0,0,0.5);/* 兼容性写法 */
        }
        /* 模态框样式 */
        .modal-data{
            width:300px;
            margin: 100px auto;
            background-color: #fff;
            border:1px solid #000;
            padding:15px;
			padding-bottom:0 !important;
            text-align:center;
        }
		.box{
			display: -webkit-box; /* OLD - iOS 6-, Safari 3.1-6 */ 
			display: -moz-box; /* OLD - Firefox 19- (buggy but mostly works) */ 
			display: -ms-flexbox; /* TWEENER - IE 10 */ display: -webkit-flex; /* NEW - Chrome */ 
			display: flex; /* NEW, Spec - Opera 12.1, Firefox 20+ */
		}
	</style>
    <script>
        /**
         * 全局变量
         */
        var SITE_URL  = '<?php echo SITE_URL; ?>';
        var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
        var THEME_URL = '__THEME__';
        var APPNAME   = '<?php echo APP_NAME; ?>';
        var MID       = '<?php echo $mid; ?>';
        var UID       = '<?php echo $uid; ?>';
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

    </script>
    <?php if(!empty($langJsList)) { ?>
    <?php if(is_array($langJsList)): ?><?php $i = 0;?><?php $__LIST__ = $langJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo ($vo); ?>?v=<?php echo ($site["sys_version"]); ?>"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    <?php } ?>
    <script src="__THEME__/js/js.php?t=js&f=jquery-1.7.1.min.js,jquery.form.js,common.js,core.js,module.js,module.common.js,jwidget_1.0.0.js,jquery.atwho.js,jquery.caret.js,ui.core.js,ui.draggable.js,plugins/core.comment.js,plugins/core.digg.js&v=<?php echo ($site["sys_version"]); ?>.js"></script>
    <script src="__THEME__/js/plugins/core.comment.js?v=<?php echo ($site["sys_version"]); ?>"></script>
    <script src="__THEME__/js/user/user.js"></script>
    <script src="__THEME__/js/cyjs/title_common.js"></script>
    <script src="__THEME__/js/cyjs/cyjs_common.js"></script>
    <script src="__THEME__/js/cyjs/offlights.js"></script>
    <!--ckplayer  -->
    <script src="__ROOT__/player/ckplayer/ckplayer.js"></script>
    <!-- cuplayer -->
    <script type="text/javascript" src="__ROOT__/player/cuplayer/js/action.js"></script>
    <script type="text/javascript" src="__ROOT__/player/cuplayer/js/swfobject.js"></script>
    <script type="text/javascript" src="__ROOT__/player/audiojs/audio.min.js"></script>
    <script type="text/javascript" src="http://cdn.bootcss.com/blueimp-md5/1.1.0/js/md5.min.js"></script>


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

<?php } ?>
<!-- 遮罩层 -->
<div class="mask"></div>
<div class="clear"></div>
<!-- 购买确认弹出框 -->
<div class="buyOperating">
    <div class="w-close"><a class="mr15 mt5">×</a></div>
    <div class="w-notice">
        <h4>提示：该专辑需要支付<em id="myxuebinum" class="coin_num_l">0</em>学币，您当前账户余额为<em class="coin_num_l"><?php echo ($balance['balance']); ?></em>学币。是否继续？</h4>
    </div>
    <div class="agreement">
        <a><span id="protocol" class="agree"></span>我已经阅读并同意</a>
        <a>《收费课程服务协议》</a>
    </div>
    <div class="buy-btn">
        <a class="btn"  onclick="buyOperat(<?php echo ($vid); ?>);">确认支付</a>
        <a class="btn" href="<?php echo U('classroom/User/recharge');?>">充值</a>
        <a class="btn cancel">暂不支付</a>
    </div>
</div>
<!--
<div class="coursebox f-cb" id="j-coursebox">-->
    <div class="g-mn2c m-courselb">
        <div id="video_play1" class="m-courselearn">
            <!--左边视屏头部标题系列-->
            <div class="video-top">
                <div class="video-top-l">
                <?php if( $type == 1): ?><a href="<?php echo U('classroom/Video/view','id='.$aid);?>"><i class="video-fh"></i><span>返回课程主页&nbsp;&nbsp;&nbsp;|</span></a>
                <?php else: ?>
                 <a href="<?php echo U('classroom/Album/view','id='.$aid);?>"><i class="video-fh"></i><span>返回专辑主页&nbsp;&nbsp;&nbsp;|</span></a><?php endif; ?>
                </div>
                <div class="video-top-con">
                    <a class="cl-pre" id="j-prev" href="#"></a>
                    <h2><?php echo ($video_title); ?></h2>
                    <a class="cl-next" id="j-next" href="#"></a>
                </div>
                <div class="video-top-r">
                <?php if(($is_free)  ==  "0"): ?><a id="buyNowTop" href="javascript:;" class="fl">购买课程</a><?php endif; ?>
                <?php if( $is_colle == 0): ?><a class="wenda-gz fr" href="javascript:;" onClick="collectVideo(this,<?php echo ($vid); ?>)" title="收藏课程"></a>
                 <?php else: ?>
                  <a class="wenda-gz-Toggle"  href="#" title="已收藏此课程"></a><?php endif; ?>
                </div>
            </div>
            <!--end-->
            <!-- zhangr - start - video -->
            <div class="learn-box" id="video_stop"></div>
            <!---视屏提示-->
            <div class="vedioPlay-msg" style="display: none">
                <div class="vedioPlay-msgbox">
                    <p>需要继续观看视频，<a id="buyNow" href="javascrpt:;">立即购买！</a></p>
                </div>
            </div>
            <!--视屏提示结束-->
            
            <?php if($video_type == 1){ ?>
                <div id="vplayer" class="learn-box"></div>
            <?php }else if($video_type == 2){ ?>
                <script>
                  audiojs.events.ready(function() {
                    audiojs.createAll();
                  });
                </script>
                <div id="mplayer" class="learn-box"><audio src="<?php echo ($video_address); ?>" preload="auto"></audio></div>
            <?php }else if($video_type == 3){ ?>
                <div id="tplayer" class="learn-box"><?php echo ($video_address); ?></div>
            <?php }else if($video_type == 4){ ?>
                <div id="dplayer" class="learn-box"> <iframe src="__THEME__/js/pdfjs/web/viewer.html?file=<?php echo ($video_address); ?>" width="100%" height="100%"></iframe> </div>
            <?php } ?>
            
            <?php if($player_type && $player_type == 'ck'){ ?>
                <script type="text/javascript">
                    var flashvars={
                        f:"<?php echo ($video_address); ?>",
                        c:0,
                       /* p:1,*/
                        loaded:'loadedHandler'
                    };
                    <?php if($is_free==0 && $isBuyVideo==0){ ?>
                        function loadedHandler(){
                            if(CKobject.getObjectById('ckvideo').getType()){
                                //说明使用html5播放器
                                CKobject.getObjectById('ckvideo').addListener('time',timeHandler);
                            }else{
                                CKobject.getObjectById('ckvideo').addListener('time','timeHandler');
                            }

                        }
                        var ispause=false;
                        var test_time=<?php echo ($test_time); ?>;
                        function timeHandler(t){
                            if (!ispause && t>test_time){
                                ispause=true;
                                CKobject.getObjectById('ckvideo').videoPause();
                                $("#vplayer").remove();

                                $(".vedioPlay-msg").css("display","block");
                            }
                        }
                    <?php }else{ ?>
                        function loadedHandler(){
                            CKobject.getObjectById('ckvideo').addListener('time','timeHandler');
                        }

                        function timeHandler(t){
                            if(t>-1){
                                addLearnLog(t);
                            }
                        }
                    <?php } ?>

                    
                    function addLearnLog(timespan){
                        var t = parseInt(timespan);
                        if(t && (t % 4 == 0)){
                            lastAddtime = t;
                            $.ajax({
                                type: "POST",
                                url:"<?php echo U('classroom/Video/updateLearn');?>",
                                data:{time:t,vid:<?php echo $_GET['id']; ?>,sid:<?php echo $sid; ?>},
                                dataType:"json",
                                success:function(){
                                }
                            });
                            
                        }
                    }

                    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:"transparent"};
                    var video=["<?php echo ($video_address); ?>"];
                    CKobject.embed('__ROOT__/player/ckplayer/ckplayer.swf','vplayer','ckvideo','100%','100%',false,flashvars,video,params);
                </script>
            <?php }else { ?>
                <?php $myurl = $files = $video_address;
                    include('player/cuplayer/base64HX.php'); ?>
                
                    <script type="text/javascript">
                    var so = new SWFObject("__ROOT__/player/cuplayer/player.swf","ply","100%","100%","9","#000000");
                    
                    so.addVariable("JcScpVideoPath", "<?php echo $mycipher;?>");//视频地址
                    so.addVariable("JcScpFile","__ROOT__/player/cuplayer/CuSunV3set.php");//配置文件
                    so.addVariable("ShowJcScpAFront","no");//前置广告
                    so.addVariable("ShowJcScpAVideo","no");//前置广告
                    so.addVariable("ShowJcScpACorner","no");//角标广告
                    
                    //so.addVariable("CuPlayerShowControl","false");
					//so.addVariable("CuPlayerAutoHideControl","false");

					so.addParam("allowfullscreen","true");//全屏
                    <?php if($is_free==0 && $isBuyVideo==0){ ?>
                        so.addVariable("JcScpEndTime","<?php echo ($test_time); ?>");
                    <?php } ?>
                    so.write("vplayer");
                    function getEnd(pars){  
                        $(".vedioPlay-msg").css("display","block");
                        $('#vplayer').html('');
                    }
                    </script> 
                
            <?php } ?>
            
            
            
            
            <!-- zhangr - end - video -->
            <div class="cl-info f-cb">
               <!--  <div class="cli-intro"><i></i><a href="#">资源下载</a></div>
                <div class="cli-phon"><i></i><a href="#">手机观看</a></div> -->
                <div style="" title="分享" class="cli-share j-sharebox auto-1390289261253-parent" id="auto-id-Wgv0KyQS2q5GtCJz">
                    <span class="fl">分享到：</span>
                    <div data-bd-bind="1411956524693" class="bdsharebuttonbox bdshare-button-style1-16">
                        <a data-cmd="more" class="bds_more " href="#"></a>
                        <a title="分享到微信" data-cmd="weixin" class="bds_weixin" href="#"></a>
                        <a title="分享到QQ好友" data-cmd="sqq" class="bds_sqq" href="#"></a>
                        <a title="分享到QQ空间" data-cmd="qzone" class="bds_qzone" href="#"></a>
                        <a title="分享到新浪微博" data-cmd="tsina" class="bds_tsina" href="#"></a>
                    </div>
                    <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","sqq","qzone","tsina","tqq","renren","kaixin001","douban"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                </div>
            </div>
            <!--底部加分享系列-->
            <div id="j-hideRightBtn" class="u-hideleftbtn" title="隐藏课程目录"></div>
        </div>
        
    </div>
    
<!--模态层-->
<div id="modal-overlay">
    <div class="modal-data">
        <!--拍照验证区域-->
        <div class="zhaoxiang" style="position:relative;margin-bottom:30px;">
            <div class="my-video" style="">
                <video id="video" autoplay="" style='width:300px;height:200px;'></video>
				<div class="box" style="padding-left:17px">
                    <p id="paizhao" style="width:132px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3;margin-right:2px">拍　　　照</p>
                    <p id="fanhuikecheng" onClick="javascript:window.location.href='/course.html'" style="width:132px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3">返回课程页</p>
                </div>
            </div>
            <div class="my-canvas" style="display: none;">
                <canvas id="canvas" width="265" height="200" style=""></canvas>
                <div class="box" style="padding-left:17px">
                    <p id="shangchuan" style="width:132px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3;margin-right:2px">上传验证</p>
                    <p id="chongxinpaizhao" style="width:132px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3">重新拍照</p>
                </div>
            </div>
        </div>
        <!--拍照验证区域结束-->
        <!--<p>点击<a onclick="xiaoshi()">这里</a>关闭</p>-->
    </div>
</div>
<!--模态层结束-->
<!------------右边------------>
<div id="course-toolbar-box" class="g-sd2">
    <!--拍照验证区域-->
    <!--<div class="zhaoxiang" style="position:relative;margin-bottom:30px;">
        <div class="my-video" style="">
            <video id="video" autoplay="" style='width:300px;height:200px;'></video>
            <p id="paizhao" style="width:271px;margin-left:17px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3">拍　　　照</p>
        </div>
        <div class="my-canvas" style="display: none;margin-left: 17px;">
            <canvas id="canvas" width="265" height="200" style=""></canvas>
            <div class="box" style="display: flex">
                <p id="shangchuan" style="width:132px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3;margin-right:2px">注册上传</p>
                <p id="chongxinpaizhao" style="width:132px;color:#fff;text-align: center;background: #1981E8;cursor: pointer;margin-top:20px;line-height: 2.3">重新拍照</p>
            </div>
        </div>
    </div>-->
    <!--拍照区域结束-->
    <div class="m-ctb">
        <!--右边上面第一部分-->
        <div class="courseintro">
            <h2><?php echo ($video_title); ?></h2>
            <div class="video_rinfo">
                <img src="<?php echo getCover($cover,147,95);?>" />
                <div class="video_rinfo-con">
                    <ul class=" fl">
                        <span>评分：</span>
                        <li class="<?php if($score > 0 ): ?>grade-back-set<?php else: ?>grade-back-default<?php endif; ?>"></li>
                        <li class="<?php if($score > 1 ): ?>grade-back-set<?php else: ?>grade-back-default<?php endif; ?>"></li>
                        <li class="<?php if($score > 2 ): ?>grade-back-set<?php else: ?>grade-back-default<?php endif; ?>"></li>
                        <li class="<?php if($score > 3 ): ?>grade-back-set<?php else: ?>grade-back-default<?php endif; ?>"></li>
                        <li class="<?php if($score > 4 ): ?>grade-back-set<?php else: ?>grade-back-default<?php endif; ?>"></li>
                    </ul>
                    <p>购买人数:<?php echo ($video_order_count); ?>人</p>
                    <p>上架时间:<?php echo (date('Y-m-d',$listingtime)); ?></p>
                    <p>更新时间:<?php echo (date('Y-m-d',$utime)); ?></p>
                </div>
            </div>
        </div>
        <!--右边teb-->
        <ul class="tabs" id="tags">
            <li class="current"><a style="color:#FFF;" href="javascript:;" onClick="muluBang(this)" class=""><i class="tabs-ml"></i>目录</a></li>
            <li><a href="javascript:;" id="note" onClick="noteBang(this,<?php echo ($aid); ?>,<?php echo ($type); ?>)"><i class="tabs-bj"></i>笔记</a></li>
            <!-- <li><a href="javascript:;" ><i class="tabs-dp"></i>点评</a> </li> -->
            <li><a href="javascript:;" id="question" onClick="questionBang(this,<?php echo ($aid); ?>,<?php echo ($type); ?>)"><i class="tabs-tw"></i>提问</a></li>
        </ul>
    </div>
    <!--teb内容切换盒子-->
    <div id="tagcontent_box">
        <!--课程-->
        <div class="m-chapterList" id="tagcontent0" style="display: block;">
        
        <?php if(is_array($menu)): ?><?php $i = 0;?><?php $__LIST__ = $menu?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><div class="section">
                <div class="section_bj"> </div>
                <a class="fl ksname"  href="javascript:;" ><?php echo limitNumber($vo['title'], 25);?></a>
            </div>
            <?php if($vo['child']){ ?>
            <?php if(is_array($vo["child"])): ?><?php $i = 0;?><?php $__LIST__ = $vo["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo1): ?><?php ++$i;?><?php $mod = ($i % 2 )?><div <?php if( $sid == $vo1['zy_video_section_id']): ?>class="section-cur section" <?php else: ?>class="section"<?php endif; ?> >
                    <div class="section_bj"> </div>
                    <span class="fl ksicon-30-mark ksicon-0-mark"></span> 
                    <a class="fl ksname"  href="<?php echo U('classroom/Video/watch','id='.$vo1['vid'].'&s_id='.$vo1['zy_video_section_id'] );?>" ><?php echo limitNumber($vo1['title'], 25);?></a>
                </div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
            <?php } ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
               
        
        </div>
        <!--笔记-->
        <div class="p10 tagcontent txt_l" id="tagcontent1" style="display: none">
            <form>
                <input type="hidden" value="1" name="kztype">
                <input type="hidden" value="0" class="kzid" name="kzid">
                <div class="tips1 l5">我的笔记</div>
                <div class="editwrap_tittle mt22">
                 <div class="tips r5">标题限<span id="notetittle_length">45</span>字符内</div>
                    <textarea name="tittle" class="j-edittxt edittxt" maxlength="50" id="notetittle" placeholder="在此输入笔记标题... " onblur=""></textarea>
                    <label for="edittxt" class="j-hint hint" id="auto-id-drt6TisVISpRhnQa"></label>
                </div>
                <div class="editwrap mt22">
                 <div class="tips r5">内容限<span id="notecont_length">300</span>字符内</div>
                    <textarea name="content" class="j-edittxt edittxt" maxlength="100" id="notecont" placeholder="在此记录你的想法... "></textarea>
                    <label for="edittxt" class="j-hint hint" id="auto-id-drt6TisVISpRhnQa"></label>
                </div>
                <div class="mt5 clearfix">
                    <label class="checklabel fl">
                        <input type="checkbox" class="j-privatecheck" hidefocus="true" id="note_isopen" checked="checked" value="1" name="is_open">
                        &nbsp;公开</label>
                    <input type="button" onClick="noteaddBang(this,<?php echo ($aid); ?>,<?php echo ($type); ?>)" class="bg_btn_gray Secrecy fr" style="cursor:pointer" value="保存">
                </div>
            </form>
              <ul class="video-list"></ul>
              <div style="margin-top:28px;" class="wie" id="txtmydianbonote">
                <div style="text-align:center;height:auto;overflow:hidden; color:#999999; font-size:12px">暂无数据</div>
              </div>
        </div>
        <div class="p10 tagcontent txt_r" id="tagcontent3" style="display: none;">
            <form >
                <input type="hidden" value="1" name="kztype">
                <input type="hidden" value="0" class="kzid" name="kzid">
                <div class="tips1 l5">我的提问</div>
                <!--
                <div class="editwrap_tittle mt22">
                 <div class="tips r5">标题限<span id="questiontitle_length">45</span>字符内</div>
                    <textarea name="tittle" class="j-edittxt edittxt" maxlength="50" id="questiontitle" placeholder="请键入问题标题... "></textarea>
                    <label for="edittxt" class="j-hint hint" id="auto-id-drt6TisVISpRhnQa"></label>
                </div>
                -->
                <div class="editwrap mt22">
                 <div class="tips r5">内容限<span id="questioncont_length">450</span>字符内</div>
                    <textarea name="content" class="j-edittxt edittxt" maxlength="100" id="questioncont" placeholder="请添加问题描述... "></textarea>
                    <label for="edittxt" class="j-hint hint" id="auto-id-drt6TisVISpRhnQa"></label>
                </div>
                <div class="mt5 clearfix">
                    <input type="button" onClick="addquestionBang(this,<?php echo ($aid); ?>,<?php echo ($type); ?>)" style="border:none;cursor:pointer;" class="bg_btn_gray Secrecy fr" value="保存">
                </div>
            </form>
             <ul class="video-list">
               
                </ul>
            <div style="margin-top:28px;" class="wie" id="txtmydianboqst">
                <div style="text-align:center;height:auto;overflow:hidden; color:#999999; font-size:12px">暂无数据</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
	//模态层区域
	function overlay(){
        var e1 = document.getElementById('modal-overlay');
        e1.style.display = "block";
    };
    overlay();
    //function xiaoshi(){
    //    $("#modal-overlay").hide();
    //}
	
    //拍照区域js开始
    var video=document.getElementById("video");
    var context=canvas.getContext("2d");
    var errocb=function(){
        console.log("sth srong");
    };
    if(confirm('学习视频前需要进行用户人脸验证，您确定要打开摄像头进行人脸验证吗?'))
    {
        if(navigator.getUserMedia){
            navigator.getUserMedia({video: { width: 300, height: 200},"video":true},function(stream){
                video.src=stream;
                video.play();
            },errocb);
        }else if(navigator.webkitGetUserMedia){
            navigator.webkitGetUserMedia({video: { width: 300, height: 200},"video":true},function(stream){
                video.src=window.webkitURL.createObjectURL(stream);
                video.play();
            },errocb);
        } 
		
	}else{
		window.location.href='/course.html';
	}
    var mydataPic=null;
    document.getElementById("paizhao").addEventListener("click",function(){
        $(".my-video").hide();
        $(".my-canvas").show();
        context.drawImage(video,0,0,265,200);
       /* document.getElementById("paizhao").innerHTML="重新拍照";*/
        var imgData=canvas.toDataURL();
        mydataPic=imgData.substring(22);
    });
    //重新拍照
    $("#chongxinpaizhao").click(function(){
        $(".my-canvas").hide();
        $(".my-video").show();
    });
    //点击上传ajax
    document.getElementById("shangchuan").addEventListener("click",function(){
        //console.log( mydataPic);
        // alert("我被点击了");
        $.ajax({
            type: "POST",
            url: "/index.php?app=classroom&mod=Youtuface&act=faceverify",
            data: {"img":mydataPic},
            success: function(data){
                if(data=="true"){
                    alert("通过验证");
					$("#modal-overlay").hide()
                }else{
                    //alert("未登录");
					//$("#modal-overlay").hide();
                }
            }
        });
    })




    //拍照区域js结束

    $('#notetittle').bind('input propertychange', function() {
        length=45-$("#notetittle").val().length;
        $("#notetittle_length").html(length);
    });
    $('#notecont').bind('input  propertychange', function() {
        length=300-$("#notecont").val().length;
        $("#notecont_length").html(length);
    });
    $('#questiontitle').bind('input propertychange', function() {
        length=45-$("#questiontitle").val().length;
        $("#questiontitle_length").html(length);
    });
    $('#questioncont').bind('input propertychange', function() {
        length=450-$("#questioncont").val().length;
        $("#questioncont_length").html(length);
    });
    //收藏课程
    function collectVideo(cate,vid){
        if(UID=='0'){
            reg_login();
            return;
        }
        $.ajax({
            type: 'POST',
            url:"<?php echo U('classroom/Public/collect');?>",
            data:{type:1,sctype:2,source_id:vid},
            dataType:"json",
            cache: false,
            success: function(data){
                if(data.status == '0'){
                    notes(data.info,'failure');
                } else {
                    $(cate).removeClass().addClass("wenda-gz-Toggle");
                }
                
            },
            
        });
    }
    
    $(function(){
        $('#myxuebinum').html(parseFloat(<?php echo $price;?>)); 
        //获取上一个兄弟节点的href
        var prevhref=$('.section-cur').prev().children('a').attr("href");
        $("#j-prev").attr("href",prevhref);
        //获取下一个兄弟节点href
        var nexthref=$('.section-cur').next().children('a').attr("href");
        $("#j-next").attr("href",nexthref);
        //立即购买
        $("#buyNow,#buyNowTop").live('click',function(){
            var mid = "<?php echo ($mid); ?>";
            if(mid <= 0){
                reg_login();
                return false;
            }
            $('.buyOperating').show();
            var mask_height = $(document).height();
            $('.mask').height(mask_height).show();
            return false;
        });
        //暂不购买
        $('.w-close a,.buy-btn .cancel').live('click',function(){
            $('.buyOperating,.mask').hide();
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
    }); 
    var status=1;//1为展开  0为收缩
    var width=$("#course-toolbar-box").width();
    var vwidth=$(".m-courselearn").width();
    $("#j-hideRightBtn").click(function(){
      if(status==1){
          var cont=width+vwidth;
          $(this).removeClass().addClass("u-hiderightbtn");

          $("#course-toolbar-box").animate({width:"0px"});
          $(".m-courselearn").animate({width:cont});
          status=0;
      }else{
          var csum=vwidth-width;
          $(this).removeClass().addClass("u-hideleftbtn");
          $("#course-toolbar-box").animate({width:width});
          $(".m-courselearn").animate({width:vwidth});
          status=1;
      }
    });
  
    //目录点击
    function muluBang(cate){
        $("#tagcontent_box").children().css("display","none");
        $("#tags").children().removeClass("current");
        $("#tagcontent0").css("display","block");
        $(cate).parent().addClass("current");
        
    }
    //笔记点击
    function noteBang(cate,aid,type){
        $("#tagcontent_box").children().css("display","none");
        $("#tags").children().removeClass("current");
        $("#tagcontent1").css("display","block");
        $(cate).parent().addClass("current");
        $.ajax({
            type: 'POST',
            url:"<?php echo U('classroom/Album/getnotelist');?>",
            data:{type:type,oid:aid},
            dataType:"json",
            cache: false,
            success: function(data){
                if(data.data!=""){
                    $(".video-list").html("");
                    $(".video-list").append(data.data);
                    $("#txtmydianbonote").css("display","none");
                }
                
            },
            
        });
    }
    //提问点击
    function questionBang(cate,aid,type){
        $("#tagcontent_box").children().css("display","none");
        $("#tags").children().removeClass("current");
        $("#tagcontent3").css("display","block");
        $(cate).parent().addClass("current");
        $.ajax({
            type: 'POST',
            url:"<?php echo U('classroom/Album/getquestionlist');?>",
            data:{type:type,oid:aid},
            dataType:"json",
            cache: false,
            success: function(data){
                if(data.data!=""){
                    $(".video-list").html("");
                    $(".video-list").append(data.data);
                    $("#txtmydianbonote").css("display","none");
                }
                
            },
            
        });
    }
    //添加笔记
    function noteaddBang(cate,aid,type){
         if(MID=='0'){
             reg_login();
             return;
         }
        var cont=$("#notecont").val();
        var tittle=$("#notetittle").val();
         var isopen=0;
      if($("#note_isopen").attr("checked")){
        isopen=1;
      }
      $(cate).val("保存中..");
      $(cate).attr("disabled",true); 
     $.ajax({
        type: 'POST',
        url:"<?php echo U('classroom/Note/add');?>",
        data:{kztype:type,kzid:aid,is_open:isopen,title:tittle,content:cont},
        dataType:"json",
        cache: false,
        success: function(data){
            if(data.status == '0'){
                $(cate).val("保存");
                $(cate).attr("disabled",false); 
                notes(data.info,'failure');
            } else {
                $("#notecont").val("");
                $(cate).val("保存");
                $(cate).attr("disabled",false); 
                noteBang("#note",aid,type);
            }
              
            
        },
        
       });
    }
    
    //添加提问
    function addquestionBang(cate,aid,type){
         if(MID=='0'){
             reg_login();
             return;
         }

      var cont = $("#questioncont").val();
      var title= $("#questiontitle").val();

      $(cate).val("保存中..");
      $(cate).attr("disabled",true); 
     $.ajax({
        type: 'POST',
        url:"<?php echo U('classroom/Question/add');?>",
        data:{kztype:type,kzid:aid,title:title,content:cont},
        dataType:"json",
        cache: false,
        success: function(data){
            if(data.status == '0'){
                $(cate).val("保存");
                $(cate).attr("disabled",false); 
                notes(data.info,'failure');
            } else {
                $("#questioncont").val("");
                $(cate).val("保存");
                $(cate).attr("disabled",false); 
                questionBang("#question",aid,type);
            }
              
            
        },
        
    });
    }
    //购买操作
    var buyOperat = function(id){
        if(!id){
            notes('该课程不存在','failure');
            return;
        }
        if($(".agree").size() < 1){
            notes("购买专辑必须同意《收费课程服务协议》",'failure');
            return;
        }
       // var id = '<?php echo $_GET["aid"]; ?>';
        $.post(U('classroom/Video/buyOperating'),{id:id},function(txt){
            if(txt.status == '0'){
                $(".buyOperating").hide();
                $(".mask").hide();
                notes(txt.info,'failure');
            } else {
                $(".buyOperating").hide();
                $(".mask").hide();
                notes(txt.info,'success');
                window.location.href = window.location.href;
            }
        },'json');
} 
    
    
    
    
    
    
</script>