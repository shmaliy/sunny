<?php
jimport('joomla.application.component.model');
/**
* Services Component Services
* @package SunNY
* @subpackage Services
*/
class SeoModelSeo extends JModel{
	var $tContent   = '#__content';
	var $siteID     = 74;
	var $shopID     = 75;
	
	function getZakazatSite() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tContent}` WHERE `id_item` = '{$this->siteID}'");
		return $db->loadObject();
	}
	
	function getSozdanieInternetMagazina() {
		$db = &JFactory::getDBO();
		$db->setQuery("SELECT * FROM `{$this->tContent}` WHERE `id_item` = '{$this->shopID}'");
		return $db->loadObject();		
	}
}
?>