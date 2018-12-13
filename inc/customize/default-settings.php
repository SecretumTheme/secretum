<?php
/**
 * WordPress Customizer Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Customizer Default Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_default_settings'))
{
	function secretum_customizer_default_settings() {
		// Default Settings Array
		$settings_array = array(
			// Feature
			'scrolltop' 							=> '',
			// Header Top Bar
			'header_top_status' 					=> '1',
			// Header
			'header_status' 						=> '',
			'header_logo_location' 					=> '',
			'custom_logo_maxwidth' 					=> '',
			'custom_logo_height' 					=> '',
			'custom_logo_width' 					=> '',
			'header_container' 						=> '',
			'header_wrapper_padding' 				=> '',
			'header_container_padding' 				=> '',
			'header_wrapper_margin' 				=> '',
			'custom_headers' 						=> '',
			'logo_identity_status' 					=> '',
			'primary_menu_status' 					=> '',
			'header_menu_alignment' 				=> '',
			'header_menu_container' 				=> '',
			'header_menu_wrapper_margin' 			=> '',
			'header_menu_wrapper_padding' 			=> '',
			'header_menu_container_padding' 		=> '',
			'header_sticky' 						=> '',
			'header_background_color' 				=> '',
			'header_border_color' 					=> '',
			'header_menu_background_color' 			=> 'bg-whiteish',
			'header_menu_border_color' 				=> '',
			'body_container' 						=> '',
			'body_wrapper_padding' 					=> '',
			'body_container_padding' 				=> '',
			'body_wrapper_margin_top' 				=> '',
			'body_wrapper_margin_bottom' 			=> '',
			'body_background_color' 				=> '',
			'entrymeta_published_status' 			=> '',
			'entrymeta_link' 						=> '',
			'entrymeta_updated_status' 				=> '1',
			'entrymeta_author_status' 				=> '',
			'entrymeta_author_link' 				=> '',
			'entrymeta_catlinks_status' 			=> '',
			'entrymeta_tagslinks_status' 			=> '',
			'entrymeta_commentlink_status' 			=> '',
			'post_navigation_links' 				=> '',
			'entry_background_color' 				=> '',
			'entry_text_color' 						=> '',
			'entry_link_color' 						=> '',
			'entry_link_color_hover' 				=> '',
			'custom_frontpages' 					=> '',
			'frontpage_header_status' 				=> '',
			'frontpage_heading_bg' 					=> '',
			'frontpage_heading_html' 				=> '',
			'frontpage_map_status' 					=> '',
			'frontpage_map_address' 				=> '',
			'sidebar_wrapper_padding' 				=> '',
			'sidebar_wrapper_margin_top' 			=> '',
			'sidebar_wrapper_margin_bottom' 		=> '',
			'sidebar_location' 						=> '',
			'sidebar_background_color' 				=> '',
			'footer_container' 						=> '',
			'footer_wrapper_padding' 				=> '',
			'footer_container_padding' 				=> '',
			'footer_wrapper_margin' 				=> '',
			'custom_footers' 						=> '',
			'footer_status' 						=> '',
			'footer_background_color' 				=> '',
			'footer_border_color' 					=> '',
			// Copyright Display
			'copyright_status' 						=> '',
			// Copyright Area
			'copyright_container' 					=> '',
			'copyright_wrapper_padding' 			=> 'py-5',
			'copyright_container_padding' 			=> '',
			'copyright_wrapper_margin' 				=> '',
			// Copyright Area Colors
			'copyright_background_color' 			=> 'bg-whiteish',
			'copyright_text_color' 					=> '',
			'copyright_text_color_hover' 			=> '',
			'copyright_menu_background_color' 		=> '',
			'copyright_menu_text_color' 			=> '',
			'copyright_menu_text_color_hover' 		=> '',
			'copyright_menu_border_color' 			=> '',
			// Copyright Statement
			'copyright_text' 						=> '',
			// Copyright Navigation
			'copyright_nav_alignment' 				=> '',
			'copyright_nav_item_border' 			=> '',
			'copyright_nav_item_paddingy' 			=> '',
			'copyright_nav_item_paddingx' 			=> '',
			'copyright_nav_item_margin' 			=> '',
			'copyright_nav_item_background_color' 	=> '',
			'copyright_nav_item_text_color' 		=> '',
			'copyright_nav_item_text_color_hover' 	=> '',
			'copyright_nav_item_border_color' 		=> '',
			'analytics_location' 					=> '',
			'analytics_code' 						=> '',
			'enqueue_contact_pageids' 				=> '',
			'content_width' 						=> '',
			'feature_documentation_display' 		=> '',
			'feature_documentation_toc' 			=> '',
			'feature_documentation_category_widget' => '',
			'feature_documentation_recent_widget' 	=> '',
			'feature_documentation_taxonomy_topic' 	=> '',
			'feature_documentation_taxonomy_tag' 	=> '',
			'documentation_container' 				=> '',
			'documentation_wrapper_padding' 		=> '',
			'documentation_container_padding' 		=> '',
			'documentation_wrapper_margin_top' 		=> '',
			'documentation_wrapper_margin_bottom' 	=> '',
			'feature_testimonial_display' 			=> '',
			'feature_testimonial_query_widget' 		=> ''
		);

		// Filter Settings Array
		return apply_filters('secretum_customizer_default_settings', $settings_array);
	}
}
