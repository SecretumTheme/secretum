<?php
/**
 * Global Theme Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * WordPress Required Content Width
 *
 * @link https://codex.wordpress.org/Content_Width
 */
if (! isset($content_width)) {
	$content_width = secretum_mod('secretum_content_width') ? absint(secretum_mod('secretum_content_width', 'int')) : 640;
}


/**
 * WordPress Theme Settings
 */
add_action('after_setup_theme', function() {
	// Load Theme Translated Strings
	load_theme_textdomain('secretum', SECRETUM_THEME_DIR . '/languages');

	// Register Navigation Menus
	register_nav_menus(array(
		'secretum-navbar-primary-above' => __('Primary Navbar Above Header', 'secretum'),
		'secretum-navbar-primary-below' => __('Primary Navbar Below Header', 'secretum'),
		'secretum-navbar-primary-left' 	=> __('Primary Navbar Left of Logo', 'secretum'),
		'secretum-navbar-primary-right' => __('Primary Navbar Right of Logo', 'secretum'),
		'secretum-navbar-top-left' 		=> __('Top Left Textual Menu', 'secretum'),
		'secretum-navbar-top-right' 	=> __('Top Right Textual Menu', 'secretum'),
		'secretum-navbar-copyright' 	=> __('Copyright Textual Menu', 'secretum')
	));

	// Remove Front-end Comments
	if (secretum_mod('secretum_close_comments')) {
		add_filter('comments_open', '__return_false', 20);
	}

	// Remove Front-end Pings
	if (secretum_mod('secretum_close_pings')) {
		add_filter('pings_open', '__return_false', 20);
	}

	// Header Image Panel
	add_theme_support('custom-header');

	// Background Image Panel
	add_theme_support('custom-background');

	// Adjust Avatar Thumbnail Size
	add_image_size('secretum-thumbnail-avatar', 100, 100, true);

	// Featured Image Support
	add_image_size('secretum-featured-image', 2000, 1200, true);

	// WordPress to manage <title> tags
	add_theme_support('title-tag');

	// Include RSS feed links to wp_head
	add_theme_support('automatic-feed-links');

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// Customizer Support
	add_theme_support('customize-selective-refresh-widgets');

	// HTML5 Markup Support
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	// Post Format Support
	add_theme_support('post-formats', array(
		'aside',
		'audio',
		'image',
		'link',
		'quote',
		'status',
		'video'
	));

	// Enable Custom Logo Support
	add_theme_support('custom-logo', array(
        'height' 		=> secretum_mod('custom_logo_height') ? absint(secretum_mod('secretum_custom_logo_height', 'int')) : 75,
        'width' 		=> secretum_mod('custom_logo_width') ? absint(secretum_mod('secretum_custom_logo_width', 'int')) : 300,
        'header-text' 	=> array('site-title', 'site-description'),
        'flex-height' 	=> true,
        'flex-width' 	=> true
    ));
});


/**
 * Initialize Theme Settings
 */
add_action('init', function() {
	// Enable Categories & Tags On Pages
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');

	// Inject Analytics Code Within WordPress Header or Footer
	$analytics = secretum_mod('analytics_code');
	$location = secretum_mod('analytics_location', 'attr');

	if ($location == "header" && !empty($analytics)) {
		add_action('wp_head', function() {
			echo secretum_mod('analytics_code', 'script');
		});

	} elseif (empty($location) && !empty($analytics)) {
		add_action('wp_footer', function() {
			echo secretum_mod('analytics_code', 'script');
		});
	}
});


/**
 * Remove User Endpoints From API
 *
 * @link http://v2.wp-api.org/reference/users/
 *
 * @param array $endpoints Wordpress API Endpoints
 * @return array Cleaned Registered Endpoints
 */
add_filter('rest_endpoints', function($endpoints) {
	// Remove List Of Users
	if (isset($endpoints['/wp/v2/users'])) {
		unset($endpoints['/wp/v2/users']);
	}

	// Remove User View
	if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
		unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
	}

	return $endpoints;
}, 1000);
