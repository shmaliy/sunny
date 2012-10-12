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
	var $table_item = '#__content';
	/**
	* @var string $table_xref
	*/
	var $table_xref = '#__content_xref';
	/**
	* @var string $id поле с Primary Key
	*/
	var $id         = 'id_item';
	
	/**
	* возвращает информацию о мамтериале
	* @param int $id ID материала
	* @return object
	*/
	function getItem($id)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" SELECT * FROM `{$this->table_item}` WHERE `{$this->id}` = '{$id}' ");
		return $db->loadObject();
	}
}
?>