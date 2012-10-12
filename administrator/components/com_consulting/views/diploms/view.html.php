<?php 
jimport( 'joomla.application.component.view');
class ConsultingViewDiploms extends JView{
	function display($tpl = null){
		
		$layout = JRequest::getVar('layout');
		if(isset($layout)):
			JToolBarHelper::back();
			JToolBarHelper::save();
		else:
			JToolBarHelper::addNewX();
			JToolBarHelper::customX( 'removeselect', 'delete.png', 'trash_f2.png', 'Trash' );
			JToolBarHelper::customX( 'publish', 'publish.png', 'publish_f2.png', 'Publish' );
			JToolBarHelper::customX( 'unpublish', 'unpublish.png', 'unpublish_f2.png', 'Unpublish' );

		endif;	

		$model = $this->getModel();
		global $mainframe;
		
		$id    = JRequest::getVar('id');

		$lists['order']	     = $mainframe->getUserStateFromRequest( "com_consulting.partners.filter_order",     'filter_order',     '', 'cmd' );
		$lists['order_Dir']	 = $mainframe->getUserStateFromRequest( "com_consulting.partners.order_Dir", 'filter_order_Dir', 'ASC',        'word' );	
		$lists['id_consultant']	 = $mainframe->getUserStateFromRequest( "com_clients.images.id_consultant", 'id_consultant', '0',        'int' );					
		
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit',      'limit',      $mainframe->getCfg('list_limit'), 'int' );
		$limitstart = $mainframe->getUserStateFromRequest( 'com_consulting.partners.limitstart', 'limitstart', 0,                                'int' );

			$items      = $model->getItems($lists, $limit, $limitstart);
	
			$total      = $model->getItemsCount($lists);
			$page       = new JPagination($total, $limitstart, $limit);
		
			$option     = 'com_consulting';
			$controller = 'diploms';
			$view       = 'diploms';
			
			$consList   = ConsultingHelper::selectList($model->getConsultantList(), 'id_consultant', 'Выбирите консультанта', $lists['id_consultant']);
			
		$this->assignRef('items', $items);
		$this->assignRef('page', $page);
		$this->assignRef('lists', $lists );
		$this->assignRef('option', $option);
		$this->assignRef('controller', $controller);
		$this->assignRef('view', $view);
		$this->assignRef('consList', $consList);
		parent::display($tpl);
	}
}

?>