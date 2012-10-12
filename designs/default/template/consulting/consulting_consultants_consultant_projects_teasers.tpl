		{if $module["teasers"] neq null}				
			<h2>{$module["consultant"]->fio} учавствовал в следующих проектах</h2>
			<div class="work_portfolio">
				{foreach from=$module["teasers"] item=teaser name=it}									
					<div class="portfolio left {if ($smarty.foreach.it.iteration+2)%3 != 0}margin_left10px{/if}">
						<div class="portfolio_center_description">
							<div><a href="{$teaser.parent_chpu}">{$teaser.parent_title}</a> &#8594;</div>
							<p class=" font15px"><a href="{$teaser.chpu}">{$teaser.name}</a></p>
							<a href="{$teaser.chpu}"><img src="http://{$root_url}/images/projects/{$teaser.thumb}" class="img_work" alt="{$teaser.name}"/></a>
							<div class="portfolio_center_right"><p>{$teaser.htmltext_teaser}</p></div>
						</div>								
					</div>							
				{/foreach}						
			</div>
			<div class="clearer"></div>
		{/if}