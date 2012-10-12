<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>	
	<meta http-equiv="content-type"content="text/html; charset=utf-8"/>
</head>
<body>

<table border = "1" width="100%">
	<tr>
		<td>LOGO</td>
		<td>{$mainmenu}</td>
	</tr>
	<tr>
		<td>
			<h1>{$section_title}</h1>
			{if $page_type eq 1}
			<div>
				<img src="/files/images/portfolio/{$portfolio_work->pics[0]->thumbnail_src}" alt="{$portfolio_work->pics[0]->alt}" /><br />
				<b>Название работы:</b>{$portfolio_work->name}<br />
				<b>Заказчик:</b> {$portfolio_work->client}<br />
				<b>Сайт:</b> <a href="http://{$portfolio_work->site_address}">{$portfolio_work->site_address}</a><br />
				<b>Вид работ:</b> вид 1, вид 2<br />
				<b>Участники:</b> участник 1, участник 2<br />
				<div><b>Отзыв заказчика:</b><br />{$portfolio_work->client_request}</div>
				<div><b>Текст описания работы:</b>{$portfolio_work->description}<br />
				<img src="/files/images/portfolio/{$portfolio_work->pics[0]->pic_src}" alt="{$portfolio_work->pics[0]->alt}" />
				</div>		
				<div>				
				{foreach from=$portfolio_teasers item=teaser}
					<div style='border:1px solid black; float:left;'>
						<h3>{$teaser->name}</h3>
						<img src="/files/images/portfolio/{$teaser->thumbnail_src}" alt="{$teaser->alt}" /><br />
						<b>Текст описания работы:</b>{$teaser->description}<br />
						<a href="/design/portfolio/{$portfolio_category}/{$teaser->alias}">{$teaser->name}</a>
					</div>
				{/foreach}
				</div>			
			</div>
			{else}
			<div>				
				{foreach from=$portfolio_teasers item=teaser}
					<div style='border:1px solid black; float:left;'>
						<h3>{$teaser->name}</h3>
						<img src="/files/images/portfolio/{$teaser->thumbnail_src}" alt="{$teaser->alt}" /><br />
						<b>Текст описания работы:</b>{$teaser->description}<br />
						<a href="/design/portfolio/{$portfolio_category}/{$teaser->alias}">{$teaser->name}</a>
					</div>
				{/foreach}
			</div>
			{/if}
		</td>
		<td valign="top">
			<ul>
				{foreach from=$portfolio_menu item=curr_id}
					<li>
						<a href="/design/portfolio/{$curr_id->alias}">{$curr_id->name}</a>
					</li>
				{/foreach}			
			</ul>		
		</td>
	</tr>	
</table>


</body>
</html>