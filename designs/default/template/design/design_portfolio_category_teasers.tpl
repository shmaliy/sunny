				{if $module["is_clients"]}
				<div class="margin_top25px work_portfolio">
					<!-- По клиентам -->
					{foreach from=$module["teasers"] item = teaser name = tease}
					<div class="portfolio left {if ($smarty.foreach.tease.iteration+2)%3 != 0}margin_left10px{/if} parther_portfolio">							
					{include file="design/design_portfolio_category_teaser.tpl" root_url="{$root_url}" teaser="{$teaser}"}
					</div>
					{/foreach}					
					<div class="clearer"></div>
				</div>
				{else}
				<div class="margin_top25px work_portfolio">					
					{foreach from=$module["teasers"] item = teaser name = tease}
					<div class="portfolio left {if ($smarty.foreach.tease.iteration+2)%3 != 0}margin_left10px{/if}">							
					{include file="design/design_portfolio_category_teaser.tpl" root_url="{$root_url}" teaser="{$teaser}"}
					</div>
					{/foreach}					
					<div class="clearer"></div>
				</div>								
				{/if}