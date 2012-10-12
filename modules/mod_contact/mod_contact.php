<?php 
	$email = $params->get('email');
	$tel   = $params->get('tel');
	$cod   = $params->get('cod');
?>
<div id="footer">
	<div class="fixed">
		<div class="line"></div>
		<a href="http://sunny.net.ua" title="SunNY Creative Technologies" target="_blank"><div class="footer-left"></div></a>
		<div class="footer-center">
			<p class="black-shadow">
				<span class="cod"><?php echo $cod?></span>
				<span class="telefon"><?php echo $tel?></span>
			</p>
			<p><a class="email" href="mailto:<?php echo $email?>"><?php echo $email?></a></p>
		</div>
		<div class="footer-right">
			<p>&copy SunNY Creative Technologies, <?php echo date("Y")?><br />Все права защищены.</p>
		</div>
	</div>
</div>
