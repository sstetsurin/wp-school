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
        <!--<ul class="nav">
            <li class="nav"><a class="active" href="#">Welcome note</a></li>
            <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Head of School</a>
                <ul class="nav collapse submenu" id="submenu1" role="menu" aria-labelledby="btn-1">
                    <li><a class="active" href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </li>
            <li><a href="#">Strategic Vision</a></li>
            <li><a href="#">Faculty &amp; Staff</a></li>
            <li><a href="#">Employment Opportunities</a></li>
        </ul>-->
    </div>
</div>
