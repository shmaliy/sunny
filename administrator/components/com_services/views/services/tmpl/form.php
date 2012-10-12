<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$id_category = $item->id_category;
	$title      = $item->title;
	$alias      = $item->alias;
	$s_desc     = $item->s_desc;
	$desc       = $item->desc;
	$published  = $item->published;
	$ordering   = $item->ordering;
	
	
else:

	$id_category = 0;
	$title      = '';
	$alias      = '';
	$s_desc     = '';
	$desc       = '';
	$published  = 1;
	$ordering   = 0;

endif;

$catList = ServicesHelper::selectList($model->getCatList(), 'id_category', 'Выбирите категорию', $id_category);

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
			<td><input type="text" value="<?php echo $title?>" maxlength="255" size="60"  name="title" id="title" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="alias"><?php echo JText::_('Псевдоним');?></label></td>
			<td><input type="text" value="<?php echo $alias?>" maxlength="255" size="60"  name="alias" id="alias" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="id_category"><?php echo JText::_('Категория услуг');?></label></td>
			<td><?php echo $catList;?></td>
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
			<td class="key"><label for="s_desc"><?php echo JText::_('Краткое описание');?></label></td>
			<td><?php echo $editor->display( 's_desc', ''.$s_desc.'', '900', '200', '20', '20');?></td>
		</tr>	

		<tr>
			<td class="key"><label for="desc"><?php echo JText::_('Полное описание');?></label></td>
			<td><?php echo $editor->display( 'desc', ''.$desc.'', '900', '400', '20', '20');?></td>
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
