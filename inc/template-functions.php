<?php
/**
 * Global Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Sanitize Pages Dropdown Menu
 *
 * @see /inc/customizer/frontpage/settings.php
 *
 * @param int $page_id Curret page id
 * @param array $setting
 * @return int Valid page id
 */
if (!function_exists('secretum_sanitize_dropdown_pages')) {
	function secretum_sanitize_dropdown_pages($page_id, $setting)
	{
		// Retrieve the post status based on the Page ID
		return ('publish' == get_post_status(absint($page_id)) ? absint($page_id) : $setting->default);
	}
}


/**
 * Encode Script For Database
 *
 * @see /inc/system/extras/customizer/text/*
 *
 * @param string $string Script String
 * @return string Cleaned Script
 */
if (!function_exists('secretum_sanitize_script')) {
	function secretum_sanitize_script($string)
	{
		return base64_encode($string);
	}
}


/**
 * Escape & Decode Script For Textarea
 *
 * @see /inc/system/extras/customizer/text/*
 *
 * @param string $string Script String
 * @return string Cleaned Script
 */
if (!function_exists('secretum_escape_script')) {
	function secretum_escape_script($string)
	{
		return esc_textarea(base64_decode($string));
	}
}


/**
 * Sanitize HTML For Display
 *
 * @see /inc/customizer/text/*
 *
 * @param string $string HTML String
 * @return string Cleaned HTML
 */
if (!function_exists('secretum_sanitize_html')) {
	function secretum_sanitize_html($string)
	{
		// Sanitize content for allowed HTML tags
		$data = wp_kses_post($string);

		// Convert HTML entities to corresponding characters
		return html_entity_decode($data);
	}
}


/**
 * Sanitize Everything From String
 *
 * @param string $string HTML String
 * @return string Cleaned HTML
 */
if (!function_exists('secretum_sanitize_all')) {
	function secretum_sanitize_all($string)
	{
		// Strip all HTML tags including script and style
		$data = wp_strip_all_tags($string, true);

		// Convert all applicable characters to HTML entities
		return htmlentities($data);
	}
}


/**
 * Sanitize Boolean Value
 *
 * @param bool $checked If value is selected
 * @return bool Return true if selected
 */
if (!function_exists('secretum_sanitize_bool')) {
	function secretum_sanitize_bool($checked)
	{
		return ((isset($checked) && true == $checked) ? true : false);
	}
}


/**
 * Sanitize Checkbox Value
 *
 * @param bool $checked If value is selected
 * @return bool Return true if selected
 */
if (!function_exists('secretum_sanitize_checkbox')) {
	function secretum_sanitize_checkbox($checked)
	{
		return ((isset($checked) && true == $checked) ? true : false);
	}
}


/**
 * Default Menu Fallback
 */
if (!function_exists('secretum_menu_fallback')) {
	function secretum_menu_fallback()
	{
		echo '<ul id="main-menu" class="navbar-nav ml-auto py-3"><li class="menu-item">';
		echo '<a href="' . admin_url('nav-menus.php') . '">' . apply_filters('secretum_create_menu_text', __('Create Menu', 'secretum')) . '</a>';
		echo '</li></ul>';

	}

}


/**
 * Default Menu Fallback
 */
if (!function_exists('secretum_account_menu_fallback')) {
	function secretum_account_menu_fallback()
	{
		echo '<ul id="account-menu"><li class="menu-item">';
		echo '<a href="' . admin_url('nav-menus.php') . '">' . apply_filters('secretum_create_menu_text', __('Create Menu', 'secretum')) . '</a>';
		echo '</li></ul>';

	}

}


/**
 * Retrieve paginated links for archive post pages.
 */
if (!function_exists('secretum_paginate_links')) {
	function secretum_paginate_links(\WP_Query $wp_query = null, $echo = true)
	{
		if (null === $wp_query) {
			global $wp_query;
		}

		if ($wp_query->max_num_pages <= 1) { return; }

		return paginate_links(
			[
				'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
				'format'       => '?paged=%#%',
				'current'      => max(1, get_query_var('paged')),
				'total'        => $wp_query->max_num_pages,
				'type'         => 'array',
				'show_all'     => false,
				'end_size'     => 3,
				'mid_size'     => 1,
				'prev_next'    => false,
				'add_args'     => false,
				'add_fragment' => ''
			]
		);
	}
}


/**
 * Render Breadcrumbs
 *
 * @example do_action('secretum_breadcrumbs');
 * @see /page-templates/documentation.php
 *
 * @param string $taxonomy The taxonomy term
 * @param bool 	 $top_link True to enable top return link
 * @param bool 	 $icons True to enable Font Awesome icons
 * @param string Text only, icons will override, defaults to ' > '
 * @return string Breadcrumbs HTML
 */
if (!function_exists('secretum_breadcrumbs')) {
	function secretum_breadcrumbs($taxonomy = '', $top_link = false, $icons = false, $seperator = false)
	{
		// Required
		if (empty($taxonomy)) { return; }

		global $post;

		// Get Terms Array
		$terms = get_the_terms($post->ID, sanitize_html_class($taxonomy));

		// If Items Set
		if (isset($terms[0]->name) && isset($terms[0]->slug)) {
			// Get Home URL
			$home_url = esc_url(get_option('home'));

			// Get Category Name
			$category_name = sanitize_text_field($terms[0]->name);

			// Get Category Slug
			$category_slug = sanitize_html_class($terms[0]->slug);

			// Build Category URL
			//$category_url 	= $home_url . '/' . sanitize_html_class($terms[0]->slug) . '/';
			$category_url = get_term_link($category_slug, sanitize_html_class($taxonomy));

			// Home Icon
			$home = ($icons) ? '<i class="fa fa-home" aria-hidden="true"></i> ' : '';

			// Home Text
			$home_text = __('Home', 'secretum');

			// Build Seperator
			if ($seperator && $icons) {
				$sep = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

			} elseif($seperator && !$icons) {
				$sep = wp_filter_nohtml_kses($seperator);

			} else {
				$sep = ' > ';

			}

			// Build Top Return Link
			if ($top_link && $icons) {
				$top = '<a href="#top" class="ml-2 p-2"><i class="fa fa-caret-up" aria-hidden="true" title="Return to Top"></i></a>';

			} elseif($top_link && !$icons) {
				$top = ' | <a href="#top">top ^</a>';

			} else {
				$top = '';

			}

			// Return HTML
			return '<div class="breadcrumbs">' . $home . '<a href="' . $home_url . '">' . $home_text . '</a> ' . $sep . ' <a href="' . $category_url . '">' . $category_name . '</a>' . $top . '</div>';
		}
	}
}
