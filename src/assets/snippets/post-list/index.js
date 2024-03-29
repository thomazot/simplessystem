import './style.styl';

define(['jquery', 'slick-carousel'], ($) => {

    $('.home .post-list__list').find('.post-list__item--empty').remove();
    $('.home .post-list__list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: '<button class="slick-next" type="button"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="slick-prev" type="button"><i class="fas fa-chevron-left"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false
                }
            }
        ]
    });
});