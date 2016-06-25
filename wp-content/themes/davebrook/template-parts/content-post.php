
<div class="page-header">
    <h1 class="title">media</h1>
    <span>news &amp; events </span>
</div>
<div class="content clearfix">
    <div class="news-item-page">
        <div class="news-image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="news-text">
            <?php the_title('<h5>', '</h5>'); ?>
            <?php the_content(); ?>
            <p class="date">Date Posted: <?php echo date('m/d/Y', strtotime($post->post_date)); ?></p>
            <div class="back-btn btn"> <a href="<?php echo get_permalink(135); ?>">Back to News List</a> </div>
        </div>
    </div>
</div>