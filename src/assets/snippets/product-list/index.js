import './style.styl';

define(['jquery', 'slick-carousel'], ($) => {

    $('.home .product-list__list').find('.product-list__item--empty').remove();
    $('.home .product-list__list').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        nextArrow: '<button class="slick-next" type="button"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="slick-prev" type="button"><i class="fas fa-chevron-left"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }
        ]
    });
});