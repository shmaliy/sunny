<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:16:04
         compiled from "designs/default/template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9835880864e393c0461b6d0-19029912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e670eb1b53229efd2900aea5241ddec5aa7c229' => 
    array (
      0 => 'designs/default/template/index.tpl',
      1 => 1291300622,
    ),
  ),
  'nocache_hash' => '9835880864e393c0461b6d0-19029912',
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
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value));$_template->assign('description',($_smarty_tpl->getVariable('description')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <meta property="fb:page_id" content="135484299837691" />
</head>
<body onload="show_visible(); initEffects();">
<!--<h1>[*****<?php echo $_smarty_tpl->getVariable('module')->value["page"]->Content->page_title;?>
*****]</h1>-->
	<div id="wrapper">
		<div class="top_planet">
			<?php $_template = new Smarty_Internal_Template("other/index_content.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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