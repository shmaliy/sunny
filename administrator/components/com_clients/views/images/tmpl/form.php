<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$id_work    = $item->id_work;
	$title      = $item->title;
	$image      = $item->image;
	
else:

	$title      = '';
	$id_work    = 0;
	$image      = '';
	
endif;

	$workList = ClientsHelper::selectList($model->getWorkList(), 'id_work', 'Выбирите работу', $id_work);

?>
<script type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;
//	if (form.title.value == ""){
	//	alert('Укажите название!'); 
	//	form.title.focus(); 
	//	return false; 
	//} else {
		submitform(pressbutton);
	//}
}
</script>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
<fieldset class="adminform">
	<legend><?php echo JText::_('Основные параметры');?></legend>
	<table class="admintable">   
		<tr>
			<td class="key"><label for="title"><?php echo JText::_('Описани');?></label></td>
			<td><?php echo $editor->display('title', ''.$title.'', '700', '300', '20', '20');?></td>
		</tr>
		
		<tr>
			<td class="key"><label for="id_work"><?php echo JText::_('Работа');?></label></td>
			<td><?php echo $workList?></td>
		</tr>

        <tr>
        	<td class="key"><label for="image"><?php echo JText::_('Изображение');?></label></td>
            <td><input type="file" name="image" id="image" /></td>
        </tr>
              
        <?php if( $image ):?>
        <tr>
        	<td class="key"><label><?php echo JText::_('Текущее изображение');?></label></td>
            <td><img src="../images/sunny/works/<?php echo $image?>?w=100&h=100&tc&ns" /></td>
        </tr>
        <input type="hidden" name="image_hid" value="<?php echo $image?>" />           	
        <?php endif;?>		

	</table>
</fieldset>

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
</form>
