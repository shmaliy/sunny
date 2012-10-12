<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_clients
{
	function _DEFAULT()
	{
		$view = JRequest::getVar('view');
		if($view):
			$text = ClientsHelper::getMenuName($view);
			JToolBarHelper::title( JText::_( 'Наши работы' ).': <small>[ '.$text.' ]</small>', 'article.png' );
		else:
			JToolBarHelper::title( JText::_( 'Наши работы' ), 'article.png' );
		endif;
	}
}