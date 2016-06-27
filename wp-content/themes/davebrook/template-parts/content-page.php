<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davebrook
 */

?>

<div class="page-header">
	<?php getPageTitle($post); ?>
</div>
<?php if ( $enableSidebar = get_field('enable_sidebar') ) { ?>
	<div class="content clearfix">
		<div class="col-md-8 about-template">
			<div class="article">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="col-md-4 right-sidebar">
			<div class="mission-block">
				<div class="mission-item">
					<h5>Vision</h5>
					<p><?php echo get_option('vision'); ?></p>
				</div>
				<div class="mission-item">
					<h5>Mission</h5>
					<p><?php echo get_option('mission'); ?></p>
				</div>
			</div>
			<div class="photo-block">
				<img alt="" class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
			</div>
		</div>
	</div>
<?php } else { ?>
<div class="content">
	<?php the_content(); ?>
</div>
<?php } ?>
