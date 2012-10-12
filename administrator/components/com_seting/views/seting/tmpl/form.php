<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();
$editor   =& JFactory::getEditor();

$controller = $this->controller;
$option     = $this->option;

if($id):
	$item       = $model->getItem($id);
	
	$id_email = $item->id_work;
	$email     = $item->id_news;
	$fio      = $item->data;
	$comments      = $item->statys;

	
	
else:

	$id_work = '';
	$id_news = '';
	$data    = '';
	$statys  = '';


endif;

?>

<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
<fieldset class="adminform">
	<legend><?php echo JText::_('Основные параметры');?></legend>
	<table class="admintable">   
		<tr>
			<td class="key"><label for="id_work"><?php echo JText::_('Номер последней отправленной работы');?></label></td>
			<td><input type="text" value="<?php echo $id_work?>" maxlength="255" size="60"  name="id_work" id="id_work" class="inputbox"></td>
		</tr>

		<tr>
			<td class="key"><label for="id_news"><?php echo JText::_('Номер последней отправленной новости');?></label></td>
			<td><input type="text" value="<?php echo $id_news?>" maxlength="255" size="60"  name="id_news" id="id_news" class="inputbox"></td>
		</tr>
		<tr>
			<td class="key"><label for="data"><?php echo JText::_('Дата отправки/проверки');?></label></td>
			<td><input type="text" value="<?php echo $data?>" maxlength="255" size="60"  name="data" id="data" class="inputbox"></td>
		</tr>
	
	</table>
</fieldset>
<fieldset class="adminform">
	<table class="admintable">

<tr>
			<td class="key"><label for="statys"><?php echo JText::_('Статус');?></label></td>
			<td><input type="text" value="<?php echo $statys?>" maxlength="255" size="60"  name="statys" id="statys" class="inputbox"></td>
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
