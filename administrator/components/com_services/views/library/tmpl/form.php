<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);

	$title      = $item->title;
	$href       = $item->href;
	$size       = $item->size;
	$desc       = $item->desc;
	$autor      = $item->autor;
	$published  = $item->published;
	
	
else:

	$title      = '';
	$href      = '';
	$size      = '';
	$desc       = '';
	$published  = 1;

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
			<td class="key"><label for="title"><?php echo JText::_('Название');?></label></td>
			<td><input type="text" value="<?php echo $title?>" maxlength="255" size="103"  name="title" id="title" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="autor"><?php echo JText::_('Автор');?></label></td>
			<td><input type="text" value="<?php echo $autor?>" maxlength="255" size="60"  name="autor" id="autor" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="href"><?php echo JText::_('Ссылка');?></label></td>
			<td><span style="padding:0 10px 0 0">http://sunny.net.ua/images/library/</span><input type="text" value="<?php echo $href?>" maxlength="255" size="60"  name="href" id="href" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="size"><?php echo JText::_('Размер, Кб');?></label></td>
			<td><input type="text" value="<?php echo $size?>" maxlength="255" size="60"  name="size" id="size" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="desc"><?php echo JText::_('Описание');?></label></td>
			<td><textarea name="desc" id="desc" style="width: 357px; height: 100px"><?php echo $desc?></textarea></td>
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

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
