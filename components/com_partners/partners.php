<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once( JPATH_COMPONENT.DS.'controller.php' );

$controller   = new PartnersController();
$controller->execute( JRequest::getVar( 'task' ) );
$controller->redirect();
?>