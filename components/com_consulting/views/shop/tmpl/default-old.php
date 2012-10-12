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
var lang=﻿'<?php echo $lang;?>';



  $(document).ready(function(){

  $("#message_send_but").click(function () {
	var tovars=$("#tovar").text();

		tovarss = tovars.replace(/(\r\n|\n|\r)/gm,"<br />");

	$('#tovars').text(tovarss);
});




  $("a[id*='info-']").click(function () {
var id = $(this).attr('id').replace('info-', '');
if ($('div#opis-' + id).css('display') == 'none'){ 
  $('div#opis-' + id).show();
} else {
  $('div#opis-' + id).hide();
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
var def='<?php echo JText::_('NOT')?>';
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
var def='<?php echo JText::_('NOT')?>';
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

if (lang=="ru"){
					var	html =	'<div id="tov_'+id+'" ><div class="shop_block_item" ><div class="shop_block_corner shop_block_item_lt" ></div>';
						html +=	'<div class="shop_block_corner shop_block_item_rt"></div>';
						html +=	'<div class="left number" id="to_paste_id_'+id+'">   '+x+'</div>';
						html +=	'<div class="left title"><span class="left title_text" id="to_paste_naz_'+id+'"></span><span class="right bold"  style="padding:0px 0px 10px 10px;"></span><span class="right bold" id="to_paste_cena_'+id+'"> у.е.</span><div class="clearer"></div></div>';
						html +=	'<div class="right"><a style="cursor:pointer" id="kyp-'+id+'" class="icon_delete_shop"></a></div>';
						html +=	'<div class="shop_block_corner shop_block_item_lb"></div>';
						html +=	'<div class="shop_block_corner shop_block_item_rb"></div>';
						html +=	'<div class="clearer"></div></div></div>';}
						else
						{
							var	html =	'<div id="tov_'+id+'" ><div class="shop_block_item" ><div class="shop_block_corner shop_block_item_lt" ></div>';
						html +=	'<div class="shop_block_corner shop_block_item_rt"></div>';
						html +=	'<div class="left number" id="to_paste_id_'+id+'">   '+x+'</div>';
						html +=	'<div class="left title"><span class="left title_text" id="to_paste_naz_'+id+'"></span><span class="right bold"  style="padding:0px 0px 10px 10px;"></span><span class="right bold" id="to_paste_cena_'+id+'"> USD</span><div class="clearer"></div></div>';
						html +=	'<div class="right"><a style="cursor:pointer" id="kyp-'+id+'" class="icon_delete_shop"></a></div>';
						html +=	'<div class="shop_block_corner shop_block_item_lb"></div>';
						html +=	'<div class="shop_block_corner shop_block_item_rb"></div>';
						html +=	'<div class="clearer"></div></div></div>';
							};
	$('#kart').append(html);	

	    var b = $("#tov_naz_"+id+"").text();
    $("#to_paste_naz_"+id+"").text(" "+b+" ");

	    var c = $("#tov_cena_"+id+"").text();
    $("#to_paste_cena_"+id+"").append("            "+c+"  ");



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
<div>
<h1> Готовые бизнес тренинги, задания, рабочие тетради. Проведение тренингов в Днепропетровске. </h1>
Наша компания предлагает вам возможность получить крайне необходимые знания во всех сферах вашего бизнеса. Мы организовываем <strong>проведение тренингов</strong> на различные бизнес - тематики. <br /><br />
Узнайте, как правильно проводить подбор персонала, что вам необходимо от вашего будущего работника, как организовать и реализовать продажи. Будьте разумным руководителем, сделайте свой бизнес наиболее эффективным.<br /><br />
Мы предлагаем специализированные <strong>бизнес тренинги</strong> для управляющего персонала, менеджеров высшего звена, менеджеров по продажам, подбору персонала и просто целеустремленных, желающих зарабатывать большие деньги. <br /><br />
Вы получаете <strong>готовый тренинг</strong> и эффективный результат. <strong>Задания для тренинга</strong> подбираются из расчета набранной группы и получения желаемого результата каждого участника, у вас остаются ваши <strong>рабочие тетради</strong>, в которых будет самая важная для вас информация, помогающая постоянно помнить о полученном опыте и знаниях. <br /><br />
Если вам необходимы качественные знания, эффективный результат, заказывайте<strong> тренинги в Днепропетровске</strong>. Вы достигнете поставленных вами целей вместе с нами.<br /></div><br /><br /><br />
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
				if($lang=='ru'):   
				echo "
				<div class='margin_bottom5px shop_block_big'>
				<div class='shop_block_item'>
			<div class='shop_block_corner shop_block_item_lt'></div>
			<div class='shop_block_corner shop_block_item_rt'></div>
			<div class='left number' id='tov_id_{$tov->id_tov}'>{$x}</div>
			<div class='left title'><span class='left title_text'><a style='cursor:pointer' class='tova_naz' id='info-{$tov->id_tov}'><span id='tov_naz_{$tov->id_tov}'>{$tov->title}</span></a></span><span class='right bold' ><span id='tov_cena_{$tov->id_tov}'>{$tov->cena}</span> y.e.</span><div class='clearer'></div>
			<div id='opis-{$tov->id_tov}' style='display:none'><p>{$tov->desc}</p></div>
			</div>
			<div class='right'><a style='cursor:pointer' id='kyp-{$tov->id_tov}'class='icon_basket_shop'></a></div>
			<div class='shop_block_corner shop_block_item_lb'></div>
			<div class='shop_block_corner shop_block_item_rb'></div>
			<div class='clearer'></div>
		</div>
		</div>
				
				";
					else:
					echo "
				<div class='margin_bottom5px shop_block_big'>
				<div class='shop_block_item'>
			<div class='shop_block_corner shop_block_item_lt'></div>
			<div class='shop_block_corner shop_block_item_rt'></div>
			<div class='left number' id='tov_id_{$tov->id_tov}'>{$x}</div>
			<div class='left title'><span class='left title_text'><a style='cursor:pointer' class='tova_naz' id='info-{$tov->id_tov}'><span id='tov_naz_{$tov->id_tov}'>{$tov->title}</span></a></span><span class='right bold' ><span id='tov_cena_{$tov->id_tov}'>{$tov->cena}</span> USD</span><div class='clearer'></div>
			<div id='opis-{$tov->id_tov}' style='display:none'><p>{$tov->desc}</p></div>
			</div>
			<div class='right'><a style='cursor:pointer' id='kyp-{$tov->id_tov}'class='icon_basket_shop'></a></div>
			<div class='shop_block_corner shop_block_item_lb'></div>
			<div class='shop_block_corner shop_block_item_rb'></div>
			<div class='clearer'></div>
		</div>
		</div>
				
				";
					endif;
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
<div id='default_text' style='font-size: 13px';><?php echo JText::_('NOT')?></div>
					</span>
						<div class="all_sum">
						<div class="all_sum_block"><span class="left bold";><?php echo JText::_('O_SUM')?></span><span class="right"> <span class="font13px" ><span id='suma'></span><span style="padding:0px 0px 10px 10px;"><?php if($lang=='ru'): ?> у.е.<?php else:?> USD<?php endif;?></span></span></span></div>
						<div class="clearer"></div>
					</div>
				</div>
			</div>
			<div class="order_registration_right right">
				<h3><?php echo JText::_('Y_DATA')?></h3>
				<form   method="post"  id="zakaz_send">
					<div class="form_left">
						<div><?php echo JText::_('Y_NAME')?></div>
					</div>
					<div class="form_right">
						<input name="name" id="name" class="width_220px" type="text">
					</div>
					<div class="form_left">
						<div><?php echo JText::_('Y_PHONE')?></div>
					</div>
					<div class="form_right">
						<input name="phone" id="phone" class="width_220px" type="text">
					</div>
					<div class="clearer"></div>
					<div class="form_left">
						<div><?php echo JText::_('Y_EMAIL')?></div>
					</div>
					<div class="form_right">
						<input name="email" id="email" class="width_220px" type="text" defaultTxt="e-mail" defaultClass="italic" >
					</div>
					<div class="clearer"></div>
					<div class="form_left">
						<div><?php echo JText::_('Y_SUBJECT')?></div>
					</div>
					
					<div class="form_right">
						<textarea  class="width_320px height_80px" rows="1" cols="1" id="text" name="text"></textarea>
						<textarea style="display:none" wrap="virtual" class="width_320px height_80px" rows="1" cols="1" id="tovars" name="tovars"></textarea>

						<div class="font9px form_space"><?php echo JText::_('POLYA')?></div>


						<input style="font-size: 16px; height:30px; padding-left: 10px; padding-right: 10px;"  value="<?php echo JText::_('SEND_ZAKAZ')?>" class="send_submit" class="button" type="submit" id="message_send_but" name="">	
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