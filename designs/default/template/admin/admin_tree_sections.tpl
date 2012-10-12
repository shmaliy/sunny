{foreach from=$element item=el}
   <li>
		<div {if $el.level eq 0}class="head"{/if}>
			<a id="edit_{$el.id}" onclick="editSection(this.id);" href="javascript:void(0);">{$el.name}</a><sup>10</sup>
			<input type="button" class="plus" value="+" id="add_{$el.id}" onclick="addChildSection(this.id);"></input>
			<div class="clearer"></div>
		</div>   
   {if $el.element}
   <ul>{include file="admin/admin_tree_sections.tpl" element=$el.element}</ul>
   {/if}
   </li>
{/foreach}
