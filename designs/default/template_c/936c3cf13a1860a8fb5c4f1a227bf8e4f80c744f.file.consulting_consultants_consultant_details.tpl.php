<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/consulting/consulting_consultants_consultant_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8188961204e393e11dcdb13-87709529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936c3cf13a1860a8fb5c4f1a227bf8e4f80c744f' => 
    array (
      0 => 'designs/default/template/consulting/consulting_consultants_consultant_details.tpl',
      1 => 1278933233,
    ),
  ),
  'nocache_hash' => '8188961204e393e11dcdb13-87709529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<div class="our_work_details">
				<img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->photo;?>
" class="img_consulting" alt="<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->fio;?>
" title="<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->fio;?>
""/>
				<div class="our_work_details_center">					
					<?php $_template = new Smarty_Internal_Template("consulting/sub_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('root_url',($_smarty_tpl->getVariable('root_url')->value));$_template->assign('module',($_smarty_tpl->getVariable('module')->value)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
							
					<h1><?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->fio;?>
</h1>							
					<div>
						<strong><?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->post;?>
</strong>
					</div>
					<div class="consulting_details_center_description">
						<!--<h2>Консультант: <?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->fio;?>
</h2>-->
						<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->about;?>

					</div>
					<div class="consulting_details_center_visible">
						<h2>Как связаться</h2>
						<?php if ($_smarty_tpl->getVariable('module')->value["consultant"]->contact_phone){?>
						<div class="consulting_details_left">
							Мобильный:
						</div>
						<div class="consulting_details_right">
							<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->contact_phone;?>

						</div>
						<?php }?>
						<div class="clearer"></div>
						<?php if ($_smarty_tpl->getVariable('module')->value["consultant"]->contact_email){?>
						<div class="consulting_details_left">
							Электронная почта:
						</div>
						<div class="consulting_details_right">
							<a href="mailto:<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->contact_email;?>
"><?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->contact_email;?>
</a>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->getVariable('module')->value["consultant"]->contact_skype){?><div class="consulting_details_left">
							Skype:
						</div>
						<?php }?>
						<div class="consulting_details_right">
							<?php if ($_smarty_tpl->getVariable('module')->value["consultant"]->contact_skype){?><a href="#"><?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->contact_skype;?>
</a><?php }?>
							<div class="margin_top15px">
								<a href="javascript:void(0);" class="a_2f88e5_dashed font11px" onclick="scrollto('#footer');">
									Форма обратной связи
								</a>
							</div>
						</div>
						<div class="clearer"></div>
					</div>
					<div class="clearer"></div>
				</div>
			</div>
			<div class="clearer"></div>

			<!--<div class="our_work_text">				
				<?php echo $_smarty_tpl->getVariable('module')->value["consultant"]->resume;?>

			</div>-->