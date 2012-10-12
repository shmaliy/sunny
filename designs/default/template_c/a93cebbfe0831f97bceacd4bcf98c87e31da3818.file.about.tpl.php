<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:30:25
         compiled from "designs/default/template/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18756169414e393f6170ab67-68852139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93cebbfe0831f97bceacd4bcf98c87e31da3818' => 
    array (
      0 => 'designs/default/template/about.tpl',
      1 => 1278933130,
    ),
  ),
  'nocache_hash' => '18756169414e393f6170ab67-68852139',
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
	
</head>
<body>
	<div id="wrapper">
		<div class="top_planet about">
			<!--Logo top-->
			<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" class="sunny_logo"><img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/images/sunny_logo.png" alt="Sunny Creative Technologies Logotype"/></a>
			<div class="about_text">
				<p class="font36px"><?php echo $_smarty_tpl->getVariable('module')->value["title"];?>
</p>
				<?php echo $_smarty_tpl->getVariable('module')->value["text"];?>

			</div>
			<!--Planet Consulting-->
			<div class="consulting">
				<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/" title="Консалтинг-бюро"><div class="consulting_planet"></div></a><!--Planet-->
				<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/" class="consulting_title"  title="Консалтинг-бюро">Консалтинг-бюро</a><!--Title-->
			</div>
			
					
			<!--Planet Design-->
			
			<div class="design">
				<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/"  title="Дизайн-студия"><div class="design_planet"></div></a><!--Planet-->
				<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/" class="design_title"  title="Дизайн-студия">Дизайн-студия</a><!--Title-->
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