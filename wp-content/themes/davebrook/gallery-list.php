<?php /* Template Name: Gallery List */
get_header();
?>

    <div class="content-wrapper clearfix">
        <div class="container">
            <div class="breadcrumbs-wrap col-md-12">
                <?php if(function_exists(breadcrumbs)) {breadcrumbs();} ?>
            </div>
            <?php get_sidebar(); ?>
            <div class="page-content col-md-9">
                <div class="page-header">
                    <h1 class="title">media</h1>
                    <span>photo &amp; video gallery <!-- <small>About Creche</small> --> </span>
                </div>
                <div class="content clearfix">
                    <div class="album-list-page">
                        <div class="text-list clearfix">
                            <ul>
                                <li class="active"><a href="#">all</a></li>
                                <?php
                                $type = 'envira';
                                $args=array(
                                    'post_type' => $type,
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'caller_get_posts'=> 1);

                                $my_query = null;
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                        </li>
                                        <?php
                                    endwhile;
                                }

                                ?>
                            </ul>
                        </div>

                        <div class="image-list clearfix">
                        <?php if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <div class="col-md-4 album-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo getGalleryImage(get_post_meta($post->ID), true)['src']; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                        <?php  endwhile; 
                        } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php
get_footer();
