<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once( JApplicationHelper::getPath( 'toolbar_html' ) );
switch ($task) {
		default:
			TOOLBAR_seting::_DEFAULT();
		break;
}
