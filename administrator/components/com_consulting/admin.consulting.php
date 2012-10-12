<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once( JPATH_COMPONENT.DS.'controller.php' );
require_once( JPATH_COMPONENT.DS.'helper.php' );

jimport('joomla.html.pagination');

$doc =& JFactory::getDocument();
$doc->addScript(JURI::root(true).'/administrator/templates/sunny/js/jquery.js');
$Script = 'jQuery.noConflict();';
$doc->addScriptDeclaration($Script);

if($controller = JRequest::getVar( 'controller' )) {
    require_once( JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php' );
}

$classname    = 'ConsultingController'.$controller;
$controller   = new $classname( );
 
$controller->execute( JRequest::getVar( 'task' ) );

$controller->redirect();

?>

