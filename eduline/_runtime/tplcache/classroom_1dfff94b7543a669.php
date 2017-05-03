<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript" src="__PUBLIC__/js/ajaxupload.3.6.js?v=<?php echo ($core["site"]["update_v"]); ?>"></script>
<?php
// 读取附件大小的配置
$_editor_system_default = model('Xdata')->get('admin_Config:attach');
$_editor_size_limit = empty($_editor_system_default['attach_max_size']) ? 2 : $_editor_system_default['attach_max_size']; // 默认2M
$_editor_size_limit = floatval($_editor_size_limit) * 1024; // K


//参数处理.防篡改
$token = jiami("$allow_exts||".intval($need_review)."||$fid");
$size  = jiami($allow_size);
$exts  = jiami($allow_exts);
$num   = jiami($limit);
?>
<script type= "text/javascript">
	var now_PageCount = <?php echo sizeof($editdata); ?>;
	var limit = '<?php echo ($limit); ?>';
    /*<![CDATA[*/
    $(document).ready(function(){
        var button		=	$('#ajax_upload_attach_button<?php echo $end; ?>');
        var process		=	$('#ajax_upload_attach_process<?php echo $end; ?>');
        $('#ajax_upload_attach_button<?php echo $end; ?>').attr('disabled',false).html('<?php echo ($l_button); ?>').addClass('btn_b');
        var myajaxUpload<?php echo $end; ?> = new AjaxUpload(button,{
            action: '__ROOT__/index.php?app=public&mod=Attach&act=ajaxUpload&type=<?php echo ($type); ?>&token=<?php echo ($token); ?>&exts=<?php echo ($exts); ?>&size=<?php echo ($size); ?>&limit=<?php echo ($num); ?>',
            name: 'myfiles',
			text: '上传文件',
            onSubmit : function(file, ext){
                this.disable();
                process.val('<?php echo ($l_loading); ?>');
            },
            onComplete: function(file, response){
                //alert(response);
                process.val('<?php echo ($l_success); ?>');
                this.enable();
                //处理上传后的过程
                var responseData	=	eval('('+response+')');
                //alert(response);
                //alert(responseData.status);
                //上传失败
                if(responseData.status==false){
                    //弹出错误信息
                    alert(responseData.info);
                    //上传成功
                }else{
                    //执行callback
                	if(limit !=0 && now_PageCount >= limit-1){
						$('#ajax_upload_attach_button<?php echo $end; ?>').attr('disabled','disabled');
						$('#ajax_upload_attach_button<?php echo $end; ?>').attr('class','btn_sea_h');
					}
    				
					if(limit != 0 && now_PageCount > limit-1){
						alert("只允许上传"+limit+"个附件！");
						return ;
					}
					
					++ now_PageCount;
                    <?php echo ($callback); ?>(responseData.info[0]);
                }
            }
        });

    });
    /*]]>*/
</script>
<script type= "text/javascript">
	function subPageCount(){
		now_PageCount--;
		if(limit !=0 && now_PageCount <= limit){
			$('#ajax_upload_attach_button<?php echo $end; ?>').removeAttr('disabled');
			$('#ajax_upload_attach_button<?php echo $end; ?>').attr('class','btn_b');
		}
	}
	
	function setLimit(data){
		limit = data;
		now_PageCount = 0;
	}
	var attachid;
	function deleteAttach(attach){
		attachid = attach;
		dodeleteAttach();
	}
	function dodeleteAttach(){
		subPageCount();
		$('#attach_upload_data<?php echo $end; ?> .attach'+attachid).remove();
		$('#ajax_upload_attach_button<?php echo $end; ?>').attr('class','btn_sea btn_b');
	}

<?php if($callback == 'attach_upload_success'): ?>//执行默认的callback方法
	function attach_upload_success(info){
		var attachInfo = '<input class="attach'+info.attach_id+'"  type="hidden" name="attach[]" value="'+info.attach_id+'"/>'+'<p class="attach'+info.attach_id+'" style="height:20px; line-height:22px;overflow:hidden"><a class="attach'+info.attach_id+'" href="javascript:void(0)"  onclick="ui.confirm(this,'+"'确定删除'"+')" callback="deleteAttach('+info.attach_id+')">[ 删除 ]</a>&nbsp;<span class="attach'+info.attach_id+'"> '+info.name+'</span></p>';
		$('#attach_upload_data<?php echo $end; ?>').append(attachInfo);
	}<?php endif; ?>
</script>
<div id="attach_upload_widget">
  <div id="attach_upload_data<?php echo $end; ?>" class="lh25">
    <?php if(is_array($editdata)): ?><?php $i = 0;?><?php $__LIST__ = $editdata?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><input type="hidden" value="<?php echo ($vo["attach_id"]); ?>" name="attach[]" class="attach<?php echo ($vo["attach_id"]); ?>"/>
      <p class="attach<?php echo ($vo["attach_id"]); ?>" style="height:20px; line-height:22px; overflow:hidden"> 
      <a onclick="deleteAttach(<?php echo ($vo["attach_id"]); ?>)" href="javascript:void(0)" class="attach<?php echo ($vo["attach_id"]); ?>">[ 删除 ]</a> 
      <span class="attach<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></span> </p><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
  </div>
  <div id="attach_upload_tool">
	<div class="left text_file_diwei">
		<input class="in_put mr5" id="ajax_upload_attach_process<?php echo ($end); ?>" disabled="disabled" style="vertical-align:middle" />
		<button class="btn_b"  id="ajax_upload_attach_button<?php echo ($end); ?>" disabled="disabled" style="vertical-align:middle" onclick="return false;"><?php echo L('upload_attach_loading');?></button>
	</div>
	<?php if(($nodiwei)  !=  "1"): ?><div class="di_wei left" style="padding-top:7px;">

	<div class="clewbox" id="ajax_attach_help" >
		<div class="clewbox_bg">
			可以上传: <?php echo ($allow_exts); ?> 类型文件 
			<?php if($limit>0){ ?>，可上传<?php echo ($limit); ?>个<?php } ?> 
			，每个不超过<?php echo ($_editor_size_limit); ?>K。</div>
			<div class="clewbox_bg_b"></div>
		</div>
	</div><?php endif; ?>
    <div class="c"></div>
  </div>
</div>
<?php unset($end); ?>