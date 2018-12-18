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
		return apply_filters('secretum_customizer_default_settings', array_merge(
			secretum_customizer_global_settings(),
			secretum_customizer_copyright_settings()
		));
	}
}


/**
 * Customizer Global Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_global_settings'))
{
	function secretum_customizer_global_settings() {
		// Default Settings Array
		$settings_array = array(
			// Header Top Bar
			'header_top_status' 								=> '',
			'header_top_wrapper_background_color' 				=> '',
			'header_top_wrapper_padding' 						=> '',
			'header_top_wrapper_margin' 						=> '',
			'header_top_wrapper_border_type' 					=> '',
			'header_top_wrapper_border_color' 					=> '',
			'header_top_container' 								=> '',
			'header_top_container_background_color'				=> '',
			'header_top_container_padding_x' 					=> '',
			'header_top_container_padding_y' 					=> '',
			'header_top_container_border_type' 					=> '',
			'header_top_container_border_color' 				=> '',
			'header_top_font_size' 								=> '',
			'header_top_font_family' 							=> '',
			'header_top_font_style' 							=> '',
			'header_top_text_transform' 						=> '',
			'header_top_item_background_color' 					=> '',
			'header_top_item_background_hover_color' 			=> '',
			'header_top_item_background_hover_color' 			=> '',
			'header_top_item_margin_x' 							=> '',
			'header_top_item_margin_y' 							=> '',
			'header_top_item_padding_x' 						=> '',
			'header_top_item_padding_y' 						=> '',
			'header_top_item_border_type' 						=> '',
			'header_top_item_border_color' 						=> '',
			'header_top_item_text_color' 						=> '',
			'header_top_item_link_color' 						=> '',
			'header_top_item_link_hover_color' 					=> '',
			// Header
			'header_status' 									=> '',
			'custom_headers' 									=> '',
			'header_container' 									=> '',
			'header_wrapper_padding' 							=> '',
			'header_container_padding' 							=> '',
			'header_wrapper_margin' 							=> '',
			// Header Branding
			'site_identity_alignment' 							=> '',
			'custom_logo_maxwidth' 								=> '',
			'custom_logo_height' 								=> '',
			'custom_logo_width' 								=> '',
			'site_identity_title_container_background_color' 	=> '',
			'site_identity_title_container_margin_x' 			=> '',
			'site_identity_title_container_margin_y' 			=> 'my-0',
			'site_identity_title_container_padding_x' 			=> '',
			'site_identity_title_container_padding_y' 			=> '',
			'site_identity_title_container_border_type' 		=> '',
			'site_identity_title_container_border_color' 		=> '',
			'site_identity_title_font_family' 					=> '',
			'site_identity_title_font_size' 					=> '',
			'site_identity_title_font_style' 					=> 'font-weight-bold',
			'site_identity_title_text_transform' 				=> '',
			'site_identity_title_link_color' 					=> 'color-primary-link',
			'site_identity_title_link_hover_color' 				=> '',
			'site_identity_desc_container_background_color' 	=> '',
			'site_identity_desc_container_margin_x' 			=> '',
			'site_identity_desc_container_margin_y' 			=> 'my-0',
			'site_identity_desc_container_padding_x' 			=> '',
			'site_identity_desc_container_padding_y' 			=> '',
			'site_identity_desc_container_border_type' 			=> '',
			'site_identity_desc_container_border_color' 		=> '',
			'site_identity_desc_font_family' 					=> '',
			'site_identity_desc_font_size' 						=> '',
			'site_identity_desc_font_style' 					=> '',
			'site_identity_desc_text_transform' 				=> '',
			'site_identity_desc_text_color' 					=> 'color-primary-light',
			// Primary Navigation
			'primary_nav_status' 								=> '',
			'primary_nav_wrapper_background_color' 				=> 'bg-secondary',
			'primary_nav_wrapper_padding' 						=> '',
			'primary_nav_wrapper_margin' 						=> '',
			'primary_nav_wrapper_border_type' 					=> '',
			'primary_nav_wrapper_border_color' 					=> '',
			'primary_nav_container' 							=> '',
			'primary_nav_container_background_color'			=> '',
			'primary_nav_container_padding_x' 					=> '',
			'primary_nav_container_padding_y' 					=> '',
			'primary_nav_container_border_type' 				=> '',
			'primary_nav_container_border_color' 				=> '',
			'primary_nav_alignment' 							=> '',
			'primary_nav_font_size' 							=> '',
			'primary_nav_font_family' 							=> '',
			'primary_nav_font_style' 							=> '',
			'primary_nav_text_transform' 						=> '',
			'primary_nav_item_background_color' 				=> '',
			'primary_nav_item_background_hover_color' 			=> '',
			'primary_nav_item_background_hover_color' 			=> '',
			'primary_nav_item_padding_y' 						=> '',
			'primary_nav_item_padding_x' 						=> '',
			'primary_nav_item_border_type' 						=> '',
			'primary_nav_item_border_color' 					=> '',
			'primary_nav_item_text_color' 						=> '',
			'primary_nav_item_link_color' 						=> '',
			'primary_nav_item_link_hover_color' 				=> '',
			'primary_nav_toggler_icon_alignment' 				=> '',
			'primary_nav_toggler_icon_size' 					=> '',
			'primary_nav_toggler_icon_background_color' 		=> '',
			'primary_nav_toggler_icon_margin_y' 				=> '',
			'primary_nav_toggler_icon_margin_x' 				=> '',
			'primary_nav_toggler_icon_border_radius'			=> '',
			'primary_nav_toggler_icon_border_color' 			=> '',
			'header_menu_alignment' 							=> '',
			'header_menu_container' 							=> '',
			'header_menu_wrapper_margin' 						=> '',
			'header_menu_wrapper_padding' 						=> '',
			'header_menu_container_padding' 					=> '',
			'header_sticky' 									=> '',
			'header_background_color' 							=> '',
			'header_border_color' 								=> '',
			'body_container' 									=> '',
			'body_wrapper_padding' 								=> '',
			'body_container_padding' 							=> '',
			'body_wrapper_margin_top' 							=> '',
			'body_wrapper_margin_bottom' 						=> '',
			'body_background_color' 							=> '',
			'entrymeta_published_status' 						=> '',
			'entrymeta_link' 									=> '',
			'entrymeta_updated_status' 							=> '1',
			'entrymeta_author_status' 							=> '',
			'entrymeta_author_link' 							=> '',
			'entrymeta_catlinks_status' 						=> '',
			'entrymeta_tagslinks_status' 						=> '',
			'entrymeta_commentlink_status' 						=> '',
			'post_navigation_links' 							=> '',
			'entry_background_color' 							=> '',
			'entry_text_color' 									=> '',
			'entry_link_color' 									=> '',
			'entry_link_color_hover' 							=> '',
			'custom_frontpages' 								=> '',
			'frontpage_header_status' 							=> '',
			'frontpage_heading_bg' 								=> '',
			'frontpage_heading_html' 							=> '',
			'frontpage_map_status' 								=> '',
			'frontpage_map_address' 							=> '',
			'sidebar_location' 									=> 'right',
			'sidebar_wrapper_padding' 							=> '',
			'sidebar_wrapper_margin_top' 						=> '',
			'sidebar_wrapper_margin_bottom' 					=> '',
			'sidebar_background_color' 							=> '',
			'footer_container' 									=> '',
			'footer_wrapper_padding' 							=> '',
			'footer_container_padding' 							=> '',
			'footer_wrapper_margin' 							=> '',
			'custom_footers' 									=> '',
			'footer_status' 									=> '',
			'footer_background_color' 							=> 'bg-gray-100',
			'footer_border_color' 								=> '',
			// Extras
			'analytics_location' 								=> '',
			'analytics_code' 									=> '',
			'enqueue_theme_colors' 								=> '',
			'enqueue_contact_pageids' 							=> '',
			'scrolltop' 										=> '',
			'scrolltop_background_color' 						=> '',
			'scrolltop_background_hover_color' 					=> '',
			'scrolltop_border_type' 							=> '',
			'scrolltop_border_color' 							=> '',
			'scrolltop_margin_right' 							=> '',
			'scrolltop_margin_bottom' 							=> '',
			'scrolltop_padding_x' 								=> '',
			'scrolltop_padding_y' 								=> '',
			'content_width' 									=> ''
		);

		// Filter Settings Array
		return apply_filters('secretum_customizer_global_settings', $settings_array);
	}
}



/**
 * Copyright Panel Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_copyright_settings'))
{
	function secretum_customizer_copyright_settings() {
		return apply_filters('secretum_customizer_copyright_settings', array(
			// Display Status
			'copyright_status' 									=> '',
			// Wrapper
			'copyright_wrapper_background_color' 				=> '',
			'copyright_wrapper_padding_y' 						=> 'py-5',
			'copyright_wrapper_margin_top' 						=> '',
			'copyright_wrapper_margin_bottom' 					=> '',
			'copyright_wrapper_border_type' 					=> '',
			'copyright_wrapper_border_color' 					=> '',
			// Container
			'copyright_container_type' 							=> '',
			'copyright_container_background_color' 				=> '',
			'copyright_container_padding_x' 					=> '',
			'copyright_container_padding_y' 					=> '',
			'copyright_container_border_type' 					=> '',
			'copyright_container_border_color' 					=> '',
			// Copyright Statement
			'copyright_text' 									=> '',
			'copyright_text_alignment' 							=> '',
			'copyright_text_font_family' 						=> '',
			'copyright_text_font_size' 							=> '',
			'copyright_text_font_style' 						=> '',
			'copyright_text_transform' 							=> '',
			'copyright_text_color' 								=> '',
			'copyright_text_link_color' 						=> '',
			'copyright_text_link_hover_color' 					=> '',
			// Navigation
			'copyright_nav_wrapper_background_color' 			=> '',
			'copyright_nav_wrapper_border_type' 				=> '',
			'copyright_nav_wrapper_border_color' 				=> '',
			'copyright_nav_wrapper_padding_y' 					=> '',
			'copyright_nav_font_size' 							=> '',
			'copyright_nav_font_family' 						=> '',
			'copyright_nav_font_style' 							=> '',
			'copyright_nav_text_transform' 						=> '',
			'copyright_nav_alignment' 							=> '',
			// Navigation Items
			'copyright_nav_item_background_color' 				=> '',
			'copyright_nav_item_background_hover_color' 		=> '',
			'copyright_nav_item_border_type' 					=> '',
			'copyright_nav_item_border_color' 					=> '',
			'copyright_nav_item_margin_y' 						=> '',
			'copyright_nav_item_margin_x' 						=> '',
			'copyright_nav_item_padding_y' 						=> '',
			'copyright_nav_item_padding_x' 						=> '',
			'copyright_nav_item_text_color' 					=> '',
			'copyright_nav_item_link_color' 					=> '',
			'copyright_nav_item_link_hover_color' 				=> ''
		));
	}
}
