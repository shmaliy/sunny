<?php 
/**
* MenuModelMenu
* @package Content
* @subpackage Model
*/
jimport('joomla.application.component.model');
class MenuModelMenu extends JModel{
	/**
	* @var string $table таблица с меню
	*/	
	var $table = '#__menus';
	/**
	* @var string $id поле в таблице с PRIMARY KEY
	*/	
	var $id    = 'id';
	
	/**
	* возвращает кол-во записей с учетом фильтров
	* @return int
	*/	
	function getItemsCount(){
		$db = &JFactory::getDBO();
		$q = " SELECT count({$this->id}) FROM `{$this->table}` ";	
		$db->setQuery($q);
		return $db->loadResult();
	}
	/**
	* получает массив записей с учетом фильтров
	* @param array $lists array('order' => по какому полю сортируем, 'order_Dir' => ASC или DESC, 'id_section' => ID раздела)
	* @param int $limit кол-во записей
	* @param int $limitstart с какой записи начинать отчет
	* @return object
	*/
	function getItems($lists, $limit, $limitstart){
		$order = "";
		if( $lists['order'] && $lists['order_Dir'] )
			$order = " ORDER BY ".$lists['order']." ".$lists['order_Dir'];
		
		$db = &JFactory::getDBO();
		$q = " SELECT c.* FROM `{$this->table}` AS c ";
		$q .= $order;
		$db->setQuery($q, $limitstart, $limit);
		return $db->loadObjectList();
	}
	/**
	* возвращает информацию о категории материала
	* @param int $id ID категории материала
	* @return object
	*/
	function getItem($id){
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM {$this->table} WHERE {$this->id} = '{$id}' ");
		return $db->loadObject();	
	}
	/**
	* возвращает максимальное существующее значение порядка вывода для записей
	* @return int
	*/	
	function getMaxOrdering()
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" SELECT max(ordering) FROM `{$this->table}` ");
		return $db->loadResult();		
	}
	/**
	* сохраняет порядок показа записей
	* @param int $val порядок
	* @param int $key ID записи
	* @return void
	*/
	function _saveorder($val, $key){
		$db = &JFactory::getDBO();
		$db->setQuery(" UPDATE `{$this->table}` SET `ordering` = '$val' WHERE {$this->id} = '{$key}' ");
		$db->query();
	}
	/**
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _publish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->table}` SET `published` = '1' where {$this->id} IN({$cids})");
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unpublish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->table}` SET `published` = '0' where {$this->id} IN({$cids})");
		$db->query();		
	}
	/**
	* удаляет выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _removeSelect($cids){
		$db = &JFactory::getDBO();
		$db->setQuery(" DELETE FROM `{$this->table}` WHERE {$this->id} IN({$cids}) ");
		$db->query();		
	}
	/**
	* сохраняет запись
	*/
	function _save($title, $alias, $desc, $style, $style_css, $published, $href, $ordering){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `{$this->table}` VALUES('', '{$title}', '{$alias}', '{$desc}', '{$style}', '{$style_css}', '{$published}', '{$href}', '{$ordering}') ";
		$db->setQuery($q);
		$db->query();		
	}
	/**
	* перезаписывает данные
	*/
	function _update($id, $title, $alias, $desc, $style, $style_css, $published, $href){
		$db = &JFactory::getDBO();
		$q = " UPDATE `{$this->table}` SET 
			`title` = '{$title}', 
			`alias` = '{$alias}', 
			`published` = '{$published}', 
			`desc` = '{$desc}', 
			`style` = '{$style}',
			`style_css` = '{$style_css}',
			`href` = '{$href}'
		WHERE {$this->id} = '{$id}' ";
		$db->setQuery($q);
		$db->query();	
	}
	
}

?>