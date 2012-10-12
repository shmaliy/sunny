<?php 
jimport('joomla.application.component.model');
/**
* CommentModelComment
* @package Comment
* @subpackage Model
*/
class CommentModelComment extends JModel
{
	/**
	* @var string $table таблица содержащая комментарии пользователей
	*/		
	var $table = '#__as_comment';
	/**
	* @var string $id поле в таблице с PRIMARY KEY
	*/	
	var $id    = 'id_comment';
	/**
	* возвращает кол-во записей с учетом фильтров
	* @return int
	*/		
	function getItemsCount()
	{
		$db = &JFactory::getDBO();
		$q = " SELECT count(c.{$this->id}) FROM `{$this->table}` as c ";
		$db->setQuery($q);
		return $db->loadResult();
	}
	/**
	* получает массив записей с учетом фильтров
	* @param array $lists array('order' => по какому полю сортируем, 'order_Dir' => ASC или DESC)
	* @param int $limit кол-во записей
	* @param int $limitstart с какой записи начинать отчет
	* @return array
	*/
	function getItems($lists, $limit, $limitstart)
	{
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
	* возвращает информацию об объявлении
	* @param int $id ID объявления
	* @return object
	*/
	function getItem($id)
	{
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM {$this->table} WHERE {$this->id} = '{$id}' ");
		return $db->loadObject();	
	}
	/**
	* возвращает информацию о пользователя, который оставил комментарий 
	* @param int $id_comment ID комментария
	* @return object
	*/

	/**
	* возвращает информацию о материале
	* @param int $id_article ID записи
	* @param int $type тип материала array(1 => объявления, 2 => новости|статьи)
	* @return object
	*/
	function getArticleTitle($id_article, $type)
	{
		$db = &JFactory::getDBO();

				$q = " SELECT id_item as id, title FROM `#__content` WHERE id_item = '{$id_article}' ";

		$db->setQuery($q);
		return $db->loadObject();
	}
	/**
	* публикует выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _publish($cids)
	{
		$db = &JFactory::getDBO();
		$q = "UPDATE `{$this->table}` SET `published` = '1' where {$this->id} IN({$cids})";
		$db->setQuery($q);
		$db->query();			
	}
	/**
	* снимает с публикации выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _unpublish($cids)
	{
		$db = &JFactory::getDBO();
		$q = "UPDATE `{$this->table}` SET `published` = '0' where {$this->id} IN({$cids})";
		$db->setQuery($q);
		$db->query();		
	}
	/**
	* удаляет выбранные записи
	* @param string $cids список ID записей через запятую (1,2,3,4....)
	* @return void
	*/
	function _removeSelect($cids)
	{
		$db = &JFactory::getDBO();
		$q = " DELETE FROM `{$this->table}` WHERE {$this->id} IN({$cids}) ";
		$db->setQuery($q);
		$db->query();		
	}

	function _update($id_comment, $text)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" UPDATE `{$this->table}` SET `text` = '{$text}' WHERE `{$this->id}` = '{$id_comment}' ");
		$db->query();
	}
}

?>