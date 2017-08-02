//Explore Germanna Slider
jQuery(document).ready(function($)
 {
 $('.bxslider1').bxSlider({
	 auto: true,
	 autodelay: 0,
	 infiniteLoop: true,
     mode: 'fade',
	 slideMargin: 0,
	 startSlide: 0,
	 randomStart: true,
	 nextSelector: '#slider-next',
     prevSelector: '#slider-prev',
	 nextText: '<i class="fa fa-chevron-right">',
  	 prevText: '<i class="fa fa-chevron-left">',
	 controls: true,
	 pagerType:'full',
   	 pager:'false',
	 speed: 500,
	 adaptiveHeight: 'true',
	 preloadImages: 'all',
	 onSliderLoad: function() {
		 $(".slider-container").css("visibility", "visible");
	}
});
   $('.bxslider2').bxSlider({
  	maxSlides: 6,
	startSlide: 0,
	randomStart: true,
	auto: true,
	autoControls: false,
	nextSelector: '#slider-next2',
    prevSelector: '#slider-prev2',
	nextText: '<i class="fa fa-chevron-right">',
  	prevText: '<i class="fa fa-chevron-left">',
	controls: true,
	onSliderLoad: function() {
		 $(".explore-slider-container").css("visibility", "visible");
	 }

});
$('.bxslider3').bxSlider({
	slideMargin: 30,
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

	var theWindow        = $(window),
	    $bg              = $("#highlights-background"),
	    aspectRatio      = $bg.width() / $bg.height();

	function resizeBg() {

		if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
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
$(function(){

	$(document).on( 'scroll', function(){

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
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
