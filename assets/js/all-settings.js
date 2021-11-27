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
                        "close",
                        "<a href=''><img src='wp-content/themes/top-matras-shop/assets/images/Vector.svg'></a>"
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

$(document).on('ready', function () {
    $(".main-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        nextArrow: '<i class="fa fa-angle-right">',
        prevArrow: '<i class="fa fa-angle-left">'
    })
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});

$(document).on('ready', function () {
    $(".first-regular").slick({
        dots: true,
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: false,
        prevArrow: '<i class="fa fa-angle-left">',
        asNavFor: '.second-regular'

    });

    $(".second-regular").slick({
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

    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});

$(document).on('ready', function () {
    $(".slider-сarousel").slick({
        dots: false,
        infinite: false,
        slidesToShow: 1.5,
        slidesToScroll: 1,
        swipeToSlide: true,
        autoplay: false,
        variableWidth: true,
        mobileFirst:true,
        autoplay: false,
        autoplaySpeed: 5000,
        nextArrow: '<i class="fa fa-angle-right">',
        prevArrow: '<i class="fa fa-angle-left">',
    })
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});

$(document).on('ready', function () {
    $(".product-first-slick").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        swipe: false,
        arrows: false
    });
    $('.product-first-slick').on('click', function () {
        $(this).slick('slickNext');
    });
});

$(document).on('ready', function () {
    $(".reviews-items").slick({
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