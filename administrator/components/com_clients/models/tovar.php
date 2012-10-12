<?php 
/**
* ServicesModelServices
* @package Content
* @subpackage Clients
*/
jimport('joomla.application.component.model');
class ClientsModelTovar extends JModel{
	/**
	* @var string $table таблица с работами
	*/	
	var $tWork   = '#__as_tovar';
	var $tCat    = '#__as_category_t';


	
	/**
	* @var string $id поле в таблице с PRIMARY KEY
	*/	
	var $id    = 'id_tov';
	
	/**
	* возвращает кол-во записей с учетом фильтров
	* @return int
	*/	
	function getItemsCount(){
		$db = &JFactory::getDBO();
		$q = " SELECT count(*) FROM `{$this->tWork}` ";	
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
		$q = " SELECT c.* FROM `{$this->tWork}` AS c ";
		$q .= $order;
		$db->setQuery($q, $limitstart, $limit);
		return $db->loadObjectList();
	}
	
	
	function getCatList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `id_catt` as `value`, `title` as `text` FROM `{$this->tCat}` ORDER BY `title`");
		return $db->loadObjectList();
	}
	

	
	function getCatName($id_catt) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `title` FROM `{$this->tCat}` WHERE `id_catt` = '{$id_catt}'");
		return $db->loadResult();		
	}
	
	/**
	* возвращает информацию о категории материала
	* @param int $id ID категории материала
	* @return object
	*/
	function getItem($id){
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM {$this->tWork} WHERE {$this->id} = '{$id}' ");
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
	function _saveorder($val, $key)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" UPDATE `{$this->tWork}` SET `ordering` = '{$val}' WHERE `{$this->id}` = '{$key}' ");
		$db->query();
	}	
	
	/**
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _publish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->tWork}` SET `published` = '1' where {$this->id} IN({$cids})");
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unpublish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->tWork}` SET `published` = '0' where {$this->id} IN({$cids})");
		$db->query();		
	}
	/**
	* удаляет выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _removeSelect($cids){
		$db = &JFactory::getDBO();
		$db->setQuery(" DELETE FROM `{$this->tWork}` WHERE {$this->id} IN({$cids}) ");
		$db->query();		
	}
	/**
	* сохраняет запись
	*/
	function _save($title, $alias, $desc, $cena, $published, $id_catt, $ordering){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `{$this->tWork}` VALUES('', '{$id_catt}','{$title}', '{$alias}', '{$desc}', '{$cena}', '{$published}', '{$ordering}') ";
		$db->setQuery($q);
		$db->query();

	}
	/**
	* перезаписывает данные
	*/
	function _update($id, $title, $alias, $desc, $cena,  $published, $id_catt){
		$db = &JFactory::getDBO();
		$q = " UPDATE `{$this->tWork}` SET 
			`title` = '{$title}', 
			`alias` = '{$alias}',
			`id_catt` = '{$id_catt}',
			`desc` = '{$desc}', 
			`cena` = '{$cena}',
			`published` = '{$published}'
		WHERE {$this->id} = '{$id}' ";
		$db->setQuery($q);
		$db->query();
	
	}
	
}

?>