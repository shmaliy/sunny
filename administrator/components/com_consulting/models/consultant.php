<?php 
/**
* ServicesModelServices
* @package Content
* @subpackage Clients
*/
jimport('joomla.application.component.model');
class ConsultingModelConsultant extends JModel{
	/**
	* @var string $table таблица с консультантами
	*/	
	var $tCons   = '#__consultants';

	/**
	* @var string $id поле в таблице с PRIMARY KEY
	*/	
	var $id    = 'id_consultant';
	
	/**
	* возвращает кол-во записей с учетом фильтров
	* @return int
	*/	
	function getItemsCount(){
		$db = &JFactory::getDBO();
		$q = " SELECT count(*) FROM `{$this->tCons}` ";	
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
		$q = " SELECT c.* FROM `{$this->tCons}` AS c ";
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
		$db->setQuery("SELECT * FROM {$this->tCons} WHERE {$this->id} = '{$id}' ");
		return $db->loadObject();	
	}
	/**
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _publish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->tCons}` SET `published` = '1' where {$this->id} IN({$cids})");
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unpublish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->tCons}` SET `published` = '0' where {$this->id} IN({$cids})");
		$db->query();		
	}
	/**
	* удаляет выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _removeSelect($cids){
		$db = &JFactory::getDBO();
		$db->setQuery(" DELETE FROM `{$this->tCons}` WHERE {$this->id} IN({$cids}) ");
		$db->query();		
	}
	/**
	* сохраняет запись
	*/
	function _save($fio, $alias, $post, $desc, $email, $published, $teaser, $thumb){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `{$this->tCons}` VALUES('', '{$fio}', '{$alias}', '{$post}', '{$desc}', '{$email}', '{$published}', '{$teaser}', '{$thumb}') ";
		$db->setQuery($q);
		$db->query();
	}
	/**
	* перезаписывает данные
	*/
	function _update($id, $fio, $alias, $post, $desc, $email, $published, $teaser, $thumb){
		$db = &JFactory::getDBO();
		$q = " UPDATE `{$this->tCons}` SET 
			`fio` = '{$fio}', 
			`alias` = '{$alias}',
			`post` = '{$post}',
			`desc` = '{$desc}',
			`email` = '{$email}',
			`published` = '{$published}',
			`teaser` = '{$teaser}',
			`thumb` = '{$thumb}'
		WHERE {$this->id} = '{$id}' "; echo $q;
		$db->setQuery($q);
		$db->query();	
	}
	
}

?>