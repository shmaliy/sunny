<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/consulting/sub_menu_recursive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13890681194e393e11e95ff0-11096144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0608b99ed2a9f33bb7ea0792bd5ba90a207c1e71' => 
    array (
      0 => 'designs/default/template/consulting/sub_menu_recursive.tpl',
      1 => 1294752727,
    ),
  ),
  'nocache_hash' => '13890681194e393e11e95ff0-11096144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--<?php  $_smarty_tpl->tpl_vars['el'] = new Smarty_Variable;
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
-->
<li>
	<a href="/consulting/consultants/irishka/">Ирина Мартынова</a>
</li>
<li >
   		<a href="/consulting/consultants/nikolay-nesprava/">Николай Несправа</a>
</li>
<li >
	<a href="/consulting/consultants/stanislav-shaposhnikov/">Станислав Шапошников</a>
</li>
<li >
	<a href="/consulting/consultants/vetal/">Виталий Пилипенко</a>   
</li>
<li >
	<a href="/consulting/consultants/alex/">Александр Скрипник</a>
</li>
<li >
	<a href="/consulting/consultants/marina-shnaider/">Марина Шнейдер</a>
</li>

											