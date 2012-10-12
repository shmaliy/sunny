				<div class="work_portfolio">				
					{foreach from=$module["teasers"] item = teaser name = tease}
					<div class="portfolio left {if ($smarty.foreach.tease.iteration+2)%3 != 0}margin_left10px{/if}">									
					{include file="consulting/consulting_projects_category_teaser.tpl" root_url="{$root_url}" teaser="{$teaser}" parent_title={$module}}
					</div>
					{/foreach}
					<div class="clearer"></div>
				</div>