<?php if (!defined('THINK_PATH')) exit();?><div id="<?php echo ($id); ?>"></div>

<script type="text/javascript" src = "__THEME__/js/plugins/core.categoryLevel.js"></script>

<style>
	.mzLevel{padding:4px;margin-right:5px;}
</style>
<script>
$('#<?php echo ($id); ?>').categoryLevel({
	'table':'<?php echo ($table); ?>',
	'isadmin':true,//是否是后台
	'defaultids':'<?php echo ($default); ?>',
},function(fun){
	//alert('fdfd');
});
</script>
<a></a>