<!--{foreach from=$element item=el}
   <li {if $el['curr']}class="curent"{/if}>
   		<a href="{$el['chpu']}">{$el['name']}</a> {if $el['count'] neq 0}<sup>{$el['count']}</sup>{/if}
   {if $el['element']}
   <ul>{include file="design/sub_menu_recursive.tpl" element=$el['element']}</ul>
   {/if}
   </li>
{/foreach}
-->
<li>
	<a href="/consulting/consultants/irishka/">Ирина Мартынова</a>
</li>
<li >
   		<a href="/consulting/consultants/nikolay-nesprava/">Николай Несправа</a>
</li>
<li >
	<a href="/consulting/consultants/stanislav-shaposhnikov/">Станислав Шапошников</a>
</li>
<li >
	<a href="/consulting/consultants/vetal/">Виталий Пилипенко</a>   
</li>
<li >
	<a href="/consulting/consultants/alex/">Александр Скрипник</a>
</li>
<li >
	<a href="/consulting/consultants/marina-shnaider/">Марина Шнейдер</a>
</li>

											