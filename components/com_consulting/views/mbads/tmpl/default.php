<?php 
	$model = $this->getModel();
	$id = JRequest::getInt('id');
	$item = $model->getMbaInfo($id);
?>
<div class="fixed">
	<?php echo $item->desc?>
</div>
<div class="clearer"></div>
<script type="text/javascript">
$(function(){
	$('.a_2f88e5_dashed.forms').css({cursor: 'pointer'}).click(function(){
		scrollto('#footer');
	})
})
</script>