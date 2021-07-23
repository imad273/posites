var openMenu = document.getElementById("humb");
var closeMenu = document.getElementById("close");
var nav = document.getElementById("nav");

openMenu.addEventListener("click", ()=>{
    nav.style.width = "100%";
})

closeMenu.addEventListener("click", ()=>{
    nav.style.width = "0%";
})