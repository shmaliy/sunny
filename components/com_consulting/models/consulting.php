<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class ConsultingModelConsulting extends JModel{
	var $tCons   = '#__consulting';
	var $tConsultant = '#__consultants';
	
	function getAllConsulting() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tCons}` WHERE `published` = '1'");
		return $db->loadObjectList();
	}
	
	function getConsultant($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tConsultant}` WHERE `id_consultant` = '{$id}'");
		return $db->loadObject();
	}
}
?>