<?php
	$model = $this->getModel();
	$allTjytor = $model->getAllTjytor();
	$id = JRequest::getInt('id');
	$tjytor = $model->getTjytorInfo($id);
	
	$name = preg_replace("/[ ]/", "<br />", $tjytor->fio, 1);
	$image = "{$this->baseurl}/images/sunny/consultant/{$tjytor->thumb}";
	
	$imagesList = $model->getImagesList($tjytor->id_consultant);
	$projectList = $model->projectList($tjytor->id_consultant);
?>
<div class="fixed">
	<div class="our_work_details">
				<img src="<?php echo $image?>" class="img_consulting" 
				alt="<?php echo $tjytor->fio?>" title="<?php echo $tjytor->fio?>">
				<div class="our_work_details_center">					
					<div class="relative">
						<div id="portfolio_menu" class="portfolio_menu hidden" style="display: none; ">
							<div class="portfolio_top">
								<div class="portfolio_bottom">
									<div class="portfolio_center">
										<div class="background">
											<ul>
											<?php 
												foreach ($allTjytor as $item):
													$href= JRoute::_("index.php?option=com_consulting&view=consultant&layout=item&id={$item->id_consultant}&Itemid=48");
if($id==$item->id_consultant):													
													echo "<li><a style='color: white;' href='{$href}'>{$item->fio}</a></li>";
													else:
													echo "<li><a href='{$href}'>{$item->fio}</a></li>";
													endif;
												endforeach; 
											?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="right portfolio_menu_title hide">
							<a class="a_2f88e5_dashed" href="javascript: void(0);" onclick="hidePlanet('#portfolio_menu');"><?php echo JText::_('MENU_SECTIONS')?> ↓</a>
						</div>
					</div>							
					<h1><?php echo $name;?></h1>							
					<div>
						<strong><?php echo $tjytor->post?></strong>
					</div>
					<div class="consulting_details_center_description">
						<?php echo $tjytor->desc?>
					</div>
					<div class="consulting_details_center_visible">
						<h2><?php echo JText::_('DIALOG')?></h2>
						<div class="clearer"></div>
						<div class="consulting_details_left">
							<?php echo JText::_('C_EMAIL') ?>:
						</div>
						<div class="consulting_details_right">
							<a href="mailto:<?php echo $tjytor->email?>"><?php echo $tjytor->email?></a>
						</div>
						<div class="consulting_details_right">
							<div class="margin_top15px">
								<a href="javascript:void(0);" class="a_2f88e5_dashed font11px" onclick="scrollto('#footer');">
									<?php echo JText::_('C_FORM') ?>
								</a>
							</div>
						</div>
						<div class="clearer"></div>
					</div>
					<div class="clearer"></div>
				</div>
			</div>
	<div class="clearer"></div>
	
	<h2><?php echo JText::_('C_DIPLOMS')?></h2>
	
	
	<div class="our_work_photo consulting_photo">
			
		<div class="control_panel">
			<div class="visible_corner visible_top_left"></div>
			<div class="visible_center">
				
				<ul style="width: <?php echo count($imagesList) * 12?>px">
					
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
				<a href="javascript:void(0);" class="arrows arrows_left" onclick="prevPicture();" title="Предыдущее изображение" style="display: none; "></a>
				<a href="javascript:void(0);" class="arrows arrows_right" onclick="nextPicture();" title="Следующее изображение"></a>
			</div>
				
			<div class="visible">
				<a href="javascript:void(0);" onclick="prevPicture();" class="arrows arrows_left"></a>
				<div class="visible_corner visible_top_left"></div>
				<div class="visible_corner visible_top_right"></div>
				<div class="visible_bacground visible_left"></div>
				<div class="visible_bacground visible_top"></div>
				<div class="visible_bacground visible_center">						
					
						<?php 
							$i = 0;
							foreach ($imagesList as $img):
								$class= ($i) ? 'style="display: none"' : 'class="current_picture"';
								$image   = JURI::base() . "images/sunny/consultant/{$img->image}";
								
								echo "<div id='picture_{$i}' {$class}>
									<div>{$img->title}</div>
									<img src='{$image}' alt='{$img->title}' title='{$img->title}'>															
								</div>";
								$i++;
							endforeach;
						?>									
											
				</div>
				<div class="visible_corner visible_bottom_left"></div>
				<div class="visible_corner visible_bottom_right"></div>
				<div class="visible_bacground visible_right"></div>
				<div class="visible_bacground visible_bottom"></div>
				<a href="javascript:void(0);" onclick="nextPicture();" class="arrows arrows_right"></a>
			</div>						
	</div>	
		<?php $kolp=0;
			foreach ($projectList as $project):
			$kolp=$kolp+1;
	endforeach;?>	
	<h2><?php if($kolp!=0) { echo JText::_('C_PROJECTS');};?></h2>

	<div class="our_work_text">				
		
		<?php 
			foreach ($projectList as $project):
				$logo = JURI::base() . "images/sunny/consultant/{$project->image}";
		?>
				<div class="portfolio_big">
			        <div class="portfolio_big_top">
			            <div class="portfolio_big_bottom">
			                <a href="<?php echo $project->href?>" class="left" target="_blank" title="<?php echo $project->title?>">
			                <img src="<?php echo $logo?>" class="img_work" alt="<?php echo $project->title?>"></a>
			                <div class="portfolio_center_right">
			                    <p class=" font18px"><?php echo $project->title?></p>
								<?php echo $project->desc?>
			                </div>
			                <span class="clearer"></span>
			            </div>
			        </div>
			    </div>
	    <?php endforeach;?>
	</div>	

	
</div>	
