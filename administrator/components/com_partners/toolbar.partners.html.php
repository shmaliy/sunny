<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_partners{
	function _DEFAULT(){
		$view = JRequest::getVar('view');
		if($view):
			JToolBarHelper::title( JText::_( 'Партнеры компании' ).': <small>[ редактирование ]</small>', 'article.png' );
		else:
			JToolBarHelper::title( JText::_( 'Партнеры компании' ), 'article.png' );
		endif;
	}
}