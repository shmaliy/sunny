<?php 
jimport( 'joomla.application.component.view');
class SetingViewSeting extends JView{
	function display($tpl = null){
		
		$layout = JRequest::getVar('layout');
		

		$model = $this->getModel();
		global $mainframe;
		
		$id    = JRequest::getVar('id');

		$lists['order']	     = $mainframe->getUserStateFromRequest( "com_email.category.filter_order",     'filter_order',     'c.ordering', 'cmd' );
		$lists['order_Dir']	 = $mainframe->getUserStateFromRequest( "com_email.category.order_Dir", 'filter_order_Dir', 'ASC',        'word' );			
		
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit',      'limit',      $mainframe->getCfg('list_limit'), 'int' );
		$limitstart = $mainframe->getUserStateFromRequest( 'com_seting.limitstart', 'limitstart', 0,                                'int' );

			$items      = $model->getItems($lists, $limit, $limitstart);
	
			$total      = $model->getItemsCount();
			$page       = new JPagination($total, $limitstart, $limit);
		
			$option = 'com_seting';
			$controller = 'seting';
			
		$this->assignRef('items', $items);
		$this->assignRef('page', $page);
		$this->assignRef('lists', $lists );
		$this->assignRef('option', $option);
		$this->assignRef('controller', $controller);
		parent::display($tpl);
	}	
}

?>
