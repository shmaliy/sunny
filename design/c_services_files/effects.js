var prevX = prevY = 0;
var dX = dY = 0;
var i = 0;

var timer;

$(function(){
	$('.blog, .who_we, .consulting, .design, .our_work, .know_you').bind('mouseout', function(){
		start_timer();
	}).bind('mouseover', function(){
		stop_timer();
	});
})

function start_timer(){
	timer = window.setTimeout('hide_visible()', 2000);	
}

function stop_timer(){
	window.clearTimeout(timer);
}

function hide_visible(){
	$('.show_visible').each(function(){
		if ($(this).siblings('.visible_block').css("display") != 'block'){
			$('.visible_block').hide();
		}
	});
}

function binding(){
	if($(".portfolio_menu")){
		$(".portfolio_menu").parent().bind("mouseleave", function(){
			$(".portfolio_menu_title").addClass("hide");
			
			$(".portfolio_menu").hide();
		});
		$(".portfolio_menu").parent().bind("mouseenter", function(){
			$(".portfolio_menu_title").removeClass("hide");
			
			$(".portfolio_menu").show();
		});
	}
	
	if(cl = $(".client_logo")){
		$.each(cl, function (key, value){
			//alert($(value).html());
			$(value).bind("mouseenter", function (){
				$(value).find(".client_menu").fadeIn(100);
			});
			$(value).bind("mouseleave", function (){
				$(value).find(".client_menu").fadeOut(100);
			});				
		});		
	}
	
}


function percentToPixels(obj){
	obj.css('left',obj.position().left+"px");
}

function initEffects(){	
	if($.browser.msie)return ;
	percentToPixels($('.consulting'));
	percentToPixels($('.design'));
	percentToPixels($('.who_we'));
	percentToPixels($('.our_work'));
	percentToPixels($('.blog'));
	percentToPixels($('#default'));
	percentToPixels($('.know_you'));
	
	$(document).bind('mousemove',function(e){ 
		dX = e.pageX-prevX;
		prevX = e.pageX;
		
		dX1 = $('.consulting').css('left').replace("px", "")*1	-dX*0.05;
		dX2 = $('.design').css('left').replace("px", "")*1		-dX*0.02;
		dX3 = $('.who_we').css('left').replace("px", "")*1		-dX*0.008;
		dX4 = $('.our_work').css('left').replace("px", "")*1	-dX*0.004;
		dX5 = $('.blog').css('left').replace("px", "")*1		-dX*0.008;
		
		dX6 = $('#default').css('left').replace("px", "")*1		-dX*0.09;
		dX7 = $('.know_you').css('left').replace("px", "")*1	-dX*0.13;

		$('.consulting').css('left',dX1+'px');
		$('.design').css('left', 	dX2+'px');		
		$('.who_we').css('left', 	dX3+'px');		
		$('.our_work').css('left', 	dX4+'px');		
		$('.blog').css('left', 		dX5+'px');
			
		$('#default').css('left', 		dX6+'px');
		$('#full').css('left', 			$('#default').css('left'));
		$('.know_you').css('left', 		dX7+'px');
	});
}

function sendMail(){	
	data = {
			type:					"sendMail",
			message:				$("#contacts_message").val(),
			mailTo:					$("#contacts_email").val(),
			name:					$("#contacts_name").val(),
			fName:					$("#contacts_fName").val(),
			subj:					$("#contacts_subj  :selected").text()
	};
	$('#send_button').attr('disabled','disabled');
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: data,
		   success: function(msg){
			if( msg == "Ваше сообщение отправленно" ){
				$('#contacts_message').val('');
			}
			alert(msg);
			$('#send_button').removeAttr('disabled');
		   }
		 });	
}

function hideShow(show, hide){
	if (show != '') $(show).show('slow');
	if (hide != '') $(hide).hide('slow');	
}

function randomTeaser(el){
	//var sId = el.id;
	data = {
			type:					"randomTeaser"
	};
	msg = "<img src='designs/default/images/loader.gif' alt='Идет загрузка' style='width:16px; height:11px;margin:53px 107px;' />";
	$("div#randomTeaser").html(msg);
	//alert(document.getElementById("module").options[document.getElementById("module").selectedIndex].id);
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: data,//"type=updateSection&sectionId="+section_id,
		   success: function(msg){
		     //alert( "Data Saved: " + msg );
			$("div#randomTeaser").hide();
			$("div#randomTeaser").html(msg);			
			$("div#randomTeaser").show();			
			//getSection(sId);
			//loadTree(0);
		   }
		 });	
}

function consulting_service_click(el){
	var t = 0;
	var bottom='-8px';
	var speed=300;	
	$(el).blur();
	
	if(el.id.substr(el.id.length-1,1)<=3){
		for ( i = 1; i<=3; i++){			
			if($('#service_'+i).hasClass('curent') == true){				
				t = i;				
				//rep = $('#serv_'+t).css("background").replace('_curent.jpg', '.jpg');
				//$('#serv_'+t).css("background", rep);
				
				$('#service_'+t).removeClass('curent');				
				$('#design_text'+t).hide('slow', function() {
					
				});		
				
				if ( $('#serv_'+t).hasClass('adviser_bg_1') ) {				
					bottom='-35px';
					speed=300;
				}
				if ( $('#serv_'+t).hasClass('adviser_bg_2') ) {				
					bottom='-8px';
					speed=300;
				}
							
				$('#service_'+t)
					.find("span")
					.stop()
					.animate({
						bottom: bottom  
					}, speed);						
			}else{
				
			}
		}
	
		if(el.id.substr(el.id.length-1,1) != t){		
			//rep = $('#serv_'+el.id.substr(el.id.length-1,1)).css("background").replace('.jpg', '_curent.jpg');
			//$('#serv_'+el.id.substr(el.id.length-1,1)).css("background", rep);
			
			$('#service_'+el.id.substr(el.id.length-1,1)).addClass('curent');		
			$('#design_text'+el.id.substr(el.id.length-1,1)).show('slow', function() {
				
			});	
			$('#site_structure_1').hide('slow', function() {
	
			});
		}else{				
			$('#site_structure_1').show('slow', function() {
	
			});			
		}	
	}
	
	if(el.id.substr(el.id.length-1,1)>3){
		for ( i = 4; i<=6; i++){			
			if($('#service_'+i).hasClass('curent') == true){				
				t = i;				
				//rep = $('#serv_'+t).css("background").replace('_curent.jpg', '.jpg');
				//$('#serv_'+t).css("background", rep);
				
				$('#service_'+t).removeClass('curent');				
				$('#design_text'+t).hide('slow', function() {
					
				});		
				
				if ( $('#serv_'+t).hasClass('adviser_bg_1') ) {				
					bottom='-35px';
					speed=300;
				}
				if ( $('#serv_'+t).hasClass('adviser_bg_2') ) {				
					bottom='-8px';
					speed=300;
				}
							
				$('#service_'+t)
					.find("span")
					.stop()
					.animate({
						bottom: bottom  
					}, speed);						
			}else{
				
			}
		}
	
		if(el.id.substr(el.id.length-1,1) != t){		
			//rep = $('#serv_'+el.id.substr(el.id.length-1,1)).css("background").replace('.jpg', '_curent.jpg');
			//$('#serv_'+el.id.substr(el.id.length-1,1)).css("background", rep);
			
			$('#service_'+el.id.substr(el.id.length-1,1)).addClass('curent');		
			$('#design_text'+el.id.substr(el.id.length-1,1)).show('slow', function() {
				
			});	
			$('#site_structure_2').hide('slow', function() {
					
			});
		}else{		
			$('#site_structure_2').show('slow', function() {
					
			});
		}	
	}
}

var isPictureChangeProcess = false;
function prevPicture(){
	if(isPictureChangeProcess)return ;
	cur_id = $(".current_picture").attr("id");
	prev_id = "picture_"+(cur_id.substr(8)*1-1);
	fadePic(cur_id, prev_id);
	pictureArrows(cur_id, prev_id);
}

function nextPicture(){
	if(isPictureChangeProcess)return ;
	cur_id = $(".current_picture").attr("id");	
	prev_id = "picture_"+(cur_id.substr(8)*1+1);
	fadePic(cur_id, prev_id);
	pictureArrows(cur_id, prev_id);
}

function gotoPicture(el){
	if(isPictureChangeProcess)return ;
	cur_id = $(".current_picture").attr("id");
	prev_id = "picture_"+(el.id.substr(5)*1);	
	fadePic(cur_id, prev_id);	
	pictureArrows(cur_id, prev_id);
}

function pictureArrows(cur_id, prev_id){
	//alert(cur_id.substr(8)*1+" "+prev_id.substr(8)*1);
	max = cur_id.substr(8)*1;
	min = prev_id.substr(8)*1;
	$(".our_work_photo .control_panel .arrows_right").show();
	$(".our_work_photo .control_panel .arrows_left").show();
	if(max > min){
		if( document.getElementById( "goto_"+(min-1) ) == null ){
			$(".our_work_photo .control_panel .arrows_right").show();
			$(".our_work_photo .control_panel .arrows_left").hide();
		}
	}else if( max < min){
		if( document.getElementById( "goto_"+(max+2) ) == null ){
			$(".our_work_photo .control_panel .arrows_right").hide();
			$(".our_work_photo .control_panel .arrows_left").show();
		}
	}
}

function fadePic(cur_id, prev_id){
	if(cur_id == prev_id)return;
	if(document.getElementById(prev_id)!=null){
		isPictureChangeProcess = true;
		$('#goto_'+(prev_id.substr(8)*1)).parent().addClass('curent');
		$('#goto_'+(cur_id.substr(8)*1)).parent().removeClass('curent');		
		
		$(".current_picture").fadeOut(100, function (){	
			var cp = $(".current_picture");
			$("#"+prev_id).addClass("current_picture");			
			cp.removeClass("current_picture");
			//alert(prev_id);
			$("#"+prev_id).fadeIn(100, function (){
				$(".our_work_photo").css("padding","1px");
				$(".our_work_photo").css("padding","0px");	
				isPictureChangeProcess = false;
			});			
			//destination = $(".our_work_photo").offset().top;
			//$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 1 , function (){});			
		});
		return true;
	}	
}
counter = 0;
teaser_width = 425;
function nextTeaser(count){
	//alert(counter*teaser_width+"px");
	if($('#teasers').css("margin-left") != counter*teaser_width+"px")return;
	if($('#teasers').css("margin-left") == "0px")return;
	counter++;
	$('#teasers').animate({
		marginLeft: counter*teaser_width
	  }, 300, function() {

	  });
	
	$(".teaser a.arrows_right").show();
	if (Math.abs(counter) == 0){
		$(".teaser a.arrows_left").hide();		
	}
}

function prevTeaser(count){
	if($('#teasers').css("margin-left") != counter*teaser_width+"px")return;
	if($('#teasers').css("margin-left") == -((count-2)*teaser_width)+"px")return;
	
	counter--;
	$('#teasers').animate({
		marginLeft: counter*teaser_width
	  }, 300, function() {

	  });	
	$(".teaser a.arrows_left").show();
	if (Math.abs(counter) == (count-2)){
		$(".teaser a.arrows_right").hide();		
	}
}


function showConsultant(name){
	var id = "#"+name;
	//alert(id);
	
	if($(id).parent().parent().parent().hasClass('curent')){
		$(id).parent().css("marginTop", "-127px");
	}else{
		$(id).parent().css("marginTop", "-122px");
	}
	$(id).stop().animate( { bottom : "1px" }, 500);
}

function hideConsultant(name){
	var id = "#"+name;
	//
	if($(id).parent().parent().parent().hasClass('curent')){
		$(id).stop().animate( {bottom: "-122px" }, 500, function (){$(id).parent().css("marginTop", "0");});
	}else{
		$(id).stop().animate( {bottom: "-122px" }, 500, function (){$(id).parent().css("marginTop", "0");});
	}
}