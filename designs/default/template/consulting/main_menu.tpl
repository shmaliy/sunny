	<!-- Header  -->
	<div id="header" class="
		{if $current_main_menu eq "consulting"}service_menu{/if}
		{if $current_main_menu eq "consultants"}consulting_menu{/if}
		{if $current_main_menu eq "projects"}project_menu{/if}
		{if $current_main_menu eq "partners"}parther_menu{/if}
		{if $current_main_menu eq "mba"}wba_menu{/if}
		">
		<div class="bg_left"></div>
		<div class="bg_center">
			<a href="http://{$root_url}/" class="consulting_logo"><img src="http://{$root_url}/designs/default/images/consulting/consulting_logo.png" alt="Sunny Creative Technologies Logotype"/></a>
			<div class="consulting_phone">
				<span class="font16px kod">067</span> <span class="font36px">67 98 999</span>
				<div class="align_right font13px"><a href="javascript:void(0);" onclick="scrollto('#footer');" class="a_3e5d7d_dashed">Cвяжитесь с нами</a></div>
			</div>
			<ul class="header_menu">
				{if $current_main_menu eq "consulting"}
				<li class="curent">
					<div class="menu_service" >
						<a href="http://{$root_url}/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index99">
					<div class="menu_consultation">
						<a href="http://{$root_url}/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="z_index98">
					<div  class="menu_project">
						<a href="http://{$root_url}/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="z_index97">
					<div  class="menu_parther">
						<a href="http://{$root_url}/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li  class="z_index96">
					<div  class="menu_wba">
						<a href="http://{$root_url}/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				{/if}


				{if $current_main_menu eq "consultants"}
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://{$root_url}/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class=" curent">
					<div class="menu_consultation">
						<a href="http://{$root_url}/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="z_index98">
					<div  class="menu_project">
						<a href="http://{$root_url}/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="z_index97">
					<div  class="menu_parther">
						<a href="http://{$root_url}/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li  class="z_index96">
					<div  class="menu_wba">
						<a href="http://{$root_url}/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				{/if}
				
				{if $current_main_menu eq "projects"}
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://{$root_url}/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index98">
					<div class="menu_consultation">
						<a href="http://{$root_url}/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="curent">
					<div  class="menu_project">
						<a href="http://{$root_url}/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="z_index97">
					<div  class="menu_parther">
						<a href="http://{$root_url}/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				{/if}
				
				{if $current_main_menu eq "partners"}
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://{$root_url}/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index98">
					<div class="menu_consultation">
						<a href="http://{$root_url}/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>
				<!--<li class="z_index97">
					<div  class="menu_project">
						<a href="http://{$root_url}/consulting/projects/"><span>Проекты</span></a>
					</div>
				</li>-->
				<li  class="curent">
					<div  class="menu_parther">
						<a href="http://{$root_url}/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li  class="z_index96">
					<div  class="menu_wba">
						<a href="http://{$root_url}/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				{/if}

				{if $current_main_menu eq "mba"}
				<li class="z_index99">
					<div class="menu_service" >
						<a href="http://{$root_url}/consulting/"><span>Услуги</span></a>
					</div>
				</li>
				<li class="z_index98">
					<div class="menu_consultation">
						<a href="http://{$root_url}/consulting/consultants/"><span>Консультанты</span></a>
					</div>
				</li>

				<li class="z_index96">
					<div class="menu_parther">
						<a href="http://{$root_url}/consulting/partners/"><span>Партнёры</span></a>
					</div>
				</li>
				<li class="curent">
					<div  class="menu_wba">
						<a href="http://{$root_url}/consulting/mba/"><span>MBA-обучение</span></a>
					</div>
				</li>
				{/if}
				
			</ul>
			<div  class="menu_web">
				<a href="http://{$root_url}/design/"><span>Дизайн-студия</span></a>
			</div>
		</div>
		<div class="bg_right"></div>
	</div>