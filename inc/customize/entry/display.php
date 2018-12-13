<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Display Settings
 */
$wp_customize->add_section('secretum_entry_display', array(
	'panel' 		=> 'secretum_entry',
    'title' 		=> __('Display Settings', 'secretum'),
    'description' 	=> __('Manage the display of post entry features.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Hide Published Date
$wp_customize->add_setting('secretum[entrymeta_published_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Published Date
$wp_customize->add_control('secretum[entrymeta_published_status]', array(
	'label' 	=> __('Hide Published Date', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Archive Link
$wp_customize->add_setting('secretum[entrymeta_link]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Archive Link
$wp_customize->add_control('secretum[entrymeta_link]', array(
	'label' 		=> __('Archive Link', 'secretum'),
	'section' 		=> 'secretum_entry_display',
	'type' 			=> 'radio',
	'choices'		=> array(
		'' 			=> 'No Archive Link',
		'month' 	=> 'Link To Monthly Archive',
		'day' 		=> 'Link To Daily Archive',
		'post' 		=> 'Link To Current Post',
	)
));


// Setting :: Show Updated Date
$wp_customize->add_setting('secretum[entrymeta_updated_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Show Updated Date
$wp_customize->add_control('secretum[entrymeta_updated_status]', array(
	'label' 		=> __('Show Updated Date', 'secretum'),
	'description' 	=> __('Only shows if an post has updated.', 'secretum'),
	'section' 		=> 'secretum_entry_display',
	'type' 			=> 'checkbox'
));


// Setting :: Hide Author Name
$wp_customize->add_setting('secretum[entrymeta_author_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Author Name
$wp_customize->add_control('secretum[entrymeta_author_status]', array(
	'label' 	=> __('Hide Author Name', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Author Link
$wp_customize->add_setting('secretum[entrymeta_author_link]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Author Link
$wp_customize->add_control('secretum[entrymeta_author_link]', array(
	'label' 		=> __('Author Link', 'secretum'),
	'section' 		=> 'secretum_entry_display',
	'type' 			=> 'radio',
	'choices'		=> array(
		'' 			=> 'No Archive Link',
		'author' 	=> 'Link To Author Archive',
	)
));


// Setting :: Hide Category Links
$wp_customize->add_setting('secretum[entrymeta_catlinks_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Category Links
$wp_customize->add_control('secretum[entrymeta_catlinks_status]', array(
	'label' 	=> __('Hide Category Links', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Hide Tag Links
$wp_customize->add_setting('secretum[entrymeta_tagslinks_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control ::Hide Tag Links
$wp_customize->add_control('secretum[entrymeta_tagslinks_status]', array(
	'label' 	=> __('Hide Tag Links', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Hide Comment Link
$wp_customize->add_setting('secretum[entrymeta_commentlink_status]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Comment Link
$wp_customize->add_control('secretum[entrymeta_commentlink_status]', array(
	'label' 	=> __('Hide Comment Link', 'secretum'),
	'section' 	=> 'secretum_entry_display',
	'type' 		=> 'checkbox'
));


// Setting :: Hide Post Navigation Link
$wp_customize->add_setting('secretum[post_navigation_links]', array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Post Navigation Link
$wp_customize->add_control('secretum[post_navigation_links]', array(
	'label' 		=> __('Hide Post Navigation Links', 'secretum'),
    'description' 	=> esc_html__('This feature is active when <!--nextpage--> is in use.', 'secretum'),
	'section' 		=> 'secretum_entry_display',
	'type' 			=> 'checkbox'
));
