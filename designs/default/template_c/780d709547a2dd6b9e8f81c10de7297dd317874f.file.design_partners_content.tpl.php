<?php /* Smarty version Smarty3-b8, created on 2011-08-03 19:23:20
         compiled from "designs/default/template/design/design_partners_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2045741144e3975f8a0a3c4-31674434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '780d709547a2dd6b9e8f81c10de7297dd317874f' => 
    array (
      0 => 'designs/default/template/design/design_partners_content.tpl',
      1 => 1278933238,
    ),
  ),
  'nocache_hash' => '2045741144e3975f8a0a3c4-31674434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<div class="">
					<div class="align_right">
						<span class="font42px">Партнёры</span>
					</div>
				</div>	
				<div class="margin_top25px work_portfolio">
					<?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value['partners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']++;
?>
						<div class="portfolio left parther_portfolio <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['tease']['iteration']+2)%3!=0){?>margin_left10px<?php }?>">
						<?php $_template = new Smarty_Internal_Template("design/design_partners_partner.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('partner',($_smarty_tpl->getVariable('partner')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

						</div>
					<?php }} ?>													
					<div class="clearer"></div><br />
					<div style="text-align:center;"><a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/partners/">Партнеры Консалтинг-бюро</a></div>				
				</div>
				