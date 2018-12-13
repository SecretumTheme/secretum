<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Copyright Text
$wp_customize->add_setting('secretum[copyright_text]', array(
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Copyright Text
$wp_customize->add_control('secretum[copyright_text]', array(
	'label' 			=> __('Copyright Text', 'secretum'),
	'description' 		=> sprintf(__('HTML Allowed. Example: <p>Copyright %s &copy; <a href="%s" target="_self">%s</a> - All Rights Reserved.</p>', 'secretum'), date("Y", time()), esc_url(get_home_url('/')), get_bloginfo('name')),
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'textarea'
));
