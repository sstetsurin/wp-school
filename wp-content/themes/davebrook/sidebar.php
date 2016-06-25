<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davebrook
 */

?>

<div class="left-sidebar-wrap col-md-3">
    <div class="dark-line"></div>
    <div class="sidebar-menu">
        <ul class="nav">
            <?php wp_list_pages(array('child_of' => getPageParentId($post->ID), 'title_li' => '', 'sort_column' => 'post_date')); ?>
        </ul>
    </div>
</div>
