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
        //$('#emponebutton').removeClass('activated');

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
        //$('#emptwobutton').removeClass('activated');
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


// action when scrolled
$(window).bind('scroll', function () {


    var bottom_of_window = $(window).scrollTop() + $(window).height();


    if (bottom_of_window > $('.founders').position().top) {

        $('.animatedfounders').addClass('activated');

    }

    // if (bottom_of_window > $('.bgimgthree').position().top) {
    //
    //     $('.animatedsec').addClass('activated');
    //
    // }
    //
    // if (bottom_of_window > $('.bgimgfive').position().top) {
    //
    //     $('.animatedthr').addClass('activated');
    //
    // }



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

// var lFollowX = 0,
//     lFollowY = 0,
//     x = 0,
//     y = 0,
//     friction = 1 / 30;
//
// function moveBackground() {
//     x += (lFollowX - x) * friction;
//     y += (lFollowY - y) * friction;
//
//     translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';
//
//     $('.frame').css({
//         '-webit-transform': translate,
//         '-moz-transform': translate,
//         'transform': translate
//     });
//
//     window.requestAnimationFrame(moveBackground);
// }
//
// $(window).on('mousemove click', function(e) {
//
//     var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
//     var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
//     lFollowX = (80 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
//     lFollowY = (40 * lMouseY) / 100;
//
// });
//
// moveBackground();





$(document).ready(function() {
    var newX,
        currentX = 0,
        pageWidth = $(this).width(),
        ball = $('.body'),
        inner = $('.inner'),
        head = $('.head'),
        eye = $('.eye'),
        antenna = $('.antenna'),
        mountains = $('.mountains'),
        sun = $('.sun'),
        speed = 4,
        distance,
        acceleration,
        antennaPos,
        idleInterval,
        started = false;

    $(this).on('mousemove', function(x) {
        if (!started) {
            clearInterval(idleInterval);
            started = true;
        }
        newX = x.pageX;
    });

    $(document).on('touchmove', function(e) {
        if ("ontouchstart" in document.documentElement) {
            e = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        }
        if (!started) {
            clearInterval(idleInterval);
            started = true;
        }
        newX = e.pageX;
    });
    var idleCount = 1;

    function idle() {
        newX = pageWidth/2;

        idleInterval =  setInterval(function(){
            idleCount += speed;
            newX = pageWidth/2 + (Math.cos(idleCount/100)*100);
        },10);
    }

    function movement() {
        if (currentX !== newX) {
            distance = newX - currentX;
            acceleration = Math.abs(distance) / 100;
            antennaPos = 2250 + Math.round(distance / 5) * 75;

            if (antennaPos <= 0) {
                antennaPos = 75;
            } else if (antennaPos >= 4500) {
                antennaPos = 4500;
            }

            if (currentX < newX) {
                currentX += speed * acceleration;
            } else {
                currentX -= speed * acceleration;
            }

            mountains.css('background-position', 300 + -currentX / 50 + 'px 0');
            sun.css('transform', 'translateX('+  -currentX / 100 + 'px)');
            inner.css('transform', 'rotateZ(' + currentX / 2 + 'deg)');
            head.css('transform', 'translateY(-95px) rotateZ(' + distance / 15 + 'deg)');
            ball.css('transform', 'translateX(' + currentX + 'px)');
            eye.css('transform', 'translateX(' + distance / 15 + 'px)');
            antenna.css('background-position', antennaPos + 'px 0');

        } else {
            return;
        }
    }

    setInterval(movement, 10);
    idle();
});


//scroll to sect
$(function() {
    $('a[href*=#]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('#servs')).offset().top}, 500, 'linear');
    });
});
