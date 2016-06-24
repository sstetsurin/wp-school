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
	<?php the_title('<h1 class="title">', '</h1>'); ?>
	<?php wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'davebrook' ),
		'after'  => '</div>',
	)); ?>
	<span>KINDERGARTEN <small>About Creche</small> </span>
</div>
<div class="content">
	<?php the_content(); ?>
</div>

