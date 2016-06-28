<?php /* Template Name: Contact US */
get_header();
?>

    <div class="content-wrapper clearfix">
        <div class="container">
            <div class="breadcrumbs-wrap col-md-12">
                <?php if(function_exists(breadcrumbs)) {breadcrumbs();} ?>
            </div>
            <?php get_sidebar(); ?>
            <div class="page-content col-md-9">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'contact-us' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
