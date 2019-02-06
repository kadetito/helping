/*****************************************************************************
	PRELOADER
*****************************************************************************/
	$(window).on('load', function(){
		$('#status').fadeOut();
		$('#preloader').delay(800).fadeOut('slow');
	});




			
/***************************************************
	ROTATING INTRO TEXT
***************************************************/	
//$(document).ready(function () {
//
//	$(".rotate").textrotator({
//	     animation: "dissolve",
//	     separator: "*",
//		speed: 3200
//	 })
//});	 
/***************************************************
	ABOUT OVERLAY
***************************************************/

$(document).ready(function () {

	var open_overlay = ('#open'), close_overlay = ('#close'), content = ( '.content' ), overlay = ('#overlay'), about = ('#about'),
	out = ( 'animated fadeOutDown' ), enter = ( 'animated fadeInDown' ), open = ('animated fadeInUpBig'), close = ('animated fadeOutDownBig');
	$(open_overlay).click(function() {
	$(content).removeClass(enter).addClass(out).fadeOut('slow');
		setTimeout(function() {
				$(overlay).fadeIn('slow');
				setTimeout(function() {
					$(about).removeClass(close).addClass(open).fadeIn('slow'); 
				}, 500);
			  }, 650);
	    	});
	$(close_overlay).click(function() {
		$(about).removeClass(open).addClass(close).fadeOut('slow'); 
		setTimeout(function() {
				$(overlay).fadeOut('slow');
				setTimeout(function() {
					$(content).removeClass(out).addClass(enter).fadeIn('fast');
				}, 700);
			  }, 500);
			});





/***************************************************
	ROTATING INTRO TEXT SCRIPT
***************************************************/	



!function($){var defaults={animation:"dissolve",separator:",",speed:2000};$.fx.step.textShadowBlur=function(fx){$(fx.elem).prop("textShadowBlur",fx.now)
.css({textShadow:"0 0 "+Math.floor(fx.now)+"px black"})};$.fn.textrotator=function(options){var settings=$.extend({},defaults,options);
return this.each(function(){var el=$(this);var array=[];$.each(el.text().split(settings.separator),function(key,value){array.push(value)});el.text(array[0]);
var rotate=function(){switch(settings.animation){case"dissolve":el.animate({textShadowBlur:0,opacity:0},500,function(){index=$.inArray(el.text(),array);
if((index+1)==array.length){index=-1}el.text(array[index+1]).animate({textShadowBlur:0,opacity:1},500)});
;break;case"fade":el.fadeOut(settings.speed,function(){index=$.inArray(el.text(),
array);if((index+1)==array.length){index=-1}el.text(array[index+1]).fadeIn(settings.speed)});break}};setInterval(rotate,settings.speed*2)})}}
(window.jQuery);



});







/***************************************************
	alerta cookies
***************************************************/	
function controlcookies() {
         // si variable no existe se crea (al clicar en Aceptar)
    localStorage.controlcookie = (localStorage.controlcookie || 0);
 
    localStorage.controlcookie++; // incrementamos cuenta de la cookie
    cookie1.style.display='none'; // Esconde la política de cookies
}

