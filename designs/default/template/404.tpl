{* 
  template name: Общий вид страницы

  Этот шаблон отвечает за общий вид страниц.
  Используется классом Site.class.php
  Передаваемые в шаблон параметры смотрите в конце файла  
  
*}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>{$title|escape}</title>
    <base href="http://{$root_url}/" />
    <meta name="description" content="{$description|escape}" />
    <meta name="keywords" content="{$keywords|escape}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta http-equiv="Content-Language" content="ru" />
    <meta name="robots" content="all" />
    <link rel="stylesheet" href="http://{$root_url}/designs/default/css/base.css" type="text/css"/>
    <link rel="stylesheet" href="http://{$root_url}/designs/default/css/404.css" type="text/css"/>   
</head>
<body>
	<a href="http://{$root_url}/" title="На главную страницу сайта компании SunNY Creative Technologies"><img src="http://{$root_url}/designs/default/images/404.jpg" alt="SunNY Creative Technologies | На главную" align="left" style="border:none;" /></a>
	<div><h1>Привет</h1>
	<p>Картинка на этой странице имеет размеры 404&nbsp;x&nbsp;404&nbsp;пиксела и является ссылкой <a href="http://{$root_url}/" title="На главную страницу сайта компании SunNY Creative Technologies">на главную</a> страницу сайта компании&nbsp;"SunNY&nbsp;CT".</p>
	<p>А больше тут ничего нет.</p>
	<p class="small">Совсем нет.</p></div>
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