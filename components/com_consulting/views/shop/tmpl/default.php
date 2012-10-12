<?php 
	$model = $this->getModel('Shop');
	$consList = $model->getAllConsulting();


   $lang   = JRequest::getVar('lang', 'ru');
	$count = ceil(count($consList) / 3);
	$howIs = JText::_('CONSULTANTS');
	$document = & JFactory::getDocument();
	$document->setTitle( "Готовые задания для тренинга,рабочие тетради купить || Проведение бизнес тренингов в днепропетровске" );
$document->setMetaData("keywords", "бизнес тренинги, проведение тренингов, тренинги в Днепропетровске, готовый тренинг, готовый тренинг купить, задания для тренинга, задания для тренинга купить, рабочие тетради, рабочие тетради для тренинга");
$document->setDescription("Готовые задания для тренинга, рабочие тетради Вы можете купить у Нас, а так же от Наших профессионалов - Проведение бизнес тренингов в Днепропетровске.");
	
	
?>

<script>
var summa='0';
var x=1;
  

  $(document).ready(function(){

  $("a[id*='info-']").click(function () {
var id = $(this).attr('id').replace('info-', '');
if ($('p#opis-' + id).css('display') == 'none'){ 
  $('p#opis-' + id).show();
} else {
  $('p#opis-' + id).hide();
};
});
  });


$(document).ready(
function(){

var idProducts = [];
$("a[id*='kyp-']").live('click', function() {


var id = $(this).attr('id').replace('kyp-', '');
if  (idProducts.indexOf(id)==-1){
idProducts.push(id);
saveCookie(idProducts);
viewCookie(id);

x=x+1;
if(x==1){
var def='Выбраных товаров нет';
$("#default_text").text(def);
}else{
var def='';
$("#default_text").text(def);
};

}else{
idProducts.splice (idProducts.indexOf(id),1);
saveCookie(idProducts);
removeCookie(id);
x=x-1;
if(x==1){
var def='Выбраных товаров нет';
$("#default_text").text(def);
}else{
var def='';
$("#default_text").text(def);
};

};
			if($("#kyp-"+id).hasClass('icon_delete_shop')){
	$("#kyp-"+id).removeClass("icon_delete_shop");
	$("#kyp-"+id).addClass("icon_basket_shop");


	}else{ 
    $("#kyp-"+id).removeClass("icon_basket_shop");
	$("#kyp-"+id).addClass("icon_delete_shop");
    };
});
		if ($.cookie('email') && $.cookie('name') && $.cookie('phone')) {
			$('#message_send #email').removeClass('italic').val($.cookie('email'));
			$('#message_send #name').removeClass('italic').val($.cookie('name'));
			$('#message_send #phone').removeClass('italic').val($.cookie('phone'));
		}
});

function saveCookie(idProducts) {
    $.cookie('idProducts', idProducts.join(','));
};
function viewCookie(id) {


					var	html =	'<div id="tov_'+id+'" ><div class="shop_block_item" ><div class="shop_block_corner shop_block_item_lt" ></div>';
						html +=	'<div class="shop_block_corner shop_block_item_rt"></div>';
						html +=	'<div class="left number" id="to_paste_id_'+id+'">'+x+'</div>';
						html +=	'<div class="left title"><span class="left title_text" id="to_paste_naz_'+id+'"></span><span class="right bold"  style="padding:0px 0px 10px 10px;">у.е.</span><span class="right bold" id="to_paste_cena_'+id+'"></span><div class="clearer"></div></div>';
						html +=	'<div class="right"><a style="cursor:pointer" id="kyp-'+id+'" class="icon_delete_shop"></a></div>';
						html +=	'<div class="shop_block_corner shop_block_item_lb"></div>';
						html +=	'<div class="shop_block_corner shop_block_item_rb"></div>';
						html +=	'<div class="clearer"></div></div></div>';
	$('#kart').append(html);	

	    var b = $("#tov_naz_"+id+"").text();
    $("#to_paste_naz_"+id+"").text(b);
	    var c = $("#tov_cena_"+id+"").text();
    $("#to_paste_cena_"+id+"").append(c);	
	var cc = parseFloat(c);
	suma=parseFloat(summa);

	suma=suma+cc;
    summa=suma; 
	$("#suma").text(suma);	
    var str = $.cookie('idProducts');


};
function removeCookie(id) {
    var c = $("#tov_cena_"+id+"").text();
	var cc = parseFloat(c);
	suma=parseFloat(summa);
	suma = suma-cc;
	    summa=suma; 
		$("#suma").text(suma);	
	$("#tov_"+id+"").remove();	


};



</script>
<div class="fixed">

<?php if ($lang == "ru"):?>
<div>
<h1> Готовые бизнес тренинги, задания, рабочие тетради. Проведение тренингов в Днепропетровске. </h1>
Наша компания предлагает вам возможность получить крайне необходимые знания во всех сферах вашего бизнеса. Мы организовываем <strong>проведение тренингов</strong> на различные бизнес - тематики. <br /><br />
Узнайте, как правильно проводить подбор персонала, что вам необходимо от вашего будущего работника, как организовать и реализовать продажи. Будьте разумным руководителем, сделайте свой бизнес наиболее эффективным.<br /><br />
Мы предлагаем специализированные <strong>бизнес тренинги</strong> для управляющего персонала, менеджеров высшего звена, менеджеров по продажам, подбору персонала и просто целеустремленных, желающих зарабатывать большие деньги. <br /><br />
Вы получаете <strong>готовый тренинг</strong> и эффективный результат. <strong>Задания для тренинга</strong> подбираются из расчета набранной группы и получения желаемого результата каждого участника, у вас остаются ваши <strong>рабочие тетради</strong>, в которых будет самая важная для вас информация, помогающая постоянно помнить о полученном опыте и знаниях. <br /><br />
Если вам необходимы качественные знания, эффективный результат, заказывайте<strong> тренинги в Днепропетровске</strong>. Вы достигнете поставленных вами целей вместе с нами.<br /></div><br /><br /><br />
<?php else:?>
<div>
<h1>Ready-made business trainings, exercises, workbooks. Staging trainings in Dnepropetrovsk, Ukraine.</h1>


Our company offers you the opportunity to obtain much-needed knowledge and expertise in all areas of your business. We organize trainings on a variety of business-subjects. <br /><br />
Learn how to carry out the recruitment, what you need from your future employee, how to organize and implement sales. Be a smart leader, make your business more efficient.<br /><br />

We offer the specialized business trainings for management personnel, senior managers, sales managers, recruiters and self-motivated people, willing to earn the big money. <br /><br />
You can get a ready-made training and an effective result. Assignments for training are selected on the assumption of the size of group and of desired result of each participant, you safe your workbooks, where is most important information for you to help always remember the experience and knowledge.<br /><br />   
If you need the high-quality knowledge, the effective results - order trainings in Dnepropetrovsk. You will achieve your goals with us. <br /></div><br /><br /><br />
<?php endif;?>
	<?php 
		for ($i=0; $i < $count; $i++):
			
			$lineClass = ($i > 0) ? $lineClass = 'margin_bottom30px padding_top30px' : '';
			$aSlice = array_slice($consList, ($i * 3), 3);
			echo "<div class='{$lineClass}'>";
				$n = 1;
				foreach ($aSlice as $cons):


					$consClass = ($n > 1) ? $consClass = 'margin_left10px' : '';
					$bg = JURI::base() . "templates/template/images/consulting/shop_bg_{$cons->id_catt}.png";
					

					
					$title = preg_replace('/[ ]/', '<br />', $cons->title, 1);
					
					$href = JRoute::_("index.php?option=com_consulting&view=shop&layout=item&id={$cons->id_catt}&Itemid=48");
					
					echo "<div class='service_consulting left {$consClass}' id='service_{$cons->id_catt}'>
						<div class='service_img service_img_border_bottom'>
						
							<div id='serv_{$cons->id_catt}' class='service_bg adviser_bg_2' 
								style='background: url({$bg}) no-repeat;' onclick='consulting_service_click(this);'>
								<span style='bottom: +8px; left: 10px;'>{$title}</span>							
							</div>
					    	<div style='overflow:hidden; width: 287px; height:122px; position: relative; top: -1px; left: 0px;'>
					    		<div id='cons_{$cons->id_catt}' class='service_adviser_bg_2' style='background: url({$teaser}) no-repeat bottom; bottom: -123px;'>
					    			<div style='bottom: 15px;'>{$name}</div>							
								</div>
							</div> 
						</div>
					</div>";				
					$n++;
				endforeach;;
			echo "</div>";
			echo '<div class="clearer"></div>';
			
			foreach ($aSlice as $cons):
			$x=0;
								$tovList  = $model->getAllTovar($cons->id_catt);
				echo "<div class='consulting_text_big hidden' id='design_text{$cons->id_catt}'>{$cons->desc}";
				foreach ($tovList as $tov):
				$x=$x+1;
				echo "
				<div class='margin_bottom5px shop_block_big'>
				<div class='shop_block_item'>
			<div class='shop_block_corner shop_block_item_lt'></div>
			<div class='shop_block_corner shop_block_item_rt'></div>
			<div class='left number' id='tov_id_{$tov->id_tov}'>{$x}</div>
			<div class='left title'><span class='left title_text'><a style='cursor:pointer' class='tova_naz' id='info-{$tov->id_tov}'><span id='tov_naz_{$tov->id_tov}'>{$tov->title}</span></a></span><span class='right bold' ><span id='tov_cena_{$tov->id_tov}'>{$tov->cena}</span> у.е.</span><div class='clearer'></div>
			<p id='opis-{$tov->id_tov}' style='display:none'>{$tov->desc}</p>
			</div>
			<div class='right'><a style='cursor:pointer' id='kyp-{$tov->id_tov}'class='icon_basket_shop'></a></div>
			<div class='shop_block_corner shop_block_item_lb'></div>
			<div class='shop_block_corner shop_block_item_rb'></div>
			<div class='clearer'></div>
		</div>
		</div>
				
				";
					
				endforeach;
				echo"</div>";
			endforeach;
			
		endfor;?>
			<div class="consulting_text_big margin_top30px order_registration">
		<div class="order_registration_top">
			<h1><?php echo JText::_('OFORMIT_ZAKAZ')?></h1>
			<div class="order_registration_left left">
				<div name="tovar" id="tovar" class="shop_block_small">
					<h3><?php echo JText::_('TOVAR')?></h3>
					<?php?>
					<span id='kart'>
<div id='default_text' style="font-size: 13px";>Выбраных товаров нет</div>
					</span>
						<div class="all_sum">
						<div class="all_sum_block"><span class="left bold";><?php echo JText::_('O_SUM')?></span><span class="right"> <span class="font13px" ><span id='suma'></span><span style="padding:0px 0px 10px 10px;">у.е.</span></span></span></div>
						<div class="clearer"></div>
					</div>
				</div>
			</div>
			<div class="order_registration_right right">
				<h3><?php echo JText::_('Y_DATA')?></h3>
				<form  action="<?php echo JURI::base()?>index2.php?option=com_consulting&task=sendMessage" method="post"  id="message_send">
					<div class="form_left">
						<div><?php echo JText::_('Y_NAME')?><span class="red">*</span>:</div>
					</div>
					<div class="form_right">
						<input name="name" id="name" class="width_220px" type="text">
					</div>
					<div class="form_left">
						<div><?php echo JText::_('Y_PHONE')?><span class="red">*</span>:</div>
					</div>
					<div class="form_right">
						<input name="phone" id="phone" class="width_220px" type="text">
					</div>
					<div class="clearer"></div>
					<div class="form_left">
						<div><?php echo JText::_('Y_EMAIL')?><span class="red">*</span>:</div>
					</div>
					<div class="form_right">
						<input name="email" id="email" class="width_220px" type="text" defaultTxt="e-mail" defaultClass="italic" >
					</div>
					<div class="clearer"></div>
					<div class="form_left">
						<div><?php echo JText::_('Y_SUBJECT')?></div>
					</div>
					<div class="form_right">
						<textarea class="width_320px height_80px" rows="1" cols="1" id="text" name="text"></textarea>
						<div class="font9px form_space"><?php $red = '<span class="red">*</span>'; echo sprintf(JText::_('FEEDBACK_NOTICE'), $red)?></div>
						<input style="font-size: 16px; height:30px; padding-left: 10px; padding-right: 10px;" value="<?php echo JText::_('SEND_ZAKAZ')?>" class="send_submit" class="button" type="submit" id="message_send_but" name="">	
					</div>
					
					<div class="clearer"></div>
					<span class="message_text"></span>
				</form>
			</div>
			<div class="clearer"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	hoverImgShop();
})
</script>