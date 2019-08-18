<?php
/**
 * WordPress Customizer Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/default-settings.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Combined Default Settings
 *
 * @since 1.0.0
 *
 * @return array Merged Settings
 */
function secretum_customizer_default_settings() {
	return apply_filters(
		'secretum_customizer_default_settings',
		array_merge(
			secretum_customizer_theme_settings(),
			secretum_customizer_globals_settings(),
			secretum_customizer_site_identity_settings(),
			secretum_customizer_header_top_settings(),
			secretum_customizer_header_settings(),
			secretum_customizer_primary_nav_settings(),
			secretum_customizer_body_settings(),
			secretum_customizer_breadcrumbs_settings(),
			secretum_customizer_featured_image_settings(),
			secretum_customizer_entry_settings(),
			secretum_customizer_sidebar_settings(),
			secretum_customizer_footer_settings(),
			secretum_customizer_copyright_settings(),
			secretum_customizer_copyright_nav_settings(),
			secretum_customizer_frontpage_settings(),
			secretum_customizer_extras_settings()
		),
		10,
		1
	);

}//end secretum_customizer_default_settings()


/**
 * Theme Style Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_theme_settings() {
	return [
		'theme_color_palette'    => '',
		'theme_default_setting'  => '',
		'theme_background_color' => '',
		'theme_text_color'       => '',
		'theme_link_color'       => '',
		'theme_link_hover_color' => '',
		'theme_font_family'      => '',
		'theme_font_size'        => '',
	];

}//end secretum_customizer_theme_settings()


/**
 * Enqueue Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_globals_settings() {
	return [
		// Enqueue Scripts.
		'enqueue_contact_pageids'                    => '',
		'enqueue_theme_colors'                       => '',
		'enqueue_ekko_lightbox_status'               => '',
		'enqueue_woocommerce_status'                 => '',
		'enqueue_woocommerce_bookings_status'        => '',
		'enqueue_primary_javascript_status'          => '',
		'enqueue_secretum_javascript_status'         => '',
		'enqueue_bootstrap_bundle_javascript_status' => '',
		// Content Width.
		'content_width'                              => '640',
	];

}//end secretum_customizer_globals_settings()


/**
 * Site Identity Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_site_identity_settings() {
	return [
		// Branding.
		'site_identity_alignment'                        => '',
		'site_identity_branding_status'                  => '',
		'site_identity_logo_status'                      => '',
		'site_identity_tagline_status'                   => '',
		'custom_logo_maxwidth'                           => '',
		'custom_logo_height'                             => '',
		'custom_logo_width'                              => '',
		// Title Container.
		'site_identity_title_container_background_color' => '',
		'site_identity_title_container_margin_top'       => '',
		'site_identity_title_container_margin_bottom'    => '',
		'site_identity_title_container_padding_x'        => '',
		'site_identity_title_container_padding_y'        => '',
		'site_identity_title_container_border_type'      => '',
		'site_identity_title_container_border_radius'    => '',
		'site_identity_title_container_border_color'     => '',
		// Title Textuals.
		'site_identity_title_textual_alignment'          => '',
		'site_identity_title_textual_font_family'        => '',
		'site_identity_title_textual_font_size'          => '',
		'site_identity_title_textual_font_style'         => '',
		'site_identity_title_textual_text_transform'     => '',
		'site_identity_title_textual_text_color'         => '',
		'site_identity_title_textual_link_color'         => '',
		'site_identity_title_textual_link_hover_color'   => '',
		// Desc Container.
		'site_identity_desc_container_background_color'  => '',
		'site_identity_desc_container_margin_top'        => '',
		'site_identity_desc_container_margin_bottom'     => '',
		'site_identity_desc_container_padding_x'         => '',
		'site_identity_desc_container_padding_y'         => '',
		'site_identity_desc_container_border_type'       => '',
		'site_identity_desc_container_border_radius'     => '',
		'site_identity_desc_container_border_color'      => '',
		// Desc Textuals.
		'site_identity_desc_textual_alignment'           => '',
		'site_identity_desc_textual_font_family'         => '',
		'site_identity_desc_textual_font_size'           => '',
		'site_identity_desc_textual_font_style'          => '',
		'site_identity_desc_textual_text_transform'      => '',
		'site_identity_desc_textual_text_color'          => '',
		'site_identity_desc_textual_link_color'          => '',
		'site_identity_desc_textual_link_hover_color'    => '',
	];

}//end secretum_customizer_site_identity_settings()


/**
 * Header Top Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_header_top_settings() {
	return [
		// Display Status.
		'header_top_status'                       => '',
		'header_top_alignment'                    => '',
		// Wrapper.
		'header_top_wrapper_background_color'     => '',
		'header_top_wrapper_margin_top'           => '',
		'header_top_wrapper_margin_bottom'        => '',
		'header_top_wrapper_padding_x'            => '',
		'header_top_wrapper_padding_y'            => '',
		'header_top_wrapper_border_type'          => '',
		'header_top_wrapper_border_radius'        => '',
		'header_top_wrapper_border_color'         => '',
		// Container.
		'header_top_container_type'               => '',
		'header_top_container_background_color'   => '',
		'header_top_container_margin_top'         => '',
		'header_top_container_margin_bottom'      => '',
		'header_top_container_padding_x'          => '',
		'header_top_container_padding_y'          => '',
		'header_top_container_border_type'        => '',
		'header_top_container_border_radius'      => '',
		'header_top_container_border_color'       => '',
		// Textuals.
		'header_top_textual_font_family'          => '',
		'header_top_textual_font_size'            => '',
		'header_top_textual_font_style'           => '',
		'header_top_textual_text_transform'       => '',
		'header_top_textual_text_color'           => '',
		'header_top_textual_link_color'           => '',
		'header_top_textual_link_hover_color'     => '',
		// Items.
		'header_top_items_text_alignment'         => '',
		'header_top_items_background_color'       => '',
		'header_top_items_background_hover_color' => '',
		'header_top_items_margin_x'               => '',
		'header_top_items_margin_y'               => '',
		'header_top_items_padding_x'              => '',
		'header_top_items_padding_y'              => '',
		'header_top_items_border_type'            => '',
		'header_top_items_border_radius'          => '',
		'header_top_items_border_color'           => '',
	];

}//end secretum_customizer_header_top_settings()


/**
 * Header Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_header_settings() {
	return [
		// Display Status.
		'header_status'                     => '',
		'header_sticky'                     => '',
		// Wrapper.
		'header_wrapper_background_color'   => '',
		'header_wrapper_padding_x'          => '',
		'header_wrapper_padding_y'          => '',
		'header_wrapper_margin_top'         => '',
		'header_wrapper_margin_bottom'      => '',
		'header_wrapper_border_type'        => '',
		'header_wrapper_border_radius'      => '',
		'header_wrapper_border_color'       => '',
		// Container.
		'header_container_type'             => '',
		'header_container_background_color' => '',
		'header_container_margin_top'       => '',
		'header_container_margin_bottom'    => '',
		'header_container_padding_x'        => '',
		'header_container_padding_y'        => '',
		'header_container_border_type'      => '',
		'header_container_border_radius'    => '',
		'header_container_border_color'     => '',
	];

}//end secretum_customizer_header_settings()


/**
 * Primary Navigation Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_primary_nav_settings() {
	return [
		// Display Status.
		'primary_nav_status'                            => '',
		'primary_nav_toggler_status'                    => '',
		'primary_nav_search_status'                     => '',
		'primary_nav_alignment'                         => '',
		'primary_nav_location'                          => '',
		// Wrapper.
		'primary_nav_wrapper_background_color'          => '',
		'primary_nav_wrapper_margin_bottom'             => '',
		'primary_nav_wrapper_margin_top'                => '',
		'primary_nav_wrapper_padding_x'                 => '',
		'primary_nav_wrapper_padding_y'                 => '',
		'primary_nav_wrapper_border_type'               => '',
		'primary_nav_wrapper_border_radius'             => '',
		'primary_nav_wrapper_border_color'              => '',
		// Container.
		'primary_nav_container_type'                    => '',
		'primary_nav_container_background_color'        => '',
		'primary_nav_container_margin_top'              => '',
		'primary_nav_container_margin_bottom'           => '',
		'primary_nav_container_padding_x'               => '',
		'primary_nav_container_padding_y'               => '',
		'primary_nav_container_border_type'             => '',
		'primary_nav_container_border_radius'           => '',
		'primary_nav_container_border_color'            => '',
		// Textual.
		'primary_nav_textual_text_transform'            => '',
		'primary_nav_textual_font_family'               => '',
		'primary_nav_textual_font_size'                 => '',
		'primary_nav_textual_font_style'                => '',
		'primary_nav_textual_text_color'                => '',
		'primary_nav_textual_link_color'                => '',
		'primary_nav_textual_link_hover_color'          => '',
		// Nav Items.
		'primary_nav_items_text_alignment'              => '',
		'primary_nav_items_background_color'            => '',
		'primary_nav_items_background_hover_color'      => '',
		'primary_nav_items_border_type'                 => '',
		'primary_nav_items_border_radius'               => '',
		'primary_nav_items_border_color'                => '',
		'primary_nav_items_margin_y'                    => '',
		'primary_nav_items_margin_x'                    => '',
		'primary_nav_items_padding_y'                   => '',
		'primary_nav_items_padding_x'                   => '',
		// Dropdown.
		'primary_nav_dropdown_background_color'         => '',
		'primary_nav_dropdown_background_hover_color'   => '',
		'primary_nav_dropdown_margin_y'                 => '',
		'primary_nav_dropdown_margin_x'                 => '',
		'primary_nav_dropdown_padding_y'                => '',
		'primary_nav_dropdown_padding_x'                => '',
		'primary_nav_dropdown_border_type'              => '',
		'primary_nav_dropdown_border_radius'            => '',
		'primary_nav_dropdown_border_color'             => '',
		// Dropdown Textual.
		'primary_nav_dropdown_textual_alignment'        => '',
		'primary_nav_dropdown_textual_text_transform'   => '',
		'primary_nav_dropdown_textual_font_family'      => '',
		'primary_nav_dropdown_textual_font_size'        => '',
		'primary_nav_dropdown_textual_font_style'       => '',
		'primary_nav_dropdown_textual_text_color'       => '',
		'primary_nav_dropdown_textual_link_color'       => '',
		'primary_nav_dropdown_textual_link_hover_color' => '',
		// Toggler.
		'primary_nav_toggler_alignment'                 => '',
		'primary_nav_toggler_font_size'                 => '',
		'primary_nav_toggler_background_color'          => '',
		'primary_nav_toggler_margin_x'                  => '',
		'primary_nav_toggler_margin_y'                  => '',
		'primary_nav_toggler_border_type'               => '',
		'primary_nav_toggler_border_radius'             => '',
		'primary_nav_toggler_border_color'              => '',
		// Woo Cart Icon.
		'primary_nav_cart_link_padding_t'               => '',
		'primary_nav_cart_icon_color'                   => '',
		'primary_nav_cart_icon_size'                    => '',
		'primary_nav_cart_count_color'                  => '',
		'primary_nav_cart_count_size'                   => '',
	];

}//end secretum_customizer_primary_nav_settings()



/**
 * Body Customizer Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_body_settings() {
	return [
		// Display.
		'body_status'                     => '',
		// Wrapper.
		'body_wrapper_background_color'   => '',
		'body_wrapper_padding_x'          => '',
		'body_wrapper_padding_y'          => '',
		'body_wrapper_margin_top'         => '',
		'body_wrapper_margin_bottom'      => '',
		'body_wrapper_border_type'        => '',
		'body_wrapper_border_radius'      => '',
		'body_wrapper_border_color'       => '',
		// Container.
		'body_container_type'             => '',
		'body_container_background_color' => '',
		'body_container_margin_top'       => '',
		'body_container_margin_bottom'    => '',
		'body_container_padding_x'        => '',
		'body_container_padding_y'        => '',
		'body_container_border_type'      => '',
		'body_container_border_radius'    => '',
		'body_container_border_color'     => '',
	];

}//end secretum_customizer_body_settings()


/**
 * Breadcrumbs Section
 *
 * @since 1.8.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_breadcrumbs_settings() {
	return [
		// Display.
		'breadcrumbs_posts_status'               => '',
		'breadcrumbs_pages_status'               => '',
		'breadcrumbs_display_location'           => '',
		'breadcrumbs_categories_type'            => '',
		'breadcrumbs_home'                       => '',
		// Wrapper.
		'breadcrumbs_wrapper_background_color'   => '',
		'breadcrumbs_wrapper_padding_x'          => '',
		'breadcrumbs_wrapper_padding_y'          => '',
		'breadcrumbs_wrapper_margin_top'         => '',
		'breadcrumbs_wrapper_margin_bottom'      => '',
		'breadcrumbs_wrapper_border_type'        => '',
		'breadcrumbs_wrapper_border_radius'      => '',
		'breadcrumbs_wrapper_border_color'       => '',
		// Container.
		'breadcrumbs_container_background_color' => '',
		'breadcrumbs_container_margin_top'       => '',
		'breadcrumbs_container_margin_bottom'    => '',
		'breadcrumbs_container_padding_x'        => '',
		'breadcrumbs_container_padding_y'        => '',
		'breadcrumbs_container_border_type'      => '',
		'breadcrumbs_container_border_radius'    => '',
		'breadcrumbs_container_border_color'     => '',
		// Textuals.
		'breadcrumbs_textual_font_family'        => '',
		'breadcrumbs_textual_font_size'          => '',
		'breadcrumbs_textual_font_style'         => '',
		'breadcrumbs_textual_text_transform'     => '',
		'breadcrumbs_textual_text_color'         => '',
		'breadcrumbs_textual_link_color'         => '',
		'breadcrumbs_textual_link_hover_color'   => '',
	];

}//end secretum_customizer_breadcrumbs_settings()


/**
 * Featured Image Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_featured_image_settings() {
	return [
		// Display.
		'featured_image_status'                     => '',
		'featured_image_display_location'           => '',
		// Wrapper.
		'featured_image_wrapper_background_color'   => '',
		'featured_image_wrapper_padding_x'          => '',
		'featured_image_wrapper_padding_y'          => '',
		'featured_image_wrapper_margin_top'         => '',
		'featured_image_wrapper_margin_bottom'      => '',
		'featured_image_wrapper_border_type'        => '',
		'featured_image_wrapper_border_radius'      => '',
		'featured_image_wrapper_border_color'       => '',
		// Container.
		'featured_image_container_type'             => '',
		'featured_image_container_background_color' => '',
		'featured_image_container_margin_top'       => '',
		'featured_image_container_margin_bottom'    => '',
		'featured_image_container_padding_x'        => '',
		'featured_image_container_padding_y'        => '',
		'featured_image_container_border_type'      => '',
		'featured_image_container_border_radius'    => '',
		'featured_image_container_border_color'     => '',
	];

}//end secretum_customizer_featured_image_settings()


/**
 * Body Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_entry_settings() {
	return [
		// Display.
		'entry_status'                     => '',
		// Display Settings.
		'entry_meta_link'                  => '',
		'entry_meta_author_link'           => '',
		'entry_meta_author_status'         => '',
		'entry_meta_catlinks_status'       => '',
		'entry_meta_commentlink_status'    => '',
		'entry_meta_published_status'      => '',
		'entry_meta_tagslinks_status'      => '',
		'entry_meta_updated_status'        => '',
		'entry_meta_post_navigation_links' => '',
		// Wrapper.
		'entry_wrapper_background_color'   => '',
		'entry_wrapper_padding_x'          => '',
		'entry_wrapper_padding_y'          => '',
		'entry_wrapper_margin_top'         => '',
		'entry_wrapper_margin_bottom'      => '',
		'entry_wrapper_border_type'        => '',
		'entry_wrapper_border_radius'      => '',
		'entry_wrapper_border_color'       => '',
		// Container.
		'entry_container_background_color' => '',
		'entry_container_padding_x'        => '',
		'entry_container_padding_y'        => '',
		'entry_container_margin_top'       => '',
		'entry_container_margin_bottom'    => '',
		'entry_container_border_type'      => '',
		'entry_container_border_radius'    => '',
		'entry_container_border_color'     => '',
		// Title Textuals.
		'entry_textual_font_family'        => '',
		'entry_textual_font_size'          => '',
		'entry_textual_font_style'         => '',
		'entry_textual_text_transform'     => '',
		'entry_textual_text_color'         => '',
		'entry_textual_link_color'         => '',
		'entry_textual_link_hover_color'   => '',
	];

}//end secretum_customizer_entry_settings()


/**
 * Sidebar Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_sidebar_settings() {
	return [
		// Display Status.
		'sidebar_status'                     => '',
		'sidebar_location'                   => '',
		// Wrapper.
		'sidebar_wrapper_background_color'   => '',
		'sidebar_wrapper_padding_x'          => '',
		'sidebar_wrapper_padding_y'          => '',
		'sidebar_wrapper_margin_top'         => '',
		'sidebar_wrapper_margin_right'       => '',
		'sidebar_wrapper_margin_bottom'      => '',
		'sidebar_wrapper_margin_left'        => '',
		'sidebar_wrapper_border_type'        => '',
		'sidebar_wrapper_border_radius'      => '',
		'sidebar_wrapper_border_color'       => '',
		// Container.
		'sidebar_container_background_color' => '',
		'sidebar_container_margin_top'       => '',
		'sidebar_container_margin_bottom'    => '',
		'sidebar_container_padding_x'        => '',
		'sidebar_container_padding_y'        => '',
		'sidebar_container_border_type'      => '',
		'sidebar_container_border_radius'    => '',
		'sidebar_container_border_color'     => '',
		// Textuals.
		'sidebar_textual_alignment'          => '',
		'sidebar_textual_font_family'        => '',
		'sidebar_textual_font_size'          => '',
		'sidebar_textual_font_style'         => '',
		'sidebar_textual_text_transform'     => '',
		'sidebar_textual_text_color'         => '',
		'sidebar_textual_link_color'         => '',
		'sidebar_textual_link_hover_color'   => '',
	];

}//end secretum_customizer_sidebar_settings()


/**
 * Footer Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_footer_settings() {
	return [
		// Display Status.
		'footer_status'                     => '',
		// Wrapper.
		'footer_wrapper_background_color'   => '',
		'footer_wrapper_margin_top'         => '',
		'footer_wrapper_margin_bottom'      => '',
		'footer_wrapper_padding_x'          => '',
		'footer_wrapper_padding_y'          => '',
		'footer_wrapper_border_type'        => '',
		'footer_wrapper_border_radius'      => '',
		'footer_wrapper_border_color'       => '',
		// Container.
		'footer_container_type'             => '',
		'footer_container_background_color' => '',
		'footer_container_margin_top'       => '',
		'footer_container_margin_bottom'    => '',
		'footer_container_padding_x'        => '',
		'footer_container_padding_y'        => '',
		'footer_container_border_type'      => '',
		'footer_container_border_radius'    => '',
		'footer_container_border_color'     => '',
		// Textuals.
		'footer_textual_alignment'          => '',
		'footer_textual_font_family'        => '',
		'footer_textual_font_size'          => '',
		'footer_textual_font_style'         => '',
		'footer_textual_text_transform'     => '',
		'footer_textual_text_color'         => '',
		'footer_textual_link_color'         => '',
		'footer_textual_link_hover_color'   => '',
	];

}//end secretum_customizer_footer_settings()


/**
 * Copyright Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_copyright_settings() {
	return [
		// Display Status.
		'copyright_status'                     => '',
		// Wrapper.
		'copyright_wrapper_background_color'   => '',
		'copyright_wrapper_padding_x'          => '',
		'copyright_wrapper_padding_y'          => '',
		'copyright_wrapper_margin_top'         => '',
		'copyright_wrapper_margin_bottom'      => '',
		'copyright_wrapper_border_type'        => '',
		'copyright_wrapper_border_radius'      => '',
		'copyright_wrapper_border_color'       => '',
		// Container.
		'copyright_container_type'             => '',
		'copyright_container_background_color' => '',
		'copyright_container_margin_top'       => '',
		'copyright_container_margin_bottom'    => '',
		'copyright_container_padding_x'        => '',
		'copyright_container_padding_y'        => '',
		'copyright_container_border_type'      => '',
		'copyright_container_border_radius'    => '',
		'copyright_container_border_color'     => '',
		// Textual.
		'copyright_textual_alignment'          => '',
		'copyright_textual_text_transform'     => '',
		'copyright_textual_font_family'        => '',
		'copyright_textual_font_size'          => '',
		'copyright_textual_font_style'         => '',
		'copyright_textual_text_color'         => '',
		'copyright_textual_link_color'         => '',
		'copyright_textual_link_hover_color'   => '',
		// Copyright Statement.
		'copyright_text'                       => '',
	];

}//end secretum_customizer_copyright_settings()


/**
 * Copyright Navigation Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_copyright_nav_settings() {
	return [
		// Display Status.
		'copyright_nav_status'                       => '',
		'copyright_nav_alignment'                    => '',
		// Wrapper.
		'copyright_nav_wrapper_background_color'     => '',
		'copyright_nav_wrapper_margin_bottom'        => '',
		'copyright_nav_wrapper_margin_top'           => '',
		'copyright_nav_wrapper_padding_x'            => '',
		'copyright_nav_wrapper_padding_y'            => '',
		'copyright_nav_wrapper_border_type'          => '',
		'copyright_nav_wrapper_border_radius'        => '',
		'copyright_nav_wrapper_border_color'         => '',
		// Textual.
		'copyright_nav_textual_text_transform'       => '',
		'copyright_nav_textual_font_family'          => '',
		'copyright_nav_textual_font_size'            => '',
		'copyright_nav_textual_font_style'           => '',
		'copyright_nav_textual_text_color'           => '',
		'copyright_nav_textual_link_color'           => '',
		'copyright_nav_textual_link_hover_color'     => '',
		// Nav Items.
		'copyright_nav_items_text_alignment'         => '',
		'copyright_nav_items_background_color'       => '',
		'copyright_nav_items_background_hover_color' => '',
		'copyright_nav_items_margin_y'               => '',
		'copyright_nav_items_margin_x'               => '',
		'copyright_nav_items_padding_y'              => '',
		'copyright_nav_items_padding_x'              => '',
		'copyright_nav_items_border_type'            => '',
		'copyright_nav_items_border_radius'          => '',
		'copyright_nav_items_border_color'           => '',
	];

}//end secretum_customizer_copyright_nav_settings()


/**
 * Frontpage Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_frontpage_settings() {
	return [
		'frontpage_page_title_status'                => '',
		'frontpage_header_status'                    => '',
		'frontpage_page_header_status'               => '',
		'frontpage_page_content_status'              => '',
		'frontpage_page_footer_status'               => '',
		// Wrapper.
		'frontpage_wrapper_background_color'         => '',
		'frontpage_wrapper_padding_x'                => '',
		'frontpage_wrapper_padding_y'                => '',
		'frontpage_wrapper_margin_top'               => '',
		'frontpage_wrapper_margin_bottom'            => '',
		'frontpage_wrapper_border_type'              => '',
		'frontpage_wrapper_border_radius'            => '',
		'frontpage_wrapper_border_color'             => '',
		// Container.
		'frontpage_container_type'                   => '',
		'frontpage_container_background_color'       => '',
		'frontpage_container_margin_top'             => '',
		'frontpage_container_margin_bottom'          => '',
		'frontpage_container_padding_x'              => '',
		'frontpage_container_padding_y'              => '',
		'frontpage_container_border_type'            => '',
		'frontpage_container_border_radius'          => '',
		'frontpage_container_border_color'           => '',
		// Frontpage Heading Wrapper.
		'frontpage_heading_wrapper_background_color' => '',
		'frontpage_heading_wrapper_padding_x'        => '',
		'frontpage_heading_wrapper_padding_y'        => '',
		'frontpage_heading_wrapper_margin_top'       => '',
		'frontpage_heading_wrapper_margin_bottom'    => '',
		'frontpage_heading_wrapper_border_type'      => '',
		'frontpage_heading_wrapper_border_radius'    => '',
		'frontpage_heading_wrapper_border_color'     => '',
		// Frontpage Content.
		'frontpage_heading_bg'                       => '',
		'frontpage_heading_html'                     => '',
	];

}//end secretum_customizer_frontpage_settings()



/**
 * Extras Section
 *
 * @since 1.0.0
 *
 * @return array Secretum Customizer Settings
 */
function secretum_customizer_extras_settings() {
	return [
		// Scroll Top.
		'scrolltop_status'                           => '',
		'scrolltop_textual_text_color'               => '',
		'scrolltop_textual_font_size'                => '',
		'scrolltop_container_background_color'       => '',
		'scrolltop_container_background_hover_color' => '',
		'scrolltop_container_margin_right'           => '',
		'scrolltop_container_margin_bottom'          => '',
		'scrolltop_container_padding_x'              => '',
		'scrolltop_container_padding_y'              => '',
		'scrolltop_container_border_type'            => '',
		'scrolltop_container_border_radius'          => '',
		'scrolltop_container_border_color'           => '',
	];

}//end secretum_customizer_extras_settings()
