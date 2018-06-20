//@prepros-prepend "./modules/marquee.js";
//@prepros-prepend "./modules/nav.js";
//@prepros-prepend "./modules/scrollManager.js";
//@prepros-prepend "./modules/competencias.js";
//@prepros-prepend "./modules/tabs.js";
//@prepros-prepend "./modules/toggle.js";
//@prepros-prepend "./modules/inputNumber.js";

$(window).load(function () {
    $("body").addClass("loading--finished");

    if ($(".galeria").length > 0) {
        $(".galeria__grid").masonry();
    }
});

$(document).ready(function () {

    new WOW().init();

    const mainNav = new Nav($(".header__toggle"), $(".nav"));
    const scrollManager = new ScrollManager();

    if ($(".competencias").length > 0) {
        const competencias = new Competencias();
    }
    
    if ($(".galeria").length > 0) {
        $(".galeria__grid").masonry();

        $(".galeria__videos").slick({
            mobileFirst: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: "5rem",
            arrows: false,
            dots: true,
            customPaging: () => {
                return "";
            },
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: "10rem"
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        centerPadding: "20rem"
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        centerPadding: "30rem"
                    }
                }
            ]
        });
    }

    if ($(".tabs").length > 0) {
        const tabs = new Tabs();
    }
    
    if ($(".toggle").length > 0) {
        const toggle = new Toggle();
    }

    if ($(".form__input--number").length > 0) {
        const inputNumber = new InputNumber();
    }

    if ($(".scroll-stick").length > 0) {
        $(".scroll-stick").scrollToFixed({
            minWidth: 768
        });
    }

    if ($(".banner__slider").length > 0) {
        $(".banner__slider-list").slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            dots: true,
            arrows: true,
            prevArrow: "<img src='images/slider-arrow.svg' class='banner__slider-arrow banner__slider-arrow--prev'>",
            nextArrow: "<img src='images/slider-arrow.svg' class='banner__slider-arrow banner__slider-arrow--next'>",
            appendDots: $(".banner"),
            customPaging: () => {
                return "";
            },
            appendArrows: $(".banner__cta-wrapper"),
            autoplay: true,
            autoplaySpeed: 5000,
            fade: true
        });
    }
    
});