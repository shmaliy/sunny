<?php
jimport('joomla.application.component.model');
/**
* Services Component Services
* @package SunNY
* @subpackage Services
*/
class ServicesModelPortfolio extends JModel{
	var $tWork   = '#__work';
	var $tClient = '#__client';
	var $tCat    = '#__category';
	var $tXref   = '#__work_xref';
	var $tImg    = '#__images';
	
	function getClients($id_category = false) {
		$db = &JFactory::getDBO();
		if ($id_category) {
			$db->setQuery("SELECT GROUP_CONCAT(distinct id_client) FROM `{$this->tXref}` WHERE `id_category` = '{$id_category}'");
			$list_id = $db->loadResult();
			
			$q = "SELECT * FROM `{$this->tClient}` 
			WHERE `published` = '1' 
			  AND `id_client` IN({$list_id})";
		} else {
			$q = "SELECT * FROM `{$this->tClient}` WHERE `published` = '1' ORDER BY `ordering`";
		}
		
		$db->setQuery($q);
		return $db->loadObjectList();
	}
	
	function getCatList() {
		$db = &JFactory::getDBO();
		
		$db->setQuery("SELECT GROUP_CONCAT(distinct id_category) FROM `{$this->tXref}`");
		$list_id = $db->loadResult();
		
		$q = "SELECT `id_category`, `title` FROM `{$this->tCat}` 
			WHERE `id_category` 
			  IN({$list_id}) 
			  AND `published` = '1'";
		$db->setQuery($q);		
		return $db->loadObjectList();
	}
	
	function getCountWork($id_category = false) {
		$db = &JFactory::getDBO();
		$q = "SELECT count(*) FROM `{$this->tClient}` WHERE `published` = '1'";
		
		if ($id_category){
			$db->setQuery("SELECT GROUP_CONCAT(distinct id_work) FROM `{$this->tXref}` WHERE `id_category` = '{$id_category}'");
			$list_id = $db->loadResult();
            $q = "SELECT count(*) FROM `{$this->tWork}` WHERE `published` = '1'";
			$q .= " AND `id_work` IN({$list_id}) ";
		}
		
		$db->setQuery($q);
		return $db->loadResult();
	}
	
	function getCatTitle($id_category){
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT `title` FROM `{$this->tCat}` WHERE `id_category` = '{$id_category}'");
		return $db->loadResult();
	}
	
	function getClientWorks($id_client, $id_category = false) {
		$db = &JFactory::getDBO();
		
		$q = "SELECT GROUP_CONCAT(distinct id_work) FROM `{$this->tXref}` WHERE `id_client` = '{$id_client}'";
		if ($id_category) {
			$q .= " AND `id_category` = '{$id_category}' ";
		}
		$db->setQuery($q);
		$list_id = $db->loadResult();
		
		$q = "SELECT `id_work`, `title` FROM `{$this->tWork}` 
		        WHERE `id_work` IN({$list_id})
		        AND `published` = '1'";
		$db->setQuery($q);
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
	
	function getWork($id) {
		$db = &JFactory::getDBO();
		$q = "SELECT w.*, x.id_category, c.id_client, c.title as c_title, c.logo, c.href FROM `{$this->tWork}` as w 
			JOIN `{$this->tXref}` as x ON x.id_work = w.id_work 
			JOIN `{$this->tClient}` as c ON c.id_client = x.id_client 
			WHERE w.id_work = '{$id}'";
		$db->setQuery($q);
		return $db->loadObject();
	}
	
	function getWorkFromCat($id_category, $curId) {
		$db = &JFactory::getDBO();
		
		$q = "SELECT w.*, c.logo FROM `{$this->tWork}` as w 
				JOIN `{$this->tXref}` as x ON x.id_work = w.id_work
				JOIN `{$this->tClient}` as c ON c.id_client = x.id_client 
			WHERE x.id_category = '{$id_category}' AND w.id_work != '{$curId}'";
		
		$db->setQuery($q);
		return $db->loadObjectList();		
	}
	
	function getImagesList($id) {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tImg}` WHERE `id_work` = '{$id}' ORDER BY `ordering` ");		
		return $db->loadObjectList();		
	}
}
?>
