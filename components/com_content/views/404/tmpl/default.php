<?php 
	$db = &JFactory::getDBO();
	$db->setQuery(" SELECT * FROM `#__content` WHERE `alias` = '404' ");
	$item = $db->loadObject();
?>
<div class="fixed zIndex2">
	<div class="blog-post-bg-line">
		<div class="blog-post">
			<div class="glasses"></div>
			<div class="desc not-found">
				<h1><?php echo $item->title?></h1>
				<div><?php echo $item->desc?></div>
			</div>			
		</div>
	</div>
	
	<div class="bottom"></div>
</div>