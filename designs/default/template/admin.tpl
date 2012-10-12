{php}
	$login = $_GET['login'];
	$pass = $_GET['pass'];
	if( $login != 'sunny' && $pass != 'sunny_admin' ) exit;
{/php}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title>{$title|escape}</title>
    <base href="http://{$root_url}/" />
    <meta name="description" content="{$description|escape}" />
    <meta name="keywords" content="{$keywords|escape}" />    
	
	<meta http-equiv="content-type"content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="http://{$root_url}/designs/default/css/base.css" type="text/css"/>
	<link rel="stylesheet" href="http://{$root_url}/designs/default/css/admin.css" type="text/css"/>
	<link rel="stylesheet" href="http://{$root_url}/designs/default/css/content_left.css" type="text/css"/>
	<link rel="stylesheet" href="http://{$root_url}/designs/default/css/ie.css" type="text/css"/>	
	<script type="text/javascript" src="http://{$root_url}/designs/default/js/denim.js" ></script>
	<script type="text/javascript" src="http://{$root_url}/designs/default/js/jquery-1.4.2.js" ></script>
</head>
<body onload="loadTree(0);">
<div id="wrapper">
	<!-- Header  -->
	<div id="header">
		<div class="fixed"><!--фиксация-->
			<ul class="left">
				<li>
					<a href="javascript:void(0);" class="current" onclick="loadManagerToolBar();" >Управление</a>
				</li>
				<li>
					<a href="#">Портфолио</a>
				</li>
				<li>
					<a href="#">Тендеры</a>
				</li>
				<li>
					<a href="#">Экспертизы</a>
				</li>
				<li>
					<a href="#">Проекты</a>
				</li>
			</ul>
			<ul class="right">
				<li><a href="#">Выйти</a></li>
			</ul>
			<div class="clearer"></div>
			<ul class="left">
				<li>
					<a href="#">Пользователи</a>
				</li>
				<li>
					<a href="#">Комментарии</a>
				</li>
				<li>
					<a href="#">Бекап</a>
				</li>
				<li>
					<a href="#" target="_blank">GoogleAnalytics &#8594;</a>
				</li>
			</ul>
			<ul class="right">
				<li>
					<a href="#" target="_blank">На сайт &#8594;</a>
				</li>
			</ul>
		<div class="clearer"></div>
		<div class="logo"></div><!--логотип-->
		</div>
	</div>
	<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="content_left">
				<div class="content_header"></div>
				<!--  current - класс активного пункта меню -->
				<!--<form method="POST" action="">
				<ul>
					<li>
						<div  class="head">
							<a href="#">Раздел 1</a><sup>40</sup>
							<input type="button" class="plus" value="+"></input>
							<div class="clearer"></div>
						</div>
						<ul>
							<li>
								<div>
									<a href="#">Название подраздела 1</a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Текущий подраздел</a><sup>12</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Название подраздела 3</a><sup>8</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Название подраздела 4</a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<div  class="head">
							<a href="#">Раздел 2</a><sup>50</sup>
							<input type="button" class="plus" value="+"></input>
							<div class="clearer"></div>
						</div>
						<ul>
							<li>
								<div>
									<a href="#">Название подраздела 1</a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li class="current">
								<div>
									<a href="#">Текущий подраздел 2</a><sup>12</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Название подраздела 3</a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Название подраздела 4</a><sup>18</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<div class="head">
							<a href="#">Раздел 3</a><sup>72</sup>
							<input type="button" class="plus" value="+"></input>
							<div class="clearer"></div>
						</div>
						<ul>
							<li>
								<div>
									<a href="#">Название подраздела 1</a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Текущий подраздел </a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
							<li>
								<div>
									<a href="#">Название подраздела 3</a><sup>42</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
								<ul class="subsection">
									<li>
										<div>
											<a href="#">Подподраздел 1</a><sup>30</sup>
											<input type="button" class="plus" value="+"></input>
											<div class="clearer"></div>
										</div>
									</li>
									<li>
										<div>
											<a href="#">Подподраздел 2</a><sup>12</sup>
											<input type="button" class="plus" value="+"></input>
											<div class="clearer"></div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div>
									<a href="#">Название подраздела 4</a><sup>10</sup>
									<input type="button" class="plus" value="+"></input>
									<div class="clearer"></div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				</form>-->
					<ul id="tree">					
					
					</ul> 				
					
			</div>
			<!--<div class="content_right">
				<div class="content_header">Список работ в «Название подраздела 2»</div>
				<table cellpadding="0" cellspacing="0" class="work_list hover">
					<tr>
						<td>
							<span  class="date">02.08.2010 08:24:36</span>
							<a href="#">Название работы </a><sup>12</sup>
						</td>
						<td class="input_r">
							<input value="x" class="button hidden" type="button"/>	
							<input value="Копия" class="button hidden" type="button"/>
							<input value="Смотреть &#8594;" class="button hidden" type="button"/>	
							<div class="clearer"></div>
						</td>
					</tr>
					<tr>
						<td>
							<span  class="date">02.08.2010 08:24:36</span>
							<a href="#">Название работы </a><sup>12</sup>
						</td>
						<td class="input_r">
							<input value="x" class="button hidden" type="button"/>	
							<input value="Копия" class="button hidden" type="button"/>
							<input value="Смотреть &#8594;" class="button hidden" type="button"/>	
							<div class="clearer"></div>
						</td>
					</tr>
				</table>
			</div>-->
			<div id="content_right" class="content_right">

			</div>
			<div class="clearer"></div>
		</div>
	</div>
</div>
<!-- Footer  -->
<div id="footer">
	<div class="fixed"><!--фиксация-->
		<ul class="left">
			<li><a href="#" class="current">Управление</a></li>
			<li><a href="#">Портфолио</a></li>
			<li><a href="#">Тендеры</a></li>
			<li><a href="#">Экспертизы</a></li>
			<li><a href="#">Проекты</a></li>
			<li><a href="#">Пользователи</a></li>
			<li><a href="#">Комментарии</a></li>
			<li><a href="#">Бекап</a></li>
			<li><a href="#" target="_blank">GoogleAnalytics &#8594;</a></li>
		</ul>
		<ul class="right">
			<li><a href="#">Выйти</a></li>
			<li><a href="#" target="_blank">На сайт &#8594;</a></li>
		</ul>
		<div class="clearer"></div>
	</div>
</div>
<div class="clearer"></div>
</body>
</html>