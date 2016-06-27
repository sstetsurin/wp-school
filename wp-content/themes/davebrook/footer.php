<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davebrook
 */

?>
<?php if ( !is_front_page()): ?>
<div class="footer-wrap">
    <div class="footer clearfix container">
        <div class="address">
            <ul class="nav">
                <li class="sitename"><?php echo( get_bloginfo( 'title' ) ); ?></li>
                <li><?php echo get_option('addr')?></li>
                <li><?php echo get_option('state')?></li>
                <li><?php echo get_option('phone')?></li>
                <li><a href="mailto:<?php echo get_option('email')?>"><?php echo get_option('email')?></a></li>
                <li><a href="<?php echo get_option('faq-link')?>">FAQs</li>
            </ul>
        </div>

        <div class="bottom clearfix">
            <div class="left-menu clearfix">
                <ul class="nav">
                    <li class="sprite-bottom-menu gallery">
                        <a href="<?php echo get_permalink(72); ?>"> Gallery</a>
                    </li>
                    <li class="sprite-bottom-menu news">
                        <a href="<?php echo get_permalink(135); ?>">News &amp; Events</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <span><?php echo get_option('copy'); ?></span><span>ELSORN</span>
            </div>

            <div class="social-footer-wrap">
                <ul class="social-icons nav">
                    <a href="<?php echo validateLink(get_option('tw')); ?>" class="social-sprite tw" target="_blank"></a>
                    <a href="<?php echo validateLink(get_option('instagram')); ?>" class="social-sprite insta" target="_blank"></a>
                    <a href="<?php echo validateLink(get_option('yb')); ?>" class="social-sprite youtube" target="_blank"></a>
                    <a href="<?php echo validateLink(get_option('fb')); ?>" class="social-sprite fb" target="_blank"></a>
                    <a href="<?php echo validateLink(get_option('ln')); ?>" class="social-sprite ln" target="_blank"></a>
                </ul>
            </div>
        </div>
    </div>
    <a href="#" class="sitemap-button">open sitemap</a>
    <div class="line"></div>
</div>

<div class="sitemap clearfix">
    <div class="container">
        <div class="menu">
            <ul class="nav about">
                <li>ABOUT US</li>
                <?php wp_list_pages(array('child_of' => getPageParentId(40), 'title_li' => '', 'sort_column' => 'menu_order', 'depth' => 1)); ?>
            </ul>
        </div>
        <div class="menu admission">
            <ul class="nav">
                <li>ADMISSION</li>
                <?php wp_list_pages(array('child_of' => getPageParentId(42), 'title_li' => '', 'sort_column' => 'menu_order', 'depth' => 1)); ?>
            </ul>
        </div>
        <div class="menu academics">
            <ul class="nav">
                <li>ACADEMICS</li>
                <?php wp_list_pages(array('child_of' => getPageParentId(44), 'title_li' => '', 'sort_column' => 'menu_order', 'depth' => 1)); ?>
            </ul>
        </div>
        <div class="menu media-nav">
            <ul class="nav">
                <li>MEDIA</li>
                <?php wp_list_pages(array('child_of' => getPageParentId(69), 'title_li' => '', 'sort_column' => 'menu_order', 'depth' => 1)); ?>
            </ul>
        </div>
        <div class="menu contact">
            <ul class="nav">
                <li>CONTACT US</li>
                <?php wp_list_pages(array('child_of' => getPageParentId(168), 'title_li' => '', 'sort_column' => 'menu_order', 'depth' => 1)); ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>
<?php //wp_enqueue_script('main',  get_template_directory().'/js/main.js'); ?>
<?php wp_footer(); ?>

</body>
</html>
