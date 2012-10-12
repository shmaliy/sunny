<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class ConsultingViewClub extends JView{
	function display($tpl = null){
		global $mainframe;

		$db			=& JFactory::getDBO();
		$document	=& JFactory::getDocument();
		$params =& $mainframe->getParams();
		$feedEmail = (@$mainframe->getCfg('feed_email')) ? $mainframe->getCfg('feed_email') : 'author';
		$siteEmail = $mainframe->getCfg('mailfrom');

		$component =& JComponentHelper::getComponent('com_consulting');
		
		$menu   =& JSite::getMenu();
		$items  = $menu->getItems('componentid', $component->id);

        
		$document->link = JURI::base()."{$items[1]->route}/";
		
		$item = new JFeedItem();
		$item->title  = 'Клуб SunNY';
		$item->link   = JURI::base()."{$items[1]->route}/";
		$document->addItem( $item );
		$q = " SELECT * FROM `#__content` as `content` ";
		$db->setQuery($q, 0, 10);
		$rows = $db->loadObjectList();

		foreach ( $rows as $row ){    
        
			$link               = JURI::base()."{$items[1]->route}/{$row->catAlias}/{$row->alias}/";								
			$item = new JFeedItem();
			$item->title 		= $row->title;
			$item->link 		= $link;
			$item->description 	= JString::cropstr(strip_tags($row->desc), 50);
			$item->date			= $row->date;
			$item->category   	= 'News';
			$item->author		= '';
			if ($feedEmail == 'site') {
				$item->authorEmail = $siteEmail;
			}
			else {
				$item->authorEmail = $row->author_email;
			}
			// loads item info into rss array
			$document->addItem( $item );
		}

		

		
	}
}
?>
