<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:16:04
         compiled from "designs/default/template/general/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:381356234e393c0469c167-62540053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90bb89a4078ce799684f1bb733bb99a463633fc' => 
    array (
      0 => 'designs/default/template/general/head.tpl',
      1 => 1291288216,
    ),
  ),
  'nocache_hash' => '381356234e393c0469c167-62540053',
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
    <link href="./favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <?php $_template = new Smarty_Internal_Template("general/meta.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('description',($_smarty_tpl->getVariable('description')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php $_template = new Smarty_Internal_Template("general/css.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php $_template = new Smarty_Internal_Template("general/javascripts.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
