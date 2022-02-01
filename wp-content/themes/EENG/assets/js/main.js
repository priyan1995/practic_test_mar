jQuery(document).ready(function($) {

    $('#productSlider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,        
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // $('#our-works-slider-inner').owlCarousel({
    //     loop: true,
    //     margin: 25,
    //     nav: true,
    //     dots: true,
    //     autoplay: true,
    //     autoplayTimeout: 3000,        
    //     autoplayHoverPause: true,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 1
    //         },
    //         1000: {
    //             items: 1
    //         }
    //     }
    // });


    
    $('#main-banner').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 30000,        
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    
    // $('#news-slider').owlCarousel({
    //     loop: true,
    //     margin: 25,
    //     nav: false,
    //     dots: true,
    //     autoplay: true,
    //     autoplayTimeout: 3000,        
    //     autoplayHoverPause: true,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 3
    //         },
    //         1000: {
    //             items: 3
    //         }
    //     }
    // });
    
    
        $('#teamSlider').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,        
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });



});