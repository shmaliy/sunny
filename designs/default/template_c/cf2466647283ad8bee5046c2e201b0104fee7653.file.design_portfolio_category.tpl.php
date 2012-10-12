<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:37:59
         compiled from "designs/default/template/design_portfolio_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9846424614e39412719e767-15770844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf2466647283ad8bee5046c2e201b0104fee7653' => 
    array (
      0 => 'designs/default/template/design_portfolio_category.tpl',
      1 => 1302011629,
    ),
  ),
  'nocache_hash' => '9846424614e39412719e767-15770844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $_template = new Smarty_Internal_Template("general/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<link rel="stylesheet" href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/css/web_design.css" type="text/css"/>
</head>
<body onload=" binding();">
	<div class="menu_design"></div>
	<div id="wrapper">
		<div class="top_planet">
		
			<?php $_template = new Smarty_Internal_Template("design/main_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('current',($_smarty_tpl->getVariable('current_main_menu')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			
			<div id="content">
			
				<?php $_template = new Smarty_Internal_Template("design/sub_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('module',($_smarty_tpl->getVariable('module')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					
				<?php $_template = new Smarty_Internal_Template("design/design_portfolio_category_teasers.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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