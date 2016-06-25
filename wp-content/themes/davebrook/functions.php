<?php
/**
 * davebrook functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package davebrook
 */

if ( ! function_exists( 'davebrook_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function davebrook_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on davebrook, use a find and replace
	 * to change 'davebrook' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'davebrook', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'davebrook' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'davebrook_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'davebrook_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function davebrook_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'davebrook_content_width', 640 );
}
add_action( 'after_setup_theme', 'davebrook_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function davebrook_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'davebrook' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'davebrook' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'davebrook_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function davebrook_scripts() {
	wp_enqueue_style( 'davebrook-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script( 'davebrook-skip-link-focus-fix', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'davebrook_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/breadcrumb.php';

add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Socials', 'Socials', '8', 'functions', 'editglobalcustomfields');
	add_options_page('Contacts and Copy', 'Contacts and Copy', '9', 'contactsedit', 'editcontacts');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
		<h2>Socials</h2>
		<form method="post" action="options.php">
			<?php wp_nonce_field('update-options') ?>

			<p><strong>Twitter:</strong><br />
				<input type="text" name="tw" size="45" value="<?php echo get_option('tw'); ?>" /></p>

			<p><strong>Facebook:</strong><br />
				<input type="text" name="fb" size="45" value="<?php echo get_option('fb'); ?>" /></p>

			<p><strong>Linkedin:</strong><br />
				<input type="text" name="ln" size="45" value="<?php echo get_option('ln'); ?>" /></p>

			<p><strong>Instagram:</strong><br />
				<input name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" /></p>

			<p><strong>Youtube:</strong><br />
				<input name="yb" size="45" value="<?php echo get_option('yb'); ?>"</></p>

			<p><input type="submit" name="Submit" value="Update Options" /></p>

			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="tw,fb,ln,instagram,yb" />

		</form>
	</div>
	<?php
}

function editcontacts() {
	?>
	<div class='wrap'>
		<h2>Contacts and copy</h2>
		<form method="post" action="options.php">
			<?php wp_nonce_field('update-options') ?>

			<p><strong>Phone:</strong><br />
				<input type="text" name="phone" size="45" value="<?php echo get_option('phone'); ?>" /></p>

			<p><strong>Address:</strong><br />
				<input type="text" name="addr" size="45" value="<?php echo get_option('addr'); ?>" /></p>

			<p><strong>State:</strong><br />
				<input type="text" name="state" size="45" value="<?php echo get_option('state'); ?>" /></p>

			<p><strong>Email:</strong><br />
				<input type="text" name="email" size="45" value="<?php echo get_option('email'); ?>" /></p>

			<p><strong>Copyright:</strong><br />
				<input type="text" name="copy" size="45" value="<?php echo get_option('copy'); ?>"</></p>

			<p><strong>FAQs link:</strong><br />
				<input type="text" name="faq-link" size="45" value="<?php echo get_option('faq-link'); ?>"</></p>
			
			<p><input type="submit" name="Submit" value="Update Options" /></p>

			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="phone,addr,state,email,copy,faq-link" />

		</form>
	</div>
	<?php
}

function validateLink($link) {
	if ( strpos($link, 'https://') !== false || strpos($link, 'http://') !== false ) {
		return $link;
	}
	return 'https://'.$link;
}


function getPageParentId($term_id) {
	$ancestors = get_ancestors( $term_id, 'page' );
	if ( empty($ancestors) ) {
		return $term_id;
	}
	$ancestors = array_reverse($ancestors);
	return @$ancestors[0];
}

function getNews() {
	$posts_array = get_posts(
		array(
			'posts_per_page' => -1,
			'post_type' => 'post',
			'orderby' => 'post_date',
			'order'   => 'DESC',
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'term_id',
					'terms' => 8,
				)
			)
		)
	);
	//echo '<pre>';var_dump($posts_array); echo '</pre>'; exit;
	return $posts_array;
}

function get_snippet( $str, $wordCount = 55 ) {
	return implode(
		'',
		array_slice(
			preg_split(
				'/([\s,\.;\?\!]+)/',
				$str,
				$wordCount*2+1,
				PREG_SPLIT_DELIM_CAPTURE
			),
			0,
			$wordCount*2-1
		)
	);
}

?>