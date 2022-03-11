jQuery.noConflict()(function () {
    jQuery.noConflict()('.button-one').click(function () {
        jQuery.noConflict()('.button-one').addClass('button-active');
        jQuery.noConflict()('.button-two').removeClass('button-active');
        jQuery.noConflict()('.button-three').removeClass('button-active');
        jQuery.noConflict()('.button-four').removeClass('button-active');
    });
    jQuery.noConflict()('.button-two').click(function () {
        jQuery.noConflict()('.button-two').addClass('button-active');
        jQuery.noConflict()('.button-one').removeClass('button-active');
        jQuery.noConflict()('.button-three').removeClass('button-active');
        jQuery.noConflict()('.button-four').removeClass('button-active');
    });
    jQuery.noConflict()('.button-three').click(function () {
        jQuery.noConflict()('.button-three').addClass('button-active');
        jQuery.noConflict()('.button-one').removeClass('button-active');
        jQuery.noConflict()('.button-two').removeClass('button-active');
        jQuery.noConflict()('.button-four').removeClass('button-active');
    });
    jQuery.noConflict()('.button-four').click(function () {
        jQuery.noConflict()('.button-four').addClass('button-active');
        jQuery.noConflict()('.button-one').removeClass('button-active');
        jQuery.noConflict()('.button-two').removeClass('button-active');
        jQuery.noConflict()('.button-three').removeClass('button-active');
    });
});