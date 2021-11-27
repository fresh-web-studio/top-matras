$(function () {
    $('.button-one').click(function () {
        $('.button-one').addClass('button-active');
        $('.button-two').removeClass('button-active');
        $('.button-three').removeClass('button-active');
        $('.button-four').removeClass('button-active');
    });
    $('.button-two').click(function () {
        $('.button-two').addClass('button-active');
        $('.button-one').removeClass('button-active');
        $('.button-three').removeClass('button-active');
        $('.button-four').removeClass('button-active');
    });
    $('.button-three').click(function () {
        $('.button-three').addClass('button-active');
        $('.button-one').removeClass('button-active');
        $('.button-two').removeClass('button-active');
        $('.button-four').removeClass('button-active');
    });
    $('.button-four').click(function () {
        $('.button-four').addClass('button-active');
        $('.button-one').removeClass('button-active');
        $('.button-two').removeClass('button-active');
        $('.button-three').removeClass('button-active');
    });
});