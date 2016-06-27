<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package davebrook
 */

get_header();

?>
	<div class="content-wrapper clearfix">
		<div class="container">
			<div class="breadcrumbs-wrap col-md-12">
				<?php if(function_exists(breadcrumbs)) {breadcrumbs(' / ');} ?>
			</div>
			<div class="left-sidebar-wrap col-md-3">
				<div class="dark-line"></div>
				<div class="sidebar-menu">
					<ul class="nav">
						<?php wp_list_pages(array('child_of' => getPageParentId(135), 'title_li' => '', 'sort_column' => 'post_date')); ?>
					</ul>
				</div>
			</div>
			<div class="page-content col-md-9">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'post' );
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>

<?php
get_footer();