<?php
/**
 * Secretum Theme: WordPress Admin Area Adjustments
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Remove Welcome Panel
 */
remove_action('welcome_panel', 'wp_welcome_panel');
 

/**
 * Remove Dashboard Widgets
 */
add_action('wp_dashboard_setup', function() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);

	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);
}, 999);
