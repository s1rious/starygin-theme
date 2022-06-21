<?php

/**
 * starygin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starygin
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starygin_setup() {
	/*
		* Make theme available for translation.
		* If you're building a theme based on starygin, use a find and replace
		* to change 'starygin' to the name of your theme in all the template files.
		*/

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
	register_nav_menus(
		array(
			'main' => esc_html__('Primary', 'starygin'),
		)
	);
	register_nav_menus(
		array(
			'footer' => esc_html__('Footer', 'starygin'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'starygin_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'starygin_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starygin_content_width() {
	$GLOBALS['content_width'] = apply_filters('starygin_content_width', 640);
}
add_action('after_setup_theme', 'starygin_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starygin_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'starygin'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'starygin'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'starygin_widgets_init');

/**
 * Enqueue scripts, fonts and styles.
 */
function starygin_scripts() {
	wp_enqueue_style('starygin-theme', get_stylesheet_uri());
	wp_enqueue_style('starygin-styles', get_template_directory_uri()  . '/assets/css/style.min.css');
	wp_enqueue_script('starygin-libs', get_template_directory_uri()  . '/assets/js/libs.min.js', array(), null, true);
	wp_enqueue_script('starygin-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js', array(), null, true);
	wp_enqueue_script('starygin-scripts', get_template_directory_uri()  . '/assets/js/script.min.js', array('starygin-libs', 'starygin-scroll'), null, true);
	wp_enqueue_script('starygin-custom', get_template_directory_uri()  . '/assets/js/custom.min.js', array('starygin-scripts'), null, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'starygin_scripts');


function starygin_customizer_setting($wp_customize) {
	// add a setting 
	$wp_customize->add_setting('second_logo');
	// Add a control to upload the hover logo
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_logo', array(
		'label' => 'Загрузите второй логотип',
		'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
		'settings' => 'second_logo',
		'priority' => 8 // show it just below the custom-logo
	)));

	$wp_customize->add_setting('phone_number');
	$wp_customize->add_control('phone_number', array(
		'type' => 'text',
		'label' => 'Номер телефона',
		'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
		'settings' => 'phone_number',
		'priority' => 9 // show it just below the custom-logo
	));

	$wp_customize->add_setting('privacy_policy');
	$wp_customize->add_control('privacy_policy', array(
		'type' => 'text',
		'label' => 'Текст политики конфидециальности',
		'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
		'settings' => 'privacy_policy',
		'priority' => 10 // show it just below the custom-logo
	));

	$wp_customize->add_setting('footer_motto');
	$wp_customize->add_control('footer_motto', array(
		'type' => 'text',
		'label' => 'Текст лозунга в подвале',
		'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
		'settings' => 'footer_motto',
		'priority' => 11 // show it just below the custom-logo
	));
}

add_action('customize_register', 'starygin_customizer_setting');
