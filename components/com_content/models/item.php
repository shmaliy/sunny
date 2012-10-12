<?php
jimport('joomla.application.component.model');
/**
* Content Component Content Item
* @package SunNY
* @subpackage Content
*/
class ContentModelItem extends JModel
{
	/**
	* @var string $table_item таблица с материалами
	*/
	var $tItem = '#__content';
	/**
	* @var string $table_xref
	*/
	var $tXref = '#__content_xref';
	/**
	* @var string $id поле с Primary Key
	*/
	var $id         = 'id_item';
	
	/**
	* возвращает информацию о мамтериале
	* @param int $id ID материала
	* @return object
	*/
	function getItem($id){
		$db = &JFactory::getDBO();
		$db->setQuery(" SELECT * FROM `{$this->tItem}` WHERE `{$this->id}` = '{$id}' ");
		return $db->loadObject();
	}
	
	function getFriendsList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT GROUP_CONCAT(id_item) FROM `#__content_xref` WHERE `id_category` = '18'");
		$list_id_item = $db->loadResult();
		
		$db->setQuery("SELECT `title`, `desc` FROM `#__content` WHERE `{$this->id}` IN({$list_id_item})");
		return $db->loadObjectList();
	}
}
?>