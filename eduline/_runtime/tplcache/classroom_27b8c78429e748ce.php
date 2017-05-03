<?php if (!defined('THINK_PATH')) exit();?>
<script>
    var p="<?php echo ($p); ?>";//定义页码
    var orderBy="<?php echo ($orderBy); ?>";//定义排序
    var cateId="<?php echo ($cateId); ?>";//定义分类
    var pType="<?php echo ($pType); ?>";//是否免费
</script>
<?php if($listData){ ?>
<?php if(is_array($listData)): ?><?php $i = 0;?><?php $__LIST__ = $listData?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li>
	    <div class="pic">
	     	<a href="<?php echo U('classroom/Video/view',array('id'=>$vo['id']));?>">
	      	<img src="<?php echo getCover($vo['cover'],266,170);?>" class="lazyloading" />
	      	<div class="bg"><?php echo ($vo["video_title"]); ?></div>
	        </a>
	     </div>
	     <div class="info">
	         <div class="tit"><a href="<?php echo U('classroom/Video/view',array('id'=>$vo['id']));?>"><?php echo limitNumber($vo['video_intro'],54);?></a></div>
	         <div class="con">
	             <div class="price"><?php if($vo['mzprice']['price'] > 0){ ?><?php echo ($vo['mzprice']['price']); ?>学币<?php }else{echo '免费';} ?></div>
	             <div class="star">评分：
	             <?php if($vo['video_score'] > 0 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($vo['video_score'] > 1 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($vo['video_score'] > 2 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($vo['video_score'] > 3 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             <?php if($vo['video_score'] > 4 ): ?><span></span>
	             <?php else: ?><span class="no"></span><?php endif; ?>
	             </div>
	         </div>
	     </div>
 	</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php }else{ ?>
<span>暂无此分类课程~</span>
<?php } ?>