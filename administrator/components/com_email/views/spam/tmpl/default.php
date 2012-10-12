<?php 

$editor   =& JFactory::getEditor();

$option     = $this->option;

?>

<form  action="index.php?option=com_email&controller=spam&task=sendMessage" method="post"  id="message_send">
<fieldset class="adminform">
	<legend><?php echo JText::_('Основные параметры');?></legend>
	<table class="admintable">   
		<tr>
			<td class="key"><label for="tems_email"><?php echo JText::_('Тема письма');?></label></td>
			<td><input type="text" value="<?php echo $tems_email?>" maxlength="255" size="60"  name="tems_email" id="tems_email" class="inputbox"></td>
		</tr>
	</table>
</fieldset>
<fieldset class="adminform">
	<table class="admintable">

		<tr>
			<td class="key"><label for="text_email"><?php echo JText::_('Текст письма');?></label></td>
			<td><?php echo $editor->display( 'email_text', ''.$email_text.'', '900', '200', '20', '20');?></td>
		</tr>	

	</table>  
</fieldset> 

<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="ordering_hid" value="<?php echo $ordering?>" />
<input type="hidden" name="task" value="sendMessage" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="spam" />
<input type="submit" name="submit" value="Создать рассылку" />
</form>
