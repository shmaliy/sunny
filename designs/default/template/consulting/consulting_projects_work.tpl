	<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="our_work_details">
				<img src="http://{$root_url}/images/projects/{$module["project"].thumb}" class="img_work" alt="{$module["project"].thumb}"/>
				<div class="our_work_details_center">
					<div class="relative">
					
						{include file="consulting/sub_menu.tpl"  root_url="{$root_url}" module="{$module}"}
						
						{include file="consulting/consulting_projects_work_content_details.tpl" module="{$module}"}							
						
					<div class="clearer"></div>
					</div>
				</div>
				<div class="clearer"></div>
			</div>

			{include file="consulting/consulting_projects_work_content_fulltext.tpl" module="{$module}"}
			
			{include file="consulting/consulting_projects_work_pictures.tpl"}
			
			{include file="consulting/consulting_projects_work_teasers.tpl"}			
		</div>
	</div>