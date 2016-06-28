<div class="content clearfix">
    <div class="col-md-12 content-header-photo">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive">
    </div>
    <div class="col-md-8 about-template">
        <?php the_content(); ?>
    </div>
    <div class="col-md-4 right-sidebar">

        <div class="contact-banners-block">
            <div class="banner-item getting-here">
                <a href="<?php echo get_permalink(172); ?>">
                    <img class="img-responsive" src="/wp-content/uploads/2016/06/banner-getting-here.jpg" alt="">
                </a>
            </div>
            <div class="banner-item questions">
                <a href="<?php echo get_permalink(174); ?>">
                    <img class="img-responsive" src="/wp-content/uploads/2016/06/banner-question.jpg" alt="">
                </a>
            </div>
        </div>
    </div>

</div>