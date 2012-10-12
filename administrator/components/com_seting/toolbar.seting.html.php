<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_seting
{
	function _DEFAULT()
	{
		$view = JRequest::getVar('view');
		if($view):
			JToolBarHelper::title( JText::_( 'Уничтожения мира' ).': <small>[ редактирование ]</small>', 'article.png' );
		else:
			JToolBarHelper::title( JText::_( 'Уничтожения мира' ), 'article.png' );
		endif;
	}
}
