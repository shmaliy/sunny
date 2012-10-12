<?php
jimport('joomla.application.component.model');
/**
* Services Component Services
* @package SunNY
* @subpackage Services
*/
class ServicesModelServices extends JModel{
	var $tServ = '#__services';
	var $tCat  = '#__category';
	
	var $id    = 'id_service';
	var $idCat = 'id_category';
	
	function getAllServices($onlyCatID = false) {
		$db = &JFactory::getDBO();
		if ($onlyCatID) {
			$db->setQuery("SELECT GROUP_CONCAT(id_category) FROM `{$this->tServ}`");
			$result = $db->loadResult();
		} else {
			$db->setQuery("SELECT * FROM `{$this->tServ}` WHERE `published` = '1' ORDER BY `id_category`");
			$result = $db->loadObjectList();
		}
		return $result;
	}
	
	function getCatServList() {
		$db = &JFactory::getDBO();
		$list_id_category = $this->getAllServices(true);
		
		$db->setQuery("SELECT * FROM `{$this->tCat}` WHERE `{$this->idCat}` IN({$list_id_category})");
		return $db->loadObjectList();
	}
	
	function getServList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tServ}` WHERE `published` = '1' AND `id_category` = '{$id_category}'");
		return $db->loadObjectList();
	}
}
?>