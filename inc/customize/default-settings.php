<?php
/**
 * WordPress Customizer Settings
 *
 * @package    Secretum
 * @subpackage Secretum\default-settings.php
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/default-settings.php
 */

namespace Secretum;

/**
 * Customizer Default Settings
 *
 * @return array Merged Customizer Setting Names
 */
function secretum_customizer_default_settings() {
	return array_merge(
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
	);
}//end secretum_customizer_default_settings()


/**
 * Globals Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_globals_settings() {
	return [
		'globals_background_color'								=> '',
		'globals_text_color' 									=> '',
		'globals_link_color' 									=> '',
		'globals_link_hover_color' 								=> '',
		// Enqueue Scripts.
		'enqueue_contact_pageids' 								=> '',
		'enqueue_theme_colors' 									=> '',
		'enqueue_ekko_lightbox_status' 							=> '',
		'enqueue_woocommerce_status' 							=> '',
		'enqueue_woocommerce_bookings_status' 					=> '',
		'enqueue_primary_javascript_status' 					=> '',
		'enqueue_secretum_javascript_status' 					=> '',
		'enqueue_bootstrap_bundle_javascript_status'			=> '',
		// Content Width.
		'content_width' 										=> '640',
	];
}//end secretum_customizer_globals_settings()


/**
 * Site Identity Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_site_identity_settings() {
	return [
		// Branding.
		'site_identity_alignment' 							=> '',
		'site_identity_branding_status' 					=> '',
		'site_identity_logo_status' 						=> '',
		'site_identity_tagline_status' 						=> '',
		'custom_logo_maxwidth' 								=> '300',
		'custom_logo_height' 								=> '75',
		'custom_logo_width' 								=> '300',
		// Title Container.
		'site_identity_title_container_background_color' 	=> '',
		'site_identity_title_container_margin_x' 			=> '',
		'site_identity_title_container_margin_y' 			=> 'my-0',
		'site_identity_title_container_padding_x' 			=> '',
		'site_identity_title_container_padding_y' 			=> 'py-0',
		'site_identity_title_container_border_type' 		=> '',
		'site_identity_title_container_border_color' 		=> '',
		// Title Textuals.
		'site_identity_title_textual_font_family' 			=> '',
		'site_identity_title_textual_font_size' 			=> 'text-32',
		'site_identity_title_textual_font_style' 			=> '',
		'site_identity_title_textual_text_transform' 		=> '',
		'site_identity_title_textual_link_color' 			=> 'color-primary-link',
		'site_identity_title_textual_link_hover_color' 		=> '',
		// Desc Container.
		'site_identity_desc_container_background_color' 	=> '',
		'site_identity_desc_container_margin_x' 			=> '',
		'site_identity_desc_container_margin_y' 			=> '',
		'site_identity_desc_container_padding_x' 			=> '',
		'site_identity_desc_container_padding_y' 			=> '',
		'site_identity_desc_container_border_type' 			=> '',
		'site_identity_desc_container_border_color' 		=> '',
		// Desc Textuals.
		'site_identity_desc_textual_font_family' 			=> '',
		'site_identity_desc_textual_font_size' 				=> '',
		'site_identity_desc_textual_font_style' 			=> '',
		'site_identity_desc_textual_text_transform' 		=> '',
		'site_identity_desc_textual_text_color' 			=> 'color-secondary',
	];
}//end secretum_customizer_site_identity_settings()


/**
 * Header Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_header_top_settings() {
	return [
		// Display Status.
		'header_top_status' 								=> '',
		// Wrapper.
		'header_top_wrapper_background_color' 				=> '',
		'header_top_wrapper_margin_top' 					=> '',
		'header_top_wrapper_margin_bottom' 					=> '',
		'header_top_wrapper_padding_y' 						=> '',
		'header_top_wrapper_border_type' 					=> '',
		'header_top_wrapper_border_color' 					=> '',
		// Container.
		'header_top_container_type' 						=> '',
		'header_top_container_background_color'				=> '',
		'header_top_container_margin_x' 					=> '',
		'header_top_container_margin_y' 					=> '',
		'header_top_container_padding_x' 					=> '',
		'header_top_container_padding_y' 					=> '',
		'header_top_container_border_type' 					=> '',
		'header_top_container_border_color' 				=> '',
		// Textuals.
		'header_top_text_alignment'							=> '',
		'header_top_textual_font_size' 						=> '',
		'header_top_textual_font_family' 					=> '',
		'header_top_textual_font_style' 					=> '',
		'header_top_textual_text_transform' 				=> '',
		'header_top_textual_text_color' 					=> '',
		'header_top_textual_link_color' 					=> '',
		'header_top_textual_link_hover_color' 				=> '',
		// Items.
		'header_top_items_background_color' 				=> '',
		'header_top_items_background_hover_color' 			=> '',
		'header_top_items_margin_x' 						=> '',
		'header_top_items_margin_y' 						=> '',
		'header_top_items_padding_x' 						=> '',
		'header_top_items_padding_y' 						=> '',
		'header_top_items_border_type' 						=> '',
		'header_top_items_border_radius' 					=> '',
		'header_top_items_border_color' 					=> '',
	];
}//end secretum_customizer_header_top_settings()


/**
 * Header Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_header_settings() {
	return [
		// Display Status.
		'header_status' 									=> '',
		'header_sticky' 									=> '',
		'custom_headers' 									=> '',
		// Wrapper.
		'header_wrapper_background_color' 					=> '',
		'header_wrapper_padding_x' 							=> '',
		'header_wrapper_padding_y' 							=> 'py-4',
		'header_wrapper_margin_top' 						=> '',
		'header_wrapper_margin_bottom' 						=> '',
		'header_wrapper_border_type' 						=> '',
		'header_wrapper_border_color' 						=> '',
		// Container.
		'header_container_type' 							=> '',
		'header_container_background_color' 				=> '',
		'header_container_margin_x' 						=> '',
		'header_container_margin_y' 						=> '',
		'header_container_padding_x' 						=> '',
		'header_container_padding_y' 						=> '',
		'header_container_border_type' 						=> '',
		'header_container_border_color' 					=> '',
	];
}//end secretum_customizer_header_settings()


/**
 * Primary Navigation Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_primary_nav_settings() {
	return [
		// Display Status.
		'primary_nav_status' 								=> '',
		'primary_nav_search_status' 						=> '',
		// Wrapper.
		'primary_nav_wrapper_background_color' 				=> 'bg-primary',
		'primary_nav_wrapper_border_type' 					=> '',
		'primary_nav_wrapper_border_color' 					=> '',
		'primary_nav_wrapper_margin_bottom' 				=> '',
		'primary_nav_wrapper_margin_top' 					=> '',
		'primary_nav_wrapper_padding_x' 					=> '',
		'primary_nav_wrapper_padding_y' 					=> 'py-0',
		// Container.
		'primary_nav_container_type' 						=> '',
		'primary_nav_container_background_color'			=> '',
		'primary_nav_container_margin_x' 					=> '',
		'primary_nav_container_margin_y' 					=> '',
		'primary_nav_container_padding_x' 					=> '',
		'primary_nav_container_padding_y' 					=> '',
		'primary_nav_container_border_type' 				=> '',
		'primary_nav_container_border_color' 				=> '',
		// Textual.
		'primary_nav_textual_text_transform' 				=> '',
		'primary_nav_textual_font_family' 					=> '',
		'primary_nav_textual_font_size' 					=> 'text-14',
		'primary_nav_textual_font_style' 					=> '',
		'primary_nav_textual_text_color' 					=> '',
		'primary_nav_textual_link_color' 					=> 'color-whiteish-link',
		'primary_nav_textual_link_hover_color' 				=> 'color-white-hover',
		// Nav Items.
		'primary_nav_alignment' 							=> '',
		'primary_nav_items_background_color' 				=> '',
		'primary_nav_items_background_hover_color' 			=> '',
		'primary_nav_items_border_type' 					=> 'border-left',
		'primary_nav_items_border_radius' 					=> '',
		'primary_nav_items_border_color' 					=> 'border-primary-light',
		'primary_nav_items_margin_y' 						=> '',
		'primary_nav_items_margin_x' 						=> '',
		'primary_nav_items_padding_y' 						=> 'py-3',
		'primary_nav_items_padding_x' 						=> 'px-3',
		// Dropdown.
		'primary_nav_dropdown_text_alignment' 				=> '',
		'primary_nav_dropdown_background_color' 			=> 'bg-primary',
		'primary_nav_dropdown_background_hover_color' 		=> 'bg-primary-light-hover',
		'primary_nav_dropdown_border_type' 					=> '',
		'primary_nav_dropdown_border_radius' 				=> '',
		'primary_nav_dropdown_border_color' 				=> '',
		'primary_nav_dropdown_margin_y' 					=> '',
		'primary_nav_dropdown_margin_x' 					=> '',
		'primary_nav_dropdown_padding_y' 					=> '',
		'primary_nav_dropdown_padding_x' 					=> '',
		// Dropdown Textual.
		'primary_nav_dropdown_textual_text_transform'		=> '',
		'primary_nav_dropdown_textual_font_family'			=> '',
		'primary_nav_dropdown_textual_font_size'			=> 'text-14',
		'primary_nav_dropdown_textual_font_style'			=> '',
		'primary_nav_dropdown_textual_text_color'			=> '',
		'primary_nav_dropdown_textual_link_color'			=> 'color-whiteish-link',
		'primary_nav_dropdown_textual_link_hover_color' 	=> 'color-white-hover',
		// Toggler.
		'primary_nav_toggler_icon_alignment' 				=> '',
		'primary_nav_toggler_font_size' 					=> '',
		'primary_nav_toggler_background_color' 				=> 'bg-whiteish',
		'primary_nav_toggler_margin_x' 						=> 'mx-3',
		'primary_nav_toggler_margin_y' 						=> 'my-3',
		'primary_nav_toggler_border_radius' 				=> 'rounded-0',
		'primary_nav_toggler_border_color' 					=> 'border-whiteish',
		// Woo Cart Icon.
		'primary_nav_cart_link_padding_t' 					=> 'pt-2',
		'primary_nav_cart_icon_color' 						=> 'color-light',
		'primary_nav_cart_icon_size' 						=> 'text-22',
		'primary_nav_cart_count_color' 						=> 'color-gray-500',
		'primary_nav_cart_count_size' 						=> 'text-14',
	];
}//end secretum_customizer_primary_nav_settings()



/**
 * Body Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_body_settings() {
	return [
		// Wrapper.
		'body_wrapper_background_color' 					=> 'bg-whiteish',
		'body_wrapper_padding_x' 							=> '',
		'body_wrapper_padding_y' 							=> '',
		'body_wrapper_margin_top' 							=> '',
		'body_wrapper_margin_bottom' 						=> '',
		'body_wrapper_border_type' 							=> '',
		'body_wrapper_border_color' 						=> '',
		// Container.
		'body_container_type' 								=> '',
		'body_container_background_color' 					=> '',
		'body_container_margin_x' 							=> '',
		'body_container_margin_y' 							=> '',
		'body_container_padding_x' 							=> '',
		'body_container_padding_y' 							=> '',
		'body_container_border_type' 						=> '',
		'body_container_border_color' 						=> '',
	];
}//end secretum_customizer_body_settings()


/**
 * Featured Image Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_featured_image_settings() {
	return [
		// Display.
		'featured_image_status' 							=> '',
		'featured_image_display_location' 					=> '',
		// Wrapper.
		'featured_image_wrapper_background_color' 			=> '',
		'featured_image_wrapper_padding_x' 					=> '',
		'featured_image_wrapper_padding_y' 					=> '',
		'featured_image_wrapper_margin_top' 				=> '',
		'featured_image_wrapper_margin_bottom' 				=> 'pb-4',
		'featured_image_wrapper_border_type' 				=> '',
		'featured_image_wrapper_border_color' 				=> '',
		// Container.
		'featured_image_container_type' 					=> '',
		'featured_image_container_background_color' 		=> '',
		'featured_image_container_margin_x' 				=> '',
		'featured_image_container_margin_y' 				=> '',
		'featured_image_container_padding_x' 				=> '',
		'featured_image_container_padding_y' 				=> '',
		'featured_image_container_border_type' 				=> '',
		'featured_image_container_border_color' 			=> '',
	];
}//end secretum_customizer_featured_image_settings()


/**
 * Body Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_entry_settings() {
	return [
		// Display Settings.
		'entry_meta_link'									=> '',
		'entry_meta_author_link'							=> '',
		'entry_meta_author_status'							=> '',
		'entry_meta_catlinks_status'						=> '',
		'entry_meta_commentlink_status'						=> '',
		'entry_meta_published_status'						=> '',
		'entry_meta_tagslinks_status'						=> '',
		'entry_meta_updated_status'							=> '',
		'entry_meta_post_navigation_links'					=> '',
		// Wrapper.
		'entry_wrapper_background_color' 					=> 'bg-white',
		'entry_wrapper_padding_x'							=> 'px-4',
		'entry_wrapper_padding_y' 							=> 'py-4',
		'entry_wrapper_margin_top' 							=> 'mt-4',
		'entry_wrapper_margin_bottom' 						=> 'mb-4',
		'entry_wrapper_border_type' 						=> '',
		'entry_wrapper_border_color' 						=> '',
	];
}//end secretum_customizer_entry_settings()


/**
 * Sidebar Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_sidebar_settings() {
	return [
		// Display Status.
		'sidebar_status' 									=> '',
		'sidebar_location' 									=> 'right',
		// Wrapper.
		'sidebar_wrapper_background_color' 					=> 'bg-white',
		'sidebar_wrapper_padding_x' 						=> 'px-4',
		'sidebar_wrapper_padding_y' 						=> 'py-4',
		'sidebar_wrapper_margin_top' 						=> 'mt-4',
		'sidebar_wrapper_margin_right' 						=> '',
		'sidebar_wrapper_margin_bottom' 					=> 'mb-4',
		'sidebar_wrapper_margin_left' 						=> '',
		'sidebar_wrapper_border_type' 						=> '',
		'sidebar_wrapper_border_color' 						=> '',
		// Container.
		'sidebar_container_background_color' 				=> '',
		'sidebar_container_margin_x' 						=> '',
		'sidebar_container_margin_y' 						=> '',
		'sidebar_container_padding_x' 						=> '',
		'sidebar_container_padding_y' 						=> '',
		'sidebar_container_border_type' 					=> '',
		'sidebar_container_border_color' 					=> '',
		// Textuals.
		'sidebar_text_alignment' 							=> '',
		'sidebar_font_family' 								=> '',
		'sidebar_font_size' 								=> '',
		'sidebar_font_style' 								=> '',
		'sidebar_text_transform' 							=> '',
		'sidebar_text_color' 								=> '',
		'sidebar_link_color' 								=> '',
		'sidebar_link_hover_color' 							=> '',
	];
}//end secretum_customizer_sidebar_settings()


/**
 * Footer Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_footer_settings() {
	return [
		// Display Status.
		'footer_status' 									=> '',
		'custom_footers' 									=> '',
		// Wrapper.
		'footer_wrapper_background_color' 					=> 'bg-gray-100',
		'footer_wrapper_margin_top' 						=> '',
		'footer_wrapper_margin_bottom' 						=> '',
		'footer_wrapper_padding_x' 							=> '',
		'footer_wrapper_padding_y' 							=> 'py-4',
		'footer_wrapper_border_type' 						=> 'border-top',
		'footer_wrapper_border_color' 						=> 'border-gray-300',
		// Container.
		'footer_container_type' 							=> '',
		'footer_container_background_color' 				=> '',
		'footer_container_margin_x' 						=> '',
		'footer_container_margin_y' 						=> '',
		'footer_container_padding_x' 						=> '',
		'footer_container_padding_y' 						=> '',
		'footer_container_border_type' 						=> '',
		'footer_container_border_color' 					=> '',
		// Textuals.
		'footer_text_alignment' 							=> '',
		'footer_textual_font_family' 						=> '',
		'footer_textual_font_size' 							=> '',
		'footer_textual_font_style' 						=> '',
		'footer_textual_text_transform' 					=> '',
		'footer_textual_text_color' 						=> '',
		'footer_textual_link_color' 						=> '',
		'footer_textual_link_hover_color' 					=> '',
	];
}//end secretum_customizer_footer_settings()


/**
 * Copyright Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_copyright_settings() {
	return [
		// Display Status.
		'copyright_status' 									=> '',
		// Wrapper.
		'copyright_wrapper_background_color' 				=> 'bg-white',
		'copyright_wrapper_padding_x' 						=> '',
		'copyright_wrapper_padding_y' 						=> 'py-3',
		'copyright_wrapper_margin_top' 						=> '',
		'copyright_wrapper_margin_bottom' 					=> '',
		'copyright_wrapper_border_type' 					=> 'border-top',
		'copyright_wrapper_border_color' 					=> 'border-gray-300',
		// Container.
		'copyright_container_type' 							=> '',
		'copyright_container_background_color' 				=> '',
		'copyright_container_margin_x' 						=> '',
		'copyright_container_margin_y' 						=> '',
		'copyright_container_padding_x' 					=> '',
		'copyright_container_padding_y' 					=> '',
		'copyright_container_border_type' 					=> '',
		'copyright_container_border_color' 					=> '',
		// Textual.
		'copyright_text_alignment' 							=> '',
		'copyright_textual_text_transform' 					=> '',
		'copyright_textual_font_family' 					=> '',
		'copyright_textual_font_size' 						=> '',
		'copyright_textual_font_style' 						=> '',
		'copyright_textual_text_color' 						=> 'color-gray-600',
		'copyright_textual_link_color' 						=> 'color-gray-700-link',
		'copyright_textual_link_hover_color' 				=> 'color-gray-800-link-hover',
		// Copyright Statement.
		'copyright_text' 									=> '',
	];
}//end secretum_customizer_copyright_settings()


/**
 * Copyright Navigation Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_copyright_nav_settings() {
	return [
		// Display Status.
		'copyright_nav_status' 								=> '',
		// Wrapper.
		'copyright_nav_wrapper_background_color' 			=> '',
		'copyright_nav_wrapper_border_type' 				=> '',
		'copyright_nav_wrapper_border_color' 				=> '',
		'copyright_nav_wrapper_margin_bottom' 				=> '',
		'copyright_nav_wrapper_margin_top' 					=> '',
		'copyright_nav_wrapper_padding_x' 					=> '',
		'copyright_nav_wrapper_padding_y' 					=> '',
		// Textual.
		'copyright_nav_textual_text_transform' 				=> '',
		'copyright_nav_textual_font_family' 				=> '',
		'copyright_nav_textual_font_size' 					=> '',
		'copyright_nav_textual_font_style' 					=> '',
		'copyright_nav_textual_text_color' 					=> '',
		'copyright_nav_textual_link_color' 					=> '',
		'copyright_nav_textual_link_hover_color' 			=> '',
		// Alignment.
		'copyright_nav_alignment' 							=> '',
		// Nav Items.
		'copyright_nav_items_background_color' 				=> '',
		'copyright_nav_items_background_hover_color' 		=> '',
		'copyright_nav_items_border_type' 					=> '',
		'copyright_nav_items_border_radius' 				=> '',
		'copyright_nav_items_border_color' 					=> '',
		'copyright_nav_items_margin_y' 						=> '',
		'copyright_nav_items_margin_x' 						=> '',
		'copyright_nav_items_padding_y' 					=> '',
		'copyright_nav_items_padding_x' 					=> '',
	];
}//end secretum_customizer_copyright_nav_settings()


/**
 * Frontpage Customizer Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_frontpage_settings() {
	return [
		'custom_frontpages' 								=> '',
		'frontpage_header_status' 							=> '',
		'frontpage_heading_bg' 								=> '',
		'frontpage_heading_html' 							=> '',
		'frontpage_map_status' 								=> '',
		'frontpage_map_address' 							=> '',
		// Wrapper.
		'frontpage_wrapper_background_color' 				=> '',
		'frontpage_wrapper_padding_x' 						=> '',
		'frontpage_wrapper_padding_y' 						=> '',
		'frontpage_wrapper_margin_top' 						=> '',
		'frontpage_wrapper_margin_bottom' 					=> '',
		'frontpage_wrapper_border_type' 					=> '',
		'frontpage_wrapper_border_color' 					=> '',
	];
}//end secretum_customizer_frontpage_settings()



/**
 * Customizer Global Settings
 *
 * @return array Customizer Setting Names
 */
function secretum_customizer_extras_settings() {
	return [
		// Analytics.
		'analytics_location' 								=> '',
		// Scroll Top.
		'scrolltop' 										=> '',
		'scrolltop_text_color' 								=> 'text-primary',
		'scrolltop_icon_size' 								=> 'text-16',
		'scrolltop_background_color' 						=> 'bg-gray-200',
		'scrolltop_background_hover_color' 					=> 'bg-gray-300',
		'scrolltop_margin_right' 							=> '',
		'scrolltop_margin_bottom' 							=> '',
		'scrolltop_border_type' 							=> '',
		'scrolltop_border_color' 							=> '',
		'scrolltop_border_radius' 							=> 'rounded-circle',
		'scrolltop_padding_x' 								=> 'px-3',
		'scrolltop_padding_y' 								=> 'py-2',
	];
}//end secretum_customizer_extras_settings()
