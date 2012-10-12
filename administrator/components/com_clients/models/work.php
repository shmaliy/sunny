<?php 
/**
* ServicesModelServices
* @package Content
* @subpackage Clients
*/
jimport('joomla.application.component.model');
class ClientsModelWork extends JModel{
	/**
	* @var string $table таблица с работами
	*/	
	var $tWork   = '#__work';
	var $tXref   = '#__work_xref';
	var $tCat    = '#__category';
	var $tImg    = '#__as_images';
	var $tClient = '#__client';
	
	/**
	* @var string $id поле в таблице с PRIMARY KEY
	*/	
	var $id    = 'id_work';
	
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
	
	function getXrefInfo($id_work) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tXref}` WHERE `id_work` = '{$id_work}'");
		return $db->loadObject();
	}
	
	function getCatList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `id_category` as `value`, `title` as `text` FROM `{$this->tCat}` ORDER BY `title`");
		return $db->loadObjectList();
	}
	
	function getClientList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `id_client` as `value`, `title` as `text` FROM `{$this->tClient}` ORDER BY `title`");
		return $db->loadObjectList();
	}
	
	function getClientName($id_client) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `title` FROM `{$this->tClient}` WHERE `id_client` = '{$id_client}'");
		return $db->loadResult();
	}
	
	function getCatName($id_category) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `title` FROM `{$this->tCat}` WHERE `id_category` = '{$id_category}'");
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
	function _save($title, $alias, $desc, $what, $how, $published, $id_client, $id_category, $ordering){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `{$this->tWork}` VALUES('', '{$title}', '{$alias}', '{$desc}', '{$what}', '{$how}', '{$published}', '{$ordering}') ";
		$db->setQuery($q);
		$db->query();

		$id_work = $db->insertid();
		
		$db->setQuery("INSERT INTO `{$this->tXref}` VALUES('{$id_client}', '{$id_work}', '{$id_category}')");
		$db->query();
	}
	/**
	* перезаписывает данные
	*/
	function _update($id, $title, $alias, $desc, $what, $how, $published, $id_client, $id_category){
		$db = &JFactory::getDBO();
		$q = " UPDATE `{$this->tWork}` SET 
			`title` = '{$title}', 
			`alias` = '{$alias}',
			`desc` = '{$desc}', 
			`what` = '{$what}',
			`how` = '{$how}', 
			`published` = '{$published}'
		WHERE {$this->id} = '{$id}' ";
		$db->setQuery($q);
		$db->query();
		
		$q = "UPDATE `{$this->tXref}` SET `id_client` = '{$id_client}', `id_category` = '{$id_category}' WHERE `id_work` = '{$id}'";		
		$db->setQuery($q); echo $q;
		$db->query();		
	}
	
}

?>