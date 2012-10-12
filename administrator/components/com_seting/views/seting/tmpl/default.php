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
				<th class="title">
					<?php echo JHTML::_('grid.sort', 'Статус', 'c.title', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>
                <th width="150"><?php echo JText::_('Номер последней отправленной работы')?></th>
                <th width="150"><?php echo JText::_('Номер последней отправленной новости')?></th>
                <th width="150"><?php echo JText::_('Дата отправления/проверки')?></th>
                </tr>
		</thead>
		<tbody>
			<?php 
				foreach($this->items as $item):
						$id = $item->id;
						$i++;
						$link_edit = JRoute::_("index.php?option={$option}&layout=form&task=edit&id={$id}");
																					
					?>
					<tr class="row<?php echo ($i%2) ? 0 : 1;?>">
						<td><?php echo $id; ?></td>
						<td><?php echo $item->statys?></td>
						<td align="center"><?php echo $item->id_work?></td>
						<td align="center"><?php echo $item->id_news?></td>
						<td align="center"><?php echo $item->date?></td>
					</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="10" align="center" style="background-color:#F0F0F0"><?php echo $page->getListFooter(); ?></td>
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
