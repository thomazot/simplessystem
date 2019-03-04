import './style.styl';

define(['jquery', 'slick-carousel'], ($) => {
    $('[data-carousel=full-banner]').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        nextArrow: '<button class="slick-next" type="button"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="slick-prev" type="button"><i class="fas fa-chevron-left"></i></button>'
    });

    
}); 

console.log('teste banner');