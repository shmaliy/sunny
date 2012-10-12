<?php
	$model = $this->getModel();
	$allClub = $model->getAllClub();
	$id = JRequest::getInt('id');
	$item  = $model->getItem($id);
	$idc = JRequest::getInt('id_item');
	$club = $model->getClubInfo($id);
	$commentList = $model->getItemCommentList($id);

?>
<div class="fixed">
<?php 
		foreach ($allClub as $item):
		$href= JRoute::_("index.php?option=com_consulting&view=club&layout=item&id={$item->id_item}&Itemid=48");
		endforeach; 
		echo "<h1>{$club->title}</h1><div class='font11px bold'>";
		echo JHTML::_('date', $club->date,JText::_('DATE_FORMAT_LC5'));
		echo"</div><span style='margin-top: 30px;'>{$club->desc}</span>";

	if ( $club->youtube ):
$urllist= explode(",", $club->youtube);
foreach ( $urllist as $url ):

echo "<div align='center'><iframe width='640' height='480' src='http://www.youtube.com/embed/{$url}' frameborder='0' allowfullscreen></iframe></div>";
endforeach;
endif;

												
												
										
											?>
	<div id="commentList">
	<h2><?php echo JText::_('COMMENT')?></h2>
	<?php foreach( $commentList as $comment ):
			list($date, $time) = explode(' ', JHTML::_('date', $comment->date,JText::_('DATE_FORMAT_LC2')));
			 				
						
	?>
		<div class="dark_bg margin_t30" id="comment_<?php echo $comment->id_comment?>">
			<div class="dark_bg_center relative">

			<div class="font11px bold c7991a0">

				<span class="ny12">
					<span>№<?php echo $i+1;?></span>
					<span class="span_line">|</span>
					</span>
					<span class="ny11">
					<span><?php echo $comment->user?></span>
					</span>
					<span class="ny12">
					<span class="span_line">|</span>
					<span><?php echo JHTML::_('date', $date,JText::_('DATE_FORMAT_LC5'))?></span>
					<span class="span_line">|</span>
					<span><?php echo $time?></span>
				</span>
			</div>
			<div class="clearer"></div>
			<div class="dark_line"></div>
				<p class="comment_text"><?php echo $comment->text?></p>
				<div class="clearer"></div>
			</div>
		</div>
	<?php $i++; endforeach;?>
	</div>
<div class="h1 margin_t60"><span class="dashed_yellow hand" onclick="return toggleForm('commentAdd')"><?php echo JText::_('ADD_COM')?></span></div>
	<div class="clearer"></div>
		<div id="commentAdd">

			<div class="margin_t30">
			<div class="footer_right">
				<form action="<?php echo JRoute::_(JURI::base().'index2.php?option=com_consulting&task=addComment')?>" method="post" id="comment_form">
					<div class="contact_feedback_left"><?php echo JText::_('YOUR_NAME')?><span class="red">*</span>:</div><div class="contact_feedback_right"><input name="comment_user" id="comment_user" type="text" class="width_205px" /></div>
					<div class="contact_feedback_left"><?php echo JText::_('YOUR_TEXT')?><span class="red">*</span>:</div><div class="contact_feedback_right"><textarea name="comment_text" id="comment_text" class="italic textarea_resume" cols="7" defaultClass="italic" default="11"><?php echo ""?></textarea><div class="font9px feedback_space">
<?php $red = '<span class="red">*</span>'; echo sprintf(JText::_('FEEDBACK_NOTICE'), $red)?>
</div>
					
					
						<span class="contact_feedback_right"><input style="font-size:16px; width: 268px!important; height:30px; padding-left:10px; padding-right:10px;" type="button" class="rezume_send" id="comment_but" value="<?php echo JText::_('SEND_COMMENT')?>" onclick="return AddCommentFormSend()" /></span>
					</div>
					<div class="clearer"></div>
			        <input style="font-size:16px; width: 268px!important; height:30px; padding-left:10px; padding-right:10px;" type="hidden" name="id_article" id="id_article" value="<?php echo $id?>" />
<span class="message_text"></span>				
				</form>
			</div>
		</div>
		</div>
</div>
<div class="clearer"></div>

<script type="text/javascript">
$(function(){
	$('.a_2f88e5_dashed.forms').css({cursor: 'pointer'}).click(function(){
		scrollto('#footer');
	})
})
</script>
