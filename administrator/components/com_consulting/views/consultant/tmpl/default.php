<?php
	$model      = $this->getModel();
	$page       = $this->page;   
	$lists      = $this->lists;
	$option     = $this->option;
	$controller = $this->controller;
	$view       = $this->view;
	$i=0;
?>
<form action="index.php?option=<?php echo $option?>" method="post" name="adminForm">
<div id="editcell">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%" class="title">			
					<?php echo JText::_('ID')?>
				</th>
				<th width="2%">&nbsp;</th>
				<th class="title">
					<?php echo JHTML::_('grid.sort', 'ФИО', 'c.fio', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>
                <th width="250"><?php echo JText::_('Псевдоним')?></th>
                <th width="150"><?php echo JText::_('Должность')?></th>
                <th width="150"><?php echo JText::_('Email')?></th>
                <th width="150"><?php echo JText::_('Изображение')?></th>           
				<th width="100">
					<?php echo JHTML::_('grid.sort', 'Published', 'c.published', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($this->items as $item):
						$id = $item->id_consultant;
						$i++;
						$link_edit = JRoute::_("index.php?option={$option}&view={$view}&layout=form&task=edit&id={$id}");
						if( $item->published == 0 ):
							$link_pub = JRoute::_("index.php?option={$option}&controller={$controller}&task=publish&cid[]={$id}");
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Опубликовать\"><img src='images/publish_x.png' /></a>";						
						else:
							$link_pub = JRoute::_("index.php?option={$option}&controller={$controller}&task=unpublish&cid[]={$id}");
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Не публиковать\"><img src='images/tick.png' /></a>";						
						endif;

					?>
					<tr class="row<?php echo ($i%2) ? 0 : 1;?>">
						<td><?php echo $id; ?></td>
						<td><input type="checkbox" name="cid[]" id="cb<?php echo $id; ?>" onclick="isChecked(this.checked);" value="<?php echo $id; ?>" /></td>
						<td><a href="<?php echo $link_edit; ?>"><?php echo $item->fio?></a></td>
						
						<td align="center"><?php echo $item->alias?></td>
						<td align="center"><?php echo $item->post?></td>
						<td align="center"><a href="mailto:<?php echo $item->email?>"><?php echo $item->email?></a></td>
						<td align="center"><img src="../images/sunny/consultant/<?php echo $item->thumb ?>?w=100&h=100&tc&ns" /></td>
						<td align="center"><?php echo $link_pub; ?></td>
					</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="8" align="center" style="background-color:#F0F0F0"><?php echo $page->getListFooter(); ?></td>
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