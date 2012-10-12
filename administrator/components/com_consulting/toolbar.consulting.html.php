<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_clients{
	function _DEFAULT(){
		$view = JRequest::getVar('view');
		if($view):
			$text = ConsultingHelper::getMenuName($view);
			JToolBarHelper::title( JText::_( 'Консалтинг' ).': <small>[ '.$text.' ]</small>', 'article.png' );
		else:
			JToolBarHelper::title( JText::_( 'Консалтинг' ), 'article.png' );
		endif;
	}
}