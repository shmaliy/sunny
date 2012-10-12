<?php /* Smarty version Smarty3-b8, created on 2011-08-03 19:23:20
         compiled from "designs/default/template/design_partners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8642119664e3975f892a4d8-69832245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31d7dc903a28ad0a25427902929a32742fe4dd0d' => 
    array (
      0 => 'designs/default/template/design_partners.tpl',
      1 => 1278933133,
    ),
  ),
  'nocache_hash' => '8642119664e3975f892a4d8-69832245',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $_template = new Smarty_Internal_Template("general/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<link rel="stylesheet" href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/css/web_design.css" type="text/css"/>
</head>
<body>
	<div class="menu_design"></div>
	<div id="wrapper">
		<div class="top_planet">
		
			<?php $_template = new Smarty_Internal_Template("design/main_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('current',($_smarty_tpl->getVariable('current_main_menu')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			
			<div id="content">
			
				<?php $_template = new Smarty_Internal_Template("design/design_partners_content.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
							
			</div>
		</div>
		
		<!--Planet bottom -->
		<div class="bottom_planet">
		
			<?php $_template = new Smarty_Internal_Template("design/planet_know_you.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			
			<?php $_template = new Smarty_Internal_Template("design/planet_contacts.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			
		</div>
	</div>
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