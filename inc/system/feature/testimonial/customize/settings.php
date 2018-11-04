<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Testimonial Setting
 */
$wp_customize->add_section('secretum_features_testimonial', array(
	'panel' 		=> 'secretum_features',
    'title' 		=> __('Testimonial Settings', 'secretum'),
    'description' 	=> __('Populate user and customer testimonials, reviews and comments.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Enable Testimonials
$wp_customize->add_setting('secretum[feature_testimonial_display]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Enable Testimonials
$wp_customize->add_control('secretum[feature_testimonial_display]', array(
	'label' 		=> __('Enable Testimonials', 'secretum'),
    'description' 	=> __('Check to enable the custom post type testimonial with widgets and shortcodes. Found under the Comments menu.', 'secretum'),
	'section' 		=> 'secretum_features_testimonial',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Testimonials Query Widget
$wp_customize->add_setting('secretum[feature_testimonial_query_widget]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Disable Testimonials Query Widget
$wp_customize->add_control('secretum[feature_testimonial_query_widget]', array(
	'label' 		=> __('Disable Testimonials Query Widget', 'secretum'),
    'description' 	=> __('Check to disable the Testimonials Query widget.', 'secretum'),
	'section' 		=> 'secretum_features_testimonial',
	'type' 			=> 'checkbox'
));
