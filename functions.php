<?php
/**
 * Battery Apollo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Battery_Apollo
 */

// require_once 'bs4navwalker.php';
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

if (!function_exists('battery_apollo_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function battery_apollo_setup() {
		/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on Battery Apollo, use a find and replace
			 * to change 'battery-apollo' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('battery-apollo', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
			 * Let WordPress manage the document title.
			 * By adding theme support, we declare that this theme does not use a
			 * hard-coded <title> tag in the document head, and expect WordPress to
			 * provide it for us.
		*/
		add_theme_support('title-tag');

		/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		// Vara add
		register_nav_menus(array(
			'primary' => esc_html__('Primary', 'battery-apollo'),
		));

		/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('battery_apollo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		));

		//Support woocommerce
		add_theme_support('woocommerce');
	}
endif;
add_action('after_setup_theme', 'battery_apollo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function battery_apollo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('battery_apollo_content_width', 640);
}
add_action('after_setup_theme', 'battery_apollo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function battery_apollo_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'battery-apollo'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'battery-apollo'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	// Vara add
	// register_sidebar(array(
	// 	'name' => 'Footer - Copyright Text',
	// 	'id' => 'footer_copyright_text',
	// 	'before_widget' => '<div class="footer_copyright_text">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h4>',
	// 	'after_title' => '</h4>',
	// ));

	register_sidebar(array(
		'name' => __('First Footer Widget Area', 'battery-apollo'),
		'id' => 'first-footer-widget-area',
		'description' => __('The first footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	// Second Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(array(
		'name' => __('Second Footer Widget Area', 'battery-apollo'),
		'id' => 'second-footer-widget-area',
		'description' => __('The second footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	// Third Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(array(
		'name' => __('Third Footer Widget Area', 'battery-apollo'),
		'id' => 'third-footer-widget-area',
		'description' => __('The third footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	// Fourth Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(array(
		'name' => __('Fourth Footer Widget Area', 'battery-apollo'),
		'id' => 'fourth-footer-widget-area',
		'description' => __('The fourth footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	// Fifth Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(array(
		'name' => __('Fifth Footer Widget Area', 'battery-apollo'),
		'id' => 'fifth-footer-widget-area',
		'description' => __('The fifth footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	// Sixth Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(array(
		'name' => __('Sixth Footer Widget Area', 'battery-apollo'),
		'id' => 'sixth-footer-widget-area',
		'description' => __('The sixth footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	// Seventh Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(array(
		'name' => __('Seventh Footer Widget Area', 'battery-apollo'),
		'id' => 'seventh-footer-widget-area',
		'description' => __('The seventh footer widget area', 'Battery Apollo'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));
}

add_action('widgets_init', 'battery_apollo_widgets_init');

// Vara add
// function html_widget_title($var) {
// 	// $var = (str_replace('[', '<', $var));
// 	$var = (str_replace('[', '<i class="fa "' . $var, $var));
// 	$var = (str_replace(']', '>', $var));
// 	return $var;

// }
// add_filter('widget_title', 'html_widget_title');

/**
 * Enqueue scripts and styles.
 * Vara add
 */
// function battery_apollo_styles() {
// 	wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
// 	$dependencies = array('bootstrap');
// 	wp_enqueue_style('battery-apollo-style', get_stylesheet_uri(), $dependencies);
// }

function battery_apollo_scripts() {
	// Vara remove
	wp_enqueue_style('battery-apollo-style', get_stylesheet_uri());

	// Vara add
	// $dependencies = array('jquery');
	// wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '4.0.0', true);

	// Vara add
	wp_enqueue_script('battery-apollo-navigation', get_template_directory_uri() . '/build/js/bundle.min.js', array(), '20180414', true);

	// Vara remove
	// wp_enqueue_script('battery-apollo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	// wp_enqueue_script('battery-apollo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
// add_action('wp_enqueue_scripts', 'battery_apollo_styles');
add_action('wp_enqueue_scripts', 'battery_apollo_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Vara add
function register_menu_top() {
	register_nav_menu('menu-top-1', __('Menu Top 1'));
}
add_action('init', 'register_menu_top');

// Vara add
function register_menu_main() {
	register_nav_menu('menu-main', __('Menu Main'));
}
add_action('init', 'register_menu_main');

// Vara add
add_filter('widget_title', 'do_shortcode');
add_shortcode('iconinfo', 'bn_shortcode_info');
function bn_shortcode_info($attr) {
	return '<svg class="vara vara-info"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vara-info"></use></svg>';
}

add_shortcode('iconpushpin', 'bn_shortcode_pushpin');
function bn_shortcode_pushpin($attr) {
	return '<svg class="vara vara-pushpin"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vara-pushpin"></use></svg>';
}

add_shortcode('iconuser', 'bn_shortcode_user');
function bn_shortcode_user($attr) {
	return '<svg class="vara vara-user-tie"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vara-user-tie"></use></svg>';
}

add_shortcode('iconearth', 'bn_shortcode_earth');
function bn_shortcode_earth($attr) {
	return '<svg class="vara vara-earth"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vara-earth"></use></svg>';
}