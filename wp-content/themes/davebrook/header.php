<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davebrook
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
    <?php //wp_enqueue_style('styles', get_template_directory().'/css/styles.css'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/modernizr.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/wp-content/themes/davebrook/css/flexslider.css" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header clearfix">
        <div class="top-nav">
            <div class="container">
                <div class="social-wrap">
                    <ul class="social-icons">
                        <a href="<?php echo validateLink(get_option('instagram')); ?>" class="social-sprite insta" target="_blank"></a>
                        <a href="<?php echo validateLink(get_option('ln')); ?>" class="social-sprite ln" target="_blank"></a>
                        <a href="<?php echo validateLink(get_option('tw')); ?>" class="social-sprite tw" target="_blank"></a>
                        <a href="<?php echo validateLink(get_option('fb')); ?>" class="social-sprite fb" target="_blank"></a>
                    </ul>
                </div>
                <div class="other-links">
                    <ul class="cf">
                        <li><a href="<?php echo get_permalink(135); ?>">News &amp; Events</a></li>
                        <li><a href="<?php echo get_permalink(152); ?>">Social Media Page</a></li>
                        <li><a href="<?php echo get_permalink(172); ?>">Getting Here</a></li>
                    </ul>
                </div>
                <div class="portal-link">
                    <a href="#">Online School Assessment Portal</a>
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="container">
                <div class="logo-wrap">
                    <div class="logo-img">
                        <img src="<?php echo header_image(); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
                    </div>
                    <div class="logo-text">
                        <div class="logo-title"><?php echo( get_bloginfo( 'title' ) ); ?></div>
                        <div class="logo-sub">Moral, Academic and Social Excellence</div>
                    </div>
                </div>
                <div class="main-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
            </div>
        </div>
    </div>
