<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$title          = $item->title;
	$id_consulting  = $item->id_consulting;
	$desc           = $item->desc;
	$published      = $item->published;
	
else:

	$title      = '';
	$id_consulting     = 0;
	$desc           = '';
	$published  = 1;
	
endif;

$conList = ConsultingHelper::selectList($model->getConsultantList(), 'id_consultant', 'Выбирите консультанта', $id_consulting);

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
			<td class="key"><label for="id_consultant"><?php echo JText::_('Консультант');?></label></td>
			<td><?php echo $conList?></td>
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
			<tbody>
			  <tr>
              	<td class="key"><label for="s_desc"><?php echo JText::_('Полное описание');?></label></td>
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
