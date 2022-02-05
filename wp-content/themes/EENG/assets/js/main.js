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
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    focusOnSelect: true,
    infinite: true,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
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
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 300,
    centerPadding: '60px',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }]
  });


  $('.pd-main-banner').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 300,
    arrows: false,
    centerPadding: '0px',
  });




});