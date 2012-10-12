<?php /* Smarty version Smarty3-b8, created on 2011-08-05 08:50:41
         compiled from "designs/default/template/consulting/consulting_projects_category_teasers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20448608664e3b84b174fe67-96612669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58551b3240591b8d9ec360472e8d3fc98f2ba565' => 
    array (
      0 => 'designs/default/template/consulting/consulting_projects_category_teasers.tpl',
      1 => 1278933235,
    ),
  ),
  'nocache_hash' => '20448608664e3b84b174fe67-96612669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<div class="work_portfolio">				
					<?php  $_smarty_tpl->tpl_vars['teaser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["teasers"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser']->key => $_smarty_tpl->tpl_vars['teaser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']++;
?>
					<div class="portfolio left <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['tease']['iteration']+2)%3!=0){?>margin_left10px<?php }?>">									
					<?php ob_start();?><?php echo $_smarty_tpl->getVariable('module')->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_template = new Smarty_Internal_Template("consulting/consulting_projects_category_teaser.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('teaser',($_smarty_tpl->getVariable('teaser')->value));$_template->assign('parent_title',$_tmp1); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>
					<?php }} ?>
					<div class="clearer"></div>
				</div>