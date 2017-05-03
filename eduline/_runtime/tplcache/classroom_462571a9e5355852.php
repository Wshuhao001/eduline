<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo APPS_URL;?>/admin/_static/admin.css" rel="stylesheet" type="text/css">
<link href="__THEME__/image/favicon.ico?v=<?php echo ($site["sys_version"]); ?>" type="image/x-icon" rel="shortcut icon">
<script>
/**
 * 全局变量
 */
var SITE_URL  = '<?php echo SITE_URL; ?>';
var THEME_URL = '__THEME__';
var APPNAME   = '<?php echo APP_NAME; ?>';
var UPLOAD_URL ='<?php echo UPLOAD_URL;?>';
var MID		  = '<?php echo $mid; ?>';
var UID		  = '<?php echo $uid; ?>';
// Js语言变量
var LANG = new Array();
</script>
<script type="text/javascript" src="__THEME__/js/jquery.js"></script>
<script type="text/javascript" src="__THEME__/js/core.js"></script>
<script src="__THEME__/js/module.js"></script>
<script src="__THEME__/js/common.js"></script>
<script src="__THEME__/js/module.common.js"></script>
<script src="__THEME__/js/module.weibo.js"></script>
<script type="text/javascript" src="<?php echo APPS_URL;?>/admin/_static/admin.js?t=11"></script>
<script type="text/javascript" src = "__THEME__/js/ui.core.js"></script>
<script type="text/javascript" src = "__THEME__/js/ui.draggable.js"></script>

<script type="text/javascript" src = "__THEME__/js/swfupload/js/fileprogress.js"></script>
<script type="text/javascript" src = "__THEME__/js/swfupload/js/handlers.js"></script>
<script type="text/javascript" src = "__THEME__/js/swfupload/swfupload/swfupload.js"></script>
<script type="text/javascript" src = "__THEME__/js/swfupload/js/swfupload.queue.js"></script>
<?php /* 非admin应用的后台js脚本统一写在  模板风格对应的app目录下的admin.js中*/
if(APP_NAME != 'admin' && file_exists(APP_PUBLIC_PATH.'/admin.js')){ ?>
<script type="text/javascript" src="<?php echo APP_PUBLIC_URL;?>/admin.js"></script>
<?php } ?>
<?php if(!empty($langJsList)) { ?>
<?php if(is_array($langJsList)): ?><?php $i = 0;?><?php $__LIST__ = $langJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo ($vo); ?>"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php } ?>
</head>
<body>

<script type="text/javascript" src = "__THEME__/js/swfupload/js/fileprogress.js"></script>
<script type="text/javascript" src = "__THEME__/js/swfupload/js/handlers.js"></script>
<script type="text/javascript" src = "__THEME__/js/swfupload/swfupload/swfupload.js"></script>
<script type="text/javascript" src = "__THEME__/js/swfupload/js/swfupload.queue.js"></script>

<?php set_time_limit(0); ?>
	<link rel="stylesheet" href="__THEME__/js/swfupload/css/style.css">
	<style type="text/css">
		.ico_top, .ico_btm {background: url("__THEME__/admin/image/ico_top_btm.gif") no-repeat scroll 0 0 transparent; height: 14px;width: 12px;}
		.ico_top, .ico_btm { display: inline-block; vertical-align: middle;}
		.ico_top { background-position: -12px 0;}
		.ico_btm {background-position: -24px 0;}
		.ico_top:hover { background-position: 0 0;}
		.ico_btm:hover { background-position: -35px 0;}
	</style>
	
	<script type="text/javascript">
	var swfu;
	window.onload = function() {
		var uptoken = "<?php echo ($uptoken); ?>";
		var filename= "<?php echo ($filename); ?>";
		var entrycode="<?php echo ($entrycode); ?>";
		var settings = {
			flash_url : "__THEME__/js/swfupload/swfupload/swfupload.swf",
			upload_url: "http://upload.qiniu.com",
			post_params: {"token" :uptoken ,"key" :filename,"persistentOps": "avthumb/mp4|saveas/cWJ1Y2tldDpxa2V5;avthumb/flv|saveas/cWJ1Y2tldDpxa2V5Mg=="},
			file_size_limit : "1024 MB",
			file_post_name:'file',
			file_types : "*.flv;*.f4v;*.mp4;*.mp3;*.pdf",
			file_types_description : "All Files",
			file_upload_limit : 1,  //配置上传个数
			file_queue_limit : 0,
			custom_settings : {
				progressTarget : "fsUploadProgress",
				cancelButtonId : "btnCancel"
			},
			debug: false,
			// Button settings
			button_image_url: "__THEME__/js/swfupload/TestImageNoText_65x29.png",
			button_width: "100",
			button_height: "29",
			button_top_padding: 30,
			button_placeholder_id: "spanButtonPlaceHolder",
			button_text_style: ".theFont { font-size: 16; }",
			button_text_left_padding: 12,
			button_text_top_padding: 3,	
			file_queued_handler : fileQueued,
			file_queue_error_handler : fileQueueError,
			file_dialog_complete_handler : fileDialogComplete,
			upload_start_handler : uploadStart,
			upload_progress_handler : uploadProgress,
			upload_error_handler : uploadError,
			upload_success_handler : uploadSuccess,
			upload_complete_handler : uploadComplete,
			queue_complete_handler : queueComplete	
		};
		swfu = new SWFUpload(settings);
     };
     function testclick(){
    	 swfu.cancelQueue_misszhou();
     }
	</script>

	<div id="container" class="so_main">
    <div class="page_tit">上传文件</div>

    <?php if(!empty($pageTab)): ?>
	    <div class="tit_tab">
	        <ul>
	        <?php !$_REQUEST['tabHash'] && $_REQUEST['tabHash'] =  $pageTab[0]['tabHash']; ?>
		        <?php if(is_array($pageTab)): ?><?php $i = 0;?><?php $__LIST__ = $pageTab?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$t): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li><a href="<?php echo ($t["url"]); ?>&tabHash=<?php echo ($t["tabHash"]); ?>" <?php if($t['tabHash'] == $_REQUEST['tabHash']){ echo 'class="on"';} ?>><?php echo ($t["title"]); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
	        </ul>
	    </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo U('classroom/AdminVideo/addVideoLib');?>" id="detail_form" name="detail_form" onsubmit="return checkForm(this);">
    	<input type="hidden" name="systemdata_list" value="video_Admin" class="s-txt">
    	<input type="hidden" name="systemdata_key" value="addVideo" class="s-txt">
    	<input type="hidden" name="pageTitle" value="添加视频" class="s-txt">
    	<input type="hidden" name="id" value="<?php echo ($id); ?>" />
    	<div class="form2">
    		
    		<dl class="lineD" ">
		      	<dt><font color="red"> * </font>文件名称：</dt> 
		      	<dd>
		      		<input name="title" type="text" value="<?php echo ($title); ?>" class="s-txt">
		    	</dd>
		    </dl>

    		<dl class="lineD" <?php if($_GET['id']){ ?>style="display:none"<?php } ?> >
		      	<dt>类型：</dt>
		      	<dd>
      	        	<label><input type="radio" name="type" value="1" checked="checked">视频 </label>            		
      	        	<label><input type="radio" name="type" value="2"  >音频 </label>            		              	
      	        	<label><input type="radio" name="type" value="3"  >文本 </label>            		              	
      	        	<label><input type="radio" name="type" value="4"  >文档 </label>  
      	        	<br/>
      	        	<p>如果是文档文件，请将上传空间配置为“本地”</p>          		              	
		    	</dd>

		    </dl>
            
            <dl <?php if($_GET['id']){ ?>style="display:none"<?php } ?> class="lineD" >
		    	<dt><font color="red"> * </font>上传文件：</dt>
		    	<dd>
		    		<div id="video">
		    	     <?php if($upload_room == 0){ ?> 
		    	         <?php echo W('UploadAttach',array('limit'=>'1','allow_exts'=>'flv,f4v,mp4,mp3,pdf'));?>
		    	     <?php }else{ ?> 
						 <div id="content">
							<div class="swfupload-box">
							    <p>点击“浏览”按钮，选择您要上传的文件后，系统将自动上传并在完成后提示您。</p>
							    <p>一次只能上传一个视频文件！</p>
							    <p>支持流行视频格式flv，f4v，mp4，mp3，pdf</p>
								<form id="form1" action="index.php" method="post" enctype="multipart/form-data">
									<div class="fieldset flash" id="fsUploadProgress"></div>
									<div style="margin-top:15px;">
										<div style="width:auto;float:left;"><span id="spanButtonPlaceHolder" ></span></div>
										<input id="btnCancel" type="button" value="取消上传" onclick="testclick();" disabled="disabled" style="margin-left: 5px; font-size: 8pt; height: 29px;" />
									</div>
								</form>
							</div>
						</div>
					<?php } ?>
					</div>

					<div id="doc" style="display: none;">
					<?php echo W('Editor',array('width'=>'90%','contentName'=>'content'));?>
					</div>
		    	</dd>
		    </dl>


		    <input id="videokey" name="videokey" type="hidden" value="<?php echo ($videokey); ?>">
		    <input name="video_address" type="hidden" value="<?php echo ($video_path); ?>">
		    <div class="page_btm">
			<input type="submit" class="btn_b" value="保存" id="form_submit">
    	</div>
    	</div>
    	
    	
    </form>
    <script type="text/javascript">
    	$(function(){
			$(":radio").click(function(){
				var v = $(this).val();
				if(v == 3) {
					$('#video').css('display','none');
					$('#doc').css('display','block');
				} else {
					$('#doc').css('display','none');
					$('#video').css('display','block');
				}
			});
		});
		
		function checkForm(form){
			var _this = $(form);
			var title = _this.find('input[name="title"]').val();
			if('' == title){
				ui.error("文件名称不能为空");
				return false;
			}
		}
    	
		
	</script>
<?php if(!empty($onload)){ ?>
<script type="text/javascript">
/**
 * 初始化对象
 */
//表格样式
$(document).ready(function(){
    <?php foreach($onload as $v){ echo $v,';';} ?>
});
</script>
<?php } ?>

<?php if(ACTION_NAME == 'feed'): ?>
<script type="text/javascript">
core.loadFile(THEME_URL+'/js/plugins/core.weibo.js', function () {
	setTimeout(function () {
        // 重写方法
        core.weibo.showBigImage = function (a, b) {
            var $parent = $('#tr' + a).find('div[model-node="feed_list"]');
            $parent.find('div').each(function () {
                var relVal = $(this).attr('rel');
                if (relVal == 'small') {
                    $(this).hide();
                } else if (relVal == 'big') {
                    $(this).show();
                }
            });
        };
	}, 1000);
});
</script>
<?php endif; ?>

</body>
</html>