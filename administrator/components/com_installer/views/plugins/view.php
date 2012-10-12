<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.view');

include_once(dirname(__FILE__).DS.'..'.DS.'default'.DS.'view.php');

class InstallerViewPlugins extends InstallerViewDefault
{
	function display($tpl=null)
	{
		/*
		 * Set toolbar items for the page
		 */
		JToolBarHelper::deleteList( '', 'remove', 'Uninstall' );

		// Get data from the model
		$state		= &$this->get('State');
		$items		= &$this->get('Items');
		$pagination	= &$this->get('Pagination');
		$groups		= &$this->get('Groups');

		$fields = new stdClass();
		$fields->groups = JHTML::_('select.genericlist',   $groups, 'group', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', $state->get('filter.group') );

		$this->assignRef('items',		$items);
		$this->assignRef('pagination',	$pagination);
		$this->assignRef('fields',		$fields);

		parent::display($tpl);
	}

	function loadItem($index=0)
	{
		$item =& $this->items[$index];
		$item->index	= $index;

		if ($item->iscore) {
			$item->cbd		= 'disabled';
			$item->style	= 'style="color:#999999;"';
		} else {
			$item->cbd		= null;
			$item->style	= null;
		}
		$item->author_info = @$item->authorEmail .'<br />'. @$item->authorUrl;

		$this->assignRef('item', $item);
	}
}
