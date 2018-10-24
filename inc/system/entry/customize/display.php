<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Display Settings
 */
$wp_customize->add_section('secretum_entry_display', array(
	'panel' 		=> 'secretum_entry',
    'title' 		=> __('Display Settings', 'secretum'),
    'description' 	=> __('Check the box to HIDE selected feature.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Post Entry Meta Published Date
$wp_customize->add_setting('secretum[entrymeta_published_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Entry Meta Published Date
$wp_customize->add_control('secretum[entrymeta_published_status]', array(
	'label' 	=> __('Post Entry Meta Published Date', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Post Entry Meta Archive Link
$wp_customize->add_setting('secretum[entrymeta_link]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Entry Meta Archive Link
$wp_customize->add_control('secretum[entrymeta_link]', array(
	'label' 		=> __('Post Entry Meta Archive Link', 'secretum'),
	'section' 		=> 'secretum_entry_display',
	'type' 			=> 'radio',
	'choices'		=> array(
		'' 			=> 'No Archive Link (default)',
		'month' 	=> 'Link To Monthly Archive',
		'day' 		=> 'Link To Daily Archive',
		'post' 		=> 'Link To Current Post',
	)
));


// Setting :: Post Entry Meta Updated Date
$wp_customize->add_setting('secretum[entrymeta_updated_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Entry Meta Updated Date
$wp_customize->add_control('secretum[entrymeta_updated_status]', array(
	'label' 	=> __('Post Entry Meta Updated Date', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Post Entry Meta Author
$wp_customize->add_setting('secretum[entrymeta_author_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Entry Meta Author
$wp_customize->add_control('secretum[entrymeta_author_status]', array(
	'label' 	=> __('Post Entry Meta Author', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Post Entry Meta Author Link
$wp_customize->add_setting('secretum[entrymeta_author_link]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Entry Meta Author Link
$wp_customize->add_control('secretum[entrymeta_author_link]', array(
	'label' 		=> __('Post Entry Meta Author Link', 'secretum'),
	'section' 		=> 'secretum_entry_display',
	'type' 			=> 'radio',
	'choices'		=> array(
		'' 			=> 'No Archive Link (default)',
		'author' 	=> 'Link To Author Archive',
	)
));


// Setting :: Post Category Links
$wp_customize->add_setting('secretum[entrymeta_catlinks_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Category Links
$wp_customize->add_control('secretum[entrymeta_catlinks_status]', array(
	'label' 	=> __('Post Category Links', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Post Tags
$wp_customize->add_setting('secretum[entrymeta_tagslinks_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Tags
$wp_customize->add_control('secretum[entrymeta_tagslinks_status]', array(
	'label' 	=> __('Post Tags', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Post Comment Link
$wp_customize->add_setting('secretum[entrymeta_commentlink_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Comment Link
$wp_customize->add_control('secretum[entrymeta_commentlink_status]', array(
	'label' 	=> __('Post Comment Link', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Post Navigation Links
$wp_customize->add_setting('secretum[post_navigation_links]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Post Navigation Links
$wp_customize->add_control('secretum[post_navigation_links]', array(
	'label' 	=> __('Post Navigation Links', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));
