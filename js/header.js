const div = document.querySelector("#b-container");

var prevScrollpos = div.scrollTop;
div.onscroll = function () {
    var currentScrollPos = div.scrollTop;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("myHeader").style.top = "0";
    } else if(prevScrollpos > 209){
        document.getElementById("myHeader").style.top = "-209px";
    } 
    prevScrollpos = currentScrollPos;
}