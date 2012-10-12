<?php
function SeoBuildRoute( &$query ){
	$segments = array();
	$db = &JFactory::getDBO();
		
	switch( $query['layout'] ):
		case'site':
			//$segments[] = 'zakazat_site';
		break;
		case'shop':
			//$segments[] = 'sozdanie_internet_magazina';
		break;
	endswitch;

	unset( $query['layout'] );
	return $segments;
}

function SeoParseRoute( $segments ){

	$vars = array();      

	switch( $segments[0] ):
		case'zakazat_site':
			$vars['layout']   = 'site';
		break;
		case'sozdanie_internet_magazina':
			$vars['layout']   = 'shop';
		break;
	endswitch;
                       
	return $vars;
}

?>