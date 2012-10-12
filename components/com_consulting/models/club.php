<?php
jimport('joomla.application.component.model');
/**
* Partners Component Partners
* @package SunNY
* @subpackage Partners
*/
class ConsultingModelClub extends JModel{
	var $tItem = '#__content';
	var $id    = 'id_item'; 
	var $tXref    = '#__content_xref';
	var $newsSection         = 1;
	var $published           = 1;
		var $table_comment = '#__as_comment';
		function getAllItems($limitstart, $limit) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM {$this->tItem} as `content` INNER JOIN `{$this->tXref}` as `xref` ON content.id_item = xref.id_item  WHERE content.published = '1' AND xref.id_category = '19'");
		return $db->loadObjectList();
	}
	
		function getAllClub() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `id_item`, `title` FROM `{$this->tItem}` WHERE `published` = '1'");
		return $db->loadObjectList();		
	}
	
	function getClubInfo($id) {
		$db = &JFactory::getDBO();
		$q = "SELECT * FROM `{$this->tItem}` WHERE `{$this->id}` = '{$id}' and `published` = '1'";
		$db->setQuery($q);
		return $db->loadObject();
	}
	/**
	* возвращает кол-во комментариев
	* @param ind $id ID объ€влени€
	* @param int $type тип комментариев ( 1 - объ€влени€, 2 - материалы )
	* @return int кол-во комментариев
	*/
	function getCommentCount($id_item)
	{
		$db = &JFactory::getDBO();
		$q = " SELECT count(id_comment) FROM `#__as_comment` WHERE `published` = '1' AND `id_article` = '{$id_item}' ";
		$db->setQuery($q);
		return $db->loadResult();
	}
	/**
	* удал€ет комментарий пользовател€
	* @param int $id_comment ID комментари€
	* @return void
	*/
	function removeComment($id_comment)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" DELETE FROM `#__as_comment` WHERE `id_comment` = '{$id_comment}' ");
		$db->query();
	}
		function getItem($id_item)
	{
		$db = &JFactory::getDBO();
		$q = " SELECT * FROM `{$this->tItem}` WHERE `{$this->id}` = '{$id_item}' ";
		$db->setQuery($q);
		return $db->loadObject();
	}
		function getItemCommentList($id)
	{
		$db = &JFactory::getDBO();
		$q = " SELECT * FROM `{$this->table_comment}` 
			   WHERE id_article = '{$id}' 
			   AND `published` = '1' 
			   ORDER BY `date` ASC ";
		$db->setQuery($q); 
		return $db->loadObjectList();
	}
	function getComment($id_comment)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" SELECT * FROM `#__as_comment` WHERE `id_comment` = '{$id_comment}' ");
		return $db->loadObject();
	}
	/**
	* добавл€ет комментарий пользовател€ в Ѕƒ
	* @param int      $id_article ID материала
	* @param datetime $date       дата публикации в формате Y-m-d H:i:s
	* @param string   $text       текст комментари€
	* @param int      $type       тип комментари€ 1 - дл€ объ€влений, 2 - дл€ материалов
	* @return int                 ID добавленного комментари€
	*/
	function addComment($id_article, $date, $text, $user)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" INSERT INTO `#__as_comment` VALUES('', '{$id_article}', '{$date}', '{$text}', '1', '','{$user}') ");
		$db->query();
		
		$id = $db->insertid();
		return $id;
	}
	/**
	* редактирует комментарий пользовател€
	* @param int      $id_comment ID комментари€
	* @param string   $text       текст комментари€
	* @return void
	*/
	function updateComment($id_comment, $text)
	{
		$db = &JFactory::getDBO();
		$db->setQuery(" UPDATE `#__as_comment` SET `text` = '{$text}' WHERE `id_comment` = '{$id_comment}' ");
		$db->query();
	}

	/**
	* возвращает кол-во новостей
	* @return int
	*/
	function getItemCount($word=false)
	{
		$db = &JFactory::getDBO();
		
		$q = " SELECT GROUP_CONCAT(distinct id_item) FROM `{$this->tXref}` WHERE `id_category` = '19' ";
		$db->setQuery($q);
		$list_id_item = $db->loadResult();

		
		if( empty($list_id_item) ) return NULL;
		
		$q = " SELECT count(id_item) FROM `{$this->tItem}` 
				WHERE `id_item` IN(".$list_id_item.") AND `published` = '1' ";
		if( $word ):
			$good = $this->_word($word);
			$q .= " AND ( `title` LIKE '%". str_replace(" ", "%' OR `title` LIKE '%", $good). "%' OR `desc` LIKE '%". str_replace(" ", "%' OR `desc` LIKE '%", $good). "%' ) ";
		endif;
		$db->setQuery($q);

		return $db->loadResult();
	}
		function getItemList($limitstart, $limit)
	{
		$db = &JFactory::getDBO();

		$q = " SELECT GROUP_CONCAT(distinct id_item) FROM `{$this->tXref}` WHERE `id_category` = '19' ";
		$db->setQuery($q);
		$list_id_item = $db->loadResult();

		if( empty($list_id_item) ) return NULL;
		
		$q = " SELECT * FROM `{$this->tItem}` 
				WHERE `{$this->id}` IN({$list_id_item}) 
				AND `published` = '{$this->published}' 
				ORDER BY `date` DESC ";
		$db->setQuery($q, $limitstart, $limit); 
		return $db->loadObjectList();
	}
}?>