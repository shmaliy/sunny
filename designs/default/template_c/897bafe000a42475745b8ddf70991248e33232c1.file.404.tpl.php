<?php /* Smarty version Smarty3-b8, created on 2011-08-03 16:46:57
         compiled from "designs/default/template/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518163164e395151aa48c9-04783112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897bafe000a42475745b8ddf70991248e33232c1' => 
    array (
      0 => 'designs/default/template/404.tpl',
      1 => 1289988444,
    ),
  ),
  'nocache_hash' => '2518163164e395151aa48c9-04783112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'core/smarty/libs/plugins/modifier.escape.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('title')->value);?>
</title>
    <base href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" />
    <meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('description')->value);?>
" />
    <meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keywords')->value);?>
" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta http-equiv="Content-Language" content="ru" />
    <meta name="robots" content="all" />
    <link rel="stylesheet" href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/css/base.css" type="text/css"/>
    <link rel="stylesheet" href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/css/404.css" type="text/css"/>   
</head>
<body>
	<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" title="На главную страницу сайта компании SunNY Creative Technologies"><img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/images/404.jpg" alt="SunNY Creative Technologies | На главную" align="left" style="border:none;" /></a>
	<div><h1>Привет</h1>
	<p>Картинка на этой странице имеет размеры 404&nbsp;x&nbsp;404&nbsp;пиксела и является ссылкой <a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" title="На главную страницу сайта компании SunNY Creative Technologies">на главную</a> страницу сайта компании&nbsp;"SunNY&nbsp;CT".</p>
	<p>А больше тут ничего нет.</p>
	<p class="small">Совсем нет.</p></div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17355441-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</body>
</html>