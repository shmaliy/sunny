<?php 
	$model = $this->getModel();
	$pconsList = $model->getAllConsultant();
	$base = JURI::base();
	$empty = "{$base}templates/template/images/empty.png";
	$dialog = JText::_('DIALOG');
?>
<div class="fixed">
	<div class="margin_bottom30px">
		<?php 
			$i = 1;
			foreach ($pconsList as $cons):
				$class = ($i == 1) ? '' : 'margin_left10px';
				$foto = "{$base}images/sunny/consultant/{$cons->teaser}";
				$name = preg_replace('/[ ]/', "<br />", $cons->fio, 1);
				$href = JRoute::_("index.php?option=com_consulting&view=consultant&layout=item&id={$cons->id_consultant}&Itemid=48");
				
				echo "<div class='adviser_consulting left {$class}'>
					<div class='service_img'>	
						<div class='adviser_bg adviser_bg_2'>					
							<a href='{$href}' class='adviser_bg adviser_bg_2' 
							style='background: url({$foto}) no-repeat;'><span style='bottom: -18px; left: 10px;'>{$name}</span></a>
						</div>
					</div>
					<div class='consulting_text'>
						<div class='consulting_text_about'>							
							<p><b>{$cons->post}</b></p>
							<p>{$cons->desc}</p>
						</div>
						<div class='consulting_text_contect'>
							<p><b>{$dialog}:</b></p>
							<a href='mailto:{$cons->email}'>{$cons->email}</a>
							<p></p>
						</div>
					</div>
				</div>";
				
				$i++; 
				if($i == 4){
					$i = 1;
					echo '<div class="clearer" style="height:10px;"></div>';	
				}
			endforeach;
		?>	
	<div class="clearer" style="height:10px;"></div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	hoverImg(); 
	binding();
})
</script>