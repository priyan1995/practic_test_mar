<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<!-- <img src="<?php echo bloginfo('template_url') ?>/assets/img/banner.jpg" class="w-100"> -->

<section class="pd-slider-sec pos-rel">
    <div class="pd-main-banner">

        <div>
            <div class="pd-main-slider-inner-wrapper">
                <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="w-100">
            </div>
        </div>

        <div>
            <div class="pd-main-slider-inner-wrapper">
                <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="w-100">
            </div>
        </div>

    </div>

    <div class="pd-banner-form-div">
       
        <div>
            <h2 class="pd-main-heading">I Need <span>Information</span> on</h2>

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
            <img src="<?php echo bloginfo('template_url') ?>/assets/img/ic-1.jpg" />
            <img src="<?php echo bloginfo('template_url') ?>/assets/img/ic-2.jpg" />
            <img src="<?php echo bloginfo('template_url') ?>/assets/img/ic-1.jpg" />
            <img src="<?php echo bloginfo('template_url') ?>/assets/img/ic-2.jpg" />
        </div>
    </div>
</section>





<section class="pd-h-f-o-c-sec pd-padd pd-dbl-p-top pd-dbl-p-bot">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="pd-main-heading text-center">Hear From <span>Our Clients</span></h2>

                <div class="pd-client-slide">

                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="w-100 cs-main-img">

                        <!-- Button trigger modal -->
                        <a type="button" class="cs-model-btn" data-toggle="modal" data-target="#exampleModal">
                            <div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>

                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="cs-small-img">

                        <div class="pd-cs-cont">
                            <h2>John.K.Paul</h2>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat optio.."</p>
                        </div>

                    </div>




                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-2.jpg" class="w-100 cs-main-img">

                        <!-- Button trigger modal -->
                        <a type="button" class="cs-model-btn" data-toggle="modal" data-target="#exampleModal">
                            <div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>


                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="cs-small-img">

                        <div class="pd-cs-cont">
                            <h2>John.K.Paul</h2>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat optio.."</p>
                        </div>


                    </div>


                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-3.jpg" class="w-100 cs-main-img">

                        <!-- Button trigger modal -->
                        <a type="button" class="cs-model-btn" data-toggle="modal" data-target="#exampleModal">
                            <div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>


                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="cs-small-img">

                        <div class="pd-cs-cont">
                            <h2>John.K.Paul</h2>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat optio.."</p>
                        </div>
                    </div>


                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-2.jpg" class="w-100 cs-main-img">

                        <!-- Button trigger modal -->
                        <a type="button" class="cs-model-btn" data-toggle="modal" data-target="#exampleModal">
                            <div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>


                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="cs-small-img">

                        <div class="pd-cs-cont">
                            <h2>John.K.Paul</h2>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat optio.."</p>
                        </div>

                    </div>


                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-3.jpg" class="w-100 cs-main-img">

                        <!-- Button trigger modal -->
                        <a type="button" class="cs-model-btn" data-toggle="modal" data-target="#exampleModal">
                            <div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>


                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/client-1.jpg" class="cs-small-img">

                        <div class="pd-cs-cont">
                            <h2>John.K.Paul</h2>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat optio.."</p>
                        </div>

                    </div>




                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/9xwazD5SyVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                        </div>
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
<section class="pos-rel pd-padd pd-latest-news-sec pd-dbl-p-top pd-dbl-p-bot">
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
                                <div class="pd-l-b">
                                    <h4>Canadian culture in the workplace public workshop</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit labore placeat laudantium harum....</p>
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
                <h2 class="pd-main-heading pd-mb-50">EENC <span>Upcoming Events</span></h2>
            </div>
            <div class="col-lg-8">
                <div class="row">

                    <!-- card -->
                    <div class="col-md-4 col-lg-4">
                        <div class="pd-cal-card">
                            <div class="pd-crd-bdy">
                                <div class="pd-cal-date">
                                    <div>
                                        <h3>19</h3>
                                    </div>
                                    <div>
                                        <p> <strong>November</strong></p>
                                        <p>08.00 am - 04.30 pm</p>
                                    </div>
                                </div>
                                <h4>Graduate Training Programe</h4>
                                <div class="pd-inf-cal-sc">
                                    <p><i class="fas fa-map-marker-alt"></i> Ontario Center</p>
                                    <p><i class="fas fa-male"></i>200 Seats</p>
                                </div>
                            </div>
                            <div class="pd-b-o">
                                <a href="#">Booking Open</a>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-md-4 col-lg-4">
                        <div class="pd-cal-card">
                            <div class="pd-crd-bdy">
                                <div class="pd-cal-date">
                                    <div>
                                        <h3>25</h3>
                                    </div>
                                    <div>
                                        <p> <strong>November</strong></p>
                                        <p>08.00 am - 06.30 pm</p>
                                    </div>
                                </div>
                                <h4>Job Fair 2021</h4>
                                <div class="pd-inf-cal-sc">
                                    <p><i class="fas fa-map-marker-alt"></i> Ontario Center</p>
                                    <!-- <p><i class="fas fa-male"></i>200 Seats</p> -->
                                </div>
                            </div>
                            <div class="pd-b-o">
                                <a href="#">Booking Open</a>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-md-4 col-lg-4">
                        <div class="pd-cal-card">
                            <div class="pd-crd-bdy">
                                <div class="pd-cal-date">
                                    <div>
                                        <h3>02</h3>
                                    </div>
                                    <div>
                                        <p> <strong>December</strong></p>
                                        <p>08.00 am - 04.30 pm</p>
                                    </div>
                                </div>
                                <h4>Graduate Training Programe</h4>
                                <div class="pd-inf-cal-sc">
                                    <p><i class="fas fa-map-marker-alt"></i> Ontario Center</p>
                                    <p><i class="fas fa-male"></i>200 Seats</p>
                                </div>
                            </div>
                            <div class="pd-b-o">
                                <!-- <a href="#">Booking Open</a> -->
                                <p>Coming Soon</p>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-md-4 col-lg-4">
                        <div class="pd-cal-card">
                            <div class="pd-crd-bdy">
                                <div class="pd-cal-date">
                                    <div>
                                        <h3>08</h3>
                                    </div>
                                    <div>
                                        <p> <strong>December</strong></p>
                                        <p>08.00 am - 04.30 pm</p>
                                    </div>
                                </div>
                                <h4>Graduate Training Programe</h4>
                                <div class="pd-inf-cal-sc">
                                    <p><i class="fas fa-map-marker-alt"></i> Ontario Center</p>
                                    <p><i class="fas fa-male"></i>200 Seats</p>
                                </div>
                            </div>
                            <div class="pd-b-o">
                                <a href="#">Booking Open</a>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-md-4 col-lg-4">
                        <div class="pd-cal-card">
                            <div class="pd-crd-bdy">
                                <div class="pd-cal-date">
                                    <div>
                                        <h3>14</h3>
                                    </div>
                                    <div>
                                        <p> <strong>November</strong></p>
                                        <p>08.00 am - 04.30 pm</p>
                                    </div>
                                </div>
                                <h4>Graduate Training Programe</h4>
                                <div class="pd-inf-cal-sc">
                                    <p><i class="fas fa-map-marker-alt"></i> Ontario Center</p>
                                    <p><i class="fas fa-male"></i>200 Seats</p>
                                </div>
                            </div>
                            <div class="pd-b-o">
                                <p>Coming Soon</p>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-md-4 col-lg-4">
                        <div class="pd-cal-card">
                            <div class="pd-crd-bdy">
                                <div class="pd-cal-date">
                                    <div>
                                        <h3>20</h3>
                                    </div>
                                    <div>
                                        <p> <strong>November</strong></p>
                                        <p>08.00 am - 04.30 pm</p>
                                    </div>
                                </div>
                                <h4>Online Interview Training Programe</h4>
                                <div class="pd-inf-cal-sc">
                                    <p><i class="fas fa-map-marker-alt"></i> Ontario Center</p>
                                    <p><i class="fas fa-male"></i>200 Seats</p>
                                </div>
                            </div>
                            <div class="pd-b-o">
                                <a href="#">Booking Open</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="pd-evt-img-crd pos-rel" style="background-image: url(<?php echo bloginfo('template_url') ?>/assets/img/eenc-job.jpg);">
                    <div class="pd-gray-to-bott-overl"></div>
                    <div>
                        <h3>EENC Members Only Events</h3>
                        <p>Please sign in to view EENC members only events</p>
                        <a href="#">Sign In</a>
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
                <h2 class="pd-main-heading mb-0">Latest <span>GTA Jobs</span></h2>
                <a href="#" class="light-red-link">Visit GTA Job Archive <i class="fas fa-angle-right"></i></a>
            </div>

            <div class="col-12">
                <div class="latest-gta-jobs">
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>
                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>

                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>

                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>

                    <div>
                        <img src="<?php echo bloginfo('template_url') ?>/assets/img/latest-gta-job.jpg" class="w-100">
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>