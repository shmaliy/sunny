<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

JLoader::register('JoomfishExtensionHelper', JOOMFISH_ADMINPATH .DS. 'helpers' .DS. 'extensionHelper.php' );
if (!JoomfishExtensionHelper::isJoomFishActive()){
	echo JText::_("Joomfish System Plugin not enabled");
	return;
}
$db = JFactory::getDBO();
$db->_profile("langmod",true);

// Include the helper functions only once
JLoader::import('helper', dirname( __FILE__ ), 'jfmodule');
JLoader::register('JoomFishVersion', JOOMFISH_ADMINPATH .DS. 'version.php' );
$type 		= trim( $params->get( 'type', 'rawimages' ));
$layout = JModuleHelper::getLayoutPath('mod_jflanguageselection',$type);

$inc_jf_css	= intval( $params->get( 'inc_jf_css', 1 ));
$type 		= trim( $params->get( 'type', 'dropdown' ));
$show_active= intval( $params->get( 'show_active', 1 ) );
$spacer		= trim( $params->get( 'spacer', '&nbsp;' ) );

jimport('joomla.filesystem.file');

$jfManager = JoomFishManager::getInstance();
$langActive = $jfManager->getActiveLanguages(true);

// setup Joomfish plugins
$dispatcher	   = JDispatcher::getInstance();
JPluginHelper::importPlugin('joomfish');
$dispatcher->trigger('onAfterModuleActiveLanguages', array (&$langActive));

$outString = '';
if( !isset( $langActive ) || count($langActive)==0) {
	// No active languages => nothing to show :-(
	return;
}

// check for unauthorised access to inactive language
$curLanguage = JFactory::getLanguage();
if (!array_key_exists($curLanguage->getTag(),$langActive)){
	reset($langActive);
	//$currentlang = current($langActive);
	//global $mainframe;
	//$mainframe->redirect(JRoute::_("index.php?lang=".$currentlang->iso));
	$registry = JFactory::getConfig();
	$deflang = $registry->getValue("config.defaultlang");
	global $mainframe;
	$mainframe->redirect(JRoute::_("index.php?lang=".$deflang));
	JError::raiseError('0', JText::_('NOT AUTHORISED').' '.$curLanguage->getTag());
	exit();
}

$db->_profile("langmod");
$db->_profile("langlayout",true);
require($layout);
$db->_profile("langlayout");
$version = new JoomFishVersion();
?>
