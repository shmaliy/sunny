<?php 

jimport('joomla.application.component.view');
class CommentViewComment extends JView
{
	function display($tpl = null)
	{
		
		$layout = JRequest::getVar('layout');
		if(isset($layout)):
			JToolBarHelper::back();
			JToolBarHelper::save();
			JToolBarHelper::customX( 'removeselect', 'delete.png', 'trash_f2.png', 'Trash' );
			JToolBarHelper::customX( 'publish', 'publish.png', 'publish_f2.png', 'Publish' );
			JToolBarHelper::customX( 'unpublish', 'unpublish.png', 'unpublish_f2.png', 'Unpublish' );
		else:
			JToolBarHelper::customX( 'removeselect', 'delete.png', 'trash_f2.png', 'Trash' );
			JToolBarHelper::customX( 'publish', 'publish.png', 'publish_f2.png', 'Publish' );
			JToolBarHelper::customX( 'unpublish', 'unpublish.png', 'unpublish_f2.png', 'Unpublish' );

		endif;	

		$model = $this->getModel();
		global $mainframe;
		
		$id    = JRequest::getVar('id');
		
		$lists['order']              = JRequest::getVar('filter_order', 'c.date');     
		$lists['order_Dir']          = JRequest::getVar('filter_order_Dir', 'DESC');

		$limit		= JRequest::getInt('limit', $mainframe->getCfg('list_limit')); 
		$limitstart	= JRequest::getInt('limitstart', 0);	

		$items      = $model->getItems($lists, $limit, $limitstart);
	
		$total      = $model->getItemsCount();
		$page       = new JPagination($total, $limitstart, $limit);
			
		$this->assignRef('items', $items);
		$this->assignRef('page', $page);
		$this->assignRef( 'lists', $lists );
		parent::display($tpl);
	}	
}
?>