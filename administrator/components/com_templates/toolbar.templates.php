<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once( JApplicationHelper::getPath( 'toolbar_html' ) );

$client	=& JApplicationHelper::getClientInfo(JRequest::getVar('client', '0', '', 'int'));

switch ($task)
{
	case 'view'   :
	case 'preview':
		TOOLBAR_templates::_VIEW($client);
		break;

	case 'edit_source':
		TOOLBAR_templates::_EDIT_SOURCE($client);
		break;

	case 'edit':
		TOOLBAR_templates::_EDIT($client);
		break;

	case 'choose_css':
		TOOLBAR_templates::_CHOOSE_CSS($client);
		break;

	case 'edit_css':
		TOOLBAR_templates::_EDIT_CSS($client);
		break;

	default:
		TOOLBAR_templates::_DEFAULT($client);
		break;
}