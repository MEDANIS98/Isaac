(function ($) {
    $('.featured-slider').slick({
        rtl: true,
        autoplay: true,
        autoplaySpeed: 5000,
    });

    $('.books-slider').slick({
        rtl: true,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    window.runIntro('home');

})(jQuery);
