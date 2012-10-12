<?php
jimport('joomla.application.component.model');
/**
* Content Component Content Frontpage
* @package    SunNY
* @subpackage Content
*/
class ContentModelFrontpage extends JModel{

	var $tWork   = '#__work';
	var $tClient = '#__client';
	var $tCat    = '#__category';
	var $tXref   = '#__work_xref';
        var $tCont   = '#__content';
	
	function getMenu($style){
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `#__menus` WHERE `style` = '{$style}' AND `published` = '1'");
		return $db->loadObjectList();
	}
	
	function getRandomTeaser() {
		$db = &JFactory::getDBO();
		$q = "SELECT w.id_work, w.title, w.what as `desc`, c.logo FROM `{$this->tWork}` as w 
				JOIN `{$this->tXref}` as x ON x.id_work = w.id_work 
				JOIN `{$this->tClient}` as c ON c.id_client = x.id_client
				ORDER BY RAND()";
		$db->setQuery($q, 0, 1);
		return $db->loadObject();
	}
	
	function getAllLibrary() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `#__library` WHERE `published` = '1' ORDER BY `ordering`");
		return $db->loadObjectList();
	}
        
        function getItem($id){
		$db = &JFactory::getDBO();
		$db->setQuery(" SELECT * FROM `{$this->tCont}` WHERE `id_item` = '{$id}' ");
		return $db->loadObject();
	}
	 function addUser($fio, $email, $activity, $commets){
		$db = &JFactory::getDBO();
		$q = " INSERT INTO `#__as_email` VALUES('', '{$fio}', '{$email}',  '{$activity}', '1', '1', '{$comments}', '', '1') ";
		$db->setQuery($q);
		$db->query();		

	}
}
?>