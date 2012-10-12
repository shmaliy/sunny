<?php 
	$Itemid = JRequest::getInt('Itemid');
	$email = $params->get('email');
	$tel   = $params->get('tel');
	$skype = $params->get('skype');
	$gmaps = $params->get('gmaps');
	$fb    = $params->get('fb');
	$lang   = JRequest::getVar('lang', 'ru');
?>
<?php if ($Itemid >= 48):?>
<div id="footer">
	<div class="fixed">
		<div class="footer_left">
			<div class="font36px contact_full_title">
					<?php echo JText::_('CONTACT_TITLE')?>
			</div>
			<div class="clearer"></div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px"><?php echo JText::_('CONTACT_TEL')?></div>
				<div><a href="callto:0676798999" style="text-decoration:none;"><?php echo $tel?></a></div>
				<div><a href="callto:0562680111" style="text-decoration:none;">+38 0 (562) 680 111 (<?php echo JText::_('CONTACT_FAX')?>)</a></div>
			</div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px"><?php echo JText::_('CONTACT_EMAIL')?></div>
				<div><a href="mailto:<?php echo $email?>"><?php echo $email?></a></div>								
			</div>
			<div class="clearer"></div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px"><?php echo JText::_('CONTACT_ADDRESS_TITLE')?></div>
				<div><?php echo sprintf(JText::_('CONTACT_ADDRSS'), '<br />', '<br />')?></div>
			</div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px"><?php echo JText::_('CONTACT_MES')?></div>
				<div>Skype: <a href="callto:aleksandr.sk"><?php echo $skype?></a></div>
			</div>
			<div class="clearer"></div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px"><?php echo JText::_('CONTACT_MAP')?></div>
				<div><a target="_blank" href="<?php echo $gmaps?>">Google Maps</a></div>
				<!--<div><a href="#">Яндекс.Карты</a></div>-->
			</div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px"><?php echo JText::_('CONTACT_DOCUMENTS')?></div>
				<div><a href="http://sunny.net.ua/brif_logo.doc" target="_blank"><?php echo JText::_('CONTACT_BRIF_LOGO')?></a></div>
				<div><a href="http://sunny.net.ua/brif_site.doc" target="_blank"><?php echo JText::_('CONTACT_BRIF_SITE')?></a></div>
			</div>
			<div class="clearer"></div>
			<div class="copy">© <a href="http://sunny.net.ua/" title="Sunny Creative Technologies">Sunny Creative Technologies</a>, 2010 - <?php echo date("Y")?>. <?php echo JText::_('CONTACT_COPYRIGHT')?></div>
			<div class="copy"><?php echo JText::_('CONTACT_ABOUT')?></div>
		</div>
		<div class="footer_right">
			<div class="footer_mail_container" id="mail_container">
				<div id="mail_status"></div>
			</div>
			<div class="font36px  contact_feedback_title contact_full_title">
				<?php echo JText::_('CONTACT_FEEDBACK')?>
			</div>			
			<div class="clearer"></div>
			<form action="">
				<div class="contact_feedback_left">
					<div><?php echo JText::_('YOUR_NAME')?>:</div>
				</div>
				<div class="contact_feedback_right">
					<input id="contacts_name" type="text" class="width_205px">
				</div>
				<div class="clearer"></div>
				<div class="contact_feedback_left">
					<div><?php echo JText::_('YOUR_EMAIL')?>:<span class="red">*</span>:</div>
				</div>
				<div class="contact_feedback_right">
					<input id="contacts_email" type="text" class="width_205px">
				</div>
				<div class="clearer"></div>
				<div class=" contact_feedback_left">
					<div><?php echo JText::_('YOUR_SUBJECT')?>:</div>
				</div>
				<div class="contact_feedback_right">
					<select id="contacts_subj" class="width_210px">
						<option><?php echo JText::_('SUBJECT_ORDER')?></option>
						<option><?php echo JText::_('SUBJECT_COMMENT')?></option>
						<option><?php echo JText::_('SUBJECT_PARTNER')?></option>
						<option><?php echo JText::_('SUBJECT_JOB')?></option>
					</select>
				</div>
				<div class="clearer"></div>
				<div class=" contact_feedback_left">
					<div><?php echo JText::_('YOUR_TEXT')?><span class="red">*</span>:</div>
				</div>
				<div class="contact_feedback_right">
					<textarea id="contacts_message" class="width_286px height_112px" rows="1" cols="1"></textarea>
					<div class="font9px feedback_space"><?php $red = '<span class="red">*</span>'; echo sprintf(JText::_('FEEDBACK_NOTICE'), $red)?></div>
					<input id="send_button" type="button" class="button" value="<?php echo JText::_('SEND_MESSAGE')?>" onclick="sendMail();">	
				</div>
				
				<div class="clearer"></div>
			</form>
		</div>
		<div class="clearer"></div>
	</div>
</div>
<?php else:?>
<!--Planet bottom -->
<div class="bottom_planet">
			
	<!--Planet Know you-->
	<div class="know_you">
       	<a class="our_work_title show_visible nobr" href="<?php echo $fb?>" target="_blank" style="position:absolute; left:110px; top:-25px; font-size:18px"><?php echo JText::_('IN_NETWORK')?></a>
		<a class="show_visible" href="<?php echo $fb?>" target="_blank">
			<div class="know_you_planet"></div>
		</a><!--Planet-->
				<!--Blok description-->
				<div class="visible_block">
					<div class="visible">
						<div class="visible_corner visible_top_left"></div>
						<div class="visible_corner visible_top_right"></div>
						<div class="visible_bacground visible_left"></div>
						<div class="visible_bacground visible_top"></div>
						<div class="visible_bacground visible_center fb">
							<div class="our_work_right">
                            
                            	<div>
									<iframe scrolling="no" id="f2899e9a41d9abc" name="f17e23cef972c7" 
									style="border: medium none; overflow: hidden; height: 268px; width: 250px; 
									background-color:#1a235c" class="fb_ltr" 
									src="http://www.facebook.com/plugins/likebox.php?api_key=113869198637480&amp;channel=http%3A%2F%2Fstatic.ak.fbcdn.net%2Fconnect%2Fxd_proxy.php%23cb%3Df2406f889305ec2%26origin%3Dhttp%253A%252F%252Fdevelopers.facebook.com%252Ff1da38e97911df%26relation%3Dparent.parent%26transport%3Dpostmessage&amp;colorscheme=light&amp;header=false&amp;height=268&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FKOMANDA-S-Veselye-kartinki%2F135484299837691&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=250">
									</iframe>                                
                                </div>
                            
								<div style="height:5px; overflow:hidden;"></div>
                                <table width="100%" align="center">
                                	<tr>
                                    	<td align="center">                                
										<script type="text/javascript"> 
										<!--
											document.write(VK.Share.button(false,{type: "button", text: "Мне нравится"}));
										-->
										</script>
                                		</td>
                                        <td width="10">&nbsp;</td>
                                        <td align="center">
                                        	<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                        </td>
                                    </tr>
                                </table>
								<div style="height:5px; overflow:hidden;"></div>
								<div style="margin:5px 0 0 65px">
									<script src="http://connect.facebook.net/ru_RU/all.js#xfbml=1"></script><fb:like layout="button_count" width="602" font="arial"></fb:like>
								</div>
								<div style="height:5px; overflow:hidden;"></div>
							</div>
							<div class="clearer"></div>
						</div>
						<div class="visible_corner visible_bottom_left"></div>
						<div class="visible_corner visible_bottom_right"></div>
						<div class="visible_bacground visible_right"></div>
						<div class="visible_bacground visible_bottom"></div>
                        <div style="position:absolute; left:119px; margin-top:15px"><img src="<?php echo JURI::base()?>templates/template/images/know_you_radian.png"></div>
					</div>
				</div>
			</div>
			<!--Planet contact-->
			<div class="contact" id="footer">
				<div class="contact_planet" id="default" style="left: -719px ">
					<div class="contact_default">
						<a href="mailto:<?php echo $email?>"><?php echo $email?></a>
						<div class="phone"><?php echo $tel?></div>
						<a href="javascript: void(0);" class="other" onclick="hidePlanet('#full', '#default'); $('#wrapper').addClass('contact_full'); scrollto('#footer');"><?php echo JText::_('OTHER_COM')?><span style="top:-2px; position:relative;">↓</span></a>
					</div>
				</div>
				<div class="contact_planet_full hidden" id="full">
					<div class="contact_full">
						<div class="contact_full_left">
							<a href="javascript: void(0);" class="other" onclick="hidePlanet('#feedback','#full');"><?php echo JText::_('CONTACT_FEEDBACK')?></a>
						</div>
						<div class="contact_full_right">
							<a href="javascript: void(0);" class="other" onclick="hidePlanet('#default', '#full'); $('#wrapper').removeClass('contact_full');"><?php echo JText::_('HIDE')?> <span style="top:-2px; position:relative;">↑</span></a>
						</div>
						<div class="clearer"></div>
						<div class="font36px contact_full_title"><?php echo JText::_('CONTACT_TITLE')?></div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px contact_full_title"><?php echo JText::_('CONTACT_TEL')?></div>
							<div><a href="callto:0676798999" style="text-decoration:none;"><?php echo $tel?></a></div>
							<div><a href="callto:0562680111" style="text-decoration:none;">+380 (562) 680 111 (<?php echo JText::_('CONTACT_FAX')?>)</a></div>
						</div>
						<div class="contact_full_right">
							<div class="font16px contact_full_title"><?php echo JText::_('CONTACT_MES')?></div>
							<div>Skype: <a href="callto:<?php echo $skype?>"><?php echo $skype?></a></div>
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px"><?php echo JText::_('CONTACT_ADDRESS_TITLE')?></div>
							<div><?php echo sprintf(JText::_('CONTACT_ADDRSS'), '<br />', '<br />')?></div>
						</div>
						<div class="contact_full_right">
							<div class="font16px contact_full_title"><?php echo JText::_('CONTACT_EMAIL')?></div>
							<div><a href="mailto:site@sunny.net.ua">site@sunny.net.ua</a></div>								
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px contact_full_title"><?php echo JText::_('CONTACT_MAP')?></div>
							<div><a target="_blank" href="<?php echo $gmaps?>">Google Maps</a></div>
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px"><?php echo JText::_('CONTACT_DOCUMENTS')?></div>
							<div><a href="http://sunny.net.ua/brif_logo.doc" target="_blank"><?php echo JText::_('CONTACT_BRIF_LOGO')?></a></div>
							<div><a href="http://sunny.net.ua/brif_site.doc" target="_blank"><?php echo JText::_('CONTACT_BRIF_SITE')?></a></div>
						</div>
					</div>
				</div>
				
				<div class="contact_planet_full hidden" id="feedback">
					<div class="contact_full contact_feedback">
						<div class=" contact_full_left">
							<a href="javascript: void(0);" class="other" onclick="hidePlanet('#full', '#feedback');"><?php Echo JText::_('CONTACT_TITLE')?></a>
						</div>
						<div class="contact_full_right">
							<a href="javascript: void(0);" class="other" onclick="hidePlanet('#default', '#feedback'); $('#wrapper').removeClass('contact_full');"><?php Echo JText::_('HIDE')?> <span style="top:-2px; position:relative;">↑</span></a>
						</div>
						<div class="clearer"></div>
						<div class="font36px  contact_feedback_title"><?php echo JText::_('CONTACT_FEEDBACK')?></div>
						<div class="clearer"></div>
						<form action="">
							<div class="contact_feedback_left">
								<div><?php echo JText::_('YOUR_NAME')?>:</div>
							</div>
							<div class="contact_feedback_right">
								<input id="contacts_name" type="text" value="" class="width_205px">
							</div>
							<div class="clearer"></div>
							<div class=" contact_feedback_left">
								<div><?php echo JText::_('YOUR_EMAIL')?><span class="red">*</span>:</div>
							</div>
							<div class="contact_feedback_right">
								<input id="contacts_email" type="text" value="" class="width_205px">
							</div>
							<div class="clearer"></div>

							<div class="clearer"></div>
							<div class=" contact_feedback_left">
								<div><?php echo JText::_('YOUR_SUBJECT')?>:</div>
							</div>
							<div class="contact_feedback_right">
								<select id="contacts_subj" class="width_210px">
										<option><?php echo JText::_('SUBJECT_ORDER')?></option>
										<option><?php echo JText::_('SUBJECT_COMMENT')?></option>
										<option><?php echo JText::_('SUBJECT_PARTNER')?></option>
										<option><?php echo JText::_('SUBJECT_JOB')?></option>
								</select>
								</select>
							</div>
							<div class="clearer"></div>
							<div class=" contact_feedback_left">
								<div><?php echo JText::_('YOUR_TEXT')?><span class="red">*</span>:</div>
							</div>
							<div class="contact_feedback_right">
								<textarea id="contacts_message" class="width_280px height_130px" rows="1" cols="1" autocomplete="OFF"></textarea>
								<div class="font9px feedback_space"><?php echo sprintf(JText::_('FEEDBACK_NOTICE'), '(<span class="red">*</span>)')?></div>
								<input id="send_button" type="button" class="button" value="<?php echo JText::_('SENDINCOSMOS')?>" onclick="sendMail();">	
							</div>
							<div class="clearer"></div>
						</form>
					</div>					
				</div>
			</div>
		</div>
<?php endif;?>