<?php
	$model = $this->getModel();
	$id    = JRequest::getInt('id');
	$item  = $model->getWork($id);
	$workList = $model->getClientWorks($item->id_client);

	$id_category = $item->id_category;
	$logo = JURI::base() . "images/sunny/client/{$item->logo}";
	$catList     = $model->getCatList();
	
	$workFromCat = $model->getWorkFromCat($item->id_category, $id);
	
	$catTitle = JText::_('BRENDS');
   	foreach($catList as $cat):
   		if ($cat->id_category == $id_category) $catTitle = $cat->title;
   	endforeach;
   	
   	$imagesList = $model->getImagesList($id);
?>
<div id="content">
	<div class="">
		<div class="align_right">
			<span class="font13px"><?php echo $catTitle;?> ← </span><span class="font42px"><?php echo JText::_('OUR_WORKS')?></span>
		</div>
				
		<div class="clearer">&nbsp;</div>
		<div class="relative">
			<div class="align_right portfolio_menu_title portfolio_menu_button hide">
				<a class="a_00ccff_dashed" href="javascript: void(0);"><?php echo JText::_('MENU_SECTIONSS')?> <span style="top:-2px; position:relative;">↓</span></a>
			</div>
			<div id="portfolio_menu" class="portfolio_menu" style="display: none; ">
				<div class="portfolio">
					<div class="portfolio_top">
						<div class="portfolio_bottom">
							<div class="portfolio_center">
								<div class="background">
									<ul>										
										<li <?php if (!$id_category) echo 'class="curent"';?>>
   											<a href="<?php echo JRoute::_("index.php?option=com_services&view=portfolio&Itemid=46")?>"><?php echo JText::_('MENU_BRENDSS')?></a> <sup><?php echo $allWork;?></sup>
   										</li>
   										<?php 
   											foreach($catList as $cat):
   												$class = ($cat->id_category == $id_category) ? 'class="curent"': '';
   												$count = $model->getCountWork($cat->id_category);
   												$href  = JRoute::_("index.php?option=com_services&view=portfolio&id_category={$cat->id_category}&Itemid=46");
   												echo "<li {$class}><a href='{$href}'>{$cat->title}</a><sup>{$count}</sup></li>";
   											endforeach;
   										?>											
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>						
		</div>
	</div>
	<div class="clearer">&nbsp;</div>
	<div class="clearer">&nbsp;</div>


	<div class="our_work_details">
		<div class="client_logo">
			<!-- **************************** -->
				<div id="work_" class="client_menu relative" style="display:none;">
					<div style="left: 60px; top: 90px;" class="visible work_visible">
						<div class="visible_corner visible_top_left"></div>
						<div class="visible_corner visible_top_right"></div>
						<div class="visible_bacground visible_left"></div>
						<div class="visible_bacground visible_top"></div>
							<div class="visible_bacground visible_center">
							<ul>
							<?php 
								foreach ($workList as $work):
									$href = JRoute::_("index.php?option=com_services&view=portfolio&layout=work&id={$work->id_work}&Itemid=46");
									echo "<li><a href='{$href}'>{$work->title}</a></li>";
								endforeach;
							?>
							</ul>
							</div>
						<div class="visible_corner visible_bottom_left"></div>
						<div class="visible_corner visible_bottom_right"></div>
						<div class="visible_bacground visible_right"></div>
						<div class="visible_bacground visible_bottom"></div>
					</div>
				</div>
			<!-- **************************** -->
			<img src="<?php echo $logo ?>" class="img_work" alt="<?php echo $item->title;?>">						
		</div>
		<div class="our_work_details_center">
			<h1><?php echo $item->title?></h1>
			<div class="our_work_details_center_description">
				<div class="our_work_details_left"><?php echo JText::_('W_FROM')?>:</div>
				<div class="our_work_details_right">
					<?php if($item->href): ?>
						<a href="<?php echo $item->href?>" target="_blank"><?php echo $item->c_title?></a>
					<?php else: ?>
						<?php echo $item->c_title?>
					<?php endif;?>
				</div>
				<div class="clearer"></div>	
													
				<div class="our_work_details_left"><?php echo JText::_('W_WHAT')?>:</div>
				<div class="our_work_details_right"><?php echo $item->what?></div>
				<div class="clearer"></div>
				<div class="our_work_details_left"><?php echo JText::_('W_HOW')?>:</div>
				<div class="our_work_details_right"><?php echo $item->how?></div>
				<div class="clearer"></div>
			</div>
		</div>
		<div class="clearer"></div>
	</div>
	<div class="our_work_text"><?php echo $item->desc?></div>
	<p style="height: 20px"></p>

	<div class="our_work_photo" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<div class="control_panel">
			<div class="visible_corner visible_top_left"></div>
			<div class="visible_center">
				<ul style="width: <?php echo 12 * count($imagesList);?>px;">
					<?php 
						$i = 0;
						foreach ($imagesList as $img):
							$class = ($i) ? '' : 'curent';
							echo "<li class='{$class}'><a id='goto_{$i}' href='javascript:void(0);' onclick='gotoPicture(this);' title='{$img->title}'></a></li>";
							$i++;
						endforeach;
					?>
				</ul>
			</div>
			<div class="visible_corner visible_top_right"></div>
				<a href="javascript:void(0);" class="arrows arrows_left" style="display: none; " onclick="prevPicture();" title="Предыдущее изображение"></a>
				<a href="javascript:void(0);" class="arrows arrows_right" onclick="nextPicture();" title="Следующее изображение"></a>
			</div>
			<div class="visible">

					<div class="visible_corner visible_top_left"></div>
					<div class="visible_corner visible_top_right"></div>
					<div class="visible_bacground visible_left"></div>
					<div class="visible_bacground visible_top"></div>
					<div class="visible_bacground visible_center">

						<?php 
							$i = 0;
							foreach ($imagesList as $img):
								$display = ($i) ? 'none' : 'block';
								$class   = ($i) ? '' : 'current_picture';
								$image   = JURI::base() . "images/sunny/works/{$img->image}";
								
								echo "<div id='picture_{$i}' class='{$class}' style='display: {$display}'>
									<div>{$img->title}</div>
									<a href='{$image}' target='_blank'><img style='border:1px solid gray' src='{$image}' alt='{$img->title}' title='{$img->title}'></a>														
								</div>";
								$i++;
							endforeach;
						?>							
								
					</div>
					<div class="visible_corner visible_bottom_left"></div>
					<div class="visible_corner visible_bottom_right"></div>
					<div class="visible_bacground visible_right"></div>
					<div class="visible_bacground visible_bottom"></div>
				</div>						
                <div class="clearer"></div>

	</div>
	
	<?php if (count($workFromCat) > 2):?>
	<div class="control_panel teaser">
		<a href="javascript:void(0);" class="arrows arrows_left" style="display:none;" onclick="nextTeaser(<?php echo count($workFromCat)?>);" title="Назад"></a>
		<a href="javascript:void(0);" class="arrows arrows_right" onclick="prevTeaser(<?php echo count($workFromCat)?>);" title="Вперед"></a>
	</div>
	<?php endif;?>
	
	<div class="margin_top25px portfolio_block">
		<div id="teasers" style="width: 5950px; margin-left: 0px;">
			
			<?php 
				$i = 0;
				foreach ($workFromCat as $work):
					$href = JRoute::_("index.php?option=com_services&view=portfolio&layout=work&id={$work->id_work}&Itemid=46");
					$img = JURI::base() . "images/sunny/client/{$work->logo}";
					$margin = ($i) ? 'margin_left9px': '';
			?>
			<div class="portfolio left <?php echo $margin?>">
				<div class="previous_next font15px">&nbsp;</div>
				<div class="portfolio_center_description">
					<a href="<?php echo $href?>">
						<img src="<?php echo $img?>" class="img_work" alt="<?php echo $work->title?>" title="<?php echo $work->title?>">
					</a>
	
					<div class="portfolio_center_right">
						<div><?php echo $catTitle?></div>
						<p class=" font15px"><a href="<?php echo $href?>"><?php echo $work->title?></a></p>
						<p><?php echo JString::cropstr($work->what, 15)?></p>
					</div>
				<div class="clearer"></div>
				</div>
			</div>
			<?php $i++; endforeach;?>
			
		</div>													
		<div class="clearer"></div>
	</div>

	
</div>
<script type="text/javascript">
$(function(){
	var c = <?php echo count($imagesList) ?>;
	if (c == 1) {
		$('.control_panel:first').hide();
	}
})
</script>