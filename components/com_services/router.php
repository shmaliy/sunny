<?php
function ServicesBuildRoute( &$query )
{
	$segments = array();
	$db = &JFactory::getDBO();
		
	switch( $query['view'] ):
		case'portfolio':
			if (isset($query['id_category'])) {
				$id_category = $query['id_category'];
				$db->setQuery(" SELECT `alias` FROM `#__category` WHERE `id_category` = '{$id_category}' ");
				$alias = $db->loadResult();
				
				$segments[] = $alias;			
				unset( $query['id_category'] );
								
			} else if (isset($query['id'])) {
				
				$id = $query['id'];
				$db->setQuery(" SELECT `alias` FROM `#__category` WHERE `id_category` = (SELECT `id_category` FROM `#__work_xref` WHERE `id_work` = '{$id}') ");
				$alias = $db->loadResult();
				
				$segments[] = $alias;
				
				$db->setQuery(" SELECT `alias` FROM `#__work` WHERE `id_work` = '{$id}' ");
				$alias = $db->loadResult();
				
				$segments[] = $alias;			
				unset( $query['id'] );
								
			}
		break;
	endswitch;

	unset( $query['view'] );
	unset( $query['layout'] );
	return $segments;
}

function ServicesParseRoute( $segments )
{

	$vars = array();
	$menu   =& JSite::getMenu();
	$menus	= $menu->getMenu();
	$item   = $menu->getActive();        
	
	$count = count( $segments );         
	$db = &JFactory::getDBO();

	switch( $count ):
		case 1:
			$vars['view']   = 'portfolio';
				$vars['layout'] = 'default';
				
				$db->setQuery(" SELECT `id_category` FROM `#__category` WHERE `alias` = '{$segments[0]}' ");
				$id = $db->loadResult();				
				
				$vars['id_category']     = (int) $id;
		break;
		
		case 2:
			$vars['view']   = 'portfolio';
			$vars['layout'] = 'work';

			$db->setQuery(" SELECT `id_work` FROM `#__work` WHERE `alias` = '{$segments[1]}' ");
			$id = $db->loadResult();				
				
			$vars['id']     = (int) $id;
		break;
	endswitch;
                       
	return $vars;
}

?>