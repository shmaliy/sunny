<?php 
$id = JRequest::getVar('id');
$model = $this->getModel();

if($id):
	$item       = $model->getItem($id);
	
	$title      = $item->title;
	$alias      = $item->alias;
	$published  = $item->published;
	$ordering   = $item->ordering;
	$parent_id  = $item->parent_id;
	$id_section = $item->id_section;
	
else:

	$title      = '';
	$alias      = '';
	$published  = 1;
	$ordering   = '';
	$parent_id  = 0;
	$id_section = 0;

endif;

$catList     = ContentHelper::selectList($model->getCatList(),'parent_id','Родитель', $parent_id);
$sectionList = ContentHelper::selectList($model->getSectionList(),'id_section','Выбирите раздел', $id_section);
?>
<script type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;
	if( form.title.value == "" )
	{
		alert('Укажите название!'); 
		form.title.focus(); 
		return false; 
	}
	else
	{
		submitform(pressbutton);
	}
}
</script>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
		  <fieldset class="adminform">
		  <legend><?php echo JText::_('Основные параметры');?></legend>
		  <table class="admintable">
			<tbody>
            
			  <tr>
				<td class="key"><label for="title"><?php echo JText::_('Название');?></label>
				</td>
				<td><input type="text" value="<?php echo $title?>" maxlength="255" size="60"  name="title" id="title" class="inputbox">
				</td>
			  </tr>

			  <tr>
				<td class="key"><label for="alias"><?php echo JText::_('Псевдоним');?></label>
				</td>
				<td><input type="text" value="<?php echo $alias?>" maxlength="255" size="60"  name="alias" id="alias" class="inputbox">
				</td>
			  </tr>

			  <tr>
				<td class="key"><label for="id_section"><?php echo JText::_('Раздел');?></label>
				</td>
				<td><?php echo $sectionList; ?>
				</td>
			  </tr>

			  <tr>
				<td class="key"><label for="parent_id"><?php echo JText::_('Родительская категория');?></label>
				</td>
				<td><?php echo $catList; ?>
				</td>
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
                       
			</tbody>
		  </table>
	  </fieldset>
 

<input type="hidden" name="option" value="com_content" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="category" />
</form>
