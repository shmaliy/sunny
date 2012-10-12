		{if $module["prizes"] neq null}
			<h2>Награды, сертификаты, дипломы</h2>
			<div class="our_work_photo consulting_photo">
			
				<div class="control_panel">
					<div class="visible_corner visible_top_left"></div>
					<div class="visible_center">
						<ul style="width: {$module["prizes"]|@count*11}px;">
							{foreach from=$module["prizes"] item=prize name=it}
								<li {if $smarty.foreach.it.iteration eq 1}class="curent"{/if}><a id="goto_{$smarty.foreach.it.iteration}" class="" href="javascript:void(0);" onclick="gotoPicture(this);" title="{$prize->htmltext}"></a></li>
							{/foreach}
							<!--<li><a id="goto_1" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li class="curent"><a id="goto_2" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li><a id="goto_3" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li><a id="goto_4" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>
							<li><a id="goto_5" class="" href="javascript:void(0);" onclick="gotoPicture(this);"></a></li>-->
						</ul>
					</div>
					<div class="visible_corner visible_top_right"></div>
					<a href="javascript:void(0);" class="arrows arrows_left" onclick="prevPicture();" title="Предыдущее изображение"></a>
					<a href="javascript:void(0);" class="arrows arrows_right" onclick="nextPicture();" title="Следующее изображение"></a>
				</div>
				
				<div class="visible">
					<a href="javascript:void(0);" onclick="prevPicture();" class="arrows arrows_left"></a>
					<div class="visible_corner visible_top_left"></div>
					<div class="visible_corner visible_top_right"></div>
					<div class="visible_bacground visible_left"></div>
					<div class="visible_bacground visible_top"></div>
					<div class="visible_bacground visible_center">						
						{foreach from=$module["prizes"] item=prize name=it}				
							<div id="picture_{$smarty.foreach.it.iteration}" {if $smarty.foreach.it.iteration eq 1}class="current_picture"{else}style="display:none;"{/if}>
								<div>{$prize->htmltext}</div>
								<img src="http://{$root_url}/images{$prize->picture}" alt="http://{$root_url}/images{$prize->picture}"/>															
							</div>									
						{/foreach}						
					</div>
					<div class="visible_corner visible_bottom_left"></div>
					<div class="visible_corner visible_bottom_right"></div>
					<div class="visible_bacground visible_right"></div>
					<div class="visible_bacground visible_bottom"></div>
					<a href="javascript:void(0);" onclick="nextPicture();" class="arrows arrows_right"></a>
				</div>						
			</div>					
		{/if}