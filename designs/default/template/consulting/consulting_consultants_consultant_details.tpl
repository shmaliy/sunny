			<div class="our_work_details">
				<img src="http://{$root_url}/images/{$module["consultant"]->photo}" class="img_consulting" alt="{$module["consultant"]->fio}" title="{$module["consultant"]->fio}""/>
				<div class="our_work_details_center">					
					{include file="consulting/sub_menu.tpl"  root_url="{$root_url}" module="{$module}"}							
					<h1>{$module["consultant"]->fio}</h1>							
					<div>
						<strong>{$module["consultant"]->post}</strong>
					</div>
					<div class="consulting_details_center_description">
						<!--<h2>Консультант: {$module["consultant"]->fio}</h2>-->
						{$module["consultant"]->about}
					</div>
					<div class="consulting_details_center_visible">
						<h2>Как связаться</h2>
						{if $module["consultant"]->contact_phone}
						<div class="consulting_details_left">
							Мобильный:
						</div>
						<div class="consulting_details_right">
							{$module["consultant"]->contact_phone}
						</div>
						{/if}
						<div class="clearer"></div>
						{if $module["consultant"]->contact_email}
						<div class="consulting_details_left">
							Электронная почта:
						</div>
						<div class="consulting_details_right">
							<a href="mailto:{$module["consultant"]->contact_email}">{$module["consultant"]->contact_email}</a>
						</div>
						{/if}
						{if $module["consultant"]->contact_skype}<div class="consulting_details_left">
							Skype:
						</div>
						{/if}
						<div class="consulting_details_right">
							{if $module["consultant"]->contact_skype}<a href="#">{$module["consultant"]->contact_skype}</a>{/if}
							<div class="margin_top15px">
								<a href="javascript:void(0);" class="a_2f88e5_dashed font11px" onclick="scrollto('#footer');">
									Форма обратной связи
								</a>
							</div>
						</div>
						<div class="clearer"></div>
					</div>
					<div class="clearer"></div>
				</div>
			</div>
			<div class="clearer"></div>

			<!--<div class="our_work_text">				
				{$module["consultant"]->resume}
			</div>-->