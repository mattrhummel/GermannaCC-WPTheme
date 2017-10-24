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
jQuery( document ).ready(function( $ ) {
 
 $('.bxslider1').bxSlider({
     autoStart: true,
     autodelay: 0,
     infiniteLoop: true,
     slideMargin: 0,
     startSlide: 0,
     randomStart: false,
     nextSelector: '#slider-next',
     prevSelector: '#slider-prev',
     nextText: '<span class="fa fa-angle-right" aria-label="scroll right"></span><span class="show-for-sr">Right</span>',
     prevText: '<span class="fa fa-angle-left" aria-label="scroll left"></span><span class="show-for-sr">Left</span>',
     controls: true,
     pagerType:'full',
     pager: false,
     speed: 1000,
     pause: 16000,
     adaptiveHeight: 'true',
     preloadImages: 'all',
     onSliderLoad: function() {
         $(".slider-container").css("visibility", "visible");
    }
});
  
$('.bxslider3').bxSlider({
    slideMargin: 8,
    minSlides: 3,
    maxSlides: 3,
    nextSelector: '#slider-next3',
    prevSelector: '#slider-prev3',
    nextText: '<span class="fa fa-angle-right" aria-label="scroll right">',
    prevText: '<span class="fa fa-angle-left" aria-label="scroll right">',
    controls: true,
    onSliderLoad: function() {
         $(".highlights-slider-container").css("visibility", "visible");
         }

});

 var removeLinkTitles = 1;

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