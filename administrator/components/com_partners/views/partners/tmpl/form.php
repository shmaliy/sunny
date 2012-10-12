<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$title      = $item->title;
	$alias      = $item->alias;
	$image      = $item->logo;
	$type       = $item->type;
	$href       = $item->href;
	$published  = $item->published;
	
	
else:

	$title      = '';
	$alias      = '';
	$image      = '';
	$type       = 1;
	$href       = '';
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
			<td><input type="text" value="<?php echo $title?>" maxlength="255" size="60"  name="title" id="title" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="alias"><?php echo JText::_('Псевдоним');?></label></td>
			<td><input type="text" value="<?php echo $alias?>" maxlength="255" size="60"  name="alias" id="alias" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="href"><?php echo JText::_('Ссылка');?></label></td>
			<td><input type="text" value="<?php echo $href?>" maxlength="255" size="60"  name="href" id="href" class="inputbox"></td>
		</tr>
			  
		<tr>
			<td class="key"><label for="type"><?php echo JText::_('Тип партнера');?></label></td>
			<td>
				<select name="type" id="type">					
                	<option value="1" <?php if( $type == 1 ) echo 'selected';?> ><?php echo JText::_('Консалтеры');?></option>
					<option value="2"  <?php if( $type == 2 ) echo 'selected';?>  ><?php echo JText::_('Дизайн-студии');?></option>
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


        <tr>
        	<td class="key"><label for="image"><?php echo JText::_('Изображение');?></label></td>
            <td><input type="file" name="image" id="image" /></td>
        </tr>

        <?php if( $image ):?>
        <tr>
        	<td class="key"><label><?php echo JText::_('Текущее изображение');?></label></td>
            <td><img src="../images/sunny/partners/<?php echo $image?>" /></td>
        </tr>
        <input type="hidden" name="image_hid" value="<?php echo $image?>" />           	
        <?php endif;?>

	</table>
</fieldset>

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="ordering_hid" value="<?php echo $ordering?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
