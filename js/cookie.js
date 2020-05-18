const cookie = document.querySelector(".cookie");
const acceptbtn = document.querySelector(".accept-btn")
const declinebtn = document.querySelector(".decline-btn")
const check = localStorage.getItem("cookiebar");


window.addEventListener("DOMContentLoaded", () => {
    if(check == "true") { 
        console.log("true");
        cookie.classList.add("cookie-invis");
    }else{
        console.log("false"); 
    }
}); 

acceptbtn.addEventListener("click", () => {
    cookie.classList.toggle("cookie-invis");
    localStorage.setItem("cookiebar", "true");
});

declinebtn.addEventListener("click", () => {
    cookie.classList.toggle("cookie-invis");
});
