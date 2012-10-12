<?php
	$model = $this->getModel('Contact');
	$item  = $model->getItem();
?>
<script type="text/javascript">
	$(document).ready(function() {
		GUnload();
        var map = new GMap2(document.getElementById("google_maps"));
        var center = new GLatLng(<?php echo $item->g_y?>, <?php echo $item->g_x?>);
        map.setCenter(center, <?php echo $item->g_zoom?>);
        map.addControl(new GLargeMapControl());

        var center = map.getCenter();
        var marker = new GMarker(center, {draggable: false});
		
		GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml("<div class='gmMarker'><?php echo $item->text?></div>") }); 
		
		map.addOverlay(marker);	
	});
</script>
		<div class="fixed zIndex2">
			<div class="contacts">
				<div class="glasses"></div>	
				<h3>Контактная информация</h3>
				<div class="info">
					<div>
						<p class="title">Позвоните нам:</p>
						<p class="text"><?php echo $item->tel?></p>
					</div>
					<div>
						<p class="title">Напишите нам:</p>
						<p class="text"><a href="mailto:<?php echo $item->email?>" class="black"><?php echo $item->email?></a></p>					
					</div>
				</div>
				<div class="clear"></div>
				<div id="google_maps" class="map"></div>
				<p><?php echo $item->adress?></p>
			</div>
		</div>	
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=<?php echo $item->g_key?>" type="text/javascript"></script>
