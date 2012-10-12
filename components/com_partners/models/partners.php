<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class PartnersModelPartners extends JModel{
	var $tPart   = '#__partners';
	var $id      = 'id_partner';
	
	function getConsultingPartners() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tPart}` WHERE `published` = '1' AND `type` = '2'");
		return $db->loadObjectList();
	}
}
?>