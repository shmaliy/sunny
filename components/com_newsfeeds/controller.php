<?php
/**
 * @version		$Id: controller.php 10381 2008-06-01 03:35:53Z pasamio $
 * @package		SunNY
 * @subpackage	Content
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * SunNY! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

// Check to ensure this file is included in SunNY!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.controller');

/**
 * Newsfeeds Component Controller
 *
 * @package		SunNY
 * @subpackage	Newsfeeds
 * @since 1.5
 */
class NewsfeedsController extends JController
{
	/**
	 * Method to show a newsfeeds view
	 *
	 * @access	public
	 * @since	1.5
	 */
	function display()
	{
		// Set a default view if none exists
		if ( ! JRequest::getCmd( 'view' ) ) {
			JRequest::setVar('view', 'categories' );
		}

		parent::display();
	}
}

?>
