				<div class="adviser_consulting {if ($iter+2)%3 eq 0}left{/if}{if ($iter+2)%3 eq 2}left margin_left10px{/if}{if ($iter+2)%3 eq 1}left margin_left10px{/if}">
					<div class="service_img">	
						<div class="adviser_bg adviser_bg_1">					
							<a href="{$teaser.chpu}" class="adviser_bg adviser_bg_1" style="background: url(http://{$root_url}/images/{$teaser.teaser_photo_gray}) no-repeat;"><span>{$teaser.fio}</span></a>
						</div>
					</div>
					<div class="consulting_text">
					<!--{($iter)} {($iter+2)%3}-->
						<div class="consulting_text_about">							
							<p><b>{$teaser.post}</b></p>
							<p>{$teaser.teaser_text}</p>
						</div>
						<div class="consulting_text_contect">
							<p><b>Связаться:</b></p>
							<a href="mailto:{$teaser.contact_email}">{$teaser.contact_email}</a>
							<p>{$teaser.contact_phone}</p>
						</div>
					</div>
				</div>
				
				<!--<div class="adviser_consulting {if ($iter+1)%3 eq 2}left{/if}{if ($iter+1)%3 eq 0}right{/if}{if ($iter+1)%3 eq 1}center{/if}">
					<div class="service_img">
						<a href="{$teaser.chpu}" class="adviser_bg adviser_bg_{if ($iter+1)%3 eq 2}1{/if}{if ($iter+1)%3 eq 0}1{/if}{if ($iter+1)%3 eq 1}2{/if}" style="background: url(http://{$root_url}/images/{$teaser.teaser_photo_gray}) no-repeat;"><span>{$teaser.fio}</span></a>
					</div>
					<div class="consulting_text">
						<div class="consulting_text_about">							
							<p><b>{$teaser.post}</b></p>
							<p>{$teaser.teaser_text}</p>
						</div>
						<div class="consulting_text_contect">
							<p><b>Связаться:</b></p>
							<a href="mailto:{$teaser.contact_email}">{$teaser.contact_email}</a>
							<p>{$teaser.contact_phone}</p>
						</div>
					</div>
				</div>					
				-->	
				{if ($iter+2)%3 eq 2}				
				<div class="clearer" style="height:10px;"></div>
				{/if}		
							