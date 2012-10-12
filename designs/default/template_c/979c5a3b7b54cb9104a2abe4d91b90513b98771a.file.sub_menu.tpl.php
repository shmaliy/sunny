<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:37:59
         compiled from "designs/default/template/design/sub_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10193888474e394127415340-64199061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979c5a3b7b54cb9104a2abe4d91b90513b98771a' => 
    array (
      0 => 'designs/default/template/design/sub_menu.tpl',
      1 => 1278933244,
    ),
  ),
  'nocache_hash' => '10193888474e394127415340-64199061',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<div class="">
					
					<div class="align_right">
						<?php if ($_smarty_tpl->getVariable('module')->value['parent_title']){?><span class="font13px"><?php echo $_smarty_tpl->getVariable('module')->value['parent_title'];?>
 &#8592; </span><?php }?><span class="font42px">Наши работы</span>
					</div>
					
					<div class="clearer">&nbsp;</div>
					<div class="relative">
						<div class="align_right portfolio_menu_title portfolio_menu_button hide">
							<a class="a_00ccff_dashed" href="javascript: void(0);" >Меню разделов <span style="top:-2px; position:relative;">&darr;</span></a>
						</div>
						<div id="portfolio_menu" class="portfolio_menu">
							<div class="portfolio">
								<div class="portfolio_top">
									<div class="portfolio_bottom">
										<div class="portfolio_center">
											<div class="background">
												<ul>										
													<?php $_template = new Smarty_Internal_Template("design/sub_menu_recursive.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('element',($_smarty_tpl->getVariable('module')->value['sub_menu']['element'][0]['element'])); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="clearer">&nbsp;</div>
				<div class="clearer">&nbsp;</div>