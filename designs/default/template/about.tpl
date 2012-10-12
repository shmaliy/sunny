<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{include file="general/head.tpl" root_url="{$root_url}" title="{$title}"}	
</head>
<body>
	<div id="wrapper">
		<div class="top_planet about">
			<!--Logo top-->
			<a href="http://{$root_url}/" class="sunny_logo"><img src="http://{$root_url}/designs/default/images/sunny_logo.png" alt="Sunny Creative Technologies Logotype"/></a>
			<div class="about_text">
				<p class="font36px">{$module["title"]}</p>
				{$module["text"]}
			</div>
			<!--Planet Consulting-->
			<div class="consulting">
				<a href="http://{$root_url}/consulting/" title="Консалтинг-бюро"><div class="consulting_planet"></div></a><!--Planet-->
				<a href="http://{$root_url}/consulting/" class="consulting_title"  title="Консалтинг-бюро">Консалтинг-бюро</a><!--Title-->
			</div>
			
					
			<!--Planet Design-->
			
			<div class="design">
				<a href="http://{$root_url}/design/"  title="Дизайн-студия"><div class="design_planet"></div></a><!--Planet-->
				<a href="http://{$root_url}/design/" class="design_title"  title="Дизайн-студия">Дизайн-студия</a><!--Title-->
			</div>
			

		<!--Planet bottom -->
		<div class="bottom_planet">
			{include file="design/planet_know_you.tpl" root_url="{$root_url}"}
			
			{include file="design/planet_contacts.tpl" root_url="{$root_url}"}			
		</div>
	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17355441-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</body>
</html>