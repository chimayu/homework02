$(function(){

    $('.js-scroll').on('click', function(){
        $('body, html').animate({scrollTop:0},650);
    });

    $('.js–hovercap').hovercap({
        toggleElement: '.js–hovercap__caption',
        toggleAnimation: 'fade'
    });
});