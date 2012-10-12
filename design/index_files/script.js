function get_page(page)
{
	var per_page = 4;
	var i        = 0;
	var total    = $('#library div').size();
	var end      = (Math.ceil(total/per_page)) - 1;

	$('#current').val(page);
	
	$('#library div').each(function(){
		$(this).attr('id','div_'+i);
		$(this).hide();
		i++;
	});
	
	for( n = (page*per_page); n < ((page+1)*per_page); n++ )
	{
		$('#div_'+n).show();
	}
	
	switch(Number(page))
	{
	case 0:
		$('a.prev').hide();
		$('a.next').show();
		break;
	case end:
		$('a.prev').show();
		$('a.next').hide();
		break;
	default:
		$('p.actions').find('a').show();
	}
}

function prev()
{
	var page = Number($('#current').val()) - 1;
	get_page(page);
}

function next()
{
	var page = Number($('#current').val()) + 1;
	get_page(page);
}

function show_visible () {
	$(".show_visible")
		.hover(
   			function() { 
   				if ($(this).siblings('.visible_block').css("display") != 'block'){
					$('.visible_block')
					.hide();
				  	$(this)
				  	.siblings('.visible_block')
				  	.animate({opacity: "show"},
				  		 200);}
			})
}

function hidePlanet(show, hide){
	if (show != '') $(show).show();
	if (hide != '') $(hide).hide();
}


function scrollto(id){
		destination = $(id).offset().top;
		$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 200 , function (){$('#contacts_name').focus();});
		$('div.footer_right').css({backgroundColor: "#95bbd1"});
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#678DA3"}) },100);
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#95bbd1"}) },200);
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#678DA3"}) },300);
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#95bbd1"}) },400);
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#678DA3"}) },500);
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#95bbd1"}) },600);
		setTimeout(function(){ $('div.footer_right').css({backgroundColor: "#678DA3"}) },700);
				
}

function hoverImg() {
	var bottom = '-8px';
	var speed = 300;
	$(".service_img  div")
		.hover(
   			function() { 
   				if ( !$(this).parent().parent().hasClass('curent') ){
	    			if ( $(this).hasClass('adviser_bg_1') ) {
						bottom='-35px';
						speed=500;
	    			}
					if ( $(this).hasClass('adviser_bg_2') ) {
						bottom='-8px';
						speed=300;
					}
					$(this)
	    				.find("span")
	     				.stop()
	     				.animate({ 
	      					bottom: '+8px'  
	     					}, speed);
	     			}
	   			}, 
   			function() {
   				if (!$(this).parent().parent().hasClass('curent') ){
				    $(this)
		 				.find("span")
		 				.stop()
		 				.animate({
		  					bottom: bottom  
		 					}, speed);
   				}
     		});
}