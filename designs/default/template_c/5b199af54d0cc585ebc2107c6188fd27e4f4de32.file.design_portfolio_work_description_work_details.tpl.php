<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:38:07
         compiled from "designs/default/template/design/design_portfolio_work_description_work_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1724083584e39412f2cd9f6-98256376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b199af54d0cc585ebc2107c6188fd27e4f4de32' => 
    array (
      0 => 'designs/default/template/design/design_portfolio_work_description_work_details.tpl',
      1 => 1278933239,
    ),
  ),
  'nocache_hash' => '1724083584e39412f2cd9f6-98256376',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<div class="our_work_details">
					<div class="client_logo">
						<!-- **************************** -->
							<div id="work_<?php echo $_smarty_tpl->getVariable('teaser')->value['work_id'];?>
" class="client_menu relative" style="display:none;" >
								<div style="left: 60px; top: 90px;" class="visible work_visible">
									<div class="visible_corner visible_top_left"></div>
									<div class="visible_corner visible_top_right"></div>
									<div class="visible_bacground visible_left"></div>
									<div class="visible_bacground visible_top"></div>
										<div class="visible_bacground visible_center">
											<ul>
											<?php  $_smarty_tpl->tpl_vars['teaser_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["menu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/works/<?php echo $_smarty_tpl->getVariable('module')->value['work']['work_thumb'];?>
" class="img_work" alt="<?php echo $_smarty_tpl->getVariable('module')->value['work']['work_name'];?>
" />						
					</div>
					<div class="our_work_details_center">
						<h1><?php echo $_smarty_tpl->getVariable('module')->value["work"]->work_name;?>
</h1>
						<div class="our_work_details_center_description">
							<div class="our_work_details_left">
								Сделано для:
							</div>
							<div class="our_work_details_right">
								<?php if ($_smarty_tpl->getVariable('module')->value["work"]->site_address==''){?>
									<?php echo $_smarty_tpl->getVariable('module')->value["work"]->client_name;?>

								<?php }else{ ?>
									<a href="<?php echo $_smarty_tpl->getVariable('module')->value["work"]->site_address;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('module')->value["work"]->client_name;?>
</a>
								<?php }?>
							</div>
							<div class="clearer"></div>	
							<?php if ($_smarty_tpl->getVariable('module')->value["work"]->work_types){?>						
							<div class="our_work_details_left">
								Выполнены:
							</div>
							<div class="our_work_details_right">
								<?php echo $_smarty_tpl->getVariable('module')->value["work"]->work_types;?>

							</div>
							<div class="clearer"></div>
							<?php }?>
							<?php if ($_smarty_tpl->getVariable('module')->value["work"]->work_technologies){?>
							<div class="our_work_details_left">
								С помощью:
							</div>
							<div class="our_work_details_right">
								<?php echo $_smarty_tpl->getVariable('module')->value["work"]->work_technologies;?>

							</div>
							<div class="clearer"></div>
							<?php }?>
							<!--
							<div class="our_work_details_left">
								Участники:&nbsp;
							</div>
							<div class="our_work_details_right">
								<div>&nbsp;</div>
								<div>&nbsp;</div>
								<div>&nbsp;</div>
							</div>			
							-->	
						</div>
						<?php if ($_smarty_tpl->getVariable('module')->value["work"]->client_request_htmltext!=''){?>
						<div class="our_work_details_center_visible">
							<div class="visible">
								<div class="visible_corner visible_top_left"></div>
								<div class="visible_corner visible_top_right"></div>
								<div class="visible_bacground visible_left"></div>
								<div class="visible_bacground visible_top"></div>
								<div class="visible_bacground visible_center">
									<div class="title">Слово заказчика:</div>
									<p><?php echo $_smarty_tpl->getVariable('module')->value["work"]->client_request_htmltext;?>
</p>
									<p><?php echo $_smarty_tpl->getVariable('module')->value["work"]->client_request_name;?>
, <?php echo $_smarty_tpl->getVariable('module')->value["work"]->client_request_post;?>
</p>
									<div class="clearer"></div>
								</div>
								<div class="visible_corner visible_bottom_left"></div>
								<div class="visible_corner visible_bottom_right"></div>
								<div class="visible_bacground visible_right"></div>
								<div class="visible_bacground visible_bottom"></div>
							</div>
						</div>						
						<div class="clearer"></div>
						<?php }?>
					</div>
					<div class="clearer"></div>
				</div>