{foreach from=$mainmenu item=curr_id}
		<a href="/{$curr_id->url}">{$curr_id->name}</a><br />
{/foreach}
<hr />
{foreach from=$submenu item=curr_id}
		<a href="/{$curr_id->url}">{$curr_id->name}</a><br />
{/foreach}
<hr />