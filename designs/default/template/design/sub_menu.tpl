				<div class="">
					
					<div class="align_right">
						{if $module['parent_title']}<span class="font13px">{$module['parent_title']} &#8592; </span>{/if}<span class="font42px">Наши работы</span>
					</div>
					
					<div class="clearer">&nbsp;</div>
					<div class="relative">
						<div class="align_right portfolio_menu_title portfolio_menu_button hide">
							<a class="a_00ccff_dashed" href="javascript: void(0);" >Меню разделов <span style="top:-2px; position:relative;">&darr;</span></a>
						</div>
						<div id="portfolio_menu" class="portfolio_menu">
							<div class="portfolio">
								<div class="portfolio_top">
									<div class="portfolio_bottom">
										<div class="portfolio_center">
											<div class="background">
												<ul>										
													{include file="design/sub_menu_recursive.tpl" element="{$module['sub_menu']['element'][0]['element']}"}
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="clearer">&nbsp;</div>
				<div class="clearer">&nbsp;</div>