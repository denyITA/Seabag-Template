$(document).on('scroll', function (e) {
    $('.fakenav').css('opacity', ($(document).scrollTop() / 500));
});

if ($("#banda1").length > 0 ) {
    $(function() {
        $('#banda1 .panel-body').on('click', function(){
            $("#banda1 a").click().focus();
        });
        $('#banda2 .panel-body').on('click', function(){
            $("#banda2 a").click().focus();
        });
        $('#banda3 .panel-body').on('click', function(){
            $("#banda3 a").click().focus();
        });
        $('#banda3 .panel-body').on('click', function(){
            $("#banda3 a").click().focus();
        });
    });
    function autoResize() {
        var finestra = $(window).height();
        $(".quadro-testata").css("max-height", finestra);
    };

    autoResize();
    $(window).resize( function() {
        autoResize();
    });
}

function collassaeVatinni() {
    $('#collassa a').on('click', function(){
        $('#collassa').collapse('hide');
    });
}

$(function() {
    collassaeVatinni();
});

$(window).on('resize', function(){
      var win = $(this); //this = window
      if (win.height() <= 767) { collassaeVatinni(); }
      if (win.width() >= 767) { eventFired = 1; }
});

/* SmoothScroll ==> */
$(".navbar-fixed-top ul li a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top - ($(".fakenav").height())
     }, 800, function(){

       // when done, add hash to url
       // (default click behaviour)
       //window.location.hash = hash; //evitiamo di mostrare il #
     });

});

$(document).ready(function() {
    $("#collassa .menu-item > a[href^='#']").addClass("SmoothScroll");
});

$(document).ready(function() {
  $('.shop').click(function() {
    $('#shopChoose').modal('show');
  });
});

 /* <== SmoothScroll */
if ( $(".sad").length > 0 ) {
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function(){
        if (isScrolledIntoView('.sad') === true) {
            $('.sad').addClass('tp');
        }
    });
}

$("document").ready(function() {
	if($("div[id*='wpcf7-f173']").length > 0) {
        $('.your-name input').attr("placeholder","Mario Rossi");
        $('.text-793 input').attr("placeholder","mario.rossi@randomail.com");
        $('.your-email input').attr("placeholder","Info");
        $('.your-subject input').attr("placeholder","La mia azienda");
        $('.your-message textarea').attr("placeholder","Scrivi...");
    }
    if($("div[id*='wpcf7-f270']").length > 0) {
        $('.your-name input').attr("placeholder","John Doe");
        $('.text-793 input').attr("placeholder","johndoe@randomail.com");
        $('.your-email input').attr("placeholder","Info");
        $('.your-subject input').attr("placeholder","My company");
        $('.your-message textarea').attr("placeholder","Leave a message...");
    }
        $('.wpcf7-form br').remove();
});

$(document).ready(function() {
var twitter = $("footer a[href*=twitter]"),
    facebook = $("footer a[href*=facebook]"),
    rss = $("footer a[href*=rss]"),
    youtube = $("footer a[href*=youtube]"),
    instagram = $("footer a[href*=instagram]"),
    gplus = $("footer a[href*=google]"),
    pinterest = $("footer a[href*=pinterest]");

    $(twitter).html("<i class='fa fa-twitter fa-lg'></i>");
    $(facebook).html("<i class='fa fa-facebook fa-lg'></i>");
    $(rss).html("<i class='fa fa-rss fa-lg'></i>");
    $(youtube).html("<i class='fa fa-youtube fa-lg'></i>");
    $(instagram).html("<i class='fa fa-instagram fa-lg'></i>");
    $(gplus).html("<i class='fa fa-google-plus fa-lg'></i>");
    $(pinterest).html('<i class="fa fa-pinterest-p fa-lg"></i>');
});

//COPERTINE

//LIBRERIA
  $('.showAwards').click( function(){
      $("#copertine").slideDown();
  });
//PREMI
  $('.openPrize').click( function(){
      var pHoT = $("#tabPrizes").height();
      $("#trofei").height(pHoT);
  });



$('#formUs').click(function(){
    $("#pressExtended").show();
    $("body").css("overflow","hidden");
    $("#usa").show();
    $("#notUsa").hide();
});
$(".formNotUs").click(function(){
    $("#pressExtended").show();
    $("body").css("overflow","hidden");
    $("#usa").hide();
    $("#notUsa").show();
});

$(".cerchioX").click(function(){
    $("#pressExtended").hide();
    $("body").css("overflow","auto");
});


// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 10000,
  });
});


$(document).ready(function () {

// hide #back-top first
$("#back-top").hide();

// fade in #back-top
$(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
        $('html, body').animate({
             scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    });

});

$("#giveaway").click(function() {
    $(this).toggleClass("first sec");
});

$(function() {
    var url = document.location.hostname;

    if(url == "www.seabag.it" || url == "seabag.it" ){
        $("#menu-item-382 a").attr("href","http://"+url);
    }
    if(document.location.hostname == "www.seabag.us" || document.location.hostname == "seabag.us" ){
        $("#menu-item-382 a").attr("href","http://"+url);
    }
});

function videoCentrato() {
    if ($("#YT").length === 1) {
        //$('#animatedHeader').css({'left': parseInt(window.innerWidth/2) })
        //$('#YT').css({'right': parseInt(window.innerWidth/2) })
    }
}

$(window).resize(function() {
    videoCentrato()
});

$(function(){
    "use strict";
    var slidePlayer='<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls"><div class="slides"><\/div><h3 class="title"> <\/h3><a class="prev">‹<\/a><a class="next">›<\/a><a class="close">×<\/a><a class="play-pause"><\/a><ol class="indicator"><\/ol><\/div>';
    $("body").append(slidePlayer);
});

$('#sliderTestata').carousel({
    interval: 4000,
    pause: "hover",
    keyboard: true
});

$(function() {
    var cssToInit = [
        wpTheme + "/css/diconodinoi.min.css",
        wpTheme + "/css/blueimp-gallery.min.css"
    ];
    var r = 0;
    for (i=0; i < cssToInit.length; i++) {

        r = document.createElement("link");
        r.rel = "stylesheet";
        r.type = "text/css";
        r.href = cssToInit[i];
        $("head").append(r);

    }
});

function macFix() {
    var h = $(".riga1").height();
    $("#PlayVideos").height(h);
}

macFix();

$(window).resize(function() {
    macFix();
});
