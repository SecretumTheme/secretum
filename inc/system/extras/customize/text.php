<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Textual Adjustments
 */
$wp_customize->add_section('secretum_theme_text', array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Textual Adjustments', 'secretum'),
    'description' 		=> __('To reset text fields to default, delete the text and then publish. To remove the text from displaying completely, delete the text and then add a single empty space, and publish.', 'secretum'),
    'priority' 			=> 10,
));

// Continue/More Reading
include_once(SECRETUM_INC . '/system/extras/customize/text/more.php');

// Entry Meta Data
include_once(SECRETUM_INC . '/system/extras/customize/text/meta.php');

// Entry Navigation
include_once(SECRETUM_INC . '/system/extras/customize/text/nav.php');

// Search Results & Features
include_once(SECRETUM_INC . '/system/extras/customize/text/search.php');

// Comments
include_once(SECRETUM_INC . '/system/extras/customize/text/comments.php');

// Author Profiles
include_once(SECRETUM_INC . '/system/extras/customize/text/author.php');

// No Content Found
include_once(SECRETUM_INC . '/system/extras/customize/text/no-content.php');

// 404 Error
include_once(SECRETUM_INC . '/system/extras/customize/text/404.php');

// WooCommerce Text
include_once(SECRETUM_INC . '/system/extras/customize/text/woo.php');
