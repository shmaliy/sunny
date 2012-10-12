<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:32:29
         compiled from "designs/default/template/design/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2114979894e393fddb87909-46408990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0748d734389e540f7643dbb7c73ee05df8d9c6c3' => 
    array (
      0 => 'designs/default/template/design/main_menu.tpl',
      1 => 1278933243,
    ),
  ),
  'nocache_hash' => '2114979894e393fddb87909-46408990',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<div class="header">
				<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" class="design_logo"></a>
				<div class="menu_top">
					<div <?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="design"){?>class="curent_menu"<?php }?>><!--curent_menu   добавить когда активная-->
						<div class="design_service">
							<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/">Услуги</a>
						</div>
					</div>
					<div <?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="portfolio"){?>class="curent_menu"<?php }?>>
						<div class="design_our_work">
							<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/portfolio/">Наши работы</a>
						</div>	
					</div>
					<div <?php if ($_smarty_tpl->getVariable('current_main_menu')->value=="partners"){?>class="curent_menu"<?php }?>>
						<div class="design_partner">
							<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/design/partners/">Партнёры</a>
						</div>
					</div>
					<div >
						<div class="design_contact">
							<a href="javascript:void(0);" onclick="hidePlanet('#full','#default'); var k=getElementById('wrapper');  k.className='contact_full'; scrollto('#footer');">Контакты</a>
						</div>	
					</div>
				</div>
				<div class="menu_top_right"><!-- +curent_menu   добавить когда активная-->
					<div class="design_consulting">
						<a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/consulting/">Консалтинг</a>
					</div>	
				</div>
			</div>