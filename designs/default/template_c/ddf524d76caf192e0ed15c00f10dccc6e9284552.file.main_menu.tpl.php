<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/consulting/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6190454944e393e11c82830-69450372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddf524d76caf192e0ed15c00f10dccc6e9284552' => 
    array (
      0 => 'designs/default/template/consulting/main_menu.tpl',
      1 => 1291817571,
    ),
  ),
  'nocache_hash' => '6190454944e393e11c82830-69450372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<!-- Header  -->
	<div id="header" class="
		<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="consulting"){?>service_menu<?php }?>
		<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="consultants"){?>consulting_menu<?php }?>
		<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="projects"){?>project_menu<?php }?>
		<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="partners"){?>parther_menu<?php }?>
		<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="mba"){?>wba_menu<?php }?>
		">
		<div class="bg_left"></div>
		<div class="bg_center">
			<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" class="consulting_logo"><img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/designs/default/images/consulting/consulting_logo.png" alt="Sunny Creative Technologies Logotype"/></a>
			<div class="consulting_phone">
				<span class="font16px kod">067</span> <span class="font36px">67 98 999</span>
				<div class="align_right font13px"><a href="javascript:void(0);" onclick="scrollto('#footer');" class="a_3e5d7d_dashed">Cвяжитесь с нами</a></div>
			</div>
			<ul class="header_menu">
				<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="consulting"){?>
				<li class="curent">
					<div class="menu_service" >
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index99">
					<div class="menu_consultation">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="z_index98">
					<div  class="menu_project">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="z_index97">
					<div  class="menu_parther">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li  class="z_index96">
					<div  class="menu_wba">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				<?php }?>


				<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="consultants"){?>
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class=" curent">
					<div class="menu_consultation">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="z_index98">
					<div  class="menu_project">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="z_index97">
					<div  class="menu_parther">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li  class="z_index96">
					<div  class="menu_wba">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				<?php }?>
				
				<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="projects"){?>
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index98">
					<div class="menu_consultation">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="curent">
					<div  class="menu_project">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="z_index97">
					<div  class="menu_parther">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<?php }?>
				
				<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="partners"){?>
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index98">
					<div class="menu_consultation">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="z_index97">
					<div  class="menu_project">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="curent">
					<div  class="menu_parther">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li  class="z_index96">
					<div  class="menu_wba">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				<?php }?>

				<?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="mba"){?>
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index98">
					<div class="menu_consultation">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>

				<li class="z_index96">
					<div class="menu_parther">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li class="curent">
					<div  class="menu_wba">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				<?php }?>
				
			</ul>
			<div  class="menu_web">
				<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/"><span>Дизайн-студия</span></a>
			</div>
		</div>
		<div class="bg_right"></div>
	</div>