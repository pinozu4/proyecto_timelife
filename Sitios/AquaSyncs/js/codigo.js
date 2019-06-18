var header = document.getElementById("cabecera");
var img1 = document.getElementsByClassName("logo")[0];
var scroll1 = document.getElementsByClassName("scroll")[0];
var scrollDown = document.getElementsByClassName("contenedor_general")[0];
var adalia = document.getElementsByClassName("cont1")[0];
var reglas = document.getElementsByClassName("cont1_5")[0];
var noslight = document.getElementsByClassName("nosotroslight")[0];

img1.addEventListener("mouseover", moverse1);

function moverse1(){
    
    img1.style.boxShadow = "0px 0px 20px 10px #006aa8";
    img1.style.transition = "0.3s ease-out";
}

img1.addEventListener("mouseout", moverse2);

function moverse2(){
    
    img1.style.boxShadow = "0px 0px 0px 0px #006aa8";
    img1.style.transition = "0.3s ease-out";
}

noslight.addEventListener("mouseover", inwho);
function inwho(){
    noslight.style.animationPlayState = 'paused';
    noslight.style.top = "15px";
    noslight.style.transition = "0.4s ease-out";
}

noslight.addEventListener("mouseout", inwho2);
function inwho2(){
    noslight.style.top = "5px";
    noslight.style.transition = "0.4s ease-out";
    noslight.style.animationPlayState = 'running';
}