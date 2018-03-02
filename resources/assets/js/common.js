$(document).ready(function () {
    $('.animated').addClass('activated');

    $( "#whatwedobuttonlarge" ).click(function() {
        $('#whatwedo').addClass('activated');

    });
    $( "#whatwedobuttonsmall" ).click(function() {
        $('#whatwedo').addClass('activated');

    });

    $( "#whatwedo" ).click(function() {
        $('#whatwedo').removeClass('activated');
    });

    $( "#emponebutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empone').addClass('activated');
        $('#emponebutton').addClass('activated');


    });

    $( "#empone" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empone').removeClass('activated');
        $('#emponebutton').removeClass('activated');

    });

    $( "#emptwobutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#emptwo').addClass('activated');
        $('#emptwobutton').addClass('activated');

    });

    $( "#emptwo" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#emptwo').removeClass('activated');
        $('#emptwobutton').removeClass('activated');
    });

    $( "#empthreebutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empthree').addClass('activated');
        $('#empthreebutton').addClass('activated');

    });

    $( "#empthree" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empthree').removeClass('activated');
        $('#empthreebutton').removeClass('activated');
    });

    $( "#contactformbutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#contactform').addClass('activated');
        $('#contactformbutton').addClass('activated');

    });

    $( "#contact-close" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#contactform').removeClass('activated');
        $('#contactformbutton').removeClass('activated');
    });
});

//action when scrolled
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 30) {
        $('.keep-menu').addClass('fixed');
        $('.keep-menu-shadow').addClass('box-shadow');
        $('.keep-menu-shadow').addClass('colored-back');



    } else {


        $('.keep-menu').removeClass('fixed');
        $('.keep-menu-shadow').removeClass('box-shadow');
        $('.keep-menu-shadow').removeClass('colored-back');

    }
});


$(function(){

    // document.getElementById("demo").innerHTML = "Read Less";
    var param = document.location.pathname;
    if(window.location.href.indexOf("#") > -1){


    }
    $('html, body').animate({
        scrollTop: $(param.substr(1)).offset().top - 490
    }, 4000);
    return false;
});


$(document).ready(function() {
    $('header .menu__toggle').on('click', function() {
        $('.mobile__menu').toggleClass('show__menu');
        $('.mobile__menu.show__menu').fadeIn(400);

    });
    $('.mobile__menu .close').on('click', function() {
        $('.mobile__menu').removeClass('show__menu');
    });


    $('.mobile__nav--container ul li').on('click', function() {
        $('.mobile__menu').removeClass('show__menu');
        var param = document.location.pathname;
        if(window.location.href.indexOf("#") > -1){


        }

    });


});

var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;

    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

    $('.frame').css({
        '-webit-transform': translate,
        '-moz-transform': translate,
        'transform': translate
    });

    window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
    lFollowX = (80 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
    lFollowY = (40 * lMouseY) / 100;

});

moveBackground();



// $(document).ready(function() {
//     var movementStrength = 10;
//     var height = movementStrength / $(window).height();
//     var width = movementStrength / $(window).width();
//     $(".parallax").mousemove(function(e){
//         var pageX = e.pageX - ($(window).width() / 2);
//         var pageY = e.pageY - ($(window).height() / 2);
//         var newvalueX = width * pageX * -1 - 10;
//         var newvalueY = height * pageY * -1 - 20;
//         $('.parallax').css("background-position", newvalueX+"px     "+newvalueY+"px");
//     });
// });
//
//


