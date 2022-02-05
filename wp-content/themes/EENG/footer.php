<section class="eenc-main-footer pd-dbl-p-top ">

  <div class="container">
    <div class="row">

      <div class="col-lg-3">
        <div class="pd-footer-logo">
          <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
            <?php the_custom_logo(); ?>
          </a>

          <div class="loc-card">
            <i class="fas fa-phone-alt"></i>
            <p><?php echo get_option('address'); ?></p>
          </div>

          <div class="loc-card">
            <i class="fas fa-map-marker-alt"></i>
            <a href="tel:<?php echo get_option('phone_num'); ?>"><?php echo get_option('phone_num'); ?></a>
          </div>


          <div class="loc-card">
            <i class="fas fa-envelope"></i>
            <a href="mailto:<?php echo get_option('email_1'); ?>"><?php echo get_option('email_1'); ?></a>
          </div>


        </div>
      </div>





      <div class="col-lg-2">

        <h4>Quick Links</h4>

        <?php
        wp_nav_menu(
          array(
            'depth'       => 10,
            'theme_location'  => 'Footer',
            'container_class' => 'false',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => '',
            'menu_id'         => 'footer-menu',
            'walker'          => new WP_Bootstrap_Navwalker(),
          )
        );
        ?>
      </div>

      <div class="col-lg-2">
        <h4>Job Seekers</h4>
        <?php
        wp_nav_menu(
          array(
            'depth'       => 10,
            'theme_location'  => 'Footer_2',
            'container_class' => 'false',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => '',
            'menu_id'         => 'footer-menu',
            'walker'          => new WP_Bootstrap_Navwalker(),
          )
        );
        ?>
      </div>

      <div class="col-lg-2">
        <h4>Employers</h4>
        <?php
        wp_nav_menu(
          array(
            'depth'       => 10,
            'theme_location'  => 'Footer_3',
            'container_class' => 'false',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => '',
            'menu_id'         => 'footer-menu',
            'walker'          => new WP_Bootstrap_Navwalker(),
          )
        );
        ?>
      </div>


      <div class="col-lg-3 pd-social-footer">

        <h4>Join Our Newsletter</h4>

        <p><?php echo get_option('footer_large_text'); ?></p>

        <div class="pd-footer-newsletter">
          <?php echo do_shortcode('[newsletter_form type="minimal" ]'); ?>
        </div>

        <div class="pd-footer-social">
          <?php
          $facebook = get_option('facebook_link');
          $insta = get_option('insta_url');
          $linkedin = get_option('linkedin_url');
          $twitter = get_option('twitter_url');


          if ($facebook) { ?>
            <a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <?php } ?>

          <?php if ($insta) { ?>
            <a href="<?php echo $insta; ?>" target="_blank"> <i class="fab fa-instagram"></i></a>
          <?php } ?>

          <?php if ($linkedin) { ?>
            <a href="<?php echo $linkedin; ?>" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
          <?php } ?>

          <?php if ($twitter) { ?>
            <a href="<?php echo $twitter; ?>" target="_blank"> <i class="fab fa-twitter"></i> </a>
          <?php } ?>

        </div>


      </div>




    </div>
  </div>
  <div class="col-lg-12 pd-bott-crdt text-center">
    <p class="credit"> <?php echo date('Y'); ?> All Rights Recieved <a href="#">eenc.ca</a></p>
  </div>
</section>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" ></script>


<script>
  AOS.init({
    once: true
  });

</script>


<?php wp_footer();  ?>
</body>

</html>