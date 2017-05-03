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
    <div class="page_tit"><?php echo ($pageTitle); ?></div>
    <?php if(!empty($pageTab)): ?>
    
    <div class="tit_tab">
        <ul>
        <?php !$_REQUEST['tabHash'] && $_REQUEST['tabHash'] =  $pageTab[0]['tabHash']; ?>
        <?php if(is_array($pageTab)): ?><?php $i = 0;?><?php $__LIST__ = $pageTab?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$t): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li><a href="<?php echo ($t["url"]); ?>&tabHash=<?php echo ($t["tabHash"]); ?>" <?php if($t['tabHash'] == $_REQUEST['tabHash']){ echo 'class="on"';} ?>><?php echo ($t["title"]); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
        </ul>
    </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo U('classroom/AdminVideo/doAddVideo');?>" id="detail_form" name="detail_form" onsubmit="return j_validateCallback(this,checkForm,post_callback)">
    	<input type="hidden" name="systemdata_list" value="video_Admin" class="s-txt">
    	<input type="hidden" name="systemdata_key" value="addVideo" class="s-txt">
    	<input type="hidden" name="pageTitle" value="添加课程" class="s-txt">
    	<input type="hidden" name="id" value="<?php echo ($id); ?>" />
    	<div class="form2">
    		<dl class="lineD" id="dl_video_title">
		      	<dt><font color="red"> * </font>课程标题：</dt> 
		      	<dd>
		      		<input name="video_title" id="form_video_title" type="text" value="<?php echo ($video_title); ?>" class="s-txt">
		      		<?php if($_GET['id']){ ?> 
		      		<a href="<?php echo U('classroom/Album/watch',array('aid'=>$id,'type'=>1));?>" target="_blank">查看视频</a> 
		      		<?php if($qiniu_key): ?>| 
		      		<a href="javascript:void(0);" onclick="deletevideo('<?php echo ($qiniu_key); ?>');">删除视频</a><?php endif; ?>
		      		<?php } ?> 
		    	</dd>
		    </dl>
		    
		    <dl class="lineD">
		    	<dt><font color="red"> * </font>课程分类：</dt>
		    	<dd>
		    		<?php $fullcategorypaths = trim($fullcategorypath , ','); ?>
		    		<?php echo W('CategoryLevel',array('table'=>'zy_video_category','id'=>'video_level','default'=>$fullcategorypaths ));?>
		    	</dd>
		    </dl>
		    
		    <dl class="lineD" id="dl_video">
		    	<dt><font color="red"> * </font>课程简介：</dt>
		    	<dd>
		    		<textarea name="video_intro" id="form_video_intro" rows="10" cols="80"><?php echo ($video_intro); ?></textarea>
		    	</dd>
		    </dl>
		    
		    <dl class="lineD" id="form_v_price">
		    	<dt>价格：</dt>
		    	<dd>
		    		<input name="v_price" type="text" value="<?php echo ($v_price); ?>" class="s-txt">
		    	</dd>
		    </dl>

		    <dl class="lineD" id="form_v_price">
		    	<dt>会员等级：</dt>
		    	<dd>
		    		<select name="vip_levels" class="s-select" style="width:200px;">
		    			<option value="0">无</option>
		    			<?php if(is_array($vip_levels)): ?><?php $i = 0;?><?php $__LIST__ = $vip_levels?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><option value="<?php echo ($key); ?>" <?php if($vip_level == $key){ ?>selected="selected"<?php } ?> ><?php echo ($vo); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
					</select>  此vip以上级别（含）免费
		    	</dd>
		    </dl>
		    
		    <dl class="lineD">
                <dt><font color="red"> * </font>封面上传：</dt>
                <dd id="image_cover">
                    <?php echo W('Upload',array('callback'=>'callback','uploadType'=>'image','limit'=>1,'inputname'=>'cover','urlquery'=>'input_id=cover'));?>建议尺寸：520*320
                    <?php if($cover_path){ ?>
                    <div id="small_cover">
                        <img style="max-width:100px;padding:2px; border:1px solid #ccc" src="<?php echo ($cover_path); ?>" />
                        <input type="hidden" name="cover_ids" data="cover_ids" value="<?php echo ($cover); ?>" />
                    </div>
                    <?php } ?>
                </dd>
            </dl>
		    
		    <dl class="lineD">
		    	<dt>课件上传：</dt>
		    	<dd>
		    		<?php echo W('UploadAttach',array('limit'=>'1','inputname'=>'videofile','allow_exts'=>'zip,rar'));?>多个文件请打包上传
		    		<?php if($videofile_ids){ ?>
		    			<input type="hidden" name="attach[]" id="old_coursefile_ids" value="<?php echo ($videofile_ids); ?>" />
		    		<?php } ?>
		    	</dd>
		    </dl>
		    <!--
		    <dl class="lineD" id="form_tag">
				<dt>课程标签：</dt>
		    	<dd>
					<input type="text" name="video_tag" id="form_video_tag" value="<?php echo ($str_tag); ?>" class="s-txt"  />
					<p>多个标签请以半角&lt;,&gt;逗号分割</p>
				</dd>
			</dl>
			-->

		    <dl class="lineD" id="form_teacherlist">
		    	<dt><font color="red"> * </font>讲师选择：</dt>
		    	<dd>
					<select name="trid">
					  	<?php if(isset($trlist)): ?><?php foreach($trlist as $key=>$tl): ?><option value="<?php echo ($tl["uid"]); ?>" <?php if($teacher_id == $tl['uid']){ ?>selected="selected"<?php } ?> ><?php echo ($tl["name"]); ?></option><?php endforeach; ?><?php endif; ?>
					</select>
		    	</dd>
		    </dl>
			
			<dl class="lineD" id="form_listingtime">
		    	<dt><font color="red"> * </font>上架时间：</dt>
		    	<dd>
		    		<input name="listingtime" type="text" value="<?php if($listingtime){ ?><?php echo date("Y-m-d H:i:s", $listingtime);?><?php } ?>" class="s-txt"  onfocus="core.rcalendar(this,'full');" readonly="readonly">
		    	</dd>
		    </dl>
		    
		    <dl class="lineD" id="form_uctime">
		    	<dt><font color="red"> * </font>下架时间：</dt>
		    	<dd>
		    		<input name="uctime" type="text" value="<?php if($uctime){ ?><?php echo date("Y-m-d H:i:s", $uctime);?><?php } ?>" class="s-txt" onfocus="core.rcalendar(this,'full');" readonly="readonly">
		    	</dd>
		    </dl>
		     
		    <dl class="lineD" id="form_listingtime">
		    	<dt>是否参加限时打折：</dt>
		    	<dd>
		    		<input name="is_tlimit" id="is_tlimit" type="checkbox" value="1" <?php if($is_tlimit){ ?>checked<?php } ?> >勾选参加限时打折
		    	</dd>
		    </dl>
		    
		    <dl class="lineD" <?php if(!$is_tlimit){ ?> style="display:none"<?php } ?> id="form_limit_discount">
		    	<dt><font color="red"> * </font>限时折扣：</dt>
		    	<dd>
		    		<input name="limit_discount" id="limit_discount" <?php if(!$is_tlimit){ ?>readonly<?php } ?> type="text" value="<?php echo ($limit_discount); ?>" class="s-txt" style="width:100px">限时折扣(默认为原价，支持小数点后2位，请0-1之间的数字)
		    	</dd>
		    </dl>
		    
		    <dl class="lineD" <?php if(!$is_tlimit){ ?> style="display:none"<?php } ?> id="form_starttime">
		    	<dt><font color="red"> * </font>限时打折开始时间：</dt>
		    	<dd>
		    		<input name="starttime" type="text" <?php if(!$is_tlimit){ ?>readonly<?php } ?> id="starttime" value="<?php if($starttime){ ?><?php echo date("Y-m-d H:i:s", $starttime);?><?php } ?>" class="s-txt" style="width:100px" onfocus="core.rcalendar(this,'full');" readonly="readonly">
		    	</dd>
		    </dl>
		    
		    <dl class="lineD" <?php if(!$is_tlimit){ ?> style="display:none"<?php } ?> id="form_endtime">
		    	<dt><font color="red"> * </font>限时打折结束时间：</dt>
		    	<dd>
		    		<input name="endtime" type="text" <?php if(!$is_tlimit){ ?>readonly<?php } ?> value="<?php if($starttime){ ?><?php echo date("Y-m-d H:i:s", $endtime);?><?php } ?>" class="s-txt" style="width:100px" onfocus="core.rcalendar(this,'full');" readonly="readonly">
		    	</dd>
		    </dl>
		    
		    <!--
		    <dl class="lineD">
		    	<dt>是否精选：</dt>
		    	<dd>
		    		<input type="checkbox" id="is_best" name="is_best" <?php if($is_best){ ?>checked<?php } ?> value="1">设置精选
		    	</dd>
		    </dl>
		    -->
		    
		    <div class="page_btm">
				<input type="submit" class="btn_b" value="保存" id="form_submit">
    		</div>
    	</div>
    	
    	
    </form>
    <script type="text/javascript">
		function j_validateCallback(form,call,callback) {
			var $form = $(form);
			if(typeof call != 'undefined' && call instanceof Function){    
				$i = call($form);
				if(!$i){
					return false;
				}
			}
			var _submitFn = function(){
				$.ajax({
					type: form.method || 'POST',
					url:$form.attr("action"),
					data:$form.serializeArray(),
					dataType:"json",
					cache: false,
					success: function(xMLHttpRequest, textStatus, errorThrown){
						if(typeof callback != 'undefined' && callback instanceof Function){   
							callback($form,xMLHttpRequest);
						}  
					},
					error: function(xhr, ajaxOptions, thrownError){
						ui.error("未知错误!");
					}
				});
			}
			_submitFn();
			return false;
		}
		
		function checkForm(form){
			return true;
		}
		function post_callback(_form,data){
			if(data.status != undefined){
				if(data.status == '0'){
					ui.error(data.info);
				} else {
					ui.success(data.info);
					window.location.href = U('classroom/AdminVideo/index')+"&tabHash=index";
				}
			}
		}
		//删除视频
		function deletevideo(key){
			
			if(''==key){
				ui.error("视频不存在！");
				return ;
			}
			$.ajax({
				type: 'POST',
				url:"<?php echo U('classroom/AdminVideo/deletevideo');?>",
				data:{videokey:key},
				dataType:"json",
				cache: false,
				success: function(data){
					if(data.status == '0'){
						ui.error(data.info);
					} else {
						$("#videokey").val("");//设置videokey为空
						$("#video_upload_d").css("display","block");//显示上传框
						$("#form_submit").attr('disabled',"true");//设置上传按钮为禁用
						ui.success(data.info);
						
					}
					
				},
				error: function(xhr, ajaxOptions, thrownError){
					ui.error("未知错误!");
				 
				}
			});
			
		}
		
    	function callback(data){
    		
    		$("#"+data.input_id+"").remove();
    		$("#image_"+data.input_id).append(
    			'<div id='+data.input_id+'>'
    			+'<img style="max-width:100px;padding:2px; border:1px solid #ccc" src='+UPLOAD_URL+'/'+data.src+' />'
    			+'</div>'
    		).find('input:file').val('');
    		$("#"+data.input_id+"_ids").val(data.attach_id);
    	}
    	function filecallback(data){
    		$("#old_coursefile_ids").remove();
    		$("#coursefile_ids").val(data.attach_id);
    	}
    	$(document).ready(function(){
			$('#detail_form input:file').click(function(){
				$('input:file').val('');
			});
    		$('#original_recommend').change(function(){ 
    			var che = $("#original_recommend").attr("checked");
			   	if(che == true){
			   		$("#re_sort").removeAttr("readonly");
			   	} else {
			   		$("#re_sort").attr("readonly",'readonly');
			   	}
			});
			$('#best_recommend').change(function(){ 
    			var che = $("#best_recommend").attr("checked");
			   	if(che == true){
			   		$("#be_sort").removeAttr("readonly");
			   	} else {
			   		$("#be_sort").attr("readonly",'readonly');
			   	}
			});
			
			$('#is_tlimit').change(function(){ 
    			var che = $("#is_tlimit").attr("checked");
			   	if(che == true){
			   		$("#form_limit_discount,#form_starttime,#form_endtime").show();
			   		$("#limit_discount,#starttime,#endtime").removeAttr("readonly");
			   	} else {
			   		$("#form_limit_discount,#form_starttime,#form_endtime").hide();
			   		$("#form_limit_discount,#form_starttime,#endtime").attr("readonly","readonly");
			   		$("#limit_discount,#starttime,#endtime").val('');
			   	}
			});
    	});
		
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