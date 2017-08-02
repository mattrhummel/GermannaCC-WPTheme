jQuery( function ( $ ) {
  // Focus styles for menus when using keyboard navigation

  // Properly update the ARIA states on focus (keyboard) and mouse over events
  $( '[role="menubar"]' ).on( 'focus.aria  mouseenter.aria', '[aria-haspopup="true"]', function ( ev ) {
    $( ev.currentTarget ).attr( 'aria-expanded', true );
  } );

  // Properly update the ARIA states on blur (keyboard) and mouse out events
  $( '[role="menubar"]' ).on( 'blur.aria  mouseleave.aria', '[aria-haspopup="true"]', function ( ev ) {
    $( ev.currentTarget ).attr( 'aria-expanded', false );
  } );
} );
jQuery(document).ready(function($) {
    $('.bxslider1').bxSlider({
        auto: false,
        autoStart: false,
        autodelay: 0,
        infiniteLoop: true,
        mode: 'horizontal',
        easeing: 'ease-in-out',
        slideMargin: 0,
        startSlide: 0,
        randomStart: false,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<i class="fa fa-chevron-left">',
        prevText: '<i class="fa fa-chevron-right">',
        controls: true,
        pagerType: 'full',
        pager: false,
        speed: 1000,
        pause: 90000,
        adaptiveHeight: 'true',
        preloadImages: 'all',
        onSliderLoad: function() {
            $(".slider-container").css("visibility", "visible");
        }
    });
    $('.bxslider2').bxSlider({
        maxSlides: 6,
        startSlide: 0,
        randomStart: false,
        auto: false,
        autoControls: false,
        nextSelector: '#slider-next2',
        prevSelector: '#slider-prev2',
        nextText: '<i class="fa fa-chevron-right">',
        prevText: '<i class="fa fa-chevron-left">',
        controls: true,
        speed: 1000,
        onSliderLoad: function() {
            $(".explore-slider-container").css("visibility", "visible");
        }
    });
    $('.bxslider3').bxSlider({
        slideMargin: 8,
        minSlides: 2,
        maxSlides: 3,
        nextSelector: '#slider-next3',
        prevSelector: '#slider-prev3',
        nextText: '<i class="fa fa-chevron-right">',
        prevText: '<i class="fa fa-chevron-left">',
        controls: true,
        onSliderLoad: function() {
            $(".highlights-slider-container").css("visibility", "visible");
        }
    });
    $(window).load(function() {
        var theWindow = $(window),
            $bg = $("#highlights-background"),
            aspectRatio = $bg.width() / $bg.height();

        function resizeBg() {
            if ((theWindow.width() / theWindow.height()) < aspectRatio) {
                $bg
                    .removeClass()
                    .addClass('bgheight');
            } else {
                $bg
                    .removeClass()
                    .addClass('bgwidth');
            }
        }
        theWindow.resize(resizeBg).trigger("resize");
    });
});
$(function() {
    $(document).on('scroll', function() {
        if ($(window).scrollTop() > 600) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
    $('.scroll-top-wrapper').on('click', scrollToTop);
});

function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
}
//event listener: DOM ready
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            if (oldonload) {
                oldonload();
            }
            func();
        }
    }
}
//call plugin function after DOM ready
addLoadEvent(function(){
    outdatedBrowser({
        bgColor: '#A20B35',
        color: '#ffffff',
        lowerThan: 'borderImage',
        languagePath: ''
    })
});