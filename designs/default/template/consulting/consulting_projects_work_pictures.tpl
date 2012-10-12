		{if $module["pictures"] neq null}
			<h2>&nbsp;</h2>
			<div class="our_work_photo consulting_photo">
				<div class="visible">
					<a href="javascript:void(0);" onclick="prevPicture();" class="arrows arrows_left"></a>
					<div class="visible_corner visible_top_left"></div>
					<div class="visible_corner visible_top_right"></div>
					<div class="visible_bacground visible_left"></div>
					<div class="visible_bacground visible_top"></div>
					<div class="visible_bacground visible_center">											
						{foreach from=$module["pictures"] item=prize name=it}											
							<div id="picture_{$smarty.foreach.it.iteration}" {if $smarty.foreach.it.iteration eq 1}class="current_picture"{else}style="display:none;"{/if}>
								<img src="http://{$root_url}/images{$prize->picture}" alt="{$prize->htmltext}"/>										
								<div>{$prize->htmltext}</div>							
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