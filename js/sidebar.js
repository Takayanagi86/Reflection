const mbtn = document.querySelector('.menu-btn');
const body = document.querySelector('#b-container');
const sb = document.querySelector('.sidebar-one');
const sb2 = document.querySelector('.sidebar-two');
const disable = document.querySelector("#disable");
const burger = document.querySelector(".burger-box");


mbtn.addEventListener("click", () => {  
    body.classList.toggle("sb-class");
    sb.classList.toggle("sidebar-vis");
    sb2.classList.toggle("sidebar-vis-two");
    disable.classList.toggle("disable");
    burger.classList.toggle("open");
    const top = document.querySelector(".top");
    const bottom = document.querySelector(".bottom");
    top.style.top = "-14px";
    top.style.left = "-16px";
    bottom.style.top = "-14px";
    bottom.style.left = "-16px";
});

disable.addEventListener("click", () => {
    body.classList.toggle("sb-class");
    sb.classList.toggle("sidebar-vis");
    sb2.classList.toggle("sidebar-vis-two");
    disable.classList.toggle("disable");
    burger.classList.toggle("open");
    const top = document.querySelector(".top");
    const bottom = document.querySelector(".bottom");
    top.style.top = "-20px";
    top.style.left = "";
    bottom.style.top = "0px";
    bottom.style.left = "";
});

