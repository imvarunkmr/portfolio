jQuery(document).ready(function($){
    if( $('.slider-wrap').length ) {
        $('.slider-wrap').slick({
            arrows: false,
            autoplay: true,
            autoplaysSpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 1,
        });
    }
});