<?php



include_once('inc/class-wp-bootstrap-navwalker.php');



// Register Resources

function graceland()
{





  wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

  wp_register_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

  wp_register_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

  wp_register_style('stylesheet', get_stylesheet_uri());



  wp_enqueue_style('owl-css');

  wp_enqueue_style('owl-theme-css');

  wp_enqueue_style('bootstrap-css');

  wp_enqueue_style('stylesheet');

  wp_enqueue_style('aos-css');





  wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.1', true);

  wp_register_script('owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true);

  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true);





  wp_enqueue_script('jquery');

  wp_enqueue_script('bootstrap-js');

  wp_enqueue_script('owl-js');

  wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'graceland');



// Menus

add_action('after_setup_theme', 'register_nero_primary_menu');

function register_nero_primary_menu()
{
  register_nav_menus(array(
    'primary'  =>   __('Primary Menu', 'graceland'),
    'Footer'  =>  __('Footer Menu', 'graceland')
  ));
}









// custom logo



add_theme_support('custom-logo');



function bh_custom_logo()

{

  $defaults = array(

    'header_text' => array('site-title', 'site_description'),

  );
}



add_action('after_setup_theme', 'bh_custom_logo');





// ----------------- theme options page



add_action("admin_menu", "mythemeoptions");



function mythemeoptions()

{



  add_menu_page(

    "theme-options", //page title

    "Theme-options", //Menu title

    "manage_options", //Capability

    "theme-options", //Menu Slug

    "mycustom_options", //callback funtion

    "dashicons-admin-generic" //icon



  );
}

// ==========



function mycustom_options()

{

  // we have to link our custom settings

?>

  <div>

    <h1>Theme Options Panel</h1>

    <?php settings_errors(); ?>

    <form action="options.php" method="post">

      <?php

      settings_fields("section");

      do_settings_sections("theme-options");

      submit_button();

      ?>

    </form>

  </div>

<?php

}



// ===========

// theme options settings page

function theme_options_setting()

{

  add_settings_section(

    "section", //id of setting section

    "All Page", // title

    "", // callback function

    "theme-options" // page

  );



  add_settings_field(

    "facebook_link",

    "Facebook URL",

    "display_fb",

    "theme-options",

    "section"



  );


  add_settings_field(

    "insta_url",

    "Instagram URL",

    "display_insta",

    "theme-options",

    "section"



  );

  add_settings_field(

    "linkedin_url",

    "Linkedin URL",

    "display_linkedin",

    "theme-options",

    "section"



  );



  add_settings_field(

    "phone_num",

    "Phone Number",

    "display_phone",

    "theme-options",

    "section"



  );



  add_settings_field(

    "email_1",

    "Email 1",

    "display_email_add_1",

    "theme-options",

    "section"



  );



  add_settings_field(

    "email_2",

    "Email 2",

    "display_email_add_2",

    "theme-options",

    "section"



  );


  add_settings_field(

    "address",

    "Address",

    "display_address",

    "theme-options",

    "section"

  );


  // add_settings_field(

  //     "footer_small_text",

  //     "Footer Small Text",

  //     "display_footer_small_text",

  //     "theme-options",

  //     "section"

  //   );

  add_settings_field(

    "footer_large_text",

    "Footer Large Text",

    "display_footer_large_text",

    "theme-options",

    "section"

  );








  register_setting("section", "phone_num");

  register_setting("section", "email_1");

  register_setting("section", "email_2");

  register_setting("section", "address");

  //  register_setting("section", "footer_small_text");

  register_setting("section", "footer_large_text");

  register_setting("section", "facebook_link");

  register_setting("section", "insta_url");

  register_setting("section", "linkedin_url");
}



add_action("admin_init", "theme_options_setting");






function display_fb()

{ ?>

  <input type="text" name="facebook_link" value="<?php echo get_option('facebook_link'); ?>" id="facebook_link" />

<?php

}

function display_insta()

{ ?>

  <input type="text" name="insta_url" value="<?php echo get_option('insta_url'); ?>" id="insta_url" />

<?php

}

function display_linkedin()

{ ?>

  <input type="text" name="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" id="linkedin_url" />

<?php

}



function display_phone()

{ ?>

  <input type="text" name="phone_num" value="<?php echo get_option('phone_num'); ?>" id="phone_num" />

<?php

}



function display_email_add_1()

{ ?>

  <input type="email" name="email_1" value="<?php echo get_option('email_1'); ?>" id="email_1" />

<?php


}

function display_email_add_2()

{ ?>

  <input type="email" name="email_2" value="<?php echo get_option('email_1'); ?>" id="email_2" />

<?php


}



function display_address()

{ ?>

  <textarea name="address" id="address"> <?php echo get_option('address'); ?>  </textarea>

<?php


}

/*
function display_footer_small_text()

{ ?>

  <input type="text" name="footer_small_text" value="<?php echo get_option('footer_small_text'); ?>" id="footer_small_text" />

<?php


}

*/


function display_footer_large_text()

{ ?>

  <!-- <input type="text" name="footer_large_text" value="<? php // echo get_option('footer_large_text'); 
                                                          ?>" id="footer_large_text" /> -->

  <textarea id="footer_large_text" name="footer_large_text"><?php echo get_option('footer_large_text'); ?></textarea>

<?php


}
