import '../../scss/modules/top-navbar.scss';

$(document).ready(function(){
    console.log("menu navbar");
    top_navbar_sticky();
    $(window).scroll(function () {
        top_navbar_sticky();
    });
});



function top_navbar_sticky(){
    let scrolltop = $(window).scrollTop(),
        navbar = $('.top-navbar-container');
    if (scrolltop > 300){
        console.log("true " + scrolltop);
        navbar.addClass('scrolled');
    } else {
        console.log("false " + scrolltop);
        navbar.removeClass('scrolled');
    }
}