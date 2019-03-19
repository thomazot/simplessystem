import './style.styl';

define(['jquery', 'slick-carousel'], ($) => {
    $('.pages__images').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.pages__thumbs'
    });

    $('.pages__thumbs').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.pages__images',
        nextArrow: '<button class="slick-next" type="button"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="slick-prev" type="button"><i class="fas fa-chevron-left"></i></button>',
        dots: false,
        focusOnSelect: true
    });    
});