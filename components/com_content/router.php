<?php
function ContentBuildRoute( &$query )
{
	$segments = array();
	$db = &JFactory::getDBO();
		
	switch( $query['view'] ):
		case'item':
			$id_item = $query['id'];
			$db->setQuery(" SELECT `alias` FROM `#__content` WHERE `id_item` = '{$id_item}' ");
			$alias = $db->loadResult();
			$segments[] = $alias;
			unset( $query['id'] );
		break;
	endswitch;

	unset( $query['view'] );
	unset( $query['layout'] );
	return $segments;
}

function ContentParseRoute( $segments )
{

	$vars = array();
	$menu   =& JSite::getMenu();
	$menus	= $menu->getMenu();
	$item   = $menu->getActive();        
	
	$count = count( $segments );         
	$db = &JFactory::getDBO();

	switch( $item->query['view'] ):
		case'item':
			$vars['view']   = 'item';
			$vars['layout'] = 'default';
			$alias_item     = $segments[0];
			$db->setQuery(" SELECT `id_item` FROM `#__content` WHERE `alias` = '{$alias_item}' ");
			$id             = $db->loadResult();
			$vars['id']     = (int) $id;
		break;
	endswitch;
                       
	return $vars;
}

?>