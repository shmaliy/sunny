<?php
	$model = $this->getModel();
	$item  = $model->getZakazatSite();
?>

<div id="content">
	<div class="">
		<div class="align_right">
			<h1 class="font42px"><?php echo $item->title?></h1>
		</div>
	</div>					
	<div><?php echo $item->desc?></div>
</div>