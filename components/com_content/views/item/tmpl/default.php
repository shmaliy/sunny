<?php
	$model   = $this->getModel('Item');
	$id_item = JRequest::getInt('id');
	$item    = $model->getItem($id_item);
	
	// устанавливаем мета-данные
	$doc = &JFactory::getDocument();
	$doc->setTitle($item->title);
	$doc->setMetaData('keywords', $item->keywords);	

	
	$item->desc = str_replace("images/stories/", "{$this->baseurl}/images/stories/", $item->desc); 
	$book = null;
	if ($id_item == 71) {
		$book = "<div class='about-autor'></div>";
	}
?>
		<div class="fixed zIndex2">
			<?php echo $book;?>
			<div class="podmenu left">
				<ul>
					<li><a href="<?php echo JRoute::_('index.php?option=com_content&view=item&id=63&' . ABOUT_ITEMID)?>" <?php if ($id_item == 63) echo 'class="active"'; ?>>Друзья</a></li>
					<li><a href="<?php echo JRoute::_('index.php?option=com_content&view=item&id=71&' . ABOUT_ITEMID)?>" <?php if ($id_item == 71) echo 'class="active"'; ?>>Автор проекта</a></li> 
				</ul>
			</div>
			
			<div class="left">
				<div class="user-cabinet-bg-line">
					<div class="user-cabinet">
						<div class="glasses"></div>
					
						<div class="desc friend">
							<?php 
								if ($id_item == 63):
									echo "<div class='leftBut'></div>";
									$friendsList = $model->getFriendsList();
									$i = 1;
									foreach ($friendsList as $friend) {
										$friend->desc = str_replace("images/stories/", "{$this->baseurl}/images/stories/", $friend->desc);
										$class = ($i == 1) ? '' : 'hide';
										echo "<div id='tab-{$i}' class='{$class} friends'>
												<h1>{$friend->title}</h1>
												<div class='mTop20px staticPage'>{$friend->desc}</div>
											  </div>";	
										$i++;
									}
									echo "<div class='rightBut'></div>";
								else:
							?>
								<h1><?php echo $item->title?></h1>
								<div class="mTop20px staticPage"><?php echo $item->desc?></div>
							<?php endif;?>
						</div>				
						
					</div>
				</div>
				<div class="bottom user-cabinet" style="margin-top: -58px;"></div>			
			</div>
			<div class="clear"></div>
		</div>