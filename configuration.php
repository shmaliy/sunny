<?php
class JConfig {
	var $offline = '0';
	var $editor = 'tinymce';
	var $list_limit = '100';
	var $debug = '0';
	var $secret = '6zyNpPYgpiVWoAbq';
	var $gzip = '0';
	var $error_reporting = '0';
	var $log_path = 'C:\\Program Files (x86)\\xampp\\htdocs\\piligrim\\logs';
	var $tmp_path = 'C:\\Program Files (x86)\\xampp\\htdocs\\piligrim\\tmp';
	var $live_site = '';
	//var $sef = '1';
	//var $sef_rewrite = '1';
	var $sef_suffix = '0';
	var $caching = '0';
	var $cachetime = '150';
	var $cache_handler = 'file';
	var $memcache_settings = array();
	var $dbtype = 'mysql';
	var $host = 'localhost';
	var $user = 'root';
	var $db = 'SunNY_sunny_new';
	var $dbprefix = 'jos_';
	var $mailer = 'mail';
	var $mailfrom = 'site@oregonmarket.com.ua';
	var $fromname = 'estamara';
	var $lifetime = '150';
	var $session_handler = 'none';
	var $register_tmpl = '';
	var $reset_tmpl = '';
	var $password = '';
	var $sitename = 'Дизайн-студия в Днепропетровске | SunNY Creative Technologies';
	var $MetaDesc = '';
	var $MetaKeys = '';
	var $offline_message = 'Сайт сейчас закрыт на техническое обслуживание. Пожалуйста зайдите позже.';
}
?>