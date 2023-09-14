$(document).ready(function(){
    $(".mobile-nav i").click(function(){
        $(".nav").toggleClass("mobile-menu");
    });
});


//Script normal
var list = document.querySelector('.slider .slider-items');
var items = document.querySelectorAll('.items');
var dots = document.querySelectorAll('.slider .dots li');
var prev = document.getElementById('prev');
var next = document.getElementById('next');

var active = 0;
let checkleft;
next.onclick = function () {
    if (active + 1 > items.length - 1) {
        active = 0;
    }
    else {
        active = active + 1;
    }
    reloadSlider();
}
function reloadSlider() {
    checkleft = items[active].offsetLeft;
    if (checkleft - 300 <130) {
        checkleft += 300;
        console.log(checkleft);
        list.style.left = -checkleft + 'px';
    }
    else {
        console.log(checkleft);
        console.log("este");
        list.style.left = -checkleft + 'px';
    }


}

