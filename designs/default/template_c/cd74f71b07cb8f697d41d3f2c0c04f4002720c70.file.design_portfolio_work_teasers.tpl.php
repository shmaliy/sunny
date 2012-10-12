<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:38:07
         compiled from "designs/default/template/design/design_portfolio_work_teasers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5262213174e39412f42fa72-95165646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd74f71b07cb8f697d41d3f2c0c04f4002720c70' => 
    array (
      0 => 'designs/default/template/design/design_portfolio_work_teasers.tpl',
      1 => 1278933240,
    ),
  ),
  'nocache_hash' => '5262213174e39412f42fa72-95165646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				
				<?php if ($_smarty_tpl->getVariable('module')->value["teasers"]){?>
				<?php if (count($_smarty_tpl->getVariable('module')->value["teasers"])>2){?>
				<div class="control_panel teaser">
					<!--<div class="visible_corner visible_top_left"></div>-->					
					<!--<div class="visible_corner visible_top_right"></div>-->
					<a href="javascript:void(0);" class="arrows arrows_left" style="display:none;" onclick="nextTeaser(<?php echo count($_smarty_tpl->getVariable('module')->value["teasers"]);?>
);" title="Назад"></a>
					<a href="javascript:void(0);" class="arrows arrows_right" onclick="prevTeaser(<?php echo count($_smarty_tpl->getVariable('module')->value["teasers"]);?>
);" title="Вперед"></a>
				</div>
				<?php }?>
				<div class="margin_top25px portfolio_block">
					<div id="teasers" style="width: <?php echo count($_smarty_tpl->getVariable('module')->value["teasers"])*425;?>
px; margin-left: 0px;">
						<?php  $_smarty_tpl->tpl_vars['teaser'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["teasers"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['teaser']->key => $_smarty_tpl->tpl_vars['teaser']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tease']['iteration']++;
?>
							<div class="portfolio left <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tease']['iteration']!=1){?>margin_left9px<?php }?>">
								<div class="previous_next font15px">&nbsp;</div>
								<div class="portfolio_center_description">
									<!-- <div class="client_logo"> -->
										<a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
">
											<img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/works/<?php echo $_smarty_tpl->getVariable('teaser')->value['work_thumb'];?>
" class="img_work" alt="<?php echo $_smarty_tpl->getVariable('teaser')->value['work_name'];?>
" title="<?php echo $_smarty_tpl->getVariable('teaser')->value['work_name'];?>
"/>
										</a>
										<!-- **************************** 
											<div id="work_<?php echo $_smarty_tpl->getVariable('teaser')->value['work_id'];?>
" class="client_menu relative" style="display:none; " >
												<div style="left: 90px; top: 0px;" class="visible work_visible">
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
										 **************************** -->
									<!-- </div> -->
									<div class="portfolio_center_right">
										<div><!--<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
<?php echo $_smarty_tpl->getVariable('teaser')->value['parent_chpu'];?>
">--><?php echo $_smarty_tpl->getVariable('module')->value["parent_title"];?>
<!--</a> &#8594;--></div>
										<p class=" font15px"><a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
"><?php echo $_smarty_tpl->getVariable('teaser')->value["work_name"];?>
</a></p>
										<!-- <ul>
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
										 -->
										<p><?php echo $_smarty_tpl->getVariable('teaser')->value["htmltext_teaser"];?>
</p>
									</div>
									<div class="clearer"></div>
								</div>
							</div>
						<?php }} ?>
					</div>
					
					<?php }?>
					
					<div class="clearer"></div>
				</div>
				