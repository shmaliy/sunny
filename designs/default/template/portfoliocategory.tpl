<div style='border:3px solid black; margin:10px;'>
{foreach from=$content item=curr_id}
	<a href="{$curr_id->alias}">{$curr_id->name}</a><br />
{/foreach}
</div>