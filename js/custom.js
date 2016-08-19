jQuery(document).ready(function($){
    if( $('.slider-wrap').length ) {
        $('.slider-wrap').slick({
            arrows: false,
            autoplay: true,
            autoplaysSpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                // dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 340,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
    }
});