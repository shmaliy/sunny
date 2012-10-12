<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	{include file="general/consulting_head.tpl" root_url="{$root_url}" title="{$title}"}
</head>
<body>
<div id="wrapper">

	{include file="consulting/main_menu.tpl" root_url="{$root_url}" current="{$current_main_menu}"}
	
	{include file="consulting/consulting_wba_content.tpl" root_url="{$root_url}"}	
	
</div>
{include file="consulting/consulting_contacts.tpl" root_url="{$root_url}"}
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