jQuery(document).ready(function () {

  // $('#productSlider').owlCarousel({
  //     loop: true,
  //     margin: 10,
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
  //             items: 2
  //         },
  //         1000: {
  //             items: 3
  //         }
  //     }
  // });

  $('.pd-client-slide').slick({
    centerMode: false,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $('.latest-gta-jobs').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    infinite: true,
    speed: 300,
    centerPadding: '60px',
  });



});