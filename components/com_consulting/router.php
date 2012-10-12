<?php
function ConsultingBuildRoute( &$query ){
	$segments = array();
	$db = &JFactory::getDBO();
		
	switch( $query['view'] ):
		case'consultant':
			$segments[] = 'consultants';
			if (isset($query['id'])){
				$db->setQuery("SELECT `alias` FROM `#__consultants` WHERE `id_consultant` = '{$query['id']}'");
				$alias = $db->loadResult();
				$segments[] = $alias;
				unset( $query['id'] );
			}
		break;
		case'shop':
			$segments[] = 'shop';
		break;
		case'club':
			$segments[] = 'club';
				if (isset($query['id'])){
				$db->setQuery("SELECT `alias` FROM `#__content` WHERE `id_item` = '{$query['id']}'");
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

function ConsultingParseRoute( $segments ){

	$vars = array();      
	$db = &JFactory::getDBO();
	
	switch( $segments[0] ):
		case'consultants':
			$vars['view']   = 'consultant';
			if ($segments[1]){
				$db->setQuery("SELECT `id_consultant` FROM `#__consultants` WHERE `alias` = '{$segments[1]}'");
				$id = $db->loadResult();				
				$vars['id']     = (int) $id;
				$vars['layout'] = 'item';
			}
		break;
		case'shop':
			$vars['view']   = 'shop';
		break;
		case'club':
			$vars['view']   = 'club';
			if ($segments[1]){
				$db->setQuery("SELECT `id_item` FROM `#__content` WHERE `alias` = '{$segments[1]}'");
				$id = $db->loadResult();				
				$vars['id']     = (int) $id;
				$vars['layout'] = 'item';
			}
		break;
	endswitch;
                       
	return $vars;
}

?>