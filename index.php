<?php
define( '_JEXEC', 1 );
define('JPATH_BASE', dirname(__FILE__) );
define( 'DS', DIRECTORY_SEPARATOR );

define('COMMENT_TITLE', 'Комментарии');
define('COMMENT_FIRST', '');
define('COMMENT_DEFAULT_TEXT', 'Введите текст комментария');
define('RESUME_FIO', 'ФИО');
define('ADD_COMMENT_NOT_REGISTER', 'Комментарии могут оставлять только зарегистрированные пользователи!');
define('NUM_CROP_STR',     20);
define('ARTICLES_COMMENT', 2);
define('CATALOG_COMMENT',  1);

define('PUBLISHED',      			1);
define('UNPUBLISHED',    			0);

define('NEWS', 1);

define('MEMCACHE_ACTIV', 			0);
define('FIREPHPFRONT',              0);
define('FIREPHPFRONT_SAVE_IN_FILE', 0);
define('LOCALHOST',                 '127.0.0.1');

define('NO_IMAGE_NEWS',    'no_image.jpg');
define('NO_IMAGE_ARTICLE', 'no_image.jpg');

define('SAVE_IMAGES', false);


define('EVENTS_ITEMID',   'Itemid=38');
define('ABOUT_ITEMID',    'Itemid=34');
define('CONTACTS_ITEMID', 'Itemid=40');
define('BLOGS_ITEMID',    'Itemid=41');
define('GALLERY_ITEMID',  'Itemid=42');
define('USER_ITEMID',     'Itemid=43');
define('PERSONS_ITEMID',  'Itemid=44');


require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );

JDEBUG ? $_PROFILER->mark( 'afterLoad' ) : null;

$mainframe =& JFactory::getApplication('site');

$mainframe->initialise();

JPluginHelper::importPlugin('system');

JDEBUG ? $_PROFILER->mark('afterInitialise') : null;
$mainframe->triggerEvent('onAfterInitialise');

$mainframe->route();

// authorization
$Itemid = JRequest::getInt( 'Itemid' );
$mainframe->authorize($Itemid);

// trigger the onAfterRoute events
JDEBUG ? $_PROFILER->mark('afterRoute') : null;
$mainframe->triggerEvent('onAfterRoute');

$option = JRequest::getCmd('option');
$mainframe->dispatch($option);

// trigger the onAfterDispatch events
JDEBUG ? $_PROFILER->mark('afterDispatch') : null;
$mainframe->triggerEvent('onAfterDispatch');

$mainframe->render();

// trigger the onAfterRender events
JDEBUG ? $_PROFILER->mark('afterRender') : null;
$mainframe->triggerEvent('onAfterRender');

echo JResponse::toString($mainframe->getCfg('gzip'));
