<?php
	$model      = $this->getModel();
	$page       = $this->page;   
	$lists      = $this->lists;
	$i=0;
?>

<form action="index.php?option=com_comment&view=comment" method="post" name="adminForm">
<div id="editcell">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%" class="title">			
					<?php echo JText::_('ID')?>
				</th>
				<th width="2%">&nbsp;</th>
				<th width="title">
					<?php echo JText::_('Текст')?>
				</th>
				<th width="200">
					<?php echo JText::_('Материал')?>
				</th>
				<th width="200">
					<?php echo JText::_('Пользователь')?>
				</th>
				<th width="200">
					<?php echo JHTML::_('grid.sort', 'Дата публикации', 'c.date', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>        
				<th width="100">
					<?php echo JHTML::_('grid.sort', 'Published', 'c.published', @$lists['order_Dir'], @$lists['order'] ); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->items as $item):?>
					<?php 
						$i++;
						$link_edit = JRoute::_('index.php?option=com_comment&view=comment&layout=form&task=edit&id='.$item->id_comment);
						$article   = $model->getArticleTitle($item->id_article, $item->type);
				
						
						if( $item->published == 0 ):
							$link_pub = JRoute::_('index.php?option=com_comment&view=comment&controller=comment&task=publish&cid[]='.$item->id_comment);
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Опубликовать\"><img src='images/publish_x.png' /></a>";						
						else:
							$link_pub = JRoute::_('index.php?option=com_comment&view=comment&controller=comment&task=unpublish&cid[]='.$item->id_comment);
							$link_pub = "<a href=\"{$link_pub}\" alt=\"Не публиковать\"><img src='images/tick.png' /></a>";						
						endif;

								$article_link = '<a href="index.php?option=com_content&view=item&id='.$article->id.'" target="_blank">'.$article->title.'</a>';


					?>
					<tr class="row<?php echo ($i%2) ? 0 : 1;?>">
						<td><?php echo $item->id_comment; ?></td>
						<td><input type="checkbox" name="cid[]" id="cb<?php echo $item->id_comment; ?>" onclick="isChecked(this.checked);" value="<?php echo $item->id_comment; ?>" /></td>
                        <td><a href="<?php echo $link_edit;?>"><?php echo JString::cropstr($item->text,10);?></a></td>
						<td align="center"><?php echo $article_link;?></td>
                        <td align="center"><?php echo $item->user; ?></td>
                        <td align="center"><?php echo $item->date; ?></td>
						<td align="center"><?php echo $link_pub; ?></td>
					</tr>
			<?php endforeach;?>
			<tr>
				<td colspan="7" align="center" style="background-color:#F0F0F0"><?php echo $page->getListFooter(); ?></td>
			</tr>
		</tbody>		
	</table>
</div>
<input type="hidden" name="option" value="com_comment" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="comment" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="filter_order" value="<?php echo $lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="<?php echo $lists['order_Dir']; ?>" />
</form>
