<?php if (!defined('THINK_PATH')) exit();?>
<dt></dt>
<?php if(is_array($data)): ?><?php $i = 0;?><?php $__LIST__ = $data?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd>
	<div class="fr"></div>
    <div class="fl"><span><?php echo ($vo["title"]); ?></span></div>
    <i></i>
</dd>
<?php if($vo['child']){ ?>
	<?php if(is_array($vo["child"])): ?><?php $i = 0;?><?php $__LIST__ = $vo["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo1): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd style="padding-left:25px;">
		<div class="fr"><a href="<?php echo U('classroom/Video/watch','id='.$vo1['vid'].'&s_id='.$vo1['zy_video_section_id']);?>"></a></div>
	    <div class="fl"><span><?php echo ($vo1["title"]); ?></span></div>
	    <i></i>
	</dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php } ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>