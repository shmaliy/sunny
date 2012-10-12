<?php /* Smarty version Smarty3-b8, created on 2011-08-03 17:44:57
         compiled from "designs/default/template/consulting/consulting_consultants_category_teaser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11228240244e395ee99218b8-89939470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa317ad96b08f8e17f6a1edb3761dfdb237cf48b' => 
    array (
      0 => 'designs/default/template/consulting/consulting_consultants_category_teaser.tpl',
      1 => 1294750076,
    ),
  ),
  'nocache_hash' => '11228240244e395ee99218b8-89939470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<div class="adviser_consulting <?php if (($_smarty_tpl->getVariable('iter')->value+2)%3==0){?>left<?php }?><?php if (($_smarty_tpl->getVariable('iter')->value+2)%3==2){?>left margin_left10px<?php }?><?php if (($_smarty_tpl->getVariable('iter')->value+2)%3==1){?>left margin_left10px<?php }?>">
					<div class="service_img">	
						<div class="adviser_bg adviser_bg_1">					
							<a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
" class="adviser_bg adviser_bg_1" style="background: url(http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/<?php echo $_smarty_tpl->getVariable('teaser')->value['teaser_photo_gray'];?>
) no-repeat;"><span><?php echo $_smarty_tpl->getVariable('teaser')->value['fio'];?>
</span></a>
						</div>
					</div>
					<div class="consulting_text">
					<!--<?php echo ($_smarty_tpl->getVariable('iter')->value);?>
 <?php echo ($_smarty_tpl->getVariable('iter')->value+2)%3;?>
-->
						<div class="consulting_text_about">							
							<p><b><?php echo $_smarty_tpl->getVariable('teaser')->value['post'];?>
</b></p>
							<p><?php echo $_smarty_tpl->getVariable('teaser')->value['teaser_text'];?>
</p>
						</div>
						<div class="consulting_text_contect">
							<p><b>Связаться:</b></p>
							<a href="mailto:<?php echo $_smarty_tpl->getVariable('teaser')->value['contact_email'];?>
"><?php echo $_smarty_tpl->getVariable('teaser')->value['contact_email'];?>
</a>
							<p><?php echo $_smarty_tpl->getVariable('teaser')->value['contact_phone'];?>
</p>
						</div>
					</div>
				</div>
				
				<!--<div class="adviser_consulting <?php if (($_smarty_tpl->getVariable('iter')->value+1)%3==2){?>left<?php }?><?php if (($_smarty_tpl->getVariable('iter')->value+1)%3==0){?>right<?php }?><?php if (($_smarty_tpl->getVariable('iter')->value+1)%3==1){?>center<?php }?>">
					<div class="service_img">
						<a href="<?php echo $_smarty_tpl->getVariable('teaser')->value['chpu'];?>
" class="adviser_bg adviser_bg_<?php if (($_smarty_tpl->getVariable('iter')->value+1)%3==2){?>1<?php }?><?php if (($_smarty_tpl->getVariable('iter')->value+1)%3==0){?>1<?php }?><?php if (($_smarty_tpl->getVariable('iter')->value+1)%3==1){?>2<?php }?>" style="background: url(http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images/<?php echo $_smarty_tpl->getVariable('teaser')->value['teaser_photo_gray'];?>
) no-repeat;"><span><?php echo $_smarty_tpl->getVariable('teaser')->value['fio'];?>
</span></a>
					</div>
					<div class="consulting_text">
						<div class="consulting_text_about">							
							<p><b><?php echo $_smarty_tpl->getVariable('teaser')->value['post'];?>
</b></p>
							<p><?php echo $_smarty_tpl->getVariable('teaser')->value['teaser_text'];?>
</p>
						</div>
						<div class="consulting_text_contect">
							<p><b>Связаться:</b></p>
							<a href="mailto:<?php echo $_smarty_tpl->getVariable('teaser')->value['contact_email'];?>
"><?php echo $_smarty_tpl->getVariable('teaser')->value['contact_email'];?>
</a>
							<p><?php echo $_smarty_tpl->getVariable('teaser')->value['contact_phone'];?>
</p>
						</div>
					</div>
				</div>					
				-->	
				<?php if (($_smarty_tpl->getVariable('iter')->value+2)%3==2){?>				
				<div class="clearer" style="height:10px;"></div>
				<?php }?>		
							