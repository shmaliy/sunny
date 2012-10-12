<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$id_email = $item->id_email;
	$email     = $item->email;
	$fio      = $item->fio;
	$activity     = $item->activity;
	$spam_avto       = $item->spam_avto;
	$spam_manual      = $item->spam_manual;
	$comments      = $item->comments;
	$published  = $item->published;
	$ordering   = $item->ordering;
	
	
else:

	$id_email = 0;
	$email      = '';
	$fio      = '';
	$activity     = '';
	$spam_avto       = 0;
	$spam_manual       = 0;
	$scomments       = '';
	$published  = 1;
	$ordering   = 0;

endif;

?>
<script type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (form.title.value == ""){
		alert('Укажите название!'); 
		form.title.focus(); 
		return false; 
	} else {
		submitform(pressbutton);
	}
}
</script>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
<fieldset class="adminform">
	<legend><?php echo JText::_('Основные параметры');?></legend>
	<table class="admintable">   
		<tr>
			<td class="key"><label for="email"><?php echo JText::_('Почта');?></label></td>
			<td><input type="text" value="<?php echo $email?>" maxlength="255" size="60"  name="email" id="email" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="fio"><?php echo JText::_('ФИО');?></label></td>
			<td><input type="text" value="<?php echo $fio?>" maxlength="255" size="60"  name="fio" id="fio" class="inputbox"></td>
		</tr>
		<tr>
			<td class="key"><label for="activity"><?php echo JText::_('Сфера деятельности');?></label></td>
			<td><input type="text" value="<?php echo $activity?>" maxlength="255" size="60"  name="activity" id="activity" class="inputbox"></td>
		</tr>
	
		<tr>
			<td class="key"><label for="spam_avto"><?php echo JText::_('Подписан на авто рассылку');?></label></td>
			<td>
				<select name="spam_avto" id="spam_avto">					
                	<option value="1" <?php if( $spam_avto == 1 ) echo 'selected';?> ><?php echo JText::_('Да');?></option>
					<option value="0"  <?php if( $spam_avto == 0 ) echo 'selected';?>  ><?php echo JText::_('Нет');?></option>
				</select>		
			</td>
		</tr> 
		<tr>
			<td class="key"><label for="spam_manual"><?php echo JText::_('Подписан на ручную рассылку');?></label></td>
			<td>
				<select name="spam_manual" id="spam_manual">					
                	<option value="1" <?php if( $spam_manual == 1 ) echo 'selected';?> ><?php echo JText::_('Да');?></option>
					<option value="0"  <?php if( $spam_manual == 0 ) echo 'selected';?>  ><?php echo JText::_('Нет');?></option>
				</select>		
			</td>
		</tr> 		  
		<tr>
			<td class="key"><label for="published"><?php echo JText::_('Опубликовано');?></label></td>
			<td>
				<select name="published" id="published">					
                	<option value="1" <?php if( $published == 1 ) echo 'selected';?> ><?php echo JText::_('Да');?></option>
					<option value="0"  <?php if( $published == 0 ) echo 'selected';?>  ><?php echo JText::_('Нет');?></option>
				</select>		
			</td>
		</tr> 

	</table>
</fieldset>
<fieldset class="adminform">
	<table class="admintable">

		<tr>
			<td class="key"><label for="comments"><?php echo JText::_('Комментарий');?></label></td>
			<td><?php echo $editor->display( 'comments', ''.$comments.'', '900', '200', '20', '20');?></td>
		</tr>	

	</table>  
</fieldset> 

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="ordering_hid" value="<?php echo $ordering?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
