$(document).ready(function() {

    //Controls the continue button on the form tabs
    $('.tabs').on('toggled', function(event, tab) {
        console.log(tab);
    });
    //Makes tab advanced to step 2
    $('.next-tab').click(function() {
        $('.tabs li.active').next().children('a').click();
    });
    //Testimonial Slider Features
    $('.bxslider-testimonials').bxSlider({
        adaptiveHeight: true,
        mode: 'fade',
        minSlides: 1,
        maxSlides: 2,
        slideMargin: 0
    });
});
//Calls Jquery
$(document).foundation();
