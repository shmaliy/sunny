				
				{if $module["teasers"]}
				{if $module["teasers"]|@count>2}
				<div class="control_panel teaser">
					<!--<div class="visible_corner visible_top_left"></div>-->					
					<!--<div class="visible_corner visible_top_right"></div>-->
					<a href="javascript:void(0);" class="arrows arrows_left" style="display:none;" onclick="nextTeaser({$module["teasers"]|@count});" title="Назад"></a>
					<a href="javascript:void(0);" class="arrows arrows_right" onclick="prevTeaser({$module["teasers"]|@count});" title="Вперед"></a>
				</div>
				{/if}
				<div class="margin_top25px portfolio_block">
					<div id="teasers" style="width: {$module["teasers"]|@count*425}px; margin-left: 0px;">
						{foreach from = $module["teasers"] item = teaser name = tease}
							<div class="portfolio left {if $smarty.foreach.tease.iteration != 1}margin_left9px{/if}">
								<div class="previous_next font15px">&nbsp;</div>
								<div class="portfolio_center_description">
									<!-- <div class="client_logo"> -->
										<a href="{$teaser['chpu']}">
											<img src="http://{$root_url}/images/works/{$teaser['work_thumb']}" class="img_work" alt="{$teaser['work_name']}" title="{$teaser['work_name']}"/>
										</a>
										<!-- **************************** 
											<div id="work_{$teaser.work_id}" class="client_menu relative" style="display:none; " >
												<div style="left: 90px; top: 0px;" class="visible work_visible">
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
										 **************************** -->
									<!-- </div> -->
									<div class="portfolio_center_right">
										<div><!--<a href="http://{$root_url}{$teaser['parent_chpu']}">-->{$module["parent_title"]}<!--</a> &#8594;--></div>
										<p class=" font15px"><a href="http://{$root_url}{$teaser['chpu']}">{$teaser["work_name"]}</a></p>
										<!-- <ul>
										{foreach from=$teaser["menu"] item = teaser_item}
											<li><a href="{$teaser_item['chpu']}">{$teaser_item['work_name']}</a></li>
										{/foreach}
										</ul>
										 -->
										<p>{$teaser["htmltext_teaser"]}</p>
									</div>
									<div class="clearer"></div>
								</div>
							</div>
						{/foreach}
					</div>
					
					{/if}
					
					<div class="clearer"></div>
				</div>
				