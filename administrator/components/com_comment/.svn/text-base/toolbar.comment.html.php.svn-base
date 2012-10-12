<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

class TOOLBAR_comment
{
	function _DEFAULT()
	{
		$view = JRequest::getVar('view');
		if($view):
			JToolBarHelper::title( JText::_( 'Комментарии' ).': <small>[ редактирование ]</small>', 'comment.png' );
		else:
			JToolBarHelper::title( JText::_( 'Комментарии' ), 'comment.png' );
		endif;
	}
}