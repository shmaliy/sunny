<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/consulting/sub_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3502553624e393e11e64a03-05733551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a62d5f2f81ce2bfc08d2d2e8defa9193d3acd6' => 
    array (
      0 => 'designs/default/template/consulting/sub_menu.tpl',
      1 => 1294751911,
    ),
  ),
  'nocache_hash' => '3502553624e393e11e64a03-05733551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
					<div class="relative">
						<div id="portfolio_menu" class="portfolio_menu hidden">
							<div class="portfolio_top">
								<div class="portfolio_bottom">
									<div class="portfolio_center">
										<div class="background">
											<ul>
												<?php $_template = new Smarty_Internal_Template("consulting/sub_menu_recursive.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('element',($_smarty_tpl->getVariable('module')->value['sub_menu']['element'][0]['element'])); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="right portfolio_menu_title">
							<a class="a_2f88e5_dashed" href="javascript: void(0);" onclick="hidePlanet('#portfolio_menu');">Меню разделов &darr;</a>
						</div>
					</div>