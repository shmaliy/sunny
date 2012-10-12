<?php 
/**
* EmailModelServices
* @package Content
* @subpackage Model
*/
jimport('joomla.application.component.model');
class SetingModelSeting extends JModel{
	/**
	* @var string $table таблица с предоставляемыми услугами
	*/	
	var $table = '#__as_spam';
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
		//$q .= $order;
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
	
	function getCatTitle($id_category) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `title` FROM `#__category` WHERE `id_category` = '{$id_category}'");
		return $db->loadResult();
	}
	
	function getCatList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `id_category` as `value`, `title` as `text` FROM `#__category`");
		return $db->loadObjectList();		
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
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _signeda($cidsa){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->table}` SET `spam_avto` = '1' where {$this->id} IN({$cidsa})");
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unsigneda($cidsa){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->table}` SET `spam_avto` = '0' where {$this->id} IN({$cidsa})");
		$db->query();		
	}
/**
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _signedm($cidsm){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->table}` SET `spam_manual` = '1' where {$this->id} IN({$cidsm})");
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unsignedm($cidsm){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->table}` SET `spam_manual` = '0' where {$this->id} IN({$cidsm})");
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
	function _save($id_work, $id_news,  $date, $statys){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `{$this->table}` VALUES('', '{$id_work}', '{$id_news}',  '{$date}', '{$statys}') ";
		$db->setQuery($q);
		$db->query();		
	}
	/**
	* перезаписывает данные
	*/
	function _update($id, $id_work, $id_news,  $date, $statys){
		$db = &JFactory::getDBO();
		$q = " UPDATE `{$this->table}` SET 
			`id_work` = '{$id_work}',
			`id_news` = '{$email}',  
			`date` = '{$date}', 
			`statys` = '{$statys}', 
		WHERE {$this->id} = '{$id}' ";
		$db->setQuery($q);
		$db->query();	
	}
	
}

?>