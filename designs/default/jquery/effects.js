var prevX = prevY = 0;
var dX = dY = 0;
var i = 0;

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
	
	$(document).bind('mousemove', function(e){ 
		dX = e.pageX-prevX;
		prevX = e.pageX;
		
		dX1 = $('.consulting').css('left').replace("px", "")*1	-dX*0.05;
		dX2 = $('.design').css('left').replace("px", "")*1		-dX*0.02;
		dX3 = $('.who_we').css('left').replace("px", "")*1		-dX*0.008;
		dX4 = $('.our_work').css('left').replace("px", "")*1	-dX*0.004;
		dX5 = $('.blog').css('left').replace("px", "")*1		-dX*0.002;
		
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

	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: data,
		   success: function(msg){
			if( msg == "Ваше сообщение отправленно" ){
				$('#contacts_name').val('');
				$('#contacts_message').val('');
			}
			alert(msg);
	
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
	
	
	if(el.id.substr(el.id.length-1,1)<=3){
		for ( i = 1; i<=3; i++){
			if($('#service_'+i).hasClass('curent') == true){				
				t = i;				
				rep = $('#serv_'+t).css("background").replace('_curent.jpg', '.jpg');
				$('#serv_'+t).css("background", rep);
				
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
			}
		}
	
		if(el.id.substr(el.id.length-1,1) != t){		
			rep = $('#serv_'+el.id.substr(el.id.length-1,1)).css("background").replace('.jpg', '_curent.jpg');
			$('#serv_'+el.id.substr(el.id.length-1,1)).css("background", rep);
			
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
				rep = $('#serv_'+t).css("background").replace('_curent.jpg', '.jpg');
				$('#serv_'+t).css("background", rep);
				
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
			}
		}
	
		if(el.id.substr(el.id.length-1,1) != t){		
			rep = $('#serv_'+el.id.substr(el.id.length-1,1)).css("background").replace('.jpg', '_curent.jpg');
			$('#serv_'+el.id.substr(el.id.length-1,1)).css("background", rep);
			
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

function prevPicture(){
	cur_id = $(".current_picture").attr("id");
	prev_id = "picture_"+(cur_id.substr(8)*1-1);
	fadePic(cur_id, prev_id);
}

function nextPicture(){
	cur_id = $(".current_picture").attr("id");
	prev_id = "picture_"+(cur_id.substr(8)*1+1);
	fadePic(cur_id, prev_id);
}

function gotoPicture(el){
	cur_id = $(".current_picture").attr("id");
	prev_id = "picture_"+(el.id.substr(5)*1);
	fadePic(cur_id, prev_id);	
}

function fadePic(cur_id, prev_id){	
	if(document.getElementById(prev_id)!=null){
		$('#goto_'+(cur_id.substr(8)*1)).parent().removeClass('curent');
		$('#goto_'+(prev_id.substr(8)*1)).parent().addClass('curent');
		$(".current_picture").fadeOut(200, function (){
			$(".current_picture").removeClass("current_picture");
			$("#"+prev_id).addClass("current_picture");
			$(".current_picture").fadeIn(200, function (){
				$(".our_work_photo").css("padding","11px");
				$(".our_work_photo").css("padding","10px");
			});
		});
		
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
}

function prevTeaser(count){
	if($('#teasers').css("margin-left") != counter*teaser_width+"px")return;
	if($('#teasers').css("margin-left") == -((count-2)*teaser_width)+"px")return;
	
	counter--;
	$('#teasers').animate({
		marginLeft: counter*teaser_width
	  }, 300, function() {

	  });	
}
