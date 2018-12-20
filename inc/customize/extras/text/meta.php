<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Post Meta Categories Text
$wp_customize->add_setting('secretum[meta_categories_text]', array(
	'default' 			=> htmlentities(secretum_text('meta_categories_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Post Meta Categories Text
$wp_customize->add_control('secretum[meta_categories_text]', array(
	'label' 			=> __('Post Meta Categories Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Post Meta Tag Text
$wp_customize->add_setting('secretum[meta_tags_text]', array(
	'default' 			=> htmlentities(secretum_text('meta_tags_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Post Meta Tag Text
$wp_customize->add_control('secretum[meta_tags_text]', array(
	'label' 			=> __('Post Meta Tag Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Entry Meta Leave Comment Text
$wp_customize->add_setting('secretum[meta_leave_comment_text]', array(
	'default' 			=> htmlentities(secretum_text('meta_leave_comment_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Entry Meta Leave Comment Text
$wp_customize->add_control('secretum[meta_leave_comment_text]', array(
	'label' 			=> __('Post Meta Leave Comment Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Entry Meta One Comment Text
$wp_customize->add_setting('secretum[meta_one_comment_text]', array(
	'default' 			=> htmlentities(secretum_text('meta_one_comment_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Entry Meta One Comment Text
$wp_customize->add_control('secretum[meta_one_comment_text]', array(
	'label' 			=> __('Post Meta One Comment Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Entry Meta Multiple Comments Text
$wp_customize->add_setting('secretum[meta_comments_text]', array(
	'default' 			=> htmlentities(secretum_text('meta_comments_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Entry Meta Multiple Comments Text
$wp_customize->add_control('secretum[meta_comments_text]', array(
	'label' 			=> __('Post Meta Multiple Comments Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));
