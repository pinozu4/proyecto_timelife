$(document).ready(function(){

    $(window).on('load', function(){
        $('.wait').css('display','none');
        $('.logowait').css('animationPlayState','paused');
    });

    $('.lightbox').hide();
    
    $('.boton1').click(function(){
        $('.lightbox').fadeIn(500);
        $('.lightbox').css('display','flex');
    });
    
    $('.cerrar1').click(function(){
        $('.lightbox').fadeOut(500);
    });

       function changeIzq(mostrar){
            $('.SeccionesDesplazadas li').eq(mostrar).css('left', '0%');
            $('.scroll').css('overflowY', 'hidden');
            $('.circlelight').css('left', '-7%');
        }

        function changeDer(esconder){
            $('.SeccionesDesplazadas li').eq(esconder).css('left', '100%');
            $('.circlelight').css('left', '95%');
            $('.scroll').css('overflowY', 'scroll');
        }

        function clickenboton(btn){
        $('.textlight i').click(function(){
            changeIzq(btn);
            });
        $('.textlight2 i').click(function(){
            changeDer(btn);
            });
        }

        clickenboton(0);

        function displayN(none){
            $('.SeccionesDesplazadas li').eq(none).css('display', 'none');
        }

        function displayB(block){
            $('.SeccionesDesplazadas li').eq(block).css('display', 'block');
        }


    var entrar2 = true;

    $('.us').click(function(){

        $('.flecha').toggle();

        if(entrar2 == true){
              $('.us2').css('left','0px');
              $('.us').css('left','150px');
              $('.us').css('animationPlayState','paused');
              entrar2 = false;
        }else{
            $('.us2').css('left','-400px');
            $('.us').css('left','-50px');
            $('.us').css('animationPlayState','running');
            entrar2 = true;
        }
    });

    $('.open1').click(function(){
        $('.open1box').slideToggle(500);
    });
    $('.open2').click(function(){
        $('.open2box').slideToggle(500);
    });
    $('.open1_1').click(function(){
        $('.open1box_1').slideToggle(500);
    });
    $('.open2_1').click(function(){
        $('.open2box_1').slideToggle(500);
    });
    $('.open1_2').click(function(){
        $('.open1box_2').slideToggle(500);
    });
    $('.open2_2').click(function(){
        $('.open2box_2').slideToggle(500);
    });
    $('.open1_3').click(function(){
        $('.open1box_3').slideToggle(500);
    });
    $('.open2_3').click(function(){
        $('.open2box_3').slideToggle(500);
    });
    $('.open1_4').click(function(){
        $('.open1box_4').slideToggle(500);
    });
    $('.open2_4').click(function(){
        $('.open2box_4').slideToggle(500);
    });
    $('.open1_5').click(function(){
        $('.open1box_5').slideToggle(500);
    });
    $('.open2_5').click(function(){
        $('.open2box_5').slideToggle(500);
    });
    $('.open1_6').click(function(){
        $('.open1box_6').slideToggle(500);
    });
    $('.open2_6').click(function(){
        $('.open2box_6').slideToggle(500);
    });

    $('.nosotroslight').click(function(){
        $('.nostig').css('transform','translateY(0vh)');
        $('.nosotroslight').css('transform','translateY(-200px)');
    });

    $('.nostig').click(function(){
        $('.nostig').css('transform','translateY(100vh)'); 
        $('.nosotroslight').css('transform','translateY(0px)');   
    });

    $(document).scroll(capturarScroll);
    var posY = 0;

    function capturarScroll(){

        posY =  $(document).scrollTop();
        console.log(posY);
        cambiarTamMenu();
    }

    function cambiarTodos(){
        for (var i = 0; i < 7; i++) {
            $(".años h3").eq(i).css({
                fontSize:"18px",
                fontWeight:"400",
                paddingLeft:"70px"
            })
        }
        
    }

    function cambiarIndice(indice){
        $(".años h3").eq(indice).css({
             fontSize:"40px",
             fontWeight:"bold",
             paddingLeft:"25px",
        })
    }

    function cambiarTexto(title,text,color){
            $('.quetitle').html(title);
            $('.quetext').html(text);
            $('.cuadrolight').css('backgroundColor',color);
        }  

    function cambiarTamMenu(){
        if(posY > 0 ){
            cambiarTodos();
            cambiarIndice(0);
            clickenboton(0);
            displayN(1);
            cambiarTexto('¿Qué es el nado sincronizado?',
            'Es un deporte que se practica en una piscina combinando natación, gimnasia y danza. Un nadador o equipo de nadadores realiza una coreografía acompañada de música y unos jueces puntúan una serie de parámetros: dificultad y originalidad de los movimientos, sincronía entre movimientos y música, en definitiva la calidad técnica y artística. Se podría afirmar que esta disciplina es un baile con movimientos gimnásticos realizados en el medio acuático. Se compite en categorías distintas y en modalidad individual, de dúo o por equipos.',
            '#0090cc');
        }

        if(posY > 400){
            cambiarTodos();
            cambiarIndice(1);
            clickenboton(1);
            displayB(1);
            displayN(2);
            cambiarTexto('Gran Pionera de este deporte','Con tan sólo seis años, a la actriz se le diagnosticó un debilitamiento en las piernas, por lo que le tuvieron que poner unos tirantes de acero para que las piernas se fortaleciesen. Con 15 años las piernas de la actriz eran completamente normales, consiguiendo con sus entrenamientos de natación varias medallas en diferentes campeonatos.<br>En el año 1902, Annette se inscribe en las competiciones de Melbourne, consiguiendo varios récords en natación.<br>Por esta época a Annette se le atribuye el invento de la natación sincronizada, de la cual realizó varias demostraciones en un estanque de la ciudad de Nueva York.',
            '#0090cc');
        }


        if(posY > 1200){
            cambiarTodos();
            cambiarIndice(2);
            clickenboton(2);
            displayB(2);
            displayN(3);
            cambiarTexto('Datos de Interés','Es necesario desarrollar destrezas y habilidades relacionadas con el ballet, la expresión corporal y la gimnasia. En este sentido, el nado sincronizado es una actividad multidisciplinar.<br>Sus practicantes necesitan una evidente sensibilidad artística, precisión en sus movimientos y sentido del ritmo. Así mismo, es imprescindible el control de la apnea para moverse bajo el agua.',
            '#0090cc');
            
        }

        if(posY > 1800){
            cambiarTodos();
            cambiarIndice(3);
            clickenboton(3);
            displayB(3);
            displayN(4);
            cambiarTexto('Una Sirena Reconocida','Para Katherine, la natación sincronizada era un deporte mixto, ya que podría serlo si no hubiera sido transferida al extranjero (1943-1962) con la Cruz Roja como directora recreativa. Uno de sus primeros discípulos fue Hal Henning. Organizó una producción para las Fuerzas Armadas en las espectaculares fuentes, piscinas y jardines del palacio construido por los Reyes de las Dos Sicilias y utilizado como cuartel general aliado en Caserta, Italia. Cuando finalmente regresó a casa en 1962 después de observar la natación sincronizada en toda Europa, su bebé era un deporte en toda regla y desde entonces ha sido un deporte acuático y una forma de arte dominantes en los Estados Unidos',
            '#0090cc');
        }

        if(posY > 2400){
            cambiarTodos();
            cambiarIndice(4);
            clickenboton(4);
            displayB(4);
            displayN(5);
            cambiarTexto('La fama de este deporte','La habilidad de Esther en la natación le llevó a protagonizar una serie de títulos en los que el agua era el medio ideal para mostrar su talento deportivo, ofreciendo al público un lúdico y húmedo entretenimiento en la etapa bélica y post-bélica. Se convirtió en “La Sirena de América”.<br>Esther era una chica guapa y un portento en los deportes acuáticos. Campeona y “recordwoman” estadounidense en varias pruebas de natación, no pudo cumplir su sueño de asistir a los Juegos Olímpicos de 1940, ya que al estallar la Segunda Guerra Mundial un año antes el certamen tuvo que cancelarse.',
            '#0090cc');
        }

        if(posY > 3000){
            cambiarTodos();
            cambiarIndice(5);
            clickenboton(5);
            displayB(5);
            displayN(6);
            cambiarTexto('Datos importantes','Las reglas del nado sincronizado hacen que sea uno de los deportes más exigentes que existe debido a sus rigurosos entrenamientos y la exigencia de las excelentes condiciones físicas que debe tener cada participante. El trabajo de los nadadores consiste en formar una rutina de movimientos al ritmo de la música. El deporte cuenta con las modalidades de solo, dúo o grupo, para cada modalidad existe un grupo de reglas, pero estas no varían mucho en cada una.',
            '#0090cc');
        }

        if(posY > 3600){
            cambiarTodos();
            cambiarIndice(6);
            clickenboton(6);
            displayB(6);
            displayN(7);
            cambiarTexto('Ganadoras','CARACAS, Venezuela - Tracie Ruiz y Candy Costie, socios durante ocho años en natación sincronizada, obtuvieron la medalla de oro de los Estados Unidos el viernes en el evento de dúo en los Juegos Panamericanos. La pareja de Bothell, Washington, compiló 188.550 puntos para vencer a Penny y Vicky Vilagos de Canadá y Pilar Ramírez y Claudia Novelo de México. Canadá recogió la medalla de plata con 187.233 y México se llevó el bronce con 165.412.',
            '#0090cc');
        }

        if(posY > 4200){
            cambiarTodos();
            $('.circlelight,.años').fadeOut();
        }else{
            $('.circlelight,.años').fadeIn();
        }
    }

    $('.logo').click(function(){
        $('.cabecera').css('animationPlayState', 'running');
        $('.scroll').css('overflowY', 'scroll');
        $('.nosotroslight').css('animationPlayState','running');
    });

    /*$('.años ul a').click(function(e){
    //Evita que la función se ejecute ante de disparar el evento
    e.preventDefault();
    
    //Capturar el atributo del anchore
    var atributo = $(this).attr('href');
    
    //.stop() = Detiene la ejecución de las animaciones
    $('body, html').stop().animate({
        scrollTop: $(atributo).offset().top
    }, 1500, 'easeInOutQuart');
    });*/

    $('.años li a, .nosS, .subirS').click(function(e){
    //Evita que la función se ejecute ante de disparar el evento
    e.preventDefault();
    
    //Capturar el atributo del anchore
    var atributo = $(this).attr('href');
    
    //.stop() = Detiene la ejecución de las animaciones
    $('body, html').stop().animate({
        scrollTop: $(atributo).offset().top
    }, 1000, 'easeOutQuart');
    
    // $('.flecha').click(function(){
    //     $('body, html').animate({
    //     scrollTop: '0px'
    // }, 1500, 'easeInOutQuart');
    //     });
    });

    $('.annS').carousel({
      interval: 1000000000
    })

});