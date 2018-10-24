<?php
/**
 * Register Sidebar Widget Area
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Fires after all default WordPress widgets have been registered
 *
 * @source https://developer.wordpress.org/reference/hooks/widgets_init/
 */
add_action('widgets_init', function() {
	// Primary Sidebar Widgets
	include_once(SECRETUM_INC . '/system/widgets/register_sidebar/primary.php');

	// Header Widget
	include_once(SECRETUM_INC . '/system/widgets/register_sidebar/header.php');

	// Footer Sidebar Widgets
	include_once(SECRETUM_INC . '/system/widgets/register_sidebar/footer.php');

	// WooCommerce Sidebar Widgets
	include_once(SECRETUM_INC . '/system/widgets/register_sidebar/woocommerce.php');

	// Documentation Sidebar Widgets
	include_once(SECRETUM_INC . '/system/widgets/register_sidebar/documentation.php');

	// Backup Widget
	include_once(SECRETUM_INC . '/system/widgets/register_sidebar/backup.php');
});
