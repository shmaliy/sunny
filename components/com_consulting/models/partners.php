<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class ConsultingModelPartners extends JModel{
	var $tPart   = '#__partners';
	var $type    = 1;
	
	function getAllPartners() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tPart}` WHERE `type` = '{$this->type}' AND `published` = '1'");
		return $db->loadObjectList();
	}
}
?>