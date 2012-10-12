<?php
	$model       = $this->getModel('Club');
	// получаем кол-во новостей на страницу
	$limit      = 6;
	
	$page       = JRequest::getInt('page',1);
	$limitstart = $limit*($page-1);
	
	$itemList    = $model->getItemList($limitstart, $limit);
	$all         = $model->getItemCount();
	$option      = 'option=com_consulting&view=club&layout=default';
	
	
	$pagination  = JHTML::_('pagination', $page, $all, $limit, $option);
?>

<div class="company_text news">
	<h1 class="news_h1" align="center"></h1>
	<div class="fixed">
	<?php 
		foreach( $itemList as $item ):
			$count   = $model->getCommentCount($item->id_item, ARTICLES_COMMENT);
			$link    = JRoute::_("index.php?option=com_consulting&view=club&layout=item&id={$item->id_item}");
                        $foto = "{$this->baseurl}/images/sunny/content/{$item->image}";
			
	?>

			
				<div class="club_news_all_item">
					<div class="club_news_all_pic left">
						<a href="<?php echo $link?>"><img src="<?php echo $foto?>" alt=""/></a>
					</div>
					<div class="club_news_all_decribe">
						<h2><a href="<?php echo $link?>"><?php echo $item->title?></a></h2>
						<div class="font11px bold"><?php echo JHTML::_('date', $item->date,JText::_('DATE_FORMAT_LC5'))?></div>
						<p><?php echo $item->s_desc?></p>
						<div class="font11px bold"><?php echo $count?> <?php echo JText::_('COMMENTS')?></div>
						<a href="<?php echo $link?>" class="read_all_<?php echo JText::_('RU_EN')?> right"></a>
						<div class="clearer"></div>
					</div>
					<div class="clearer"></div>
				</div>
				
	<?php endforeach;?>
		
	<div class="clearer"></div>
	<?php echo $pagination?>
	</div>

</div>
