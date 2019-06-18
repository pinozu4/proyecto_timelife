$(document).ready(function(){
		$(document).scroll(function(){
		var Barra = $(window).scrollTop();
		var seccion1 = $('.contenedor2').offset().top;
		var seccion2 = $('.contenedor3').offset().top;
		var seccion3 = $('.contenedor4').offset().top;
		var seccion4 = $('.contenedor5').offset().top;
		var seccion5 = $('.contenedor6').offset().top;
		var seccion6 = $('.contenedor7').offset().top;
		var seccion7 = $('.contenedor8').offset().top;
		var top1 = 20;

        var posicionX = (Barra * 0.2);
        var posicion = (Barra * -0.3);
        var posicion2 = (Barra * -0.1);
        var posicion3 = (Barra * 0.5);
        var posicion4 = (Barra * 0.3);
        var posicion5 = (Barra * 0.02)+150;
        var posicion6 = (Barra * 0.05)+100;
        var imgp2 = (Barra * 0.3);
        var imgp3 = (Barra * -0.2);

         $('.años').css({'top': posicion5 + 'px'});
        $('.circlelight').css({'top': posicion6 + 'px'});
        $('.contenedor2,.contenedor3,.contenedor4,.contenedor5,.contenedor6,.contenedor7,.contenedor8,.contenedor9').css({
            'background-position': '0' - posicionX + 'px 0px'
        });

        // $('.enter1').css({'top': posicion + seccion1 + top1*8+'px'});
        // $('.enter1_1').css({'top': posicion + seccion2 -top1*13+'px'});
        // $('.enter1_2').css({'top': posicion + seccion3 -top1*36+'px'});
        // $('.enter1_3').css({'top': posicion + seccion4 -top1*59+'px'});
        // $('.enter1_4').css({'top': posicion + seccion5 -top1*80+'px'});
        // $('.enter1_5').css({'top': posicion + seccion6 -top1*103+'px'});
        // $('.enter1_6').css({'top': posicion + seccion7 -top1*125+'px'});
        // $('.enter3').css({'top': posicion2 + seccion1+top1*4+'px'});
        // $('.enter3_1').css({'top': posicion2 + seccion2-top1*26+'px'});
        // $('.enter3_2').css({'top': posicion2 + seccion3-top1*56+'px'});
        // $('.enter3_3').css({'top': posicion2 + seccion4-top1*86+'px'});
        // $('.enter3_4').css({'top': posicion2 + seccion5-top1*113+'px'});
        // $('.enter3_5').css({'top': posicion2 + seccion6-top1*142+'px'});
        // $('.enter3_6').css({'top': posicion2 + seccion7-top1*171+'px'});
        // $('.open1').css({'top': posicion3 +seccion1-top1*9+ 'px'});
        // $('.open1_1').css({'top': posicion3 + seccion2-top1*56+'px'});
        // $('.open1_2').css({'top': posicion3 + seccion3-top1*105+'px'});
        // $('.open1_3').css({'top': posicion3 + seccion4-top1*154+'px'});
        // $('.open1_4').css({'top': posicion3 + seccion5-top1*204+'px'});
        // $('.open1_5').css({'top': posicion3 + seccion6-top1*253+'px'});
        // $('.open1_6').css({'top': posicion3 + seccion7-top1*302+'px'});
        // $('.open2').css({'top': posicion4 + seccion1-top1*17+'px'});
        // $('.open2_1').css({'top': posicion4 + seccion2-top1*58+'px'});
        // $('.open2_2').css({'top': posicion4 + seccion3-top1*100+'px'});
        // $('.open2_3').css({'top': posicion4 + seccion4-top1*142+'px'});
        // $('.open2_4').css({'top': posicion4 + seccion5-top1*185+'px'});
        // $('.open2_5').css({'top': posicion4 + seccion6-top1*228+'px'});
        // $('.open2_6').css({'top': posicion4 + seccion7-top1*271+'px'});
        // $('.Pflotan').eq(0).css({'top': imgp2 + seccion1 + top1*9+'px'});
        // $('.Pflotan').eq(1).css({'top': imgp2*-0.6 + seccion2 + top1*17+'px'});
        // $('.Pflotan').eq(2).css({'top': imgp2*-0.6 + seccion3 + top1*22+'px'});
        // $('.Pflotan').eq(3).css({'top': imgp2*-0.6 + seccion4 + top1*29+'px'});
        // $('.Pflotan').eq(4).css({'top': imgp2*-0.6 + seccion5 + top1*35+'px'});
        // $('.Pflotan').eq(5).css({'top': imgp2*-0.6 + seccion6 + top1*42+'px'});
        // $('.Pflotan').eq(6).css({'top': imgp2*-0.6 + seccion7 + top1*47+'px'});
        // $('.flotan2').eq(0).css({'top': imgp3*2 + seccion1 + top1*9+'px'});
        // $('.flotan2').eq(1).css({'top': imgp3*2 + seccion2 + top1*23+'px'});
        // $('.flotan2').eq(2).css({'top': imgp3*2 + seccion3 + top1*38+'px'});
        // $('.flotan2').eq(3).css({'top': imgp3*2 + seccion4 + top1*51+'px'});
        // $('.flotan2').eq(4).css({'top': imgp3*2 + seccion5 + top1*64+'px'});
        // $('.flotan2').eq(5).css({'top': imgp3*2 + seccion6 + top1*76+'px'});
        // $('.flotan2').eq(6).css({'top': imgp3*2 + seccion7 + top1*90+'px'});


        });
});