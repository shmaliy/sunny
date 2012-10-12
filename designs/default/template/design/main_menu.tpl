			<div class="header">
				<a href="http://{$root_url}/" class="design_logo"></a>
				<div class="menu_top">
					<div {if $current_main_menu == "design"}class="curent_menu"{/if}><!--curent_menu   добавить когда активная-->
						<div class="design_service">
							<a href="http://{$root_url}/design/">Услуги</a>
						</div>
					</div>
					<div {if $current_main_menu == "portfolio"}class="curent_menu"{/if}>
						<div class="design_our_work">
							<a href="http://{$root_url}/design/portfolio/">Наши работы</a>
						</div>	
					</div>
					<div {if $current_main_menu == "partners"}class="curent_menu"{/if}>
						<div class="design_partner">
							<a href="http://{$root_url}/design/partners/">Партнёры</a>
						</div>
					</div>
					<div >
						<div class="design_contact">
							<a href="javascript:void(0);" onclick="hidePlanet('#full','#default'); var k=getElementById('wrapper');  k.className='contact_full'; scrollto('#footer');">Контакты</a>
						</div>	
					</div>
				</div>
				<div class="menu_top_right"><!-- +curent_menu   добавить когда активная-->
					<div class="design_consulting">
						<a href="http://{$root_url}/consulting/">Консалтинг</a>
					</div>	
				</div>
			</div>