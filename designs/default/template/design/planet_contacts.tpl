{php}
	session_start();
{/php}
			<!--Planet contact-->
			<div class="contact" id="footer">
				<div class="contact_planet" id="default">
					<div class="contact_default">
						<a href="mailto:site@sunny.net.ua">site@sunny.net.ua</a>
						<div class="phone">0 (67) 67 98 999</div>
						<a href="javascript: void(0);" class="other"   onclick="hidePlanet('#full','#default'); var k=getElementById('wrapper');  k.className='contact_full'; scrollto('#footer');">Другие формы связи <span style="top:-2px; position:relative;">&darr;</span></a>
					</div>
				</div>
				<div class="contact_planet_full hidden" id="full">
					<div  class="contact_full">
						<div class="contact_full_left">
							<a href="javascript: void(0);" class="other" onclick="hidePlanet('#feedback','#full');">Обратная  связь</a>
						</div>
						<div class="contact_full_right">
							<a href="javascript: void(0);" class="other"   onclick="hidePlanet('#default', '#full'); var k=getElementById('wrapper');  k.className='';">Скрыть <span style="top:-2px; position:relative;">&#8593;</span></a>
						</div>
						<div class="clearer"></div>
						<div class="font36px contact_full_title">
								Контакты
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px contact_full_title">Телефоны</div>
							<div><a href="callto:0676798999" style="text-decoration:none;">0 (67) 67 98 999</a></div>
							<div><a href="callto:0562680111" style="text-decoration:none;">0 (562) 680 111 (факс)</a></div>
						</div>
						<div class="contact_full_right">
							<div class="font16px contact_full_title">Мгновенные сообщения</div>
							<div>Skype: <a href="callto:sunny.creativ">SunNY Creative Technologies</a></div>
							<!--<div>ICQ: <a href="javascript:void(0);">308468061</a></div>-->
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px">Адрес</div>
							<div>49100, Украина</div>
							<div>г. Днепропетровск</div>
							<div>пр. Героев, 17а</div>
						</div>
						<div class="contact_full_right">
							<div class="font16px contact_full_title">Электроная почта</div>
							<div><a href="mailto:site@sunny.net.ua">site@sunny.net.ua</a></div>								
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px contact_full_title">Карты проезда</div>
							<div><a target="_blank" href="http://maps.google.com.ua/maps/ms?ie=UTF8&hl=ru&msa=0&msid=105297562257305307316.000488ae0f5678037b369&ll=48.417766,35.061879&spn=0.012888,0.026436&z=16&iwloc=000488ae169ab1cbef83f">Google Maps</a></div>
							<!--<div><a href="#">Яндекс.Карты</a></div>-->
						</div>
						<div class="clearer"></div>
						<div class="contact_full_left">
							<div class="font16px">Документы</div>
							<div><a href="http://{$root_url}/brif_logo.doc" target="_blank">Бриф на создание логотипа</a></div>
							<div><a href="http://{$root_url}/brif_site.doc" target="_blank">Бриф на создание сайта</a></div>
						</div>
					</div>
				</div>
				
				<div class="contact_planet_full hidden" id="feedback">
					<div  class="contact_full contact_feedback">
						<div class=" contact_full_left">
							<a href="javascript: void(0);" class="other"  onclick="hidePlanet('#full','#feedback');">Контакты</a>
						</div>
						<div class="contact_full_right">
							<a href="javascript: void(0);" class="other"  onclick="hidePlanet('#default', '#feedback'); var k=getElementById('wrapper');  k.className='';">Скрыть <span style="top:-2px; position:relative;">&#8593;</span></a>
						</div>
						<div class="clearer"></div>
						<div class="font36px  contact_feedback_title">
							Обратная связь
						</div>
						<div class="clearer"></div>
						<form action="">
							<div class="contact_feedback_left">
								<div>Ваше имя:</div>
							</div>
							<div class="contact_feedback_right">
								<input id="contacts_name" type="text" value="{php} echo $_SESSION['name']; {/php}" class="width_205px"/>
							</div>
							<div class="clearer"></div>
							<div class=" contact_feedback_left">
								<div>Имейл<span class="red">*</span>:</div>
							</div>
							<div class="contact_feedback_right">
								<input id="contacts_email" type="text" value="{php} echo $_SESSION['email']; {/php}" class="width_205px"/>
							</div>
							<div class="clearer"></div>
							<!--<div class=" contact_feedback_left">
								<div>Кому пишем:</div>
							</div>
							<div class="contact_feedback_right">
								<select id="contacts_fName" class="width_210px">
									<option>Офис-менеджеру</option>
								</select>
							</div>-->
							<div class="clearer"></div>
							<div class=" contact_feedback_left">
								<div>Тема письма:</div>
							</div>
							<div class="contact_feedback_right">
								<select id="contacts_subj" class="width_210px">
										<option>Заказать услугу</option>
										<option>Оставить отзыв</option>
										<option>Предложение о сотрудничестве</option>
										<option>Предложение по вакансии</option>
										<option>Вопрос тьютору</option>
								</select>
							</div>
							<div class="clearer"></div>
							<div class=" contact_feedback_left">
								<div>Текст<span class="red">*</span>:</div>
							</div>
							<div class="contact_feedback_right">
								<textarea id="contacts_message" class="width_280px height_130px" rows="1" cols="1" autocomplete="OFF"></textarea>
								<div class="font9px feedback_space">Поля, отмеченные звёздочкой (<span class="red">*</span>), обязательны для заполнения.</div>
								<input id="send_button" type="button" class="button" value="Отправить в космос" onclick="sendMail();"/>	
							</div>
							<div class="clearer"></div>
						</form>
					</div>					
				</div>
			</div>