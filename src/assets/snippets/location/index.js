import './style.styl';

define(['jquery'], ($) => {
    $('.location').click(function(){
        $(this).addClass('on');
    });
});