				<div class="">
					<div class="align_right">
						<span class="font42px">Партнёры</span>
					</div>
				</div>	
				<div class="margin_top25px work_portfolio">
					{foreach from=$module['partners'] item=partner name = tease}
						<div class="portfolio left parther_portfolio {if ($smarty.foreach.tease.iteration+2)%3 != 0}margin_left10px{/if}">
						{include file="design/design_partners_partner.tpl" root_url="{$root_url}" partner="{$partner}"}
						</div>
					{/foreach}													
					<div class="clearer"></div><br />
					<div style="text-align:center;"><a href="http://{$root_url}/consulting/partners/">Партнеры Консалтинг-бюро</a></div>				
				</div>
				