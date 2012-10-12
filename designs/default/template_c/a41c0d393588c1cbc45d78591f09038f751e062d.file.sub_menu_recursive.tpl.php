<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:37:59
         compiled from "designs/default/template/design/sub_menu_recursive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7089100204e394127445036-96702748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a41c0d393588c1cbc45d78591f09038f751e062d' => 
    array (
      0 => 'designs/default/template/design/sub_menu_recursive.tpl',
      1 => 1278933244,
    ),
  ),
  'nocache_hash' => '7089100204e394127445036-96702748',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li>
   <a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/portfolio/">По брендам</a> <?php if ($_smarty_tpl->getVariable('module')->value["clients_count"]!=0){?><sup><?php echo $_smarty_tpl->getVariable('module')->value["clients_count"];?>
</sup><?php }?>
</li>
<?php  $_smarty_tpl->tpl_vars['el'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('element')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['el']->key => $_smarty_tpl->tpl_vars['el']->value){
?>
   <li <?php if ($_smarty_tpl->getVariable('el')->value['curr']){?>class="curent"<?php }?>>
   		<a href="<?php echo $_smarty_tpl->getVariable('el')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('el')->value['name'];?>
</a> <?php if ($_smarty_tpl->getVariable('el')->value['count']!=0){?><sup><?php echo $_smarty_tpl->getVariable('el')->value['count'];?>
</sup><?php }?>
   <?php if ($_smarty_tpl->getVariable('el')->value['element']){?>
   <ul><?php $_template = new Smarty_Internal_Template("design/sub_menu_recursive.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('element',$_smarty_tpl->getVariable('el')->value['element']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</ul>
   <?php }?>
   </li>
<?php }} ?>												