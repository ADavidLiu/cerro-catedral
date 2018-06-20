class Competencias {
    constructor() {
        this.slider = $(".competencias__gallery-slider");

        this.slider.slick({
            mobileFirst: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
            customPaging: () => {
                return "";
            },
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 3
                    }
                }
            ]
        });
    }
}