<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<img src="<?php echo bloginfo('template_url') ?>/assets/img/banner.jpg" class="w-100">

<section class="pd-h-f-o-c-sec pd-padd pd-dbl-p-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="pd-main-heading text-center">Hear From <span>Our Clients</span></h2>

                <div class="clientSlide">
                    <div>
                        <h3>1</h3>
                    </div>
                    <div>
                        <h3>2</h3>
                    </div>
                    <div>
                        <h3>3</h3>
                    </div>
                    <div>
                        <h3>4</h3>
                    </div>
                    <div>
                        <h3>5</h3>
                    </div>
                    <div>
                        <h3>6</h3>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>