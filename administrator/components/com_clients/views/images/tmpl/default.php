<?php
	$model      = $this->getModel();
	$page       = $this->page;   
	$lists      = $this->lists;
	$option     = $this->option;
	$controller = $this->controller;
	$view       = $this->view;
	$i=0;
?>
<script type="text/javascript">
jQuery('document').ready(function(){
	jQuery('#id_work').change(function(){
		jQuery('#filter_id_work').val(jQuery(this).val());
		jQuery('form:first').submit();
	});
});
</script>
<form action="index.php?option=<?php echo $option?>&view=images" method="post" name="adminForm">
<div id="editcell">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%" class="title">			
					<?php echo JText::_('ID')?>
				</th>
				<th width="2%">&nbsp;</th>
				<th class="title">
					<?php echo JHTML::_('grid.sort', 'Название', 'c.title', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>
                <th width="250"><?php echo JText::_('Работа')?></th>
                <th width="250"><?php echo JText::_('Изображение')?></th> 
                <th width="80">
					<?php echo JHTML::_('grid.sort', 'Порядок', 'c.ordering', @$lists['order_Dir'], @$lists['order'] ); ?>
                    <a title="Сохранить порядок" href="#" onclick="javascript:hideMainMenu(); submitbutton('saveorder')"><img alt="Сохранить порядок" src="images/filesave.png"></a>
                </th>    
			</tr>
		</thead>
		<tbody>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><?php echo $this->workList ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
			<?php 
				foreach($this->items as $item):
						$id = $item->id_image;
						$i++;
						$link_edit = JRoute::_("index.php?option={$option}&view={$view}&layout=form&task=edit&id={$id}");
						if( $item->published == 0 ):
							$link_pub = JRoute::_("index.php?option={$option}&controller={$controller}&task=publish&cid[]={$id}");
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Опубликовать\"><img src='images/publish_x.png' /></a>";						
						else:
							$link_pub = JRoute::_("index.php?option={$option}&controller={$controller}&task=unpublish&cid[]={$id}");
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Не публиковать\"><img src='images/tick.png' /></a>";						
						endif;
						
						$item->work = $model->getWorkTitle($item->id_work);
						
					?>
					<tr class="row<?php echo ($i%2) ? 0 : 1;?>">
						<td><?php echo $id; ?></td>
						<td><input type="checkbox" name="cid[]" id="cb<?php echo $id; ?>" onclick="isChecked(this.checked);" value="<?php echo $id; ?>" /></td>
						<td><a href="<?php echo $link_edit; ?>"><?php echo $item->title?></a></td>
						<td align="center"><?php echo $item->work?></td>
						<td align="center"><img src="../images/sunny/works/<?php echo $item->image?>?w=100&h=100&tc&ns" /></td>
						<td align="center"><input type="text" value="<?php echo $item->ordering?>" style="text-align:center; width:30px" name="item[<?php echo $id?>]" /></td>
					</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="6" align="center" style="background-color:#F0F0F0"><?php echo $page->getListFooter(); ?></td>
			</tr>
		</tbody>		
	</table>
</div>
<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="<?php echo $controller?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="filter_order" value="<?php echo $lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="<?php echo $lists['order_Dir']; ?>" />
<input type="hidden" name="id_work" id="filter_id_work" value="<?php echo $lists['id_work']; ?>" />
</form>
