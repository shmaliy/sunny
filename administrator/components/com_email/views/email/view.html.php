<?php 
jimport( 'joomla.application.component.view');
class EmailViewEmail extends JView{
	function display($tpl = null){
		
		$layout = JRequest::getVar('layout');
		if(isset($layout)):
			JToolBarHelper::back();
			JToolBarHelper::save();
		else:
			JToolBarHelper::addNewX();
			JToolBarHelper::customX( 'copyselect', 'copy.png', 'copy.png', 'Copy' );
			JToolBarHelper::customX( 'removeselect', 'delete.png', 'trash_f2.png', 'Trash' );
			JToolBarHelper::customX( 'publish', 'publish.png', 'publish_f2.png', 'Publish' );
			JToolBarHelper::customX( 'unpublish', 'unpublish.png', 'unpublish_f2.png', 'Unpublish' );
			JToolBarHelper::customX( 'signeda', 'publish.png', 'publish_f2.png', 'Signeda' );
			JToolBarHelper::customX( 'unsigneda', 'unpublish.png', 'unpublish_f2.png', 'Unsigneda' );
			JToolBarHelper::customX( 'signedm', 'publish.png', 'publish_f2.png', 'Signedm' );
			JToolBarHelper::customX( 'unsignedm', 'unpublish.png', 'unpublish_f2.png', 'Unsignedm' );

		endif;	

		$model = $this->getModel();
		global $mainframe;
		
		$id    = JRequest::getVar('id');

		$lists['order']	     = $mainframe->getUserStateFromRequest( "com_email.category.filter_order",     'filter_order',     'c.ordering', 'cmd' );
		$lists['order_Dir']	 = $mainframe->getUserStateFromRequest( "com_email.category.order_Dir", 'filter_order_Dir', 'ASC',        'word' );			
		
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit',      'limit',      $mainframe->getCfg('list_limit'), 'int' );
		$limitstart = $mainframe->getUserStateFromRequest( 'com_email.limitstart', 'limitstart', 0,                                'int' );

			$items      = $model->getItems($lists, $limit, $limitstart);
	
			$total      = $model->getItemsCount();
			$page       = new JPagination($total, $limitstart, $limit);
		
			$option = 'com_email';
			$controller = 'email';
			
		$this->assignRef('items', $items);
		$this->assignRef('page', $page);
		$this->assignRef('lists', $lists );
		$this->assignRef('option', $option);
		$this->assignRef('controller', $controller);
		parent::display($tpl);
	}	
}

?>
