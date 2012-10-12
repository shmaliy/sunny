<?php /* Smarty version Smarty3-b8, created on 2011-08-05 08:50:41
         compiled from "designs/default/template/consulting/consulting_projects_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4127416674e3b84b167e152-11153295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a67fdb63b658435be7895bd77a11244ea448619' => 
    array (
      0 => 'designs/default/template/consulting/consulting_projects_category.tpl',
      1 => 1278933234,
    ),
  ),
  'nocache_hash' => '4127416674e3b84b167e152-11153295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="">
				<div>
					<h1 class="font26px left">
						<?php if ($_smarty_tpl->getVariable('module')->value['parent_title']){?><?php echo $_smarty_tpl->getVariable('module')->value['parent_title'];?>
<?php }else{ ?>Все проекты<?php }?>
					</h1>
					<?php $_template = new Smarty_Internal_Template("consulting/sub_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('module',($_smarty_tpl->getVariable('module')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				</div>
				<div class="clearer"></div>	
				<?php $_template = new Smarty_Internal_Template("consulting/consulting_projects_category_teasers.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('module',($_smarty_tpl->getVariable('module')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

								
			</div>
		</div>
	</div>