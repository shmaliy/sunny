<?php 
	$model   = $this->getModel('Frontpage');
	$item    = $model->getItem(104);
?>
<div class="top_planet about">
	
	<a href="http://sunny.net.ua/" class="sunny_logo"><img src="http://sunny.net.ua/templates/template/images/sunny_logo_ru.png" alt="Sunny Creative Technologies Logotype"></a>
			
			<div class="about_text">
				<p class="font36px"><?php echo $item->title;?></p>
				
			<?php echo $item->desc;?>

</div>


			<div style="height:30px"></div>
			<input type="hidden" name="current" id="current" value="1">
			
			<!--Info Box-->
			
			
			
			<!--Planet Consulting-->
			<div class="consulting">
				<a href="<?php echo JRoute::_('index.php?option=com_consulting&Itemid=48')?>" title="<?php echo JText::_('CONSULTING_BYRO')?>"><div class="consulting_planet"></div></a><!--Planet-->
				<a href="<?php echo JRoute::_('index.php?option=com_consulting&Itemid=48')?>" class="consulting_title" title="<?php echo JText::_('CONSULTING_BYRO')?>"><?php echo JText::_('CONSULTING_BYRO')?></a><!--Title-->
			</div>
								
			<!--Planet Design-->
			
			<div class="design">
				<a href="<?php echo JRoute::_('index.php?option=com_services&Itemid=45')?>" title="<?php echo JText::_('MENU_CONS_DESIGN')?>"><div class="design_planet"></div></a><!--Planet-->
				<a href="<?php echo JRoute::_('index.php?option=com_services&Itemid=45')?>" class="design_title" title="<?php echo JText::_('MENU_CONS_DESIGN')?>"><?php echo JText::_('MENU_CONS_DESIGN')?></a><!--Title-->
			</div>
			
	</div>
	
<script type="text/javascript">
$(function(){
	get_page(0);
})
</script>