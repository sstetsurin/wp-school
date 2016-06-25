<?php /* Template Name: News Page */
get_header();
$news = getNews();
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
                <span>news &amp; events</span>
            </div>
            <div class="content clearfix">
                <?php foreach ($news as $item): ?>
                    <div class="news-item-block">
                        <h5 class="news-item-title"><?php echo $item->post_title; ?></h5>
                        <p class="news-item-short-text"><?php echo get_snippet($item->post_content); ?></p>
                        <p class="date-posted">Date Posted:<?php echo date('m/d/Y', strtotime($item->post_date)); ?></p>
                        <a href="<?php echo get_post_permalink($item->ID); ?>" class="read-more">Read More</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();