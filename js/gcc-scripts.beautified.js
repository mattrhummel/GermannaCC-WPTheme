function scrollToTop() {
    verticalOffset = "undefined" != typeof verticalOffset ? verticalOffset : 0, element = $("body"), 
    offset = element.offset(), offsetTop = offset.top, $("html, body").animate({
        scrollTop: offsetTop
    }, 500, "linear");
}

jQuery(document).ready(function(e) {
    e(".bxslider1").bxSlider({
        auto: !0,
        autoStart: !0,
        autodelay: 0,
        infiniteLoop: !0,
        mode: "fade",
        slideMargin: 0,
        startSlide: 0,
        randomStart: !1,
        nextSelector: "#slider-next",
        prevSelector: "#slider-prev",
        nextText: '<i class="fa fa-chevron-right">',
        prevText: '<i class="fa fa-chevron-left">',
        controls: !0,
        pagerType: "full",
        pager: !1,
        speed: 1e3,
        pause: 6e3,
        adaptiveHeight: "true",
        preloadImages: "all",
        onSliderLoad: function() {
            e(".slider-container").css("visibility", "visible");
        }
    }), e(".bxslider2").bxSlider({
        maxSlides: 6,
        startSlide: 0,
        randomStart: !1,
        auto: !1,
        autoControls: !1,
        nextSelector: "#slider-next2",
        prevSelector: "#slider-prev2",
        nextText: '<i class="fa fa-chevron-right">',
        prevText: '<i class="fa fa-chevron-left">',
        controls: !0,
        speed: 1e3,
        onSliderLoad: function() {
            e(".explore-slider-container").css("visibility", "visible");
        }
    }), e(".bxslider3").bxSlider({
        slideMargin: 30,
        minSlides: 2,
        maxSlides: 3,
        nextSelector: "#slider-next3",
        prevSelector: "#slider-prev3",
        nextText: '<i class="fa fa-chevron-right">',
        prevText: '<i class="fa fa-chevron-left">',
        controls: !0,
        onSliderLoad: function() {
            e(".highlights-slider-container").css("visibility", "visible");
        }
    }), e(window).load(function() {
        function t() {
            i.width() / i.height() < r ? o.removeClass().addClass("bgheight") : o.removeClass().addClass("bgwidth");
        }
        var i = e(window), o = e("#highlights-background"), r = o.width() / o.height();
        i.resize(t).trigger("resize");
    });
}), $(function() {
    $(document).on("scroll", function() {
        $(window).scrollTop() > 600 ? $(".scroll-top-wrapper").addClass("show") : $(".scroll-top-wrapper").removeClass("show");
    }), $(".scroll-top-wrapper").on("click", scrollToTop);
});