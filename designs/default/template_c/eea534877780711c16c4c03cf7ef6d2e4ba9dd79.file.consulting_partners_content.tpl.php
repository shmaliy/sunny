<?php /* Smarty version Smarty3-b8, created on 2011-08-03 19:22:59
         compiled from "designs/default/template/consulting/consulting_partners_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14915066844e3975e3d075d2-40939260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea534877780711c16c4c03cf7ef6d2e4ba9dd79' => 
    array (
      0 => 'designs/default/template/consulting/consulting_partners_content.tpl',
      1 => 1278933234,
    ),
  ),
  'nocache_hash' => '14915066844e3975e3d075d2-40939260',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="work_portfolio">
				<?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value['partners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['partne']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['partne']['iteration']++;
?>
					<div class="portfolio left  parther_portfolio <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['partne']['iteration']+2)%3!=0){?>margin_left10px<?php }?>">					
					<?php $_template = new Smarty_Internal_Template("consulting/consulting_partners_partner.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('partner',($_smarty_tpl->getVariable('partner')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

					</div>
				<?php }} ?>					
			</div>	
			<div class="clearer"></div><br />
			<div style="text-align:center;"><a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/partners/">Партнеры дизайн-студии</a></div>	
		</div>
		<div class="clearer"></div>
		
	</div>