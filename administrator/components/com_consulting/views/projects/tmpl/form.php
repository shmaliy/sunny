<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$id_consultant = $item->id_consultant;
	$title         = $item->title;
	$image         = $item->image;
	$href          = $item->href;
	$desc          = $item->desc;
	$published     = $item->published;
	
else:

	$title      = '';
	$id_consultant    = 0;
	$image      = '';
	$href         = '';
	$desc         = '';
	$published   = 1;
	
endif;

	$workList = ConsultingHelper::selectList($model->getConsultantList(), 'id_consultant', 'Выбирите консультанта', $id_consultant);

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
			<td class="key"><label for="href"><?php echo JText::_('Ссылка');?></label></td>
			<td><input type="text" value="<?php echo $href?>" maxlength="255" size="60"  name="href" id="href" class="inputbox"></td>
		</tr>
		
		<tr>
			<td class="key"><label for="id_work"><?php echo JText::_('Консультант');?></label></td>
			<td><?php echo $workList?></td>
		</tr>

			  <tr>
				<td class="key"><label for="published"><?php echo JText::_('Опубликовано');?></label>
				</td>
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
            <td><img src="../images/sunny/consultant/<?php echo $image?>?w=100&h=100&tc&ns" /></td>
        </tr>
        <input type="hidden" name="image_hid" value="<?php echo $image?>" />           	
        <?php endif;?>		

	</table>
</fieldset>

		  <fieldset class="adminform">
		  <table class="admintable">
			<tbody>
			  <tr>
              	<td class="key"><label for="desc"><?php echo JText::_('Описание');?></label></td>
				<td><?php echo $editor->display( 'desc', ''.$desc.'', '900', '400', '20', '20');?></td>
			  </tr>		
		    </tbody>
		  </table>  
		  </fieldset>

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
