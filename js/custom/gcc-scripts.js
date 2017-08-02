
//Explore Germanna Slider

jQuery(document).ready(function($)
                  
{
    
 $('.bxslider1').bxSlider({
	hideControlOnEnd: true, 
	auto: true, 
     mode: 'fade',
	 adaptiveHeight: 'true',
	 preloadImages: 'all',
	 onSliderLoad: function() {
		 $(".slider-container").css("visibility", "visible");
		 
	 }
});
   $('.bxslider2').bxSlider({
	slideMargin: 10,
  	maxSlides: 3,
	onSliderLoad: function() {
		 $(".explore-slider-container").css("visibility", "visible");
		 
		 
	 }
      
});

$('.bxslider3').bxSlider({
	slideMargin: 10,
	minSlides: 3,
  	maxSlides: 3,
	onSliderLoad: function() {
		 $(".highlights-slider-container").css("visibility", "visible");
		 
	 }
      
});
 
});
