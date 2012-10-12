	<!--Content-->
	<div id="content">
		<div class="fixed">
			{include file="consulting/consulting_consultants_consultant_details.tpl"}	
			{include file="consulting/consulting_consultants_consultant_prizes.tpl"}
			{if $module["consultant"]->resume}
			<h2>Проекты консультанта:</h2>
			<div class="our_work_text">				
				{$module["consultant"]->resume}
			</div>
			{/if}
			<!--{include file="consulting/consulting_consultants_consultant_projects_teasers.tpl"}-->				
		</div>
	</div>
<!--</div>
</div>
</div>-->