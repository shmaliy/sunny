<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{include file="general/head.tpl" root_url="{$root_url}" title="{$title}" description="{$description}"}
    <meta property="fb:page_id" content="135484299837691" />
</head>
<body onload="show_visible(); initEffects();">
<!--<h1>[*****{$module["page"]->Content->page_title}*****]</h1>-->
	<div id="wrapper">
		<div class="top_planet">
			{include file="other/index_content.tpl" root_url="{$root_url}"}
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