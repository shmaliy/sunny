<?php 
	$model = $this->getModel();
	$partnerList = $model->getAllPartners();
	$empty = JURI::base() . "templates/template/images/empty.png";
?>
<div class="fixed">
	<div class="work_portfolio">
		<?php 
			$i = 1;
			foreach ($partnerList as $partner):
				$class = ($i == 1) ? 'margin_left10px' : '';
				$partner->logo = "{$this->baseurl}/images/sunny/partners/{$partner->logo}";
				echo "<div class='portfolio left  parther_portfolio {$class} '>					
					<div class='portfolio_center_description'>
						<a href='{$partner->href}'><img title='{$partner->title}' style='border:none; background: url({$partner->logo}) no-repeat center top; width: 230px; height: 160px; margin-top: -80px; margin-left: -115px;' src='{$empty}'></a>
					</div>
				</div>";
				$i++; if ($i == 4) $i = 1;
			endforeach;
		?>
		<div class="clearer"></div><br>
		<div style="text-align:center;"><a href="<?php echo JRoute::_("index.php?option=com_partners&Itemid=47")?>"><?php echo JText::_('DESIGN_PARTNERS')?></a></div>	
	</div>
</div>