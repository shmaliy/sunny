						{if $module["is_clients"]}	
							<div class="portfolio_top client">
								<div class="portfolio_center">
									<div class="portfolio_center_description">									
										<!-- 
										<a href="/design/portfolio/sites/2happy_site/">
										<img src="http://test.sunny.net.ua/designs/default/images/empty.png" alt="Концепции для сайта знакомств «2Happy»" style="border: medium none ; background: transparent url(http://test.sunny.net.ua/images/works/sites/2happy/thumb.png) no-repeat scroll center top; width: 100px; height: 100px; margin-top: -50px; margin-left: -50px;"/>
										</a>
										-->			
										<div class="client_logo">							
											<img src="http://{$root_url}/designs/default/images/empty.png" alt="{$teaser['client_name']}" title="{$teaser['client_name']}" style="border: medium none ; background: transparent url(http://{$root_url}/images/works/{$teaser['work_thumb']}) no-repeat scroll center top; width: 100px; height: 100px; margin-top: -50px; margin-left: -50px;" /> 
											<div class="client_menu" id="work_{$teaser.work_id}" class="relative" style="display:none;"  >
												<div style="left: 160px; top: 120px;" class="visible work_visible">
													<div class="visible_corner visible_top_left"></div>
													<div class="visible_corner visible_top_right"></div>
													<div class="visible_bacground visible_left"></div>
													<div class="visible_bacground visible_top"></div>
														<div class="visible_bacground visible_center">
															<ul>
															{foreach from=$teaser["menu"] item = teaser_item}
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
										</div>
									</div>
								</div>
							</div>			
						{else}
						<div class="portfolio_top">
							<div class="portfolio_center">
								<div class="portfolio_center_description">									
									<div><a href="{$teaser['parent_chpu']}">{$module['parent_title']}</a> &#8594;</div>
									<p class=" font15px"><a href="http://{$root_url}{$teaser['chpu']}">{$teaser['work_name']}</a></p>
									<div class="client_logo">
										<a href="{$teaser['chpu']}">
											<img src="http://{$root_url}/images/works/{$teaser['work_thumb']}" class="img_work" alt="{$teaser['work_name']}" />
										</a>
										<!-- **************************** -->
										<div class="client_menu relative" id="work_{$teaser.work_id}" style="display:none;" >
											<div style="left: 0px; top: 0px;" class="visible work_visible">
												<div class="visible_corner visible_top_left"></div>
												<div class="visible_corner visible_top_right"></div>
												<div class="visible_bacground visible_left"></div>
												<div class="visible_bacground visible_top"></div>
													<div class="visible_bacground visible_center">
														<ul>
														{foreach from=$teaser["menu"] item = teaser_item}
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
									</div>
									<div class="portfolio_center_right">
										<!--
										{foreach from=$teaser["menu"] item = teaser_item}
											<a href="{$teaser_item['chpu']}">{$teaser_item['work_name']}</a><br />
										{/foreach}
										 -->
										<p>{$teaser['htmltext_teaser']}</p>
									</div>
									<!--<p>{$module['parent_title']}{$teaser['created_date']}</p>-->
									<div class="clearer"></div>
								</div>
							</div>
						</div>							
						{/if}			
				