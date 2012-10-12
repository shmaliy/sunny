<?php
/**
 * @version		$Id: toolbar.cache.php 11393 2009-01-05 02:11:06Z ian $
 * @package		SunNY
 * @subpackage	Cache
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * SunNY! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once( JApplicationHelper::getPath( 'toolbar_html' ) );

switch ($task)
{
		case 'purgeadmin':
		TOOLBAR_cache::_PURGEADMIN();
		break;
		case 'purge':
		TOOLBAR_cache::_PURGEADMIN();
		break;
		default:
		TOOLBAR_cache::_DEFAULT();
		break;

}