<?php 
	$Itemid = JRequest::getInt('Itemid');
	$langs = JRequest::getVar('lang', 'ru');
	if ($Itemid >= 48):
		$view = JRequest::getVar('view');
		if (!$view){
			$class = 'service_menu_new';
		} elseif ($view == 'consultant') {
			$class = 'consulting_menu_new';
		} else if ($view == 'shop') {
			$class = 'shop_menu';
		} else if ($view == 'club') {
			$class = 'club_menu';
		}
?>
<div id="header" class="<?php echo $class?>">
	<div class="bg_left"></div>
	<div class="bg_center">
		<a href="http://sunny.net.ua/" class="consulting_logo"><img src="<?php echo JURI::base()?>templates/template/images/consulting/consulting_logo_<?php echo $langs?>.png" alt="Sunny Creative Technologies Logotype"></a>
		<div class="consulting_phone">
			<span class="font16px kod">067</span> <span class="font36px">67 98 999</span>
			<div class="align_right font13px"><a href="javascript:void(0);" onclick="scrollto('#footer');" class="a_3e5d7d_dashed"><?php echo JText::_('ME')?></a></div>
		</div>
		<ul class="header_menu">
			<li <?php echo ($view == '') ? 'class="curent"' : 'class="z_index99"';?>>
				<div class="menu_service">
					<a href="<?php echo JRoute::_("index.php?option=com_consulting&Itemid=48")?>"><span class="<?php echo $langs?>"><?php echo JText::_('MENU_CONS_SERVICES')?></span></a>
				</div>
			</li>
			<li <?php echo ($view == 'consultant') ? 'class="curent"' : 'class="z_index99"';?>>
				<div class="menu_consultation">
					<a href="<?php echo JRoute::_("index.php?option=com_consulting&view=consultant&Itemid=48")?>"><span class="<?php echo $langs?>"><?php echo JText::_('MENU_CONS_CONSULTANTS')?></span></a>
				</div>
			</li>
			<li <?php echo ($view == 'shop') ? 'class="curent"' : 'class="z_index97"';?>>
				<div class="menu_shop">
					<a href="<?php echo JRoute::_("index.php?option=com_consulting&view=shop&Itemid=48")?>"><span class="<?php echo $langs?>"><?php echo JText::_('MENU_CONS_PARTNERS')?></span></a>
				</div>
			</li>
			<li <?php echo ($view == 'club') ? 'class="curent"' : 'class="z_index97"';?>>
				<div class="menu_club">
					<a href="<?php echo JRoute::_("index.php?option=com_consulting&view=club&Itemid=48")?>"><span><?php echo JText::_('MENU_CONS_MBA')?></span></a>
				</div>
			</li>
							
		</ul>
		<div class="menu_web">
			<a href="<?php echo JRoute::_("index.php?option=com_services&Itemid=45")?>"><span class="<?php echo $langs?>"><?php echo JText::_('MENU_CONS_DESIGN')?></span></a>
		</div>
	</div>
	<div class="bg_right"></div>
</div>
	
<?php else:?>

<div class="header">
	<a href="http://sunny.net.ua/" class="design_logo_<?php echo $langs?>"></a>
	<div class="menu_top">
		<div <?php if($Itemid == 45) echo 'class="curent_menu"';?>>
			<div class="design_service">
				<a href="<?php echo JRoute::_("index.php?option=com_services&Itemid=45")?>"><?php echo JText::_('MENU_SERVICES')?></a>
			</div>
		</div>
		<div <?php if($Itemid == 46) echo 'class="curent_menu"';?>>
		<div class="design_our_work">
				<a href="<?php echo JRoute::_("index.php?option=com_services&view=portfolio&Itemid=46")?>"><?php echo JText::_('MENU_OUR_WORKS')?></a>
			</div>	
		</div>
		<div <?php if($Itemid == 47) echo 'class="curent_menu"';?>>
			<div class="design_partner">
				<a href="<?php echo JRoute::_("index.php?option=com_partners&Itemid=47")?>"><?php echo JText::_('MENU_PARTNERS')?></a>
			</div>
		</div>
		<div>
			<div class="design_contact">
				<a href="javascript:void(0);" onclick="hidePlanet('#full', '#default'); var k=getElementById('wrapper');  $('#wrapper').addClass('contact_full'); scrollto('#footer');"><?php echo JText::_('MENU_CONTACTS')?></a>
			</div>	
		</div>
	</div>
	<div class="menu_top_right">
		<div class="design_consulting">
			<a href="<?php echo JRoute::_("index.php?option=com_consulting&Itemid=48")?>"><?php echo JText::_('MENU_CONSULTING')?></a>
		</div>	
	</div>
</div>
<?php endif;?>
