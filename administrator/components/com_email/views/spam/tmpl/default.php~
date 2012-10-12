<?php
	$model      = $this->getModel();
	$page       = $this->page;   
	$lists      = $this->lists;
	$option     = $this->option;
	$controller = $this->controller;
	$i=0;
?>
<form action="index.php?option=<?php echo $$option?>" method="post" name="adminForm">
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
                <th width="250"><?php echo JText::_('Псевдоним')?></th>
                <th width="150"><?php echo JText::_('Категория')?></th>
                <th width="80">
					<?php echo JHTML::_('grid.sort', 'Порядок', 'c.ordering', @$lists['order_Dir'], @$lists['order'] ); ?>
                    <a title="Сохранить порядок" href="#" onclick="javascript:hideMainMenu(); submitbutton('saveorder')"><img alt="Сохранить порядок" src="images/filesave.png"></a>
                </th>          
				<th width="100">
					<?php echo JHTML::_('grid.sort', 'Published', 'c.published', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($this->items as $item):
						$id = $item->id_service;
						$i++;
						$link_edit = JRoute::_("index.php?option={$option}&layout=form&task=edit&id={$id}");
						if( $item->published == 0 ):
							$link_pub = JRoute::_("index.php?option={$option}&controller={$controller}&task=publish&cid[]={$id}");
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Опубликовать\"><img src='images/publish_x.png' /></a>";						
						else:
							$link_pub = JRoute::_("index.php?option={$option}&controller={$controller}&task=unpublish&cid[]={$id}");
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Не публиковать\"><img src='images/tick.png' /></a>";						
						endif;
						
						$category = $model->getCatTitle($item->id_category);
						
					?>
					<tr class="row<?php echo ($i%2) ? 0 : 1;?>">
						<td><?php echo $id; ?></td>
						<td><input type="checkbox" name="cid[]" id="cb<?php echo $id; ?>" onclick="isChecked(this.checked);" value="<?php echo $id; ?>" /></td>
						<td><a href="<?php echo $link_edit; ?>"><?php echo $item->title?></a></td>
						<td align="center"><?php echo $item->alias?></td>
						<td align="center"><?php echo $category?></td>
						<td align="center"><input type="text" value="<?php echo $item->ordering?>" style="text-align:center; width:30px" name="item[<?php echo $id?>]" /></td>
						<td align="center"><?php echo $link_pub; ?></td>
					</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="7" align="center" style="background-color:#F0F0F0"><?php echo $page->getListFooter(); ?></td>
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
</form>
