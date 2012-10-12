<?php /* Smarty version Smarty3-b8, created on 2011-08-05 08:50:41
         compiled from "designs/default/template/consulting/consulting_projects_category_teaser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10166380334e3b84b17cf2a7-47532039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0598c5d7f9b37d5e4fcb420bffad40df9f13ddb9' => 
    array (
      0 => 'designs/default/template/consulting/consulting_projects_category_teaser.tpl',
      1 => 1278933234,
    ),
  ),
  'nocache_hash' => '10166380334e3b84b17cf2a7-47532039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
							<div class="portfolio_center_right">
								<p><?php echo $_smarty_tpl->getVariable('teaser')->value['htmltext_teaser'];?>
</p>
							</div>
							<div class="clearer"></div>
						</div>
					