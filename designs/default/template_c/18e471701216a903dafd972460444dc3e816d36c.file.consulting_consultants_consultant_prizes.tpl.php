<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:49
         compiled from "designs/default/template/consulting/consulting_consultants_consultant_prizes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6700862134e393e11edc5e6-23123596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18e471701216a903dafd972460444dc3e816d36c' => 
    array (
      0 => 'designs/default/template/consulting/consulting_consultants_consultant_prizes.tpl',
      1 => 1278933233,
    ),
  ),
  'nocache_hash' => '6700862134e393e11edc5e6-23123596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<?php if ($_smarty_tpl->getVariable('module')->value["prizes"]!=null){?>
			<h2>Награды, сертификаты, дипломы</h2>
			<div class="our_work_photo consulting_photo">
			
				<div class="control_panel">
					<div class="visible_corner visible_top_left"></div>
					<div class="visible_center">
						<ul style="width: <?php echo count($_smarty_tpl->getVariable('module')->value["prizes"])*11;?>
px;">
							<?php  $_smarty_tpl->tpl_vars['prize'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["prizes"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['prize']->key => $_smarty_tpl->tpl_vars['prize']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']++;
?>
								<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['it']['iteration']==1){?>class="curent"<?php }?>><a id="goto_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['it']['iteration'];?>
" class="" href="javascript:void(0);" onclick="gotoPicture(this);" title="<?php echo $_smarty_tpl->getVariable('prize')->value->htmltext;?>
"></a></li>
							<?php }} ?>
							<!--<li><a id="goto_1" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li class="curent"><a id="goto_2" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li><a id="goto_3" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li><a id="goto_4" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li><a id="goto_5" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>-->
						</ul>
					</div>
					<div class="visible_corner visible_top_right"></div>
					<a href="javascript:void(0);" class="arrows arrows_left" onclick="prevPicture();" title="Предыдущее изображение"></a>
					<a href="javascript:void(0);" class="arrows arrows_right" onclick="nextPicture();" title="Следующее изображение"></a>
				</div>
				
				<div class="visible">
					<a href="javascript:void(0);" onclick="prevPicture();" class="arrows arrows_left"></a>
					<div class="visible_corner visible_top_left"></div>
					<div class="visible_corner visible_top_right"></div>
					<div class="visible_bacground visible_left"></div>
					<div class="visible_bacground visible_top"></div>
					<div class="visible_bacground visible_center">						
						<?php  $_smarty_tpl->tpl_vars['prize'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value["prizes"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']=0;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['prize']->key => $_smarty_tpl->tpl_vars['prize']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['it']['iteration']++;
?>				
							<div id="picture_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['it']['iteration'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['it']['iteration']==1){?>class="current_picture"<?php }else{ ?>style="display:none;"<?php }?>>
								<div><?php echo $_smarty_tpl->getVariable('prize')->value->htmltext;?>
</div>
								<img src="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images<?php echo $_smarty_tpl->getVariable('prize')->value->picture;?>
" alt="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/images<?php echo $_smarty_tpl->getVariable('prize')->value->picture;?>
"/>															
							</div>									
						<?php }} ?>						
					</div>
					<div class="visible_corner visible_bottom_left"></div>
					<div class="visible_corner visible_bottom_right"></div>
					<div class="visible_bacground visible_right"></div>
					<div class="visible_bacground visible_bottom"></div>
					<a href="javascript:void(0);" onclick="nextPicture();" class="arrows arrows_right"></a>
				</div>						
			</div>					
		<?php }?>