<?php /* Smarty version Smarty3-b8, created on 2011-08-03 17:44:57
         compiled from "designs/default/template/consulting/consulting_consultants_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16398222174e395ee98d1663-19171443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77083829da2ecfa7618c5d3240aa51b7e37a70a' => 
    array (
      0 => 'designs/default/template/consulting/consulting_consultants_category.tpl',
      1 => 1296484480,
    ),
  ),
  'nocache_hash' => '16398222174e395ee98d1663-19171443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="margin_bottom30px">
				<?php  $_smarty_tpl->tpl_vars['teaser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["teasers"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser']->key => $_smarty_tpl->tpl_vars['teaser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']++;
?>						
					<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['it']['iteration'];?>
<?php $_tmp1=ob_get_clean();?><?php $_template = new Smarty_Internal_Template("consulting/consulting_consultants_category_teaser.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('teaser',($_smarty_tpl->getVariable('teaser')->value));$_template->assign('iter',$_tmp1); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				<?php }} ?>		
				<div class="clearer" style="height:10px;"></div>
				
			</div>
		</div>
	</div>
