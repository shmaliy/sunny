			<div class="">
				<div>
					<h1 class="font26px left">
						Неоспоримый опыт:
					</h1>				
					<div class="clearer"></div>
					<div class="work_portfolio">
						{foreach from=$module["teasers"] item = teaser name = tease}	
							<div class="portfolio left {if ($smarty.foreach.tease.iteration+2)%3 != 0}margin_left10px{/if}">							
							{include file="consulting/consulting_service_teaser.tpl" root_url="{$root_url}" teaser="{$teaser}" parent_title={$module}}
							</div>
						{/foreach}
					</div>
					<div class="clearer"></div>
				</div>				
			</div>