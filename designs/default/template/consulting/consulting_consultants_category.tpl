
	<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="margin_bottom30px">
				{foreach from=$module["teasers"] item=teaser name=it}						
					{include file="consulting/consulting_consultants_category_teaser.tpl" root_url="{$root_url}" teaser="{$teaser}" iter={$smarty.foreach.it.iteration}}
				{/foreach}		
				<div class="clearer" style="height:10px;"></div>
				
			</div>
		</div>
	</div>
