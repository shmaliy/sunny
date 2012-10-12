<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_services
{
	function _DEFAULT()
	{
		$view = JRequest::getVar('view');
		if($view):
			JToolBarHelper::title( JText::_( 'Услуги компании' ).': <small>[ редактирование ]</small>', 'article.png' );
		else:
			JToolBarHelper::title( JText::_( 'Услуги компании' ), 'article.png' );
		endif;
	}
}