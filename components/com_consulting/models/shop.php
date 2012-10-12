<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class ConsultingModelShop extends JModel{
	var $tCons   = '#__as_category_t';
	var $tT   = '#__as_tovar';
	var $tConsultant = '#__consultants';
	
	function getAllConsulting() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tCons}` WHERE `published` = '1' ORDER BY `ordering`");
		return $db->loadObjectList();
	}
		function getAllTovar($id_catt) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tT}` WHERE `published` = '1' AND `id_catt`='{$id_catt}'");
		return $db->loadObjectList();
	}
	
	function getConsultant($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tConsultant}` WHERE `id_consultant` = '{$id}'");
		return $db->loadObject();
	}
}
?>