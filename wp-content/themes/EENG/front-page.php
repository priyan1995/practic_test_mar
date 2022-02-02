<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<img src="<?php echo bloginfo('template_url') ?>/assets/img/banner.jpg" class="w-100">

<section class="pd-h-f-o-c-sec pd-padd pd-dbl-p-top pd-dbl-p-bot">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="pd-main-heading text-center">Hear From <span>Our Clients</span></h2>

                <div class="pd-client-slide">
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-2.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-3.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-2.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-3.jpg" class="w-100">
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<!-- EENC Job post section -->
<section class="pd-ee-jp-sec pos-rel pd-padd" style="background-image: url(<?php echo bloginfo('template_url') ?>/assets/img/eenc-job.jpg);">
    <div class="pd-bg-blue-grad"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2><span>EENC</span> Job Posts</h2>
                <p>Please sign in to view all job posts for EENC Members.</p>
                <a href="#">Sign in</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>