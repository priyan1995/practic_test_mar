<?php
/*
Template Name: Home Page Template
*/
get_header();
?>


<section class="pd-slider-sec pos-rel">
    <div class="pd-main-banner">

        <?php
        $sliders  = new WP_Query(array("post_type" => "banner", 'order' => 'DESC', "posts_per_page" => "20"));
        if ($sliders->have_posts()) :
            while ($sliders->have_posts()) :
                $sliders->the_post();
        ?>
                <div>
                    <div class="pd-main-slider-inner-wrapper">
                        <img src="<?php the_field('banner_image'); ?>" class="w-100">
                    </div>
                </div>

        <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>

    </div>

    <div class="pd-banner-form-div">

        <div>
            <h2 class="pd-main-heading"><?php the_field('bannerr_form_title'); ?><span><?php the_field('bannerr_form_title_copy'); ?></span> </h2>

            <div class="pd-banner-form">
                <?php echo do_shortcode('[contact-form-7 id="37" title="Banner form"]'); ?>
            </div>
        </div>

    </div>



    <div class="pd-bn-shade-3"></div>
    <div class="pd-bn-shade-2"></div>
    <div class="pd-bn-shade-1"></div>


</section>

<section class="pd-slider-bottom-bar">
    <div class="container">
        <div class="pd-icons-bar">
            <img src="<?php the_field('icon_1_banner'); ?>" />
            <img src="<?php the_field('icon_2_banner'); ?>" />
            <img src="<?php the_field('icon_3_banner'); ?>" />
            <img src="<?php the_field('icon_4_bannerr'); ?>" />
        </div>
    </div>
</section>


<section class="pd-h-f-o-c-sec pd-padd pd-dbl-p-top pd-dbl-p-bot">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="pd-main-heading text-center"><?php the_field('title_hfoc'); ?> <span><?php the_field('title_hfoc_copy'); ?></span></h2>

                <div class="pd-client-slide">

                    <?php
                    $x == 0;
                    $testimonials  = new WP_Query(array("post_type" => "testimonials", 'order' => 'DESC', "posts_per_page" => "-1"));
                    if ($testimonials->have_posts()) :
                        while ($testimonials->have_posts()) :
                            $testimonials->the_post();

                            $video_link = get_field('video_url_testi');
                            $x++;
                    ?>

                            <div>
                                <img src="<?php the_field('image_tetsi');  ?>" class="w-100 cs-main-img">

                                <?php if ($video_link) { ?>
                                    <!-- Button trigger modal -->
                                    <a type="button" class="cs-model-btn" data-toggle="modal" data-target="#exampleModal<?php echo $x; ?>">
                                        <div>
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </a>

                                <?php } ?>

                                <img src="<?php the_field('thumbnail_image_testi'); ?>" class="cs-small-img">

                                <div class="pd-cs-cont">
                                    <h2><?php the_title(); ?></h2>
                                    <div><?php the_content(); ?></div>
                                </div>

                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();

                    ?>

                </div>


                <?php
                $y == 0;
                $testimonials  = new WP_Query(array("post_type" => "testimonials", 'order' => 'DESC', "posts_per_page" => "-1"));
                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) :
                        $testimonials->the_post();

                        $video_link = get_field('video_url_testi');
                        $y++;
                ?>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $y; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe width="100%" height="315" src="<?php the_field('video_url_testi'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>



                <?php
                    endwhile;
                endif;
                wp_reset_query();

                ?>


            </div>
        </div>
    </div>
</section>

<!-- EENC Job post section -->
<section class="pd-ee-jp-sec pos-rel pd-padd" style="background-image: url(<?php the_field('back_img_eenc_job'); ?>);">
    <div class="pd-bg-blue-grad"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2><span><?php the_field('title_eenc_job'); ?></span> <?php the_field('title_eenc_job_copy'); ?></h2>
                <p><?php the_field('description_eenc_job'); ?></p>
                <a href="<?php the_field('sign_link_eenc_job'); ?>">Sign in</a>
            </div>
        </div>
    </div>
</section>


<!-- latest news section -->
<section class="pos-rel pd-padd pd-latest-news-sec pd-dbl-p-top pd-dbl-p-bot">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pd-cr-w-img">
                <h3><?php the_field('title_ltj_job'); ?></h3>


                <?php
                $latest_jobs  = new WP_Query(array("post_type" => "job_news", 'order' => 'DESC', "posts_per_page" => "5"));
                if ($latest_jobs->have_posts()) :
                    while ($latest_jobs->have_posts()) :
                        $latest_jobs->the_post();

                ?>

                        <a href="#">
                            <div class="pd-news-card">
                                <div>
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_field('short_description_news'); ?></p>
                                </div>
                            </div>
                        </a>


                <?php
                    endwhile;
                endif;
                wp_reset_query();

                ?>

                <div class="text-right pd-cep-div">
                    <a href="#" class="light-red-link">View all public job posts <i class="fas fa-angle-right"></i></a>
                </div>


            </div>
            <div class="col-lg-7">
                <h3 class="pd-mob-am"><?php the_field('title_ltj2_job'); ?></h3>
                <div class="row">
                    <div class="col-lg-12">

                        <?php
                        $latest_jobs_featurd  = new WP_Query(array("post_type" => "job_news", "taxonomy" => "featured_news", "featured_news" => "feat", 'order' => 'RAND', "posts_per_page" => "1"));
                        if ($latest_jobs_featurd->have_posts()) :
                            while ($latest_jobs_featurd->have_posts()) :
                                $latest_jobs_featurd->the_post();
                                $content = get_the_content();

                        ?>

                                <a href="#">
                                    <span class="pd-featrd">Featured </span>
                                    <div class="pd-news-card pd-sm-news-card pd-lg-n-c">

                                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/cand-cult.jpg">
                                        <div class="pd-l-b">
                                            <h4><?php the_title(); ?></h4>

                                            <div class="pad-0">
                                                <?php custom_echo($content, 109); ?>
                                            </div>

                                            <div class="text-right">
                                                <a href="#" class="pd-vn-lin">View More
                                                    <i class="fas fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                        <?php
                            endwhile;
                        endif;
                        wp_reset_query();

                        ?>
                    </div>


                    <?php
                    $latest_jobs_lc  = new WP_Query(array("post_type" => "job_news", "taxonomy" => "featured_news", "featured_news" => "latest_common", 'order' => 'RAND', "posts_per_page" => "4"));
                    if ($latest_jobs_lc->have_posts()) :
                        while ($latest_jobs_lc->have_posts()) :
                            $latest_jobs_lc->the_post();
                            $content = get_the_content();
                    ?>

                            <div class="col-lg-6">
                                <a href="#">
                                    <div class="pd-news-card pd-sm-news-card">
                                        <img src="<?php the_field('image_news'); ?>">
                                        <div>
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_field('short_description_news'); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();

                    ?>

                    <div class="text-right pd-cep-div pd-mt-47">
                        <a href="#" class="light-red-link">View all public job posts <i class="fas fa-angle-right"></i></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- EENC Upcoming events section -->

<section class="pos-rel pd-eenc-upc-ent pd-dbl-p-top pd-dbl-p-bot">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="pd-main-heading pd-mb-50"><?php the_field('title_upc_events'); ?> <span><?php the_field('title_upc_events_copy'); ?></span></h2>
            </div>
            <div class="col-lg-8">
                <div class="row">


                    <?php

                    $event  = new WP_Query(array("post_type" => "events", 'order' => 'DESC', "posts_per_page" => "6"));
                    if ($testimonials->have_posts()) :
                        while ($event->have_posts()) :
                            $event->the_post();

                            $openStatus = get_field('booking_open_status_evt');
                            $seats_counter = get_field('seats_counter_evt');

                    ?>

                            <!-- card -->
                            <div class="col-md-4 col-lg-4">
                                <div class="pd-cal-card">
                                    <div class="pd-crd-bdy">
                                        <div class="pd-cal-date">
                                            <div>
                                                <h3><?php the_field('date_evt') ?></h3>
                                            </div>
                                            <div>
                                                <p> <strong><?php the_field('month_evt'); ?></strong></p>
                                                <p><?php the_field('time_start_evt'); ?> - <?php the_field('time_end_evt'); ?></p>
                                            </div>
                                        </div>
                                        <h4><?php the_title(); ?></h4>
                                        <div class="pd-inf-cal-sc">
                                            <p><i class="fas fa-map-marker-alt"></i> <?php the_field('place_evt'); ?></p>
                                            <?php if ($seats_counter) { ?>
                                                <p><i class="fas fa-male"></i><?php the_field('seats_counter_evt'); ?> Seats</p>
                                            <?php } ?>

                                        </div>
                                    </div>
                                    <div class="pd-b-o">
                                        <?php if ($openStatus) { ?>
                                            <a href="#">Booking Open</a>
                                        <?php } else { ?>
                                            <p>Coming Soon</p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pd-evt-img-crd pos-rel" style="background-image: url(<?php the_field('sign_in_moe_back_img'); ?>);">
                    <div class="pd-gray-to-bott-overl"></div>
                    <div>
                        <h3><?php the_field('title_moe'); ?></h3>
                        <p><?php the_field('desc_moe'); ?></p>
                        <a href="<?php the_field('sign_in_moe'); ?>">Sign In</a>
                    </div>
                </div>
            </div>

            <div class="col-12 pmc">
                <a href="#" class="light-red-link">Print monthly calander</a>
            </div>


        </div>
    </div>
</section>


<!-- latest gta jobs section -->

<section class="lt-g-t-job-sec pd-dbl-p-top pd-dbl-p-bot">
    <div class="container">
        <div class="row">
            <div class="col-12 ltj-title-sec pd-mb-50">
                <h2 class="pd-main-heading mb-0"><?php the_field('title_ltgta'); ?> <span><?php the_field('title_ltgta_copy'); ?></span></h2>
                <a href="#" class="light-red-link">Visit GTA Job Archive <i class="fas fa-angle-right"></i></a>
            </div>

            <div class="col-12">
                <div class="latest-gta-jobs">

                    <?php
                    $gta_jobs  = new WP_Query(array("post_type" => "gta_jobs", 'order' => 'Rand', "posts_per_page" => "9"));
                    if ($gta_jobs->have_posts()) :
                        while ($gta_jobs->have_posts()) :
                            $gta_jobs->the_post();
                    ?>

                            <div>
                                <img src="<?php the_field('image_gta_jobs'); ?>" class="w-100">
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_query(); ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>