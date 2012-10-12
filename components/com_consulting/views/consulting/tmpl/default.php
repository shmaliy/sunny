<?php 
	$model = $this->getModel();
	$consList = $model->getAllConsulting();
	$count = ceil(count($consList) / 3);
	$howIs = JText::_('CONSULTANTS');
	$document = & JFactory::getDocument();
	$document->setTitle( "Консалтинговые услуги: стратегический, маркетинговый, логистический, hr консалтинг" );
$document->setMetaData("keywords", "Консалтинговые услуги, стратегический консалтинг, маркетинговый консалтинг, логистический консалтинг, hr консалтинг");
$document->setDescription("Консалтинговые услуги: стратегический, маркетинговый, логистический, hr консалтинг. Мы профессионалы в своем деле Sunny.net.ua");
	
?>
<div class="fixed">
	<?php 
		for ($i=0; $i < $count; $i++):
			
			$lineClass = ($i > 0) ? $lineClass = 'margin_bottom30px padding_top30px' : '';
			$aSlice = array_slice($consList, ($i * 3), 3);
			echo "<div class='{$lineClass}'>";
				$n = 1;
				foreach ($aSlice as $cons):
				
					$consClass = ($n > 1) ? $consClass = 'margin_left10px' : '';
					$bg = JURI::base() . "templates/template/images/consulting/service_bg_{$cons->id_consulting}.jpg";
					
					$consultant = $model->getConsultant($cons->id_consultant);
					$teaser = JURI::base() . "images/sunny/consultant/{$consultant->teaser}";
					$name = preg_replace('/[ ]/', '<br />', $consultant->fio, 1);
					
					$title = preg_replace('/[ ]/', '<br />', $cons->title, 1);
					
					$href = JRoute::_("index.php?option=com_consulting&view=consultant&layout=item&id={$cons->id_consulting}&Itemid=48");
					
					echo "<div class='service_consulting left {$consClass}' id='service_{$cons->id_consulting}'>
						<div class='service_img service_img_border_bottom'>
							<a href='{$href}' title='{$cons->title}' class='consultation_consultation' onmouseover=showConsultant(\"cons_{$cons->id_consulting}\")
							onmouseout=hideConsultant(\"cons_{$cons->id_consulting}\")>{$howIs}</a>						
							<div id='serv_{$cons->id_consulting}' class='service_bg adviser_bg_2' 
								style='background: url({$bg}) no-repeat;' onclick='consulting_service_click(this);'>
								<span style='bottom: -18px; left: 10px;'>{$title}</span>							
							</div>
					    	<div style='overflow:hidden; width: 287px; height:122px; position: relative; top: -1px; left: 0px;'>
					    		<div id='cons_{$cons->id_consulting}' class='service_adviser_bg adviser_bg_2' style='background: url({$teaser}) no-repeat bottom; bottom: -123px;'>
					    			<div style='bottom: 15px;'>{$name}</div>							
								</div>
							</div> 
						</div>
					</div>";				
					$n++;
				endforeach;;
			echo "</div>";
			echo '<div class="clearer"></div>';
			
			foreach ($aSlice as $cons):
				echo "<div class='consulting_text_big hidden' id='design_text{$cons->id_consulting}'>{$cons->desc}</div>";
			endforeach;
			
		endfor;?>
</div>
<script type="text/javascript">
$(function(){
	hoverImg();
})
</script>