$(document).ready(function(){
	$('.carousel-indicators li').click(function(){
		$(".fecha").css("display","block");
	});

/*$(window).scroll(function(){
	var position = $(window).scrollRigth();
	var pos2 = $('.fondo').offset().rigth;
	if(posicion == pos2){
			$('.fondo1').autoplay();
		}
})*/


// pasar y devolber//


	var posicion = 0;

	desaparecerflecha()
	$('.pasar').on('click', function(){

		 posicion += 1370
		 $("body, html").animate({
			scrollLeft: posicion+"px"
		},2000);

		 desaparecerflecha()
	});


	
	$('.devolber').on('click', function(){
		posicion -= 1370
		$("body, html").animate({
		scrollLeft: posicion - "px"
		},2000);

		desaparecerflecha()
	});

	function desaparecerflecha() {
		if (posicion == 0) {

			$('.devolber').css("display", "none");
		}else{
			$('.devolber').css("display", "block");
		}


		if (posicion == 1370) {

			$('.pasar').css("display", "none");
		}else{
			$('.pasar').css("display", "block");
		}
		
		console.log(posicion)
	}

	
//ventana flotante realidad aumentada//
	
	$('.iconki').on('click', function(){
		$('.realidad').css('display', 'flex');
		$('.realidad').css('opacity', '1');

	$('.x').on('click', function(){
		$('.realidad').css('display', 'none');
		$('.realidad').css('opacity', '0');
	});
	});
// Fin ventana flotante realidad aumentada//



//ventana fondo//

	
	/*var Myvideo = document.getElementByClass('fondo1')
		if(posicion == pos2){
			$('.fondo1').autoplay();
		}*/

	
// Fin ventana flotante realidad aumentada//

// ventana benjamin video//
	$('.viderr').hide();

	$('.video4').on('click', function(){
		$('.viderr').slideToggle(1000);
	});

	
// FIN ventana benjamin video//

// ventana Ether video//
	$('.videoSec5').hide();

	$('.video5').on('click', function(){
		$('.videoSec5').slideToggle(1000);
	});

	
// FIN ventana Enther video//

// ventana Katherine video//
	$('.vide').hide();

	$('.video1').on('click', function(){
		$('.vide').slideToggle(1000);
	});

	$('video1').on('click', function(){
		$('.vide');
	})
	
	
// FIN ventana  video//

// ventana Esther video//
	$('.vider').hide();

	$('.video2').on('click', function(){
		$('.vider').slideToggle(1000);
	});
	
	
// FIN ventana Esther video//


// ventana benoit video//
	$('.videro').hide();

	$('.video3').on('click', function(){
		$('.videro').slideToggle(1000);
	});
	
	
// FIN ventana benoit video//

//seccion dos//

	$('.textoDos').on('click', function(){
		$('.dos .textDos').css('opacity', '1');
	});

	$('.x').on('click', function(){
		$('.dos .textDos').css('opacity', '0');
	});



	$('.textoTres').on('click', function(){
		$('.dos .textTres').css('opacity', '1');
	});

	$('.x').on('click', function(){
		$('.dos .textTres').css('opacity', '0');
	});


	$('.textoCuatro').on('click', function(){
		$('.dos .textCuatro').css('opacity', '1');
	});

	$('.x').on('click', function(){
		$('.dos .textCuatro').css('opacity', '0');
	});


	$('.textoCinco').on('click', function(){
		$('.dos .textCinco').css('opacity', '1');
	});

	$('.x').on('click', function(){
		$('.dos .textCinco').css('opacity', '0');
	});


	$('.textoSeis').on('click', function(){
		$('.dos .textSeis').css('opacity', '1');
	});

	$('.x').on('click', function(){
		$('.dos .textSeis').css('opacity', '0');
	});


	
});