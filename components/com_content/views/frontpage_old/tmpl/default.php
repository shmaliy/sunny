<?php 
	$model = $this->getModel();
	$menuList = $model->getMenu(1);
	$random = $model->getRandomTeaser();
	$lang   = JRequest::getVar('lang', 'ru');
?>	
	<a href="<?php echo JRoute::_("index.php")?>" class="sunny_logo" alt="<?php echo JText::_('SUNNY_TITLE_ON_FRONT')?>" title="<?php echo JText::_('SUNNY_TITLE_ON_FRONT')?>"><img src="<?php echo $this->baseurl?>/templates/template/images/sunny_logo_<?php echo $lang?>.png" alt="<?php echo JText::_('SUNNY_TITLE_ON_FRONT')?>" title="<?php echo JText::_('SUNNY_TITLE_ON_FRONT')?>"></a>
-			
<?php 
	foreach($menuList as $menu):
	if($menu->href == "http://sunny.net.ua/happy-new-year-2012/2012.swf" ){$href="http://sunny.net.ua/happy-new-year-2012/2012.swf";}else{
	$href = JRoute::_("index.php?{$menu->href}");};
if($menu->href=="option=com_content&view=frontpage&layout=about&Itemid=104"): $href="/about"; endif;
?>
	<!--Planet <?php echo $menu->title?>-->
	<div class="<?php echo $menu->style_css?>">
		 <a href="<?php echo $href?>" class="show_visible"><img class="<?php echo $menu->style_css?>_planet" alt="" src="<?php echo $this->baseurl?>/templates/template/images/<?php echo $menu->style_css?>_planet.png"></a>
		<!--Planet-->
		<a href="<?php echo $href?>" class="<?php echo $menu->style_css?>_title show_visible"><nobr><?php echo $menu->title?></nobr></a>				
		<div class="visible_block">
			<div class="<?php echo $menu->style_css?>_radian"></div>
			<div class="visible">
				<div class="visible_corner visible_top_left"></div>
				<div class="visible_corner visible_top_right"></div>
				<div class="visible_bacground visible_left"></div>
				<div class="visible_bacground visible_top"></div>						 
					<?php 
						if (preg_match('/-portfolio-/', $menu->desc)):
							$href = JRoute::_("index.php?option=com_services&view=portfolio&id={$random->id_work}&Itemid=46");
							$img = JURI::base() . "images/sunny/client/{$random->logo}";			
										
							echo "<div id='randomTeaser' class='visible_bacground visible_center' style='display: block; '>
								<div id='teaser_content'>
									<div class='visible_title'><a href='{$href}'>{$random->title}</a></div>
									<a href='{$href}'><img src='{$img}' class='left'></a>
									<div class='our_work_right'>{$random->desc}</div>
								</div>
							</div>";
					
					else: echo "<div class='visible_bacground visible_center'>{$menu->desc}</div>"; endif;?>
					
				<div class="visible_corner visible_bottom_left"></div>
				<div class="visible_corner visible_bottom_right"></div>
				<div class="visible_bacground visible_right"></div>
				<div class="visible_bacground visible_bottom"></div>
				
				<?php if (preg_match('/-portfolio-/', $menu->desc)) :?>
					<a href="javascript:void(0);" onclick="randomTeaser();" class="visible_corner visible_bottom_right_works_randomize"><?php if($lang=='ru'): ?>Следующая<?php else:?> Next<?php endif;?></a>
				<?php endif;?>
				
			</div>
		</div>
	</div>
<?php endforeach;?>

