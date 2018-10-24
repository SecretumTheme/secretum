<?php
/**
 * Secretum Theme: Shortcode That Displays A Defined WordPress Menu
 *
 * @example [secretum_menus menu="180"]
 * @example [secretum_menus menu="short"]
 * @example [secretum_menus menu="REQUIRED" container="" container_class="" container_id="" menu_class="" menu_id="" fallback="" walker="" depth="" before="" after="" link_before="" link_after="" items_wrap="" items_class="" item_spacing="" divider=""]
 *
 * @example Menu With Toggler
 * @example <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
 * @example [secretum_menus menu="short"" container_class="collapse navbar-collapse" container_id="navbarNavDropdown" menu_class="navbar-nav py-2 ml-auto" menu_id="main-menu" fallback="secretum_menu_fallback" walker="WP_Bootstrap_Navwalker" depth="2]
 *
 * @param menu (int|string|WP_Term) REQUIRED Desired menu. Accepts a menu ID, slug, name, or object
 * @param menu_class (string) CSS class to use for the ul element which forms the menu. Default 'menu'
 * @param menu_id (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented
 * @param container (string) Whether to wrap the ul, and what to wrap it with. Default 'div'
 * @param container_class (string) Class that is applied to the container. Default 'menu-{menu slug}-container'
 * @param container_id (string) The ID that is applied to the container
 * @param fallback (string) Callback function, default is 'wp_page_menu'
 * @param walker (string) Walker class name
 * @param depth (int) How many levels of the hierarchy are to be included. 0 means all. Default 0
 * @param before (string) Text before the link markup
 * @param after (string) Text after the link markup
 * @param link_before (string) Text before the link text
 * @param link_after (string) Text after the link text
 * @param items_wrap (string) List items wwrapped. Defaults to: <ul id="%1$s" class="%2$s">%3$s</ul>
 * @param items_class (string) Classes applied to the items if walker="WP_Bootstrap_Navwalker"
 * @param item_spacing (string) Preserve whitespace within menu html. Accepts 'preserve' or 'discard'. Default 'preserve'
 * @param divider (string) Divider class names, ie: "px-4 py-3 border-left border-primary-light" if walker="WP_Bootstrap_Navwalker"
 *
 * @link https://developer.wordpress.org/reference/functions/add_shortcode/
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
if (!defined('ABSPATH')) { exit; }


/**
 * Add Shortcode: secretum_menus
 */
add_shortcode('secretum_menus', function($atts = array(), $content = false) {
	// Get Attributes
	$atts = shortcode_atts(array(
		"menu" 				=> false,
		"container" 		=> false,
		"container_class" 	=> false,
		"container_id" 		=> false,
		"menu_class" 		=> false,
		"menu_id" 			=> false,
		"fallback" 			=> false,
		"walker" 			=> false,
		"depth" 			=> false,
		"before" 			=> false,
		"after" 			=> false,
		"link_before" 		=> false,
		"link_after" 		=> false,
		"items_wrap" 		=> false,
		"items_class" 		=> false,
		"item_spacing" 		=> false,
		"divider" 			=> false
	), $atts);

	// If Name Set
	if (!empty($atts['menu'])) {
		// Set Container Type
		$container = !empty($atts['container']) ? 'ul' : 'div';

		// Set Container Class
		$container_class = !empty($atts['container_class']) ? sanitize_text_field($atts['container_class']) : '';

		// Set Container ID
		$container_id = !empty($atts['container_id']) ? sanitize_text_field($atts['container_id']) : '';

		// Set Menu Class
		$menu_class = !empty($atts['menu_class']) ? sanitize_text_field($atts['menu_class']) : '';

		// Set Menu ID
		$menu_id = !empty($atts['menu_id']) ? sanitize_text_field($atts['menu_id']) : '';

		// Set Fallback Class
		$fallback = !empty($atts['fallback']) ? sanitize_text_field($atts['fallback']) : '';

		// Set Walker Class
		$walker_class = !empty($atts['walker']) ? sanitize_text_field($atts['walker']) : '';
		$walker = !empty($walker_class) ? new $walker_class() : '';

		// Set Depth
		$depth = !empty($atts['depth']) ? absint($atts['depth']) : 0;

		// Set Before Item Text
		$before = !empty($atts['before']) ? sanitize_title($atts['before']) : '';

		// Set After Item Text
		$after = !empty($atts['']) ? sanitize_title($atts['after']) : '';

		// Set Link Before Text
		$link_before = !empty($atts['link_before']) ? sanitize_title($atts['link_before']) : '';

		// Set Link After Text
		$link_after = !empty($atts['link_after']) ? sanitize_title($atts['link_after']) : '';

		// Item Wrapper
		$items_wrap = !empty($atts['items_wrap']) ? sanitize_title($atts['items_wrap']) : '<ul id="%1$s" class="%2$s">%3$s</ul>';

		// Item Class Used Within WP_Bootstrap_Navwalker()
		$items_class = !empty($atts['items_class']) ? $atts['items_class'] : '';

		// Preserve Spacing
		$item_spacing = !empty($atts['item_spacing']) ? 'discard' : 'preserve';

		// Divider Class
		$divider = !empty($atts['divider']) ? sanitize_title($atts['divider']) : '';

		// Return Menu
		return wp_nav_menu(array(
			'menu' 				=> sanitize_html_class($atts['menu']),
			'container' 		=> $container,
			'container_class' 	=> $container_class,
			'container_id' 		=> $container_id,
			'menu_class' 		=> $menu_class,
			'menu_id' 			=> $menu_id,
			'fallback_cb'   	=> $fallback,
			'walker' 			=> $walker,
			'depth' 			=> $depth,
			'before' 			=> $before,
			'after' 			=> $after,
			'link_before' 		=> $link_before,
			'link_after' 		=> $link_after,
			'items_wrap' 		=> $items_wrap,
			'items_class'		=> $items_class,
			'item_spacing' 		=> $item_spacing,
			'divider'			=> $divider,
			'echo' 				=> false
		));
	}
});
