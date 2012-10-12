<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:37:59
         compiled from "designs/default/template/design/design_portfolio_category_teasers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8239304494e39412748d4b4-07872084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29109785b1868b022bb35894fc45c9370ef8cc8' => 
    array (
      0 => 'designs/default/template/design/design_portfolio_category_teasers.tpl',
      1 => 1278933238,
    ),
  ),
  'nocache_hash' => '8239304494e39412748d4b4-07872084',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<?php if ($_smarty_tpl->getVariable('module')->value["is_clients"]){?>
				<div class="margin_top25px work_portfolio">
					<!-- По клиентам -->
					<?php  $_smarty_tpl->tpl_vars['teaser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["teasers"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser']->key => $_smarty_tpl->tpl_vars['teaser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']++;
?>
					<div class="portfolio left <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['tease']['iteration']+2)%3!=0){?>margin_left10px<?php }?> parther_portfolio">							
					<?php $_template = new Smarty_Internal_Template("design/design_portfolio_category_teaser.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('teaser',($_smarty_tpl->getVariable('teaser')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>
					<?php }} ?>					
					<div class="clearer"></div>
				</div>
				<?php }else{ ?>
				<div class="margin_top25px work_portfolio">					
					<?php  $_smarty_tpl->tpl_vars['teaser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["teasers"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser']->key => $_smarty_tpl->tpl_vars['teaser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']++;
?>
					<div class="portfolio left <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['tease']['iteration']+2)%3!=0){?>margin_left10px<?php }?>">							
					<?php $_template = new Smarty_Internal_Template("design/design_portfolio_category_teaser.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('teaser',($_smarty_tpl->getVariable('teaser')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>
					<?php }} ?>					
					<div class="clearer"></div>
				</div>								
				<?php }?>