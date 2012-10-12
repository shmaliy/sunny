<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$title      = $item->title;
	$alias      = $item->alias;
	$published  = $item->published;
	$ordering   = $item->ordering;
	$style      = $item->style;
	$desc       = $item->desc;
	$href       = $item->href;
	$styleCss   = $item->style_css;
	
else:

	$title      = '';
	$alias      = '';
	$published  = 1;
	$ordering   = '';
	$style      = 1;
	$desc       = '';
	$href       = '';
	$styleCss   = '';

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
			<td><input type="text" value="<?php echo $title?>" maxlength="255" size="60"  name="title" id="title" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="alias"><?php echo JText::_('Псевдоним');?></label></td>
			<td><input type="text" value="<?php echo $alias?>" maxlength="255" size="60"  name="alias" id="alias" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="style_css"><?php echo JText::_('Стиль оформления');?></label></td>
			<td><input type="text" value="<?php echo $styleCss?>" maxlength="255" size="60"  name="style_css" id="style_css" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="href"><?php echo JText::_('Ссылка');?></label></td>
			<td><input type="text" value="<?php echo $href?>" maxlength="255" size="60"  name="href" id="href" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="style"><?php echo JText::_('Опубликовано');?></label></td>
			<td>
				<select name="style" id="style">					
                	<option value="1" <?php if( $style == 1 ) echo 'selected';?> ><?php echo JText::_('На главной');?></option>
                	<option value="2" <?php if( $style == 2 ) echo 'selected';?> ><?php echo JText::_('На внутренних');?></option>
					<option value="3"  <?php if( $style == 3 ) echo 'selected';?>  ><?php echo JText::_('Консалтинг');?></option>
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
			<td class="key"><label for="s_desc"><?php echo JText::_('Полное описание');?></label></td>
			<td><?php echo $editor->display( 'desc', ''.$desc.'', '900', '400', '20', '20');?></td>
		</tr>		

	</table>  
</fieldset> 

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
