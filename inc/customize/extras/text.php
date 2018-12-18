<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
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

// add_setting/add_control includes in functions.php file
