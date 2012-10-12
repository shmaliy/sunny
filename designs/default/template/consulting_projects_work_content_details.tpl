							<h1>{$module["project"].name}</h1>
							<div class="right portfolio_menu_title">
								<a class="a_2f88e5_dashed" href="javascript: void(0);" onclick="hidePlanet('#portfolio_menu');">Меню разделов &darr;</a>
							</div>
					
							<div class="our_work_details_center_description">
								<div class="our_work_details_left">
									Сделано для:
								</div>
								<div class="our_work_details_right">
									{if $module["project"]->site_address eq ""}
										{$module["project"]->client}
									{else}
										<a href="{$module["project"]->site_address}" target="_blank">{$module["project"]->client}</a>
									{/if}									
								</div>
								<div class="clearer"></div>
								<!--
								<div class="our_work_details_left">
									Размещено:
								</div>
								<div class="our_work_details_right">
									<a href="{$module["project"].site_address}" target="_blank">{$module["project"].site_address}</a>
								</div>
								<div class="clearer"></div>
								-->
								<div class="our_work_details_left">
									Выполнены:
								</div>
								<div class="our_work_details_right">
									{$module["project"].work_types}
								</div>
								<div class="clearer"></div>
								<!--<div class="our_work_details_left">
									С помощью:
								</div>
								<div class="our_work_details_right">
									{$module["project"].work_technologies}
								</div>-->
								<div class="clearer"></div>
								<div class="our_work_details_left">
									Участники:
								</div>
								<div class="our_work_details_right">
									{$module["project"].consultants}
								</div>				
							</div>
							{if $module["project"]->client_request_htmltext neq ""}
							<div class="our_work_details_center_visible">
								<div class="visible">
									<div class="visible_corner visible_top_left"></div>
									<div class="visible_corner visible_top_right"></div>
									<div class="visible_bacground visible_left"></div>
									<div class="visible_bacground visible_top"></div>
									<div class="visible_bacground visible_center">
										<div class="title">Слово заказчика:</div>
										<p>{$module["project"].client_request_htmltext}</p>
										<p>{$module["project"].client_request_name}, {$module["project"].client_request_post}</p>
										<div class="clearer"></div>
									</div>
									<div class="visible_corner visible_bottom_left"></div>
									<div class="visible_corner visible_bottom_right"></div>
									<div class="visible_bacground visible_right"></div>
									<div class="visible_bacground visible_bottom"></div>
								</div>
							</div>
							{/if}