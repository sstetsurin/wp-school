<?php
 /* Template Name: Front Page */
get_header();

$args = array( 'category_name' => 'Slider', 'orderby' => 'ID', 'order' => 'asc');
$slider = get_posts($args);
$slideCount = count($slider);
$custom = get_post_custom($slider[0]->ID);

?>


<div class="main-page-carousel clearfix">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php for ( $i = 0; $i < $slideCount; $i++ ): ?>
				<?php if ( $i == 0 ): ?>
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<?php continue; ?>
				<?php endif; ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
			<?php endfor; ?>
		</ol>

		<div class="carousel-inner" role="listbox">
			<?php for ( $i = 0; $i < $slideCount; $i++ ): ?>
				<?php $custom = get_post_custom($slider[$i]->ID); ?>
				<div class="item <?php echo ($i == 0) ? 'active': ''; ?>" style="background-image: url(<?php echo wp_get_attachment_url($custom['slide_image'][0]); ?>);">
					<div class="carousel-caption">
						<div class="container">
							<h1 class="title"><?php echo $custom['slide_title'][0]; ?></h1>
							<p class="text"><?php echo $custom['slide_description'][0]; ?></p>
							<a class="more-btn" href="<?php echo get_permalink($custom['slide_link'][0]); ?>"><?php echo $custom['slide_button_text'][0]; ?></a>

						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>

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
								<a href="#"> Gallery</a>
							</li>
							<li class="sprite-bottom-menu news">
								<a href="#">News &amp; Events</a>
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

				<a href="#" class="sitemap-button">open sitemap</a>
			</div>
			<div class="line"></div>

		</div>

	</div>
</div>
<div class="sitemap clearfix">
	<div class="container">
		<div class="menu">
			<ul class="nav about">
				<li>ABOUT US</li>
				<li>Strategic Vision</li>
				<li>Head of School</li>
				<li>Strategic Vision</li>
				<li>Faculty &amp; Staff</li>
				<li>Employment Opportunities</li>
			</ul>
		</div>
		<div class="menu admission">
			<ul class="nav">
				<li>ADMISSION</li>
				<li>Creche</li>
				<li>Kindergarten</li>
				<li>Primary</li>
				<li>Tuition &amp; Financials</li>
				<li>Admission Calendar</li>
			</ul>
		</div>
		<div class="menu academics">
			<ul class="nav">
				<li>ACADEMICS</li>
				<li>Creche</li>
				<li>Kindergarten</li>
				<li>Primary</li>
			</ul>
		</div>
		<div class="menu media-nav">
			<ul class="nav">
				<li>MEDIA</li>
				<li>Social Media</li>
				<li>Photo Gallery</li>
				<li>News</li>
			</ul>
		</div>
		<div class="menu contact">
			<ul class="nav">
				<li>CONTACT US</li>
				<li>Getting Here</li>
				<li>FAQs</li>
			</ul>
		</div>
	</div>
</div>

<?php
get_footer();
?>