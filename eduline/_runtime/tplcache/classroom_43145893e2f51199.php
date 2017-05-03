<?php if (!defined('THINK_PATH')) exit();?><div id="width_150" >
<?php if(($inForm)  !=  "1"): ?><FORM style='display:inline;padding:0;margin:0;border:0' enctype="multipart/form-data"><?php endif; ?>
 <input style="border:0" type="file" name="<?php echo ($inputname); ?>" inputname="<?php echo ($inputname); ?>" value="上传封面" onchange="core.plugInit('uploadFile',this,<?php echo ($callback); ?>,'<?php echo ($uploadType); ?>');" urlquery='<?php echo ($urlquery); ?>' limit="<?php echo ($limit); ?>" event-node="uploadinput" >
<?php if(($inForm)  !=  "1"): ?></FORM><?php endif; ?>
</div>
<?php if(!empty($attachInfo)){ ?>

<script type="text/javascript">
M.addEventFns({
	uploadinput:{
		load:function(){
			var _this = this;
			core.plugFunc('uploadFile',function(){
				core.uploadFile.init(_this,<?php echo $callback; ?>,'<?php echo $uploadType; ?>');
			});
		}
	}	
});
</script>

<div uploadcontent="image" class="uder-imgfb">
<ul class="image-list clearfix">
<?php if(is_array($attachInfo)): ?><?php $i = 0;?><?php $__LIST__ = $attachInfo?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$a): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li><a href="<?php echo U('widget/Upload/down',array('attach_id'=>$a['attach_id']));?>" class="pic"><img src="<?php echo ($a["src"]); ?>" width="100" height="100"></a>
<a onclick="core.uploadFile.removeAttachId(this,'image',<?php echo ($a["attach_id"]); ?>)" href="javascript:void(0)" class="name"><?php echo L('PUBLIC_STREAM_DELETE');?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</ul>
<input type="hidden" id="<?php echo ($inputname); ?>_ids" name="<?php echo ($inputname); ?>_ids" feedtype="image" value="|<?php echo ($attachIds); ?>|" class="attach_ids">
</div>

<?php } ?>