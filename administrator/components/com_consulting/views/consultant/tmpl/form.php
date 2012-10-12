<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$fio        = $item->fio;
	$alias      = $item->alias;
	$post       = $item->post;
	$desc       = $item->desc;
	$email      = $item->email;
	$published  = $item->published;
	$teaser     = $item->teaser;
	$thumb      = $item->thumb;
	
else:

	$fio        = '';
	$alias      = '';
	$post       = '';
	$desc       = '';
	$email      = '';
	$published  = 1;
	$teaser     = '';
	$thumb      = '';

endif;
?>
<script type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (form.fio.value == ""){
		alert('Укажите название!'); 
		form.fio.focus(); 
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
			<td class="key"><label for="fio"><?php echo JText::_('ФИО');?></label></td>
			<td><input type="text" value="<?php echo $fio?>" maxlength="255" size="60"  name="fio" id="fio" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="alias"><?php echo JText::_('Псевдоним');?></label></td>
			<td><input type="text" value="<?php echo $alias?>" maxlength="255" size="60"  name="alias" id="alias" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="post"><?php echo JText::_('Должность');?></label></td>
			<td><input type="text" value="<?php echo $post?>" maxlength="255" size="60"  name="post" id="post" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="email"><?php echo JText::_('Email');?></label></td>
			<td><input type="text" value="<?php echo $email?>" maxlength="255" size="60"  name="email" id="email" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="desc"><?php echo JText::_('Описание');?></label></td>
			<td><textarea id="desc" name="desc" style="width: 257px; height: 100px;"><?php echo $desc?></textarea></td>
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

        <tr>
        	<td class="key"><label for="teaser"><?php echo JText::_('Фото для тизера');?></label></td>
            <td><input type="file" name="teaser" id="teaser" /></td>
        </tr>
              
        <?php if( $teaser ):?>
        <tr>
        	<td class="key"><label><?php echo JText::_('Текущее изображение');?></label></td>
            <td><img src="../images/sunny/consultant/<?php echo $teaser?>?w=100&h=100&ns" /></td>
        </tr>
        <input type="hidden" name="teaser_hid" value="<?php echo $teaser?>" />           	
        <?php endif;?>
        
        <tr>
        	<td class="key"><label for="thumb"><?php echo JText::_('Фото для страницы');?></label></td>
            <td><input type="file" name="thumb" id="thumb" /></td>
        </tr>
              
        <?php if( $thumb ):?>
        <tr>
        	<td class="key"><label><?php echo JText::_('Текущее изображение');?></label></td>
            <td><img src="../images/sunny/consultant/<?php echo $thumb?>?w=100&h=100&ns" /></td>
        </tr>
        <input type="hidden" name="thumb_hid" value="<?php echo $thumb?>" />           	
        <?php endif;?>

	</table>
</fieldset>

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
