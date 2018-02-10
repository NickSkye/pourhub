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

    $( "#contactform" ).click(function() {
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
    }, 1000);
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

});




