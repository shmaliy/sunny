<li>
   <a href="http://{$root_url}/design/portfolio/">По брендам</a> {if $module["clients_count"] neq 0}<sup>{$module["clients_count"]}</sup>{/if}
</li>
{foreach from=$element item=el}
   <li {if $el['curr']}class="curent"{/if}>
   		<a href="{$el['chpu']}">{$el['name']}</a> {if $el['count'] neq 0}<sup>{$el['count']}</sup>{/if}
   {if $el['element']}
   <ul>{include file="design/sub_menu_recursive.tpl" element=$el['element']}</ul>
   {/if}
   </li>
{/foreach}												