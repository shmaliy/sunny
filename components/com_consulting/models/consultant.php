<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class ConsultingModelConsultant extends JModel{
	var $tCons  = '#__consultants';
	var $id     = 'id_consultant';
	var $tDiplom = '#__diploms';
	var $tProj   = '#__projects';
	
	function getAllConsultant() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tCons}` WHERE `published` = '1'");
		return $db->loadObjectList();
	}
	
	function getTjytorInfo($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tCons}` WHERE `{$this->id}` = '{$id}'");
		return $db->loadObject();
	}

	function getAllTjytor() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `id_consultant`, `fio` FROM `{$this->tCons}` WHERE `published` = '1'");
		return $db->loadObjectList();		
	}
	
	function getImagesList($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tDiplom}` WHERE `id_consultant` = '{$id}' ORDER BY `ordering` ");		
		return $db->loadObjectList();		
	}	
	
	function projectList($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tProj}` WHERE `id_consultant` = '{$id}' ");		
		return $db->loadObjectList();			
	}
	
}
?>