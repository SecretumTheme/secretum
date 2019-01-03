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
if (!function_exists('secretum_customizer_default_settings')) {
	function secretum_customizer_default_settings()
	{
		return apply_filters('secretum_customizer_default_settings', array_merge(
			secretum_customizer_globals_settings(),
			secretum_customizer_site_identity_settings(),
			secretum_customizer_header_top_settings(),
			secretum_customizer_header_settings(),
			secretum_customizer_primary_nav_settings(),
			secretum_customizer_body_settings(),
			secretum_customizer_featured_image_settings(),
			secretum_customizer_entry_settings(),
			secretum_customizer_sidebar_settings(),
			secretum_customizer_footer_settings(),
			secretum_customizer_copyright_settings(),
			secretum_customizer_copyright_nav_settings(),
			secretum_customizer_frontpage_settings(),
			secretum_customizer_extras_settings()
		));
	}
}


/**
 * Globals Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_globals_settings')) {
	function secretum_customizer_globals_settings()
	{
		return apply_filters('secretum_customizer_globals_settings', array(
			'globals_background_color'							=> '',
			'globals_text_color' 								=> '',
			'globals_link_color' 								=> '',
			'globals_link_hover_color' 							=> '',
			// Enqueue Scripts
			'enqueue_contact_pageids' 							=> '',
			'enqueue_theme_colors' 								=> '',
			'enqueue_ekko_lightbox_status' 						=> '',
			'enqueue_woocommerce_status' 						=> 1,
			'enqueue_woocommerce_bookings_status' 				=> '',
			'enqueue_theme_js_status' 							=> '',
			'enqueue_secretum_js_status' 						=> '',
			'enqueue_bootstrap_bundle_js_status'				=> '',
			'enqueue_jquery_status' 							=> '',
			// Content Width
			'content_width' 									=> '640'
		));
	}
}


/**
 * Site Identity Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_site_identity_settings')) {
	function secretum_customizer_site_identity_settings()
	{
		return apply_filters('secretum_customizer_site_identity_settings', array(
			// Branding
			'site_identity_alignment' 							=> '',
			'site_identity_branding_status' 					=> '',
			'site_identity_logo_status' 						=> '',
			'site_identity_tagline_status' 						=> '',
			'custom_logo_maxwidth' 								=> '',
			'custom_logo_height' 								=> '75',
			'custom_logo_width' 								=> '300',
			// Title Contianer
			'site_identity_title_container_background_color' 	=> '',
			'site_identity_title_container_margin_x' 			=> '',
			'site_identity_title_container_margin_y' 			=> 'my-0',
			'site_identity_title_container_padding_x' 			=> '',
			'site_identity_title_container_padding_y' 			=> '',
			'site_identity_title_container_border_type' 		=> '',
			'site_identity_title_container_border_color' 		=> '',
			// Title Textuals
			'site_identity_title_textual_font_family' 			=> '',
			'site_identity_title_textual_font_size' 			=> '',
			'site_identity_title_textual_font_style' 			=> '',
			'site_identity_title_textual_text_transform' 		=> '',
			'site_identity_title_textual_link_color' 			=> 'color-primary-link',
			'site_identity_title_textual_link_hover_color' 		=> '',
			// Desc Container
			'site_identity_desc_container_background_color' 	=> '',
			'site_identity_desc_container_margin_x' 			=> '',
			'site_identity_desc_container_margin_y' 			=> 'my-0',
			'site_identity_desc_container_padding_x' 			=> '',
			'site_identity_desc_container_padding_y' 			=> '',
			'site_identity_desc_container_border_type' 			=> '',
			'site_identity_desc_container_border_color' 		=> '',
			// Desc Textuals
			'site_identity_desc_textual_font_family' 			=> '',
			'site_identity_desc_textual_font_size' 				=> '',
			'site_identity_desc_textual_font_style' 			=> '',
			'site_identity_desc_textual_text_transform' 		=> '',
			'site_identity_desc_textual_text_color' 			=> 'color-primary-light',
		));
	}
}


/**
 * Header Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_header_top_settings')) {
	function secretum_customizer_header_top_settings()
	{
		return apply_filters('secretum_customizer_header_top_settings', array(
			// Display Status
			'header_top_status' 								=> '',
			// Wrapper
			'header_top_wrapper_background_color' 				=> '',
			'header_top_wrapper_margin_top' 					=> '',
			'header_top_wrapper_margin_bottom' 					=> '',
			'header_top_wrapper_padding_y' 						=> '',
			'header_top_wrapper_border_type' 					=> '',
			'header_top_wrapper_border_color' 					=> '',
			// Container
			'header_top_container_type' 						=> '',
			'header_top_container_background_color'				=> '',
			'header_top_container_margin_x' 					=> '',
			'header_top_container_margin_y' 					=> '',
			'header_top_container_padding_x' 					=> '',
			'header_top_container_padding_y' 					=> '',
			'header_top_container_border_type' 					=> '',
			'header_top_container_border_color' 				=> '',
			// Textuals
			'header_top_text_alignment'							=> '',
			'header_top_textual_font_size' 						=> '',
			'header_top_textual_font_family' 					=> '',
			'header_top_textual_font_style' 					=> '',
			'header_top_textual_text_transform' 				=> '',
			'header_top_textual_text_color' 					=> '',
			'header_top_textual_link_color' 					=> '',
			'header_top_textual_link_hover_color' 				=> '',
			// Items
			'header_top_items_background_color' 				=> '',
			'header_top_items_background_hover_color' 			=> '',
			'header_top_items_margin_x' 						=> '',
			'header_top_items_margin_y' 						=> '',
			'header_top_items_padding_x' 						=> '',
			'header_top_items_padding_y' 						=> '',
			'header_top_items_border_type' 						=> '',
			'header_top_items_border_radius' 					=> '',
			'header_top_items_border_color' 					=> '',
		));
	}
}


/**
 * Header Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_header_settings')) {
	function secretum_customizer_header_settings()
	{
		return apply_filters('secretum_customizer_header_settings', array(
			// Display Status
			'header_status' 								=> '',
			'header_sticky' 								=> '',
			'custom_headers' 								=> '',
			// Wrapper
			'header_wrapper_background_color' 				=> '',
			'header_wrapper_padding_x' 						=> '',
			'header_wrapper_padding_y' 						=> 'py-5',
			'header_wrapper_margin_top' 					=> '',
			'header_wrapper_margin_bottom' 					=> '',
			'header_wrapper_border_type' 					=> '',
			'header_wrapper_border_color' 					=> '',
			// Container
			'header_container_type' 						=> '',
			'header_container_background_color' 			=> '',
			'header_container_margin_x' 					=> '',
			'header_container_margin_y' 					=> '',
			'header_container_padding_x' 					=> '',
			'header_container_padding_y' 					=> '',
			'header_container_border_type' 					=> '',
			'header_container_border_color' 				=> ''
		));
	}
}


/**
 * Primary Navigation Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_primary_nav_settings')) {
	function secretum_customizer_primary_nav_settings()
	{
		return apply_filters('secretum_customizer_primary_nav_settings', array(
			// Display Status
			'primary_nav_status' 								=> '',
			// Wrapper
			'primary_nav_wrapper_background_color' 				=> 'bg-whiteish',
			'primary_nav_wrapper_border_type' 					=> '',
			'primary_nav_wrapper_border_color' 					=> '',
			'primary_nav_wrapper_margin_bottom' 				=> '',
			'primary_nav_wrapper_margin_top' 					=> '',
			'primary_nav_wrapper_padding_x' 					=> '',
			'primary_nav_wrapper_padding_y' 					=> '',
			// Container
			'primary_nav_container_type' 						=> '',
			'primary_nav_container_background_color'			=> '',
			'primary_nav_container_margin_x' 					=> '',
			'primary_nav_container_margin_y' 					=> '',
			'primary_nav_container_padding_x' 					=> '',
			'primary_nav_container_padding_y' 					=> '',
			'primary_nav_container_border_type' 				=> '',
			'primary_nav_container_border_color' 				=> '',
			// Textual
			'primary_nav_textual_text_transform' 				=> '',
			'primary_nav_textual_font_family' 					=> '',
			'primary_nav_textual_font_size' 					=> '',
			'primary_nav_textual_font_style' 					=> '',
			'primary_nav_textual_text_color' 					=> '',
			'primary_nav_textual_link_color' 					=> '',
			'primary_nav_textual_link_hover_color' 				=> '',
			// Nav Items
			'primary_nav_alignment' 							=> '',
			'primary_nav_items_background_color' 				=> '',
			'primary_nav_items_background_hover_color' 			=> '',
			'primary_nav_items_border_type' 					=> '',
			'primary_nav_items_border_radius' 					=> '',
			'primary_nav_items_border_color' 					=> '',
			'primary_nav_items_margin_y' 						=> '',
			'primary_nav_items_margin_x' 						=> '',
			'primary_nav_items_padding_y' 						=> '',
			'primary_nav_items_padding_x' 						=> '',
			// Toggler
			'primary_nav_toggler_icon_alignment' 				=> '',
			'primary_nav_toggler_font_size' 					=> '',
			'primary_nav_toggler_background_color' 				=> '',
			'primary_nav_toggler_margin_x' 						=> '',
			'primary_nav_toggler_margin_y' 						=> '',
			'primary_nav_toggler_border_radius' 				=> '',
			'primary_nav_toggler_border_color' 					=> ''
		));
	}
}



/**
 * Body Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_body_settings')) {
	function secretum_customizer_body_settings()
	{
		return apply_filters('secretum_customizer_body_settings', array(
			// Wrapper
			'body_wrapper_background_color' 				=> '',
			'body_wrapper_padding_x' 						=> '',
			'body_wrapper_padding_y' 						=> '',
			'body_wrapper_margin_top' 						=> '',
			'body_wrapper_margin_bottom' 					=> '',
			'body_wrapper_border_type' 						=> '',
			'body_wrapper_border_color' 					=> '',
			// Container
			'body_container_type' 							=> '',
			'body_container_background_color' 				=> '',
			'body_container_margin_x' 						=> '',
			'body_container_margin_y' 						=> '',
			'body_container_padding_x' 						=> '',
			'body_container_padding_y' 						=> '',
			'body_container_border_type' 					=> '',
			'body_container_border_color' 					=> ''
		));
	}
}


/**
 * Featured Image Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_featured_image_settings')) {
	function secretum_customizer_featured_image_settings()
	{
		return apply_filters('secretum_customizer_featured_image_settings', array(
			// Wrapper
			'featured_image_wrapper_background_color' 				=> '',
			'featured_image_wrapper_padding_x' 						=> '',
			'featured_image_wrapper_padding_y' 						=> '',
			'featured_image_wrapper_margin_top' 					=> '',
			'featured_image_wrapper_margin_bottom' 					=> '',
			'featured_image_wrapper_border_type' 					=> '',
			'featured_image_wrapper_border_color' 					=> '',
			// Container
			'featured_image_container_type' 						=> '',
			'featured_image_container_background_color' 			=> '',
			'featured_image_container_margin_x' 					=> '',
			'featured_image_container_margin_y' 					=> '',
			'featured_image_container_padding_x' 					=> '',
			'featured_image_container_padding_y' 					=> '',
			'featured_image_container_border_type' 					=> '',
			'featured_image_container_border_color' 				=> ''
		));
	}
}


/**
 * Body Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_entry_settings')) {
	function secretum_customizer_entry_settings()
	{
		return apply_filters('secretum_customizer_entry_settings', array(
			// Display Settings
			'entry_meta_link'								=> '',
			'entry_meta_author_link'						=> '',
			'entry_meta_author_status'						=> '',
			'entry_meta_catlinks_status'					=> '',
			'entry_meta_commentlink_status'					=> '',
			'entry_meta_published_status'					=> '',
			'entry_meta_tagslinks_status'					=> '',
			'entry_meta_updated_status'						=> '',
			'entry_meta_post_navigation_links'				=> '',
			// Wrapper
			'entry_wrapper_background_color' 				=> '',
			'entry_wrapper_padding_x'						=> '',
			'entry_wrapper_padding_y' 						=> '',
			'entry_wrapper_margin_top' 						=> 'mt-5',
			'entry_wrapper_margin_bottom' 					=> 'mb-5',
			'entry_wrapper_border_type' 					=> '',
			'entry_wrapper_border_color' 					=> ''
		));
	}
}


/**
 * Sidebar Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_sidebar_settings')) {
	function secretum_customizer_sidebar_settings()
	{
		return apply_filters('secretum_customizer_sidebar_settings', array(
			// Display Status
			'sidebar_status' 								=> '',
			'sidebar_location' 								=> 'right',
			// Wrapper
			'sidebar_wrapper_background_color' 				=> '',
			'sidebar_wrapper_padding_x' 					=> '',
			'sidebar_wrapper_padding_y' 					=> '',
			'sidebar_wrapper_margin_top' 					=> 'mt-5',
			'sidebar_wrapper_margin_bottom' 				=> 'mb-5',
			'sidebar_wrapper_border_type' 					=> '',
			'sidebar_wrapper_border_color' 					=> '',
			// Container
			'sidebar_container_type' 						=> '',
			'sidebar_container_background_color' 			=> '',
			'sidebar_container_margin_x' 					=> '',
			'sidebar_container_margin_y' 					=> '',
			'sidebar_container_padding_x' 					=> '',
			'sidebar_container_padding_y' 					=> '',
			'sidebar_container_border_type' 				=> '',
			'sidebar_container_border_color' 				=> '',
			// Textuals
			'sidebar_text_alignment' 						=> '',
			'sidebar_font_family' 							=> '',
			'sidebar_font_size' 							=> '',
			'sidebar_font_style' 							=> '',
			'sidebar_text_transform' 						=> '',
			'sidebar_text_color' 							=> '',
			'sidebar_link_color' 							=> '',
			'sidebar_link_hover_color' 						=> ''
		));
	}
}


/**
 * Footer Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_footer_settings')) {
	function secretum_customizer_footer_settings()
	{
		return apply_filters('secretum_customizer_footer_settings', array(
			// Display Status
			'footer_status' 								=> '',
			'custom_footers' 								=> '',
			// Wrapper
			'footer_wrapper_background_color' 				=> '',
			'footer_wrapper_margin_top' 					=> '',
			'footer_wrapper_margin_bottom' 					=> '',
			'footer_wrapper_padding_x' 						=> '',
			'footer_wrapper_padding_y' 						=> 'py-5',
			'footer_wrapper_border_type' 					=> '',
			'footer_wrapper_border_color' 					=> '',
			// Container
			'footer_container_type' 						=> '',
			'footer_container_background_color' 			=> '',
			'footer_container_margin_x' 					=> '',
			'footer_container_margin_y' 					=> '',
			'footer_container_padding_x' 					=> '',
			'footer_container_padding_y' 					=> '',
			'footer_container_border_type' 					=> '',
			'footer_container_border_color' 				=> '',
			// Textuals
			'footer_text_alignment' 						=> '',
			'footer_textual_font_family' 					=> '',
			'footer_textual_font_size' 						=> '',
			'footer_textual_font_style' 					=> '',
			'footer_textual_text_transform' 				=> '',
			'footer_textual_text_color' 					=> '',
			'footer_textual_link_color' 					=> '',
			'footer_textual_link_hover_color' 				=> ''
		));
	}
}


/**
 * Copyright Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_copyright_settings')) {
	function secretum_customizer_copyright_settings()
	{
		return apply_filters('secretum_customizer_copyright_settings', array(
			// Display Status
			'copyright_status' 									=> '',
			// Wrapper
			'copyright_wrapper_background_color' 				=> 'bg-whiteish',
			'copyright_wrapper_padding_x' 						=> '',
			'copyright_wrapper_padding_y' 						=> 'py-5',
			'copyright_wrapper_margin_top' 						=> '',
			'copyright_wrapper_margin_bottom' 					=> '',
			'copyright_wrapper_border_type' 					=> '',
			'copyright_wrapper_border_color' 					=> '',
			// Container
			'copyright_container_type' 							=> '',
			'copyright_container_background_color' 				=> '',
			'copyright_container_margin_x' 						=> '',
			'copyright_container_margin_y' 						=> '',
			'copyright_container_padding_x' 					=> '',
			'copyright_container_padding_y' 					=> '',
			'copyright_container_border_type' 					=> '',
			'copyright_container_border_color' 					=> '',
			// Textual
			'copyright_text_alignment' 							=> '',
			'copyright_textual_text_transform' 					=> '',
			'copyright_textual_font_family' 					=> '',
			'copyright_textual_font_size' 						=> '',
			'copyright_textual_font_style' 						=> '',
			'copyright_textual_text_color' 						=> '',
			'copyright_textual_link_color' 						=> '',
			'copyright_textual_link_hover_color' 				=> '',
			// Copyright Statement
			'copyright_text' 									=> '',
		));
	}
}


/**
 * Copyright Navigation Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_copyright_nav_settings')) {
	function secretum_customizer_copyright_nav_settings()
	{
		return apply_filters('secretum_customizer_copyright_nav_settings', array(
			// Display Status
			'copyright_nav_status' 								=> '',
			// Wrapper
			'copyright_nav_wrapper_background_color' 			=> '',
			'copyright_nav_wrapper_border_type' 				=> '',
			'copyright_nav_wrapper_border_color' 				=> '',
			'copyright_nav_wrapper_margin_bottom' 				=> '',
			'copyright_nav_wrapper_margin_top' 					=> '',
			'copyright_nav_wrapper_padding_x' 					=> '',
			'copyright_nav_wrapper_padding_y' 					=> '',
			// Textual
			'copyright_nav_textual_text_transform' 				=> '',
			'copyright_nav_textual_font_family' 				=> '',
			'copyright_nav_textual_font_size' 					=> '',
			'copyright_nav_textual_font_style' 					=> '',
			'copyright_nav_textual_text_color' 					=> '',
			'copyright_nav_textual_link_color' 					=> '',
			'copyright_nav_textual_link_hover_color' 			=> '',
			// Alignment
			'copyright_nav_alignment' 							=> '',
			// Nav Items
			'copyright_nav_items_background_color' 				=> '',
			'copyright_nav_items_background_hover_color' 		=> '',
			'copyright_nav_items_border_type' 					=> '',
			'copyright_nav_items_border_radius' 				=> '',
			'copyright_nav_items_border_color' 					=> '',
			'copyright_nav_items_margin_y' 						=> '',
			'copyright_nav_items_margin_x' 						=> '',
			'copyright_nav_items_padding_y' 					=> '',
			'copyright_nav_items_padding_x' 					=> '',
		));
	}
}


/**
 * Frontpage Customizer Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_frontpage_settings')) {
	function secretum_customizer_frontpage_settings()
	{
		return apply_filters('secretum_customizer_frontpage_settings', array(
			'custom_frontpages' 								=> '',
			'frontpage_header_status' 							=> '',
			'frontpage_heading_bg' 								=> '',
			'frontpage_heading_html' 							=> '',
			'frontpage_map_status' 								=> '',
			'frontpage_map_address' 							=> '',
			// Wrapper
			'frontpage_wrapper_background_color' 				=> '',
			'frontpage_wrapper_padding_x' 						=> '',
			'frontpage_wrapper_padding_y' 						=> '',
			'frontpage_wrapper_margin_top' 						=> '',
			'frontpage_wrapper_margin_bottom' 					=> '',
			'frontpage_wrapper_border_type' 					=> '',
			'frontpage_wrapper_border_color' 					=> '',
		));
	}
}



/**
 * Customizer Global Settings
 *
 * @param array Filtered array
 */
if (!function_exists('secretum_customizer_extras_settings')) {
	function secretum_customizer_extras_settings()
	{
		return apply_filters('secretum_customizer_extras_settings', array(
			// Analytics
			'analytics_location' 								=> '',
			// Scroll Top
			'scrolltop' 										=> '',
			'scrolltop_text_color' 								=> '',
			'scrolltop_background_color' 						=> '',
			'scrolltop_background_hover_color' 					=> '',
			'scrolltop_margin_right' 							=> '',
			'scrolltop_margin_bottom' 							=> '',
			'scrolltop_border_type' 							=> '',
			'scrolltop_border_color' 							=> '',
			'scrolltop_border_radius' 							=> '',
			'scrolltop_padding_x' 								=> '',
			'scrolltop_padding_y' 								=> ''
		));
	}
}
