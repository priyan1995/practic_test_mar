<section class="eps-main-footer graceland-padding" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/footer.jpg');">
  <div class="pd-footer-white-gradiant"></div>
  <div class="dark-bg-footer">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="pd-footer-logo">
            <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
              <?php the_custom_logo(); ?>
            </a>
            <p class="text-white"><?php echo get_option('footer_large_text'); ?></p>
          </div>
        </div>










      </div>


    </div>
    <div class="col-lg-12">
      <div class="footer-dark-blue"></div>

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


    <div class="col-lg-12 pd-social-footer">

      <?php
      $facebook = get_option('facebook_link');
      $insta = get_option('insta_url');
      $twitter = get_option('linkedin_url');


      if ($facebook) { ?>
        <a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <?php } ?>

      <?php if ($insta) { ?>
        <a href="<?php echo $insta; ?>" target="_blank"> <i class="fab fa-instagram"></i></a>
      <?php } ?>

      <?php if ($twitter) { ?>
        <a href="<?php echo $twitter; ?>" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
      <?php } ?>




    </div>

    <div class="col-lg-12 bg-site-green">
      <p class="credit">Copyright &copy; <?php echo date('Y'); ?> graceland. All rights Reserved. Design & Developed by Bfly Digital.</p>
    </div>


  </div>
  </div>
</section>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>




<script>
  // const gradiant = document.querySelector(".bgGradiant");
  // const bannerImage = document.querySelector(".bannerImg");
  // const bannerTitle = document.querySelector(".bannerTitle");

  // const anim1 = new TimelineMax();

  // anim1.fromTo( bannerImage, 1, { height:"0" }, {height:"80vh", ease: Power2.easeInOut} )
  // .fromTo(bannerImage, 1.2, { width:"100%" }, { width:"100%", ease: Power2.easeInOut })

  // .fromTo( gradiant, 1.2, { x: "-100%" }, { x:"0%", ease: Power2.easeInOut } )
  // .fromTo ( bannerTitle, 1.5 , { x:"50%", opacity: 0 }, { x:"0%", opacity: 1, ease: Power2.easeInOut } )




  // AOS.init({
  //   once: true
  // });
  AOS.init();
</script>


<?php wp_footer();  ?>
</body>

</html>