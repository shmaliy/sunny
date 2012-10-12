<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/general/consulting_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18179060804e393e11c4c3d5-94237629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '851f01e2b7833e3ea9aff0508ae4f073f0fa4c69' => 
    array (
      0 => 'designs/default/template/general/consulting_head.tpl',
      1 => 1278933245,
    ),
  ),
  'nocache_hash' => '18179060804e393e11c4c3d5-94237629',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'core/smarty/libs/plugins/modifier.escape.php';
?>	<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('title')->value);?>
</title>
    <base href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" />
    <link rel="icon" type="image/png" href="./favicon.png" />
    <?php $_template = new Smarty_Internal_Template("general/meta.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php $_template = new Smarty_Internal_Template("general/consulting_css.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php $_template = new Smarty_Internal_Template("general/javascripts.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
