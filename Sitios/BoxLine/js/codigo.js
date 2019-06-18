$(document).ready(function(){
	
	//variables Slider carteles
	var imgItemsA = $('.imgCartelesA li').length;
	var imgItemsG = $('.imgCartelesG li').length;
	var imgItemsI = $('.imgCartelesI li').length;
	var imgItemsEU = $('.imgCartelesEU li').length;
	var imgItemsC = $('.imgCartelesC li').length;
	var imgItemsIns = $('.imgCartelesIns li').length;

	var imgPos = 1;

	//menu
	$('header .menuHamburgesa').click(function(){

		if ($('#menuH').attr('class') == 'fas fa-bars'){		
			$('#menuH').removeClass('fas fa-bars').addClass('fas fa-times');
			$('.menu').addClass('mostrar');

		}else{
			$('#menuH').removeClass('fas fa-times').addClass('fas fa-bars');
			$('.menu').removeClass('mostrar');
		}
	});

	// flecha para subir
	$(window).scroll(function(){	
		if (window.scrollY > 300){
			$('.fa-chevron-circle-up').slideDown(300);
		}else{
			$('.fa-chevron-circle-up').slideUp(300);
		}
	});

	$('.fa-chevron-circle-up').click(function(e){
		e.preventDefault();
		$('body, html').animate({
			scrollTop: 0
		},700);
		return false;
	});

	//Carteles Inicio
	$('.imgCartelesIns li').hide();
	$('.imgCartelesIns li:first').show();

	$('.FderechaIns').click(nextSliderIns);
	$('.FizquierdaIns').click(prevSliderIns);

	function nextSliderIns(){
		if (imgPos >= imgItemsIns) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.imgCartelesIns li').hide();
		$('.imgCartelesIns li:nth-child('+ imgPos +')').fadeIn();
	}

	function prevSliderIns(){
		
		if (imgPos <= 1) {
			imgPos = imgItemsIns;
		}else{
			imgPos--;
		}

		$('.imgCartelesIns li').hide();
		$('.imgCartelesIns li:nth-child('+ imgPos +')').fadeIn();
	}

	//Carteles Africa
	$('.imgCartelesA li').hide();
	$('.imgCartelesA li:first').show();

	$('.FderechaA').click(nextSliderA);
	$('.FizquierdaA').click(prevSliderA);

	function nextSliderA(){
		if (imgPos >= imgItemsA) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.imgCartelesA li').hide();
		$('.imgCartelesA li:nth-child('+ imgPos +')').fadeIn();
	}

	function prevSliderA(){
		
		if (imgPos <= 1) {
			imgPos = imgItemsA;
		}else{
			imgPos--;
		}

		$('.imgCartelesA li').hide();
		$('.imgCartelesA li:nth-child('+ imgPos +')').fadeIn();
	}

	//Carteles Grecia
	$('.imgCartelesG li').hide();
	$('.imgCartelesG li:first').show();

	$('.FderechaG').click(nextSliderG);
	$('.FizquierdaG').click(prevSliderG);

	function nextSliderG(){
		console.log(imgPos,imgItemsG);
		if (imgPos >= imgItemsG) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.imgCartelesG li').hide();
		$('.imgCartelesG li:nth-child('+ imgPos +')').fadeIn();
	}

	function prevSliderG(){
		
		if (imgPos <= 1) {
			imgPos = imgItemsG;
		}else{
			imgPos--;
		}

		$('.imgCartelesG li').hide();
		$('.imgCartelesG li:nth-child('+ imgPos +')').fadeIn();
	}

	//Carteles Inglaterra
	$('.imgCartelesI li').hide();
	$('.imgCartelesI li:first').show();

	$('.FderechaI').click(nextSliderI);
	$('.FizquierdaI').click(prevSliderI);

	function nextSliderI(){
		console.log(imgPos,imgItemsI);
		if (imgPos >= imgItemsI) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.imgCartelesI li').hide();
		$('.imgCartelesI li:nth-child('+ imgPos +')').fadeIn();
	}

	function prevSliderI(){
		
		if (imgPos <= 1) {
			imgPos = imgItemsI;
		}else{
			imgPos--;
		}

		$('.imgCartelesI li').hide();
		$('.imgCartelesI li:nth-child('+ imgPos +')').fadeIn();
	}

	//Carteles estadosUnidos
	$('.imgCartelesEU li').hide();
	$('.imgCartelesEU li:first').show();

	$('.FderechaEU').click(nextSliderEU);
	$('.FizquierdaEU').click(prevSliderEU);

	function nextSliderEU(){
		console.log(imgPos,imgItemsEU);
		if (imgPos >= imgItemsEU) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.imgCartelesEU li').hide();
		$('.imgCartelesEU li:nth-child('+ imgPos +')').fadeIn();
	}

	function prevSliderEU(){
		
		if (imgPos <= 1) {
			imgPos = imgItemsEU;
		}else{
			imgPos--;
		}

		$('.imgCartelesEU li').hide();
		$('.imgCartelesEU li:nth-child('+ imgPos +')').fadeIn();
	}

	//Carteles Colombia
	$('.imgCartelesC li').hide();
	$('.imgCartelesC li:first').show();

	$('.FderechaC').click(nextSliderC);
	$('.FizquierdaC').click(prevSliderC);

	function nextSliderC(){
		console.log(imgPos,imgItemsC);
		if (imgPos >= 5) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.imgCartelesC li').hide();
		$('.imgCartelesC li:nth-child('+ imgPos +')').fadeIn();
	}

	function prevSliderC(){
		
		if (imgPos <= 1) {
			imgPos = imgItemsC;
		}else{
			imgPos--;
		}

		$('.imgCartelesC li').hide();
		$('.imgCartelesC li:nth-child('+ imgPos +')').fadeIn();
	}

	//Audios
	$('.fa-volume-down').click(function(){
		$(".fa-volume-down").find("audio")[0].play();
	});


	
	/*$.ajax({
		url:"contenido.json",
		dataType:"text",
		success:function(data){
			
			var informacionPag = JSON.parse(data);
			console.log(informacionPag[0].personajes);
		}
	}); */

});
