<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Author About Text
$wp_customize->add_setting('secretum[author_about_text]', array(
	'default' 			=> htmlentities(secretum_text('author_about_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Author About Text
$wp_customize->add_control('secretum[author_about_text]', array(
	'label' 			=> __('Author About Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Author Website Text
$wp_customize->add_setting('secretum[author_website_text]', array(
	'default' 			=> htmlentities(secretum_text('author_website_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Author Website Text
$wp_customize->add_control('secretum[author_website_text]', array(
	'label' 			=> __('Author Website Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Author Profile Text
$wp_customize->add_setting('secretum[author_profile_text]', array(
	'default' 			=> htmlentities(secretum_text('author_profile_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Author Profile Text
$wp_customize->add_control('secretum[author_profile_text]', array(
	'label' 			=> __('Author Profile Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Author By Text
$wp_customize->add_setting('secretum[author_posts_by_text]', array(
	'default' 			=> htmlentities(secretum_text('author_posts_by_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Author By Text
$wp_customize->add_control('secretum[author_posts_by_text]', array(
	'label' 			=> __('Author By Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Author Posts Posted Text
$wp_customize->add_setting('secretum[author_posted_text]', array(
	'default' 			=> htmlentities(secretum_text('author_posted_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Author Posts Posted Text
$wp_customize->add_control('secretum[author_posted_text]', array(
	'label' 			=> __('Author Posts Posted Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Author Posts Categories Text
$wp_customize->add_setting('secretum[author_categories_text]', array(
	'default' 			=> htmlentities(secretum_text('author_categories_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Author Posts Categories Text
$wp_customize->add_control('secretum[author_categories_text]', array(
	'label' 			=> __('Author Posts Categories Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));
