document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new Mmenu("#menu", {
            "extensions": [
                "pagedim-black",
                "position-front"
            ],
            "counters": false,
            "navbars": [{
                    "position": "top",
                    "content": [
                        "close"
                    ]
                },
                {
                    "position": "bottom",
                    "content": [
                        "<a class='fa fa-envelope' href='#/'></a>",
                        "<a class='fa fa-twitter' href='#/'></a>",
                        "<a class='fa fa-facebook' href='#/'></a>"
                    ]
                },
            ]

        });

    }

);

jQuery.noConflict()(document).on('ready', function () {
    jQuery.noConflict()(".main-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        nextArrow: '<i class="fa fa-angle-right">',
        prevArrow: '<i class="fa fa-angle-left">'
    })
    jQuery.noConflict()(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});

jQuery.noConflict()(document).on('ready', function () {
    jQuery.noConflict()(".first-regular").slick({
        dots: true,
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: false,
        prevArrow: '<i class="fa fa-angle-left">',
        asNavFor: '.second-regular'

    });

    jQuery.noConflict()(".second-regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false,
        variableWidth: true,
        autoplay: false,
        autoplaySpeed: 2000,
        nextArrow: '<i class="fa fa-angle-right">',
        asNavFor: '.first-regular'
    });

    jQuery.noConflict()(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});

jQuery.noConflict()(document).on('ready', function () {
    jQuery.noConflict()(".product-first-slick").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        swipe: false,
        arrows: false
    });
    jQuery.noConflict()('.product-first-slick').on('click', function () {
        $(this).slick('slickNext');
    });
});

jQuery.noConflict()(document).on('ready', function () {
    jQuery.noConflict()(".reviews-items").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        currentDirection: 0,
        variableWidth: true,
        swipeToSlide: true,
        mobileFirst: true,
        responsive: [{
            breakpoint: 415,
            settings: {
                dots: false
            }
        }],
        autoplay: false,
        autoplaySpeed: 5000,
        nextArrow: '<i class="fa fa-angle-right">',
        prevArrow: '<i class="fa fa-angle-left">'
    });
});

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