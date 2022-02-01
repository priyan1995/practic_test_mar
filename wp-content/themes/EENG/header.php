<!doctype html>
<html <?php language_attributes(); ?> style="margin-top:0 !important">

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--  AOS  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,400&display=swap" rel="stylesheet">

  <!-- ========font awesome ====== -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,400;1,600&family=Roboto+Slab:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



  <title><?php //wp_title(); 
          ?> EENG</title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <a href="tel:<?php echo get_option('phone_num');  ?>" class="header-phone"><i class="fas fa-phone"></i></a>

  <div class="wrapper">
    <div class="header" id="header">
      <div class="header-wrap">
        <div class="container-fluid pd-menu-bar">

          <div class="row">
            <div class="col-lg-3  mob-logo">
              <div class="logo-wrap">
                <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
                  <?php the_custom_logo(); ?>
                </a>
              </div>
            </div>

            <div class="col-md-9 col-9 pd-mob-nav-bar pd-links-menu">

              <nav class="navbar navbar-expand-lg navbar-dark " id="pd_fixed_nav">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>


                <div class="main-menu-wrap collapse navbar-collapse" id="navbarSupportedContent">
                  <?php
                  wp_nav_menu(
                    array(
                      'depth'       => 10,
                      'theme_location'  => 'primary',
                      'container_class' => 'false',
                      'container_id'    => 'navbarNavDropdown',
                      'menu_class'      => 'navbar-nav',
                      'fallback_cb'     => '',
                      'menu_id'         => 'main-menu',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    )
                  );
                  ?>
                </div>
              </nav>



            </div>
            <!-- ==== end menu bar -->

          </div>
        </div>
      </div>
    </div>


    <script>
      window.onscroll = function() {
        myFunction()
      };

      var navbar = document.getElementById("header");
      var stickeyAdded = navbar.offsetTop + 150;
      var sticky = stickeyAdded;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      }


      $(document).ready(function() {
        $(".navbar-toggler").click(function() {
          $("#header").toggleClass("whiteMenu");
          $(".navbar-toggler-icon").toggleClass("CrossButton");
        });
      });
    </script>