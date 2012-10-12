	<!--Content-->
	<div id="content">
		<div class="fixed">
			<div class="work_portfolio">
				{foreach from=$module['partners'] item=partner name = partne}
					<div class="portfolio left  parther_portfolio {if ($smarty.foreach.partne.iteration+2)%3 != 0}margin_left10px{/if}">					
					{include file="consulting/consulting_partners_partner.tpl" root_url="{$root_url}" partner="{$partner}"}
					</div>
				{/foreach}					
			</div>	
			<div class="clearer"></div><br />
			<div style="text-align:center;"><a href="http://{$root_url}/design/partners/">Партнеры дизайн-студии</a></div>	
		</div>
		<div class="clearer"></div>
		
	</div>