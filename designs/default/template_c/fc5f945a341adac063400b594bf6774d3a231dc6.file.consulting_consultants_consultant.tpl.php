<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/consulting/consulting_consultants_consultant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3739044534e393e11d7fff8-06708080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc5f945a341adac063400b594bf6774d3a231dc6' => 
    array (
      0 => 'designs/default/template/consulting/consulting_consultants_consultant.tpl',
      1 => 1278933233,
    ),
  ),
  'nocache_hash' => '3739044534e393e11d7fff8-06708080',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<!--Content-->
	<div id="content">
		<div class="fixed">
			<?php $_template = new Smarty_Internal_Template("consulting/consulting_consultants_consultant_details.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
			<?php $_template = new Smarty_Internal_Template("consulting/consulting_consultants_consultant_prizes.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			<?php if ($_smarty_tpl->getVariable('module')->value["consultant"]->resume){?>
			<h2>Проекты консультанта:</h2>
			<div class="our_work_text">				
				<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->resume;?>

			</div>
			<?php }?>
			<!--<?php $_template = new Smarty_Internal_Template("consulting/consulting_consultants_consultant_projects_teasers.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
-->				
		</div>
	</div>
<!--</div>
</div>
</div>-->