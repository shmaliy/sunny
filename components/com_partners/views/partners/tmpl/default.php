<?php 
	$model = $this->getModel();
	$consList = $model->getConsultingPartners();
?>
<div id="content">
	<div class="">
		<div class="align_right">
			<span class="font42px"><?php echo JText::_('PARTNERS')?></span>
		</div>
	</div>	
	<div class="margin_top25px work_portfolio">
		
		<?php foreach ($consList as $cons):?>
		<div class="portfolio left parther_portfolio">
			<div class="portfolio_top">
				<div class="portfolio_center">
					<div class="portfolio_center_description">
						<a href="<?php echo $cons->href?>" target="_blank">
							<img title="<?php echo $cons->title?>" src="http://sunny.net.ua/designs/default/images/empty.png" 
							style="border:none; background: url('<?php echo $this->baseurl?>/images/sunny/partners/<?php echo $cons->logo?>') 
							no-repeat center top; width: 230px; height: 160px; margin-top: -80px; margin-left: -115px; " 
							alt="<?php echo $cons->href?>">
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;?>
																	
		<div class="clearer"></div><br>
		
	</div>		
</div>