<?php /* Smarty version Smarty3-b8, created on 2011-08-03 17:44:57
         compiled from "designs/default/template/consulting_consultants_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8132708854e395ee981f673-26909297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2d2ba4749bec3fcbe07f48c86c5ec528e52ff2' => 
    array (
      0 => 'designs/default/template/consulting_consultants_category.tpl',
      1 => 1278933131,
    ),
  ),
  'nocache_hash' => '8132708854e395ee981f673-26909297',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $_template = new Smarty_Internal_Template("general/consulting_head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

</head>
<body onload="hoverImg(); binding();">
<div id="wrapper">

	<?php $_template = new Smarty_Internal_Template("consulting/main_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('current',($_smarty_tpl->getVariable('current_main_menu')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	
	<?php $_template = new Smarty_Internal_Template("consulting/consulting_consultants_category.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
	
</div>
<?php $_template = new Smarty_Internal_Template("consulting/consulting_contacts.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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