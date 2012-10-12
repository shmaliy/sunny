<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:37:59
         compiled from "designs/default/template/design/design_portfolio_category_teaser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17777755864e39412750e333-47019844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8397844851b7b33b17b267227919c87f63c76f1e' => 
    array (
      0 => 'designs/default/template/design/design_portfolio_category_teaser.tpl',
      1 => 1278933238,
    ),
  ),
  'nocache_hash' => '17777755864e39412750e333-47019844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
						<?php if ($_smarty_tpl->getVariable('module')->value["is_clients"]){?>	
							<div class="portfolio_top client">
								<div class="portfolio_center">
									<div class="portfolio_center_description">									
										<!-- 
										<a href="/design/portfolio/sites/2happy_site/">
										<img src="http://test.sunny.net.ua/designs/default/images/empty.png" alt="Концепции для сайта знакомств «2Happy»" style="border: medium none ; background: transparent url(http://test.sunny.net.ua/images/works/sites/2happy/thumb.png) no-repeat scroll center top; width: 100px; height: 100px; margin-top: -50px; margin-left: -50px;"/>
										</a>
										-->			
										<div class="client_logo">							
											<img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/images/empty.png" alt="<?php echo $_smarty_tpl->getVariable('teaser')->value['client_name'];?>
" title="<?php echo $_smarty_tpl->getVariable('teaser')->value['client_name'];?>
" style="border: medium none ; background: transparent url(http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/works/<?php echo $_smarty_tpl->getVariable('teaser')->value['work_thumb'];?>
) no-repeat scroll center top; width: 100px; height: 100px; margin-top: -50px; margin-left: -50px;" /> 
											<div class="client_menu" id="work_<?php echo $_smarty_tpl->getVariable('teaser')->value['work_id'];?>
" class="relative" style="display:none;"  >
												<div style="left: 160px; top: 120px;" class="visible work_visible">
													<div class="visible_corner visible_top_left"></div>
													<div class="visible_corner visible_top_right"></div>
													<div class="visible_bacground visible_left"></div>
													<div class="visible_bacground visible_top"></div>
														<div class="visible_bacground visible_center">
															<ul>
															<?php  $_smarty_tpl->tpl_vars['teaser_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('teaser')->value["menu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser_item']->key => $_smarty_tpl->tpl_vars['teaser_item']->value){
?>
																<li><a href="<?php echo $_smarty_tpl->getVariable('teaser_item')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser_item')->value['work_name'];?>
</a></li>
															<?php }} ?>
															</ul>	
														</div>
													<div class="visible_corner visible_bottom_left"></div>
													<div class="visible_corner visible_bottom_right"></div>
													<div class="visible_bacground visible_right"></div>
													<div class="visible_bacground visible_bottom"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>			
						<?php }else{ ?>
						<div class="portfolio_top">
							<div class="portfolio_center">
								<div class="portfolio_center_description">									
									<div><a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['parent_chpu'];?>
"><?php echo $_smarty_tpl->getVariable('module')->value['parent_title'];?>
</a> &#8594;</div>
									<p class=" font15px"><a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser')->value['work_name'];?>
</a></p>
									<div class="client_logo">
										<a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
">
											<img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/works/<?php echo $_smarty_tpl->getVariable('teaser')->value['work_thumb'];?>
" class="img_work" alt="<?php echo $_smarty_tpl->getVariable('teaser')->value['work_name'];?>
" />
										</a>
										<!-- **************************** -->
										<div class="client_menu relative" id="work_<?php echo $_smarty_tpl->getVariable('teaser')->value['work_id'];?>
" style="display:none;" >
											<div style="left: 0px; top: 0px;" class="visible work_visible">
												<div class="visible_corner visible_top_left"></div>
												<div class="visible_corner visible_top_right"></div>
												<div class="visible_bacground visible_left"></div>
												<div class="visible_bacground visible_top"></div>
													<div class="visible_bacground visible_center">
														<ul>
														<?php  $_smarty_tpl->tpl_vars['teaser_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('teaser')->value["menu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser_item']->key => $_smarty_tpl->tpl_vars['teaser_item']->value){
?>
															<li><a href="<?php echo $_smarty_tpl->getVariable('teaser_item')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser_item')->value['work_name'];?>
</a></li>
														<?php }} ?>
														</ul>	
													</div>
												<div class="visible_corner visible_bottom_left"></div>
												<div class="visible_corner visible_bottom_right"></div>
												<div class="visible_bacground visible_right"></div>
												<div class="visible_bacground visible_bottom"></div>
											</div>
										</div>
										<!-- **************************** -->
									</div>
									<div class="portfolio_center_right">
										<!--
										<?php  $_smarty_tpl->tpl_vars['teaser_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('teaser')->value["menu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser_item']->key => $_smarty_tpl->tpl_vars['teaser_item']->value){
?>
											<a href="<?php echo $_smarty_tpl->getVariable('teaser_item')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser_item')->value['work_name'];?>
</a><br />
										<?php }} ?>
										 -->
										<p><?php echo $_smarty_tpl->getVariable('teaser')->value['htmltext_teaser'];?>
</p>
									</div>
									<!--<p><?php echo $_smarty_tpl->getVariable('module')->value['parent_title'];?>
<?php echo $_smarty_tpl->getVariable('teaser')->value['created_date'];?>
</p>-->
									<div class="clearer"></div>
								</div>
							</div>
						</div>							
						<?php }?>			
				