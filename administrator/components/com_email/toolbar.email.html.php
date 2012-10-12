<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_email
{
	function _DEFAULT()
	{
		$view = JRequest::getVar('view');
		if($view):
			JToolBarHelper::title( JText::_( 'Жертвы' ).': <small>[ редактирование ]</small>', 'article.png' );
		else:
			JToolBarHelper::title( JText::_( 'Жертвы' ), 'article.png' );
		endif;
	}
}
