<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_menu
{
	function _DEFAULT()
	{
		$view = JRequest::getVar('view');
		if($view):
			JToolBarHelper::title( JText::_( 'Меню сайта' ).': <small>[ редактирование ]</small>', 'catalog.png' );
		else:
			JToolBarHelper::title( JText::_( 'Меню сайта' ), 'catalog.png' );
		endif;
	}
}