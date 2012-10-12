<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.view');

class MenusViewMenus extends JView
{
	function display($tpl=null)
	{
		global $mainframe;

		$this->_layout = 'default';

		// Set toolbar items for the page
		JToolBarHelper::title( JText::_( 'Menu Manager' ), 'menumgr.png' );
		JToolBarHelper::customX( 'copyMenu', 'copy.png', 'copy_f2.png', 'Copy', true );
		JToolBarHelper::customX( 'deleteMenu', 'delete.png', 'delete_f2.png', 'Delete', true );
		JToolBarHelper::editListX('editMenu');
		JToolBarHelper::addNewX('addMenu');

		$document = & JFactory::getDocument();
		$document->setTitle(JText::_('View Menus'));

		$limitstart = JRequest::getVar('limitstart', '0', '', 'int');

		$menus		= &$this->get('Menus');
		$pagination	= &$this->get('Pagination');

		$this->assignRef('menus', $menus);
		$this->assignRef('pagination', $pagination);
		$this->assignRef('limitstart', $limitstart);

		JHTML::_('behavior.tooltip');

		parent::display($tpl);
	}

	function copyForm($tpl=null)
	{
		global $mainframe;

		$this->_layout = 'copy';

		// view data
		$table	= $this->get('Table');
		$items	= $this->get('MenuItems');

		/*
		 * Set toolbar items for the page
		 */
		JToolBarHelper::title(  JText::_( 'Copy Menu' ) );
		JToolBarHelper::custom( 'doCopyMenu', 'copy.png', 'copy_f2.png', 'Copy', false );
		JToolBarHelper::cancel();

		$document = & JFactory::getDocument();
		$document->setTitle(JText::_('Copy Menu Items'));

		$this->assignRef('items', $items);
		$this->assignRef('table', $table);

		parent::display($tpl);
	}

	function deleteForm($tpl=null)
	{
		global $mainframe;

		$this->_layout = 'delete';

		/*
		 * Set toolbar items for the page
		 */
		JToolBarHelper::title(  JText::_( 'Menu' ) . ': <small><small>[ '. JText::_( 'Delete' ) .' ]</small></small>' );
		JToolBarHelper::custom( 'doDeleteMenu', 'delete.png', 'delete_f2.png', 'Delete', false );
		JToolBarHelper::cancel();

		// view data
		$table		= $this->get('Table');
		$modules	= $this->get('Modules');
		$menuItems	= $this->get('MenuItems');

		$document = & JFactory::getDocument();
		$document->setTitle(JText::_('Confirm Delete Menu Type') . ': ' . $table->menutype );


		$this->assignRef('table', $table);
		$this->assignRef('modules', $modules);
		$this->assignRef('menuItems', $menuItems);

		parent::display($tpl);
	}

	function editForm($edit, $tpl=null)
	{
		JRequest::setVar( 'hidemainmenu', 1 );

		global $mainframe;

		$this->_layout = 'edit';
		if($edit)
			$table = &$this->get('Table');
		else
			$table=& JTable::getInstance('menuTypes');
		/*
		 * Set toolbar items for the page
		 */
		$text = ( ($table->id != 0) ? JText::_( 'Edit' ) : JText::_( 'New' ) );
		JToolBarHelper::title( JText::_( 'Menu Details' ).': <small><small>[ '. $text.' ]</small></small>', 'menumgr.png' );
		JToolBarHelper::custom( 'savemenu', 'save.png', 'save_f2.png', 'Save', false );
		JToolBarHelper::cancel();

		$this->assignRef('row', $table);
		$this->assign('isnew', ($table->id == 0));

		JHTML::_('behavior.tooltip');

		parent::display($tpl);
	}
}
