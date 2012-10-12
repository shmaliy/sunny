<?php /* Smarty version Smarty3-b8, created on 2011-08-03 19:23:20
         compiled from "designs/default/template/design/design_partners_partner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21352187464e3975f8a5d114-81339953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ace484e2fe1b05fea097e1aa4c9f2abcf350cf' => 
    array (
      0 => 'designs/default/template/design/design_partners_partner.tpl',
      1 => 1278933238,
    ),
  ),
  'nocache_hash' => '21352187464e3975f8a5d114-81339953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
						<div class="portfolio_top">
							<div class="portfolio_center">
								<div class="portfolio_center_description">
									<?php if ($_smarty_tpl->getVariable('partner')->value['url']!=''){?><a href="<?php echo $_smarty_tpl->getVariable('partner')->value['url'];?>
" ><?php }?>
									<img  title="<?php echo $_smarty_tpl->getVariable('partner')->value['name'];?>
" src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/images/empty.png" style="border:none; background: url('http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/partners/<?php echo $_smarty_tpl->getVariable('partner')->value['logo_gray'];?>
') no-repeat center top; width: 230px; height: 160px; margin-top: -80px; margin-left: -115px; " alt="<?php echo $_smarty_tpl->getVariable('partner')->value['url'];?>
"/>
									<?php if ($_smarty_tpl->getVariable('partner')->value['url']!=''){?></a><?php }?>
								</div>
							</div>
						</div>