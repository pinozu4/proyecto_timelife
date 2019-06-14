$(document).ready(function(){

	$('.nav a').on('click',function (e){
		e.preventDefault();
		var atributo = $(this).attr('href');
		$('body, html').stop().animate({
			scrollLeft: $(atributo).offset().left
		}, 1500, 'easeInOutExpo');
	});

	$('.nav a').on('click', function(){
		$(this).addClass('active').siblings().removeClass('active')
	});




	$('.circulo').on({
		mouseenter: function(){
			$(this).find('.cuadro').fadeIn();
		},
		mouseleave: function(){
			$(this).find('.cuadro').fadeOut();
		}
	})

});