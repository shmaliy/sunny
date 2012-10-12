				<div class="our_work_details">
					<div class="client_logo">
						<!-- **************************** -->
							<div id="work_{$teaser.work_id}" class="client_menu relative" style="display:none;" >
								<div style="left: 60px; top: 90px;" class="visible work_visible">
									<div class="visible_corner visible_top_left"></div>
									<div class="visible_corner visible_top_right"></div>
									<div class="visible_bacground visible_left"></div>
									<div class="visible_bacground visible_top"></div>
										<div class="visible_bacground visible_center">
											<ul>
											{foreach from=$module["menu"] item = teaser_item}
												<li><a href="{$teaser_item['chpu']}">{$teaser_item['work_name']}</a></li>
											{/foreach}
											</ul>	
										</div>
									<div class="visible_corner visible_bottom_left"></div>
									<div class="visible_corner visible_bottom_right"></div>
									<div class="visible_bacground visible_right"></div>
									<div class="visible_bacground visible_bottom"></div>
								</div>
							</div>
						<!-- **************************** -->
						<img src="http://{$root_url}/images/works/{$module['work']['work_thumb']}" class="img_work" alt="{$module['work']['work_name']}" />						
					</div>
					<div class="our_work_details_center">
						<h1>{$module["work"]->work_name}</h1>
						<div class="our_work_details_center_description">
							<div class="our_work_details_left">
								Сделано для:
							</div>
							<div class="our_work_details_right">
								{if $module["work"]->site_address eq ""}
									{$module["work"]->client_name}
								{else}
									<a href="{$module["work"]->site_address}" target="_blank">{$module["work"]->client_name}</a>
								{/if}
							</div>
							<div class="clearer"></div>	
							{if $module["work"]->work_types}						
							<div class="our_work_details_left">
								Выполнены:
							</div>
							<div class="our_work_details_right">
								{$module["work"]->work_types}
							</div>
							<div class="clearer"></div>
							{/if}
							{if $module["work"]->work_technologies}
							<div class="our_work_details_left">
								С помощью:
							</div>
							<div class="our_work_details_right">
								{$module["work"]->work_technologies}
							</div>
							<div class="clearer"></div>
							{/if}
							<!--
							<div class="our_work_details_left">
								Участники:&nbsp;
							</div>
							<div class="our_work_details_right">
								<div>&nbsp;</div>
								<div>&nbsp;</div>
								<div>&nbsp;</div>
							</div>			
							-->	
						</div>
						{if $module["work"]->client_request_htmltext neq ""}
						<div class="our_work_details_center_visible">
							<div class="visible">
								<div class="visible_corner visible_top_left"></div>
								<div class="visible_corner visible_top_right"></div>
								<div class="visible_bacground visible_left"></div>
								<div class="visible_bacground visible_top"></div>
								<div class="visible_bacground visible_center">
									<div class="title">Слово заказчика:</div>
									<p>{$module["work"]->client_request_htmltext}</p>
									<p>{$module["work"]->client_request_name}, {$module["work"]->client_request_post}</p>
									<div class="clearer"></div>
								</div>
								<div class="visible_corner visible_bottom_left"></div>
								<div class="visible_corner visible_bottom_right"></div>
								<div class="visible_bacground visible_right"></div>
								<div class="visible_bacground visible_bottom"></div>
							</div>
						</div>						
						<div class="clearer"></div>
						{/if}
					</div>
					<div class="clearer"></div>
				</div>