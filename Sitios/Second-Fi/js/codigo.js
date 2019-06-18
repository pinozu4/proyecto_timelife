//------------------ INTERACTIVIDAD MENU ----------------------------
var LightMenu = document.getElementsByClassName("LightBoxMenu");
var ButtonMenu = document.getElementsByClassName("ButtonMenu");

var RegresarMenu = true;

//
ButtonMenu[0].addEventListener("click",SacarMenu);


function SacarMenu() {

  if (RegresarMenu == true) {

  LightMenu[0].style.right = "0%";
  RegresarMenu = false

  } else {

  LightMenu[0].style.right = "-100%";
  RegresarMenu = true;

}}

//


//   ***** Animacion Cerra Menu ******
var ButtonHistoriaMenu = document.getElementById("BtnHistoriaMenu");
var BtnSeeMoreMenu = document.getElementById("BtnQuienesSomosMenu");
var BtnDownMenu = document.getElementById("BtnPersonajesMenu");
var BtnRa = document.getElementById("BtnRaMenu");

BtnDownMenu.addEventListener("click",EsconderMenu);
BtnSeeMoreMenu.addEventListener("click",EsconderMenu);
BtnHistoriaMenu.addEventListener("click",EsconderMenu);
BtnRa.addEventListener("click",EsconderMenu);

function EsconderMenu() {
  LightMenu[0].style.right = "-100%";
}
//



//--------------- INTERACTIVIDAD LIGHTBOX HISTORIA ------------------------
var LightHistoria = document.getElementsByClassName("LightBoxHistoria");
var CloseHistoria = document.getElementsByClassName("CloseHistoria");
var ButtonHistoria = document.getElementsByClassName("Historia");

//
ButtonHistoria[0].addEventListener("click",SacarHistoria);
ButtonHistoriaMenu.addEventListener("click",SacarHistoria);

function SacarHistoria() {
  LightHistoria[0].style.top = "0%";
}
//

//
CloseHistoria[0].addEventListener("click",EsconderHistoria);

function EsconderHistoria() {
  LightHistoria[0].style.top = "-100%";
}
//


// -------------------- INTERACTIVIDAD VER MAS ------------------------
var LightSeeMore = document.getElementsByClassName("LightBox");
var CloseSeeMore = document.getElementsByClassName("CloseSeeMore");
var ButtonSeeMore = document.getElementById("SeeMore");

//
ButtonSeeMore.addEventListener("click",SacarSeeMore);
BtnSeeMoreMenu.addEventListener("click",SacarSeeMore);

function SacarSeeMore() {
  LightSeeMore[0].style.left = "0%";
}
//

//
CloseSeeMore[0].addEventListener("click",EsconderSeeMore);

function EsconderSeeMore() {
  LightSeeMore[0].style.left = "-100%";
}

// ------------------- INTERACTIVIDAD DEL SLIDER -------------------------
var Slider = document.getElementById("Carrousel");
var RightSlider = document.getElementsByClassName("Derecha");
var LeftSlider = document.getElementsByClassName("Izquierda");
var PosicionSlider = 0;

//
LeftSlider[0].addEventListener("click",MoverIzquierda);
RightSlider[0].addEventListener("click",MoverDerecha);
//

//
function MoverIzquierda() {
  PosicionSlider += 100;
  Mostrar();
}

function MoverDerecha() {
  PosicionSlider -= 100;
  Mostrar();
}
//

//
function Mostrar() {
  if (PosicionSlider == -600) {
    PosicionSlider = 0;
  }
  else if (PosicionSlider == 100) {
    PosicionSlider = 0;
  }

  Slider.style.left = PosicionSlider+"%";
}
//

//----------------------- INTERACTIVIDAD FOOTER ----------------------------

var AboutUs = document.getElementsByClassName("About");
var TalkUs = document.getElementsByClassName("TalkUs");

//
AboutUs[0].addEventListener("click",SacarSeeMore);
//

