<?php
	$model       = $this->getModel();
	
	$id_category = JRequest::getInt('id_category');
	$clientList  = $model->getClients($id_category);
	
	$catList     = $model->getCatList();
	$allWork     = $model->getCountWork();
	
	$catTitle = JText::_('BRENDS');
   	foreach($catList as $cat):
   		if ($cat->id_category == $id_category) $catTitle = $cat->title;
   	endforeach;
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
					
	<div class="margin_top25px work_portfolio">
		
		<?php 
			$i = 1;
			foreach ($clientList as $client):
				$workList = $model->getClientWorks($client->id_client, $id_category);
				$class = ($i == 1) ? '' : "margin_left10px";
		?>
		<div class="portfolio left <?php echo $class ?>  parther_portfolio">							
												
			<div class="portfolio_top client">
				<div class="portfolio_center">
					<div class="portfolio_center_description">									
		
						<div class="client_logo">							
							<img src="<?php echo $this->baseurl?>/templates/template/images/empty.png" alt="<?php echo $client->title?>" title="<?php echo $client->title?>" style="border: medium none ; background: transparent url(<?php echo $this->baseurl?>/images/sunny/client/<?php echo $client->logo?>) no-repeat scroll center top; width: 100px; height: 100px; margin-top: -50px; margin-left: -50px;"> 
							<div class="client_menu" id="work_<?php echo $client->id_client?>" style="display: none; ">
								<div style="left: 160px; top: 120px;" class="visible work_visible">
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
						</div>
					</div>
				</div>
			</div>								
				
		</div>
		<?php
			$i++; 
			if ($i == 4) { $i = 1; }
			endforeach;
		?>	
	
		<div class="clearer"></div>	
	</div>
</div>
