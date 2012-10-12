<?php 
	$model = $this->getModel();
	$libraryList = $model->getAllLibrary();
?>
<div class="top_planet about" style="height: 800px">
	
	<a href="http://sunny.net.ua/" class="sunny_logo"><img src="http://sunny.net.ua/templates/template/images/sunny_logo_ru.png" alt="Sunny Creative Technologies Logotype"></a>
			
			<div class="about_text">
				<p class="font36px"><?php echo JText::_('LIBRARYS')?></p>
				<p class="actions">
					<a href="javascript:void(0)" onclick="return prev();" class="lib_href prev" style="display: none; ">←&nbsp;<?php echo JText::_('LEFT')?></a>&nbsp;&nbsp;
					<a href="javascript:void(0)" onclick="return next();" class="lib_href next" style="display: inline; "><?php echo JText::_('RIGHT')?>&nbsp;→</a>
				</p>
			

<div id="library">
	<?php foreach ($libraryList as $lib):?>
	<div id="div_<?php echo $lib->id?>">
	  <p class="lib_title"><?php echo $lib->title?></p>
	  <p class="lib_izd"><?php echo $lib->autor?></p>
	  <p class="lib_text"><?php echo $lib->desc?></p>
	  <p><a href="http://sunny.net.ua/images/library/<?php echo $lib->href?>" class="lib_href" target="_blank"><?php echo JText::_('DOWNL')?></a>
	  <span class="lib_italic"> (<?php echo $lib->size?>)</span></p>
	</div>
	<?php endforeach;?>			
				
</div>
			</div>
			<div style="height:30px"></div>
			<input type="hidden" name="current" id="current" value="1">
			
			<!--Info Box-->
			
			<div style="position:absolute; background:url(<?php echo JURI::base()?>templates/template/images/library/attention-background.png); width:195px; height:118px; top:245px; left:550px; padding:10px">
			<p style="color:#ffc000; font-size:18px;"><?php echo JText::_('ATTENTION')?></p>
				<p style="font-size:11px; line-height:12px; margin:10px 0"><?php echo JText::_('ATTENTION_TEXT')?>:</p>
				<p style="font-size:11px"><a href="http://get.adobe.com/reader/" class="lib_href_11px">Adobe Reader</a> или <a href="http://www.foxitsoftware.com/downloads/" class="lib_href_11px">Foxit Reader</a></p>
			</div>
			
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