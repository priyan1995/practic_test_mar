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


<!-- latest news section -->
<section class="pos-rel pd-padd pd-latest-news-sec pd-dbl-p-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>Latest Public Job Posts</h3>

                <a href="#">
                    <div class="pd-news-card">
                        <div>
                            <h4>Assistant Stopkeeper</h4>
                            <p>JSW Apparels (Pvt) Ltd</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="pd-news-card">
                        <div>
                            <h4>Assistant Stopkeeper</h4>
                            <p>JSW Apparels (Pvt) Ltd</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="pd-news-card">
                        <div>
                            <h4>Senior Software Engineer (.Net) - Remote</h4>
                            <p>Champ IT Solutions</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="pd-news-card">
                        <div>
                            <h4>Excecutive - Customer Services</h4>
                            <p>Genesis Software</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="pd-news-card">
                        <div>
                            <h4>Senior Brand Excecutive</h4>
                            <p>Wallspan (Pvt) Ltd</p>
                        </div>
                    </div>
                </a>
                <div class="text-right pd-cep-div">
                    <a href="#" class="light-red-link">View all public job posts <i class="fas fa-angle-right"></i></a>
                </div>


            </div>
            <div class="col-lg-7">
                <h3>Latest Common Job News</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#">
                            <span class="pd-featrd">Featured </span>
                            <div class="pd-news-card pd-sm-news-card pd-lg-n-c">

                                <img src="<?php echo bloginfo('template_url') ?>/assets/img/cand-cult.jpg">
                                <div>
                                    <h4>Canadian culture in the workplace public workshop</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit labore placeat laudantium harum qui aliquid adipisci modi deserunt voluptate quasi sit eius, reiciendis porro dolore, sapiente temporibus nam dolori....</p>
                                    <div class="text-right">
                                        <a href="#" class="pd-vn-lin">View More
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="#">
                            <div class="pd-news-card pd-sm-news-card">
                                <img src="<?php echo bloginfo('template_url') ?>/assets/img/dumJb.png">
                                <div>
                                    <h4>Face online interview</h4>
                                    <p>Genesis Software</p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-6">
                        <a href="#">
                            <div class="pd-news-card pd-sm-news-card">
                                <img src="<?php echo bloginfo('template_url') ?>/assets/img/dumJb.png">
                                <div>
                                    <h4>Face online interview</h4>
                                    <p>Genesis Software</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="#">
                            <div class="pd-news-card pd-sm-news-card">
                                <img src="<?php echo bloginfo('template_url') ?>/assets/img/dumJb.png">
                                <div>
                                    <h4>Face online interview</h4>
                                    <p>Genesis Software</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="#">
                            <div class="pd-news-card pd-sm-news-card">
                                <img src="<?php echo bloginfo('template_url') ?>/assets/img/dumJb.png">
                                <div>
                                    <h4>Face online interview</h4>
                                    <p>Genesis Software</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="text-right pd-cep-div">
                        <a href="#" class="light-red-link">View all public job posts <i class="fas fa-angle-right"></i></a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>