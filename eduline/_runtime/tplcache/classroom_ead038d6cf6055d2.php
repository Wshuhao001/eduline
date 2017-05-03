<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript" src="__THEME__/js/editor/kindeditor-4.1.4/kindeditor.js?v=2012"></script>
<!--发布样式 begi-->
<div class="contents">
<textarea  name="<?php echo ($contentName); ?>"  cols="" rows="10" id="<?php echo ($contentName); ?>" style="height:200px;width:<?php echo ($width); ?>; margin-bottom:10px;*width:99%;"><?php echo ($value); ?></textarea>
</div>
<script>
	//E	=	KISSY.Editor( "content" );
	E = KISSY.Editor( "<?php echo ($contentName); ?>" ,'<?php echo ($tool); ?>' , false);
	E._focusToEnd();
	
	
	
</script>