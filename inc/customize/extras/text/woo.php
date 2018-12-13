<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: WooCommerce Booking Cart Title
$wp_customize->add_setting('secretum[booking_cart_title]', array(
	'default' 			=> htmlentities(secretum_text('booking_cart_title')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: WooCommerce Booking Cart Title
$wp_customize->add_control('secretum[booking_cart_title]', array(
	'label' 			=> __('Select A Booking Cart Title', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));
