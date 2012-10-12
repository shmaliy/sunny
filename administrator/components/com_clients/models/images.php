<?php 
/**
* ServicesModelServices
* @package Content
* @subpackage Clients
*/
jimport('joomla.application.component.model');
class ClientsModelImages extends JModel{
	/**
	* @var string $table таблица с работами
	*/	
	var $tWork = '#__work';
	var $tImg  = '#__images';
	
	/**
	* @var string $id поле в таблице с PRIMARY KEY
	*/	
	var $id    = 'id_image';
	
	/**
	* возвращает кол-во записей с учетом фильтров
	* @return int
	*/	
	function getItemsCount($lists){
		$db = &JFactory::getDBO();
		$q = " SELECT count(*) FROM `{$this->tImg}` ";
		if ($lists['id_work']) {
			$q .= " WHERE `id_work` = '{$lists['id_work']}' ";
		}	
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
		$q = " SELECT c.* FROM `{$this->tImg}` AS c ";
		if ($lists['id_work']):
			$q .= " WHERE `id_work` = '{$lists['id_work']}' ";
		endif;
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
		$db->setQuery("SELECT * FROM {$this->tImg} WHERE {$this->id} = '{$id}' ");
		return $db->loadObject();	
	}
		
	function getWorkTitle($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `title` FROM `{$this->tWork}` WHERE `id_work` = '{$id}'");
		return $db->loadResult();			
	}
	
	function getWorkList() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT  `id_work` as `value`, `title` as `text` FROM `{$this->tWork}` ORDER BY `title`");
		return $db->loadObjectList();			
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
		$db->setQuery(" UPDATE `{$this->tImg}` SET `ordering` = '{$val}' WHERE `{$this->id}` = '{$key}' ");
		$db->query();
	}	
	
	/**
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _publish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->tImg}` SET `published` = '1' where {$this->id} IN({$cids})");
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unpublish($cids){
		$db = &JFactory::getDBO();
		$db->setQuery("UPDATE `{$this->tImg}` SET `published` = '0' where {$this->id} IN({$cids})");
		$db->query();		
	}
	/**
	* удаляет выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _removeSelect($cids){
		$db = &JFactory::getDBO();
		$db->setQuery(" DELETE FROM `{$this->tImg}` WHERE {$this->id} IN({$cids}) ");
		$db->query();		
	}
	/**
	* сохраняет запись
	*/
	function _save($id_work, $title, $img){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `{$this->tImg}` VALUES('', '{$id_work}', '{$title}', '{$img}', '1') ";
		$db->setQuery($q); echo $q;
		$db->query();
	}
	/**
	* перезаписывает данные
	*/
	function _update($id, $id_work, $title, $img){
		$db = &JFactory::getDBO();
		$q = " UPDATE `{$this->tImg}` SET 
			`id_work` = '{$id_work}', 
			`image` = '{$img}',
			`title` = '{$title}'
		WHERE {$this->id} = '{$id}' ";
		$db->setQuery($q);
		$db->query();	
	}
	
}

?>