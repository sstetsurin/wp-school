<?php
get_header();
wp_enqueue_script('slider-page',  get_template_directory_uri().'/js/slider-page.js');
$postmeta = get_post_meta($post->ID);
$images = getGalleryImage($postmeta)
?>
<div class="content-wrapper clearfix">
    <div class="container">
        <div class="breadcrumbs-wrap col-md-12">
            <?php if(function_exists(breadcrumbs)) {breadcrumbs();} ?>
        </div>
        <div class="left-sidebar-wrap col-md-3">
            <div class="dark-line"></div>
            <div class="sidebar-menu">
                <ul class="nav">
                    <?php wp_list_pages(array('child_of' => getPageParentId(72), 'title_li' => '', 'sort_column' => 'post_date')); ?>
                </ul>
            </div>
        </div>
        <div class="page-content col-md-9">
            <div class="page-header">
                <h1 class="title">media</h1>
                <span>photo &amp; video gallery <!-- <small>About Creche</small> --> </span>
            </div>
            <div class="content clearfix">
                <div class="slider-block loading">
                    <div id="container" class="cf">
                        <div id="main" role="main">
                            <section class="slider">
                                <div id="slider" class="flexslider">
                                    <ul class="slides">
                                        <?php if ( $images ) { ?>
                                            <?php foreach ($images as $image): ?>
                                                <li>
                                                    <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['title']; ?>"/>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php  } ?>
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider">
                                    <ul class="slides">
                                        <?php if ( $images ) { ?>
                                            <?php foreach ($images as $image): ?>
                                                <li>
                                                    <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['title']; ?>"/>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php  } ?>
                                    </ul>
                                </div>
                            </section>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
?>
