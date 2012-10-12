				
				<div class="margin_top25px">
					{if $module["prev"]->project_id neq null}
					<div class="portfolio left">
						<div class="previous_next font15px">&#8592;</div>
						<div class="portfolio_center_description">
							<a href="{$module["prev"]->chpu}"><img src="http://{$root_url}/images/projects/{$module["prev"]->thumb}" class="img_work" alt="{$module["prev"]->name}"/></a>
							<div class="portfolio_center_right">
								<div><a href="{$module["prev"]->parent_chpu}">{$module["parent_title"]}</a> &#8594;</div>
								<p class=" font15px"><a href="{$module["prev"]->chpu}">{$module["prev"]->name}</a></p>
								<p>{$module["prev"]->htmltext_teaser}</p>
							</div>
							<div class="clearer"></div>
						</div>
					</div>
					{/if}
					{if $module["next"]->project_id neq null}
					<div class="portfolio right">
						<div class="previous_next align_right  font15px">&#8594;</div>
						<div class="portfolio_center_description">
							<a href="{$module["next"]->chpu}"><img src="http://{$root_url}/images/projects/{$module["next"]->thumb}" class="img_work" alt="{$module["next"]->name}"/></a>
							<div class="portfolio_center_right">
								<div><a href="{$module["next"]->parent_chpu}">{$module["parent_title"]}</a> &#8594;</div>
								<p class=" font15px"><a href="{$module["next"]->chpu}">{$module["next"]->name}</a></p>
								<p>{$module["next"]->htmltext_teaser}</p>
							</div>
							<div class="clearer"></div>
						</div>
					</div>
					{/if}
					<div class="clearer"></div>
				</div>