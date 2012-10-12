<?php /* Smarty version Smarty3-b8, created on 2011-08-03 15:24:50
         compiled from "designs/default/template/consulting/consulting_contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17557255214e393e12067a70-86441309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78578ed6291dc4307e16657d17fa4010ad9d3c58' => 
    array (
      0 => 'designs/default/template/consulting/consulting_contacts.tpl',
      1 => 1312373461,
    ),
  ),
  'nocache_hash' => '17557255214e393e12067a70-86441309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Footer  -->
<div id="footer">
	<div class="fixed">
		<div class="footer_left">
			<div class="font36px contact_full_title">
					Контакты
			</div>
			<div class="clearer"></div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px">Телефоны</div>
				<div><a href="callto:0676798999" style="text-decoration:none;">0 (67) 67 98 999</a></div>
				<div><a href="callto:0562680111" style="text-decoration:none;">0 (562) 680 111 (факс)</a></div>
			</div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px">Электроная почта</div>
				<div><a href="mailto:site@sunny.net.ua">site@sunny.net.ua</a></div>								
			</div>
			<div class="clearer"></div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px">Адрес</div>
				<div>49100, Украина, г. Днепропетровск</div>
				<div>пр. Героев, 17а</div>
			</div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px">Мгновенные сообщения</div>
				<div>Skype: <a href="callto:sunny_creative">SunNY Creative Technologies</a></div>
				<!--<div>ICQ: <a href="#">308468061</a></div>-->
			</div>
			<div class="clearer"></div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px">Карты проезда</div>
				<div><a target="_blank" href="http://maps.google.com.ua/maps/ms?ie=UTF8&hl=ru&msa=0&msid=105297562257305307316.000488ae0f5678037b369&ll=48.417766,35.061879&spn=0.012888,0.026436&z=16&iwloc=000488ae169ab1cbef83f">Google Maps</a></div>
				<!--<div><a href="#">Яндекс.Карты</a></div>-->
			</div>
			<div class="contact_full_left">
				<div class="font16px margin_bottom10px">Документы</div>
				<div><a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/brif_logo.doc" target="_blank">Бриф на создание логотипа</a></div>
				<div><a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/brif_site.doc" target="_blank">Бриф на создание сайта</a></div>
			</div>
			<div class="clearer"></div>
			<div class="copy">&#169; <a href="http://<?php echo $_smarty_tpl->getVariable('root_url')->value;?>
/" title="Sunny Creative Technologies">Sunny Creative Technologies</a>, 2010. Все права защищены</div>
			<div class="copy">Компания Sunny предоставляет профессиональные услуги в сфере бизнес-консалтинга и веб-разработки.</div>
		</div>
		<div class="footer_right">
			<div class="footer_mail_container" id="mail_container" >
				<div id="mail_status"></div>
			</div>
			<div class="font36px  contact_feedback_title contact_full_title">
				Обратная связь
			</div>			
			<div class="clearer"></div>
			<form action="">
				<div class="contact_feedback_left">
					<div>Ваше имя:</div>
				</div>
				<div class="contact_feedback_right">
					<input id="contacts_name" type="text" class="width_205px"/>
				</div>
				<div class="clearer"></div>
				<div class=" contact_feedback_left">
					<div>Имейл<span class="red">*</span>:</div>
				</div>
				<div class="contact_feedback_right">
					<input id="contacts_email" type="text" class="width_205px"/>
				</div>
				<div class="clearer"></div>
				<!--<div class="contact_feedback_left">
					<div>Кому пишем:</div>
				</div>
				<div class="contact_feedback_right">
					<select id="contacts_fName" class="width_210px">
						<option>Офис-менеджеру</option>
					</select>
				</div>
				<div class="clearer"></div>-->
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
					<textarea id="contacts_message" class="width_286px height_112px" rows="1" cols="1"></textarea>
					<div class="font9px feedback_space">Поля, отмеченные звёздочкой (<span class="red">*</span>), обязательны для заполнения.</div>
					<input id="send_button" type="button" class="button" value="Отправить сообщение" onclick="sendMail();"/>	
				</div>
				
				<div class="clearer"></div>
			</form>
		</div>
		<div class="clearer"></div>
	</div>
</div>
<div class="clearer"></div>