<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class ConsultingModelMba extends JModel{
	var $tItem = '#__content';
	var $id    = 'id_item'; 
	
	function getMbaInfo($id) {
		$db = &JFactory::getDBO();
		$q = "SELECT * FROM `{$this->tItem}` WHERE `{$this->id}` = '{$id}' and `published` = '1'";
		$db->setQuery($q);
		return $db->loadObject();
	}
}
?>