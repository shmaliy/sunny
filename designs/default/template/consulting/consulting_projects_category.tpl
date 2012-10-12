<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="">
				<div>
					<h1 class="font26px left">
						{if $module['parent_title']}{$module['parent_title']}{else}Все проекты{/if}
					</h1>
					{include file="consulting/sub_menu.tpl" root_url="{$root_url}" module="{$module}"}
				</div>
				<div class="clearer"></div>	
				{include file="consulting/consulting_projects_category_teasers.tpl" root_url="{$root_url}" module="{$module}"}
								
			</div>
		</div>
	</div>