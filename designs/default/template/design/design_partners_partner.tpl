						<div class="portfolio_top">
							<div class="portfolio_center">
								<div class="portfolio_center_description">
									{if $partner.url neq ""}<a href="{$partner.url}" >{/if}
									<img  title="{$partner.name}" src="http://{$root_url}/designs/default/images/empty.png" style="border:none; background: url('http://{$root_url}/images/partners/{$partner.logo_gray}') no-repeat center top; width: 230px; height: 160px; margin-top: -80px; margin-left: -115px; " alt="{$partner.url}"/>
									{if $partner.url neq ""}</a>{/if}
								</div>
							</div>
						</div>