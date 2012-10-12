<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:50
         compiled from "designs/default/template/consulting/consulting_consultants_consultant_projects_teasers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4163335654e393e1201a4c3-93459965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16405b634115ea60ba11d633ca25ee4b541b4f73' => 
    array (
      0 => 'designs/default/template/consulting/consulting_consultants_consultant_projects_teasers.tpl',
      1 => 1278933233,
    ),
  ),
  'nocache_hash' => '4163335654e393e1201a4c3-93459965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<?php if ($_smarty_tpl->getVariable('module')->value["teasers"]!=null){?>				
			<h2><?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->fio;?>
 учавствовал в следующих проектах</h2>
			<div class="work_portfolio">
				<?php  $_smarty_tpl->tpl_vars['teaser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["teasers"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser']->key => $_smarty_tpl->tpl_vars['teaser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']++;
?>									
					<div class="portfolio left <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['it']['iteration']+2)%3!=0){?>margin_left10px<?php }?>">
						<div class="portfolio_center_description">
							<div><a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['parent_chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser')->value['parent_title'];?>
</a> &#8594;</div>
							<p class=" font15px"><a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser')->value['name'];?>
</a></p>
							<a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
"><img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/projects/<?php echo $_smarty_tpl->getVariable('teaser')->value['thumb'];?>
" class="img_work" alt="<?php echo $_smarty_tpl->getVariable('teaser')->value['name'];?>
"/></a>
							<div class="portfolio_center_right"><p><?php echo $_smarty_tpl->getVariable('teaser')->value['htmltext_teaser'];?>
</p></div>
						</div>								
					</div>							
				<?php }} ?>						
			</div>
			<div class="clearer"></div>
		<?php }?>