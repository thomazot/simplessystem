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
        dots: false,
        focusOnSelect: true
    });    
});