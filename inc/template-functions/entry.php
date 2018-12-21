<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Entry Wrapper Classes
 *
 * @return string Class names
 */
if (!function_exists('secretum_entry_wrapper')) {
	function secretum_entry_wrapper()
	{
		// Classes
		$columns = secretum_entry_columns();
		$background = secretum_mod('entry_wrapper_background_color', 'attr', true);
		$border = secretum_mod('entry_wrapper_border_type', 'attr', true) . secretum_mod('entry_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('entry_wrapper_margin_top', 'attr', true) . secretum_mod('entry_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('entry_wrapper_padding_x', 'attr', true) . secretum_mod('entry_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_entry_wrapper', $columns . $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Columns Based On Sidebar Location
 *
 * @return string Columns value
 */
if (!function_exists('secretum_entry_columns')) {
	function secretum_entry_columns()
	{
		// Global Sidebar Location
		$global_location = secretum_mod('sidebar_location', 'attr');

		// Local Sidebar Location
		$local_location = get_post_meta(get_the_ID(), 'secretum_meta_sidebars');

		// Build Sidebar Location
		$sidebar_location = !empty($local_location[0]) ? $local_location[0] : $global_location;

		// Default Width
		$columns = "-12";

		// Half Width
		if (!empty($sidebar_location) && $sidebar_location == 'both') {
			$columns = "-6";
		}

		// Normal Width
		if (!empty($sidebar_location) && ($sidebar_location == 'left' || $sidebar_location == 'right')) {
			$columns = "-8";
		}

		// Full Width
		if (!empty($sidebar_location) && $sidebar_location == 'none') {
			$columns = "-12";
		}

		// Full Width
		if (!is_active_sidebar('sidebar-1') && !is_active_sidebar('sidebar-right') && !is_active_sidebar('sidebar-left')) {
			$columns = "-12";
		}

		return $columns;
	}
}




/**
 * Check if the content has been modified
 */
if (!function_exists('secretum_modified_date_check')) {
	function secretum_modified_date_check()
	{
		return (get_the_time('U') !== get_the_modified_time('U')) ? true : false;
	}
}


/**
 * Get Post Category Listing
 */
if (!function_exists('secretum_categories_list')) {
	function secretum_categories_list()
	{
		$get_the_category_list = get_the_category_list(', ');

		if ($get_the_category_list) {
			return $get_the_category_list;
		}
	}
}


/**
 * Post Tags Listing
 */
if (!function_exists('secretum_tags_list')) {
	function secretum_tags_list()
	{
		$get_the_tag_list = get_the_tag_list('', ', ');

		if ($get_the_tag_list) {
			return $get_the_tag_list;
		}
	}
}


/**
 * Custom Edit Post Link
 */
if (!function_exists('secretum_edit_link')) {
	function secretum_edit_link($post_id = '')
	{
		edit_post_link(
			sprintf(
				esc_html__('Edit %s', 'secretum'),
				the_title('<span class="screen-reader-text">"', '"</span>', false)
			),
			'<i class="fa fa-pencil"></i> <span class="edit-link">',
			'</span>',
			$post_id
		);
	}
}
