<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Documentation Setting
 */
$wp_customize->add_section('secretum_feature_documentation', array(
	'panel' 		=> 'secretum_features',
    'title' 		=> __('Documentation Settings', 'secretum'),
    'description' 	=> __('Create custom documentation, help files, and guides for your project or service.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Enable Documentation
$wp_customize->add_setting('secretum[feature_documentation_display]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Enable Documentation
$wp_customize->add_control('secretum_feature_documentation_display]', array(
	'label' 		=> __('Enable Documentation', 'secretum'),
    'description' 	=> __('Check to enable the custom post type documentation, with categories, tags and a custom template. You may need to reload the browser after publishing.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Table of Contents
$wp_customize->add_setting('secretum[feature_documentation_toc]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Disable Table of Contents
$wp_customize->add_control('secretum_feature_documentation_toc]', array(
	'label' 		=> __('Disable Table of Contents', 'secretum'),
    'description' 	=> __('Check to disable the table of contents right sidebar menu.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Category Widget
$wp_customize->add_setting('secretum[feature_documentation_category_widget]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Disable Category Widget
$wp_customize->add_control('secretum_feature_documentation_category_widget]', array(
	'label' 		=> __('Disable Category Widget', 'secretum'),
    'description' 	=> __('Check to disable the Documentation Categories widget.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Recent Updates Widget
$wp_customize->add_setting('secretum[feature_documentation_recent_widget]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Disable Recent Updates Widget
$wp_customize->add_control('secretum_feature_documentation_recent_widget]', array(
	'label' 		=> __('Disable Recent Updates Widget', 'secretum'),
    'description' 	=> __('Check to disable the Documentation Recent Updates widget.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Documentation Categories
$wp_customize->add_setting('secretum[feature_documentation_taxonomy_topic]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Disable Documentation Categories
$wp_customize->add_control('secretum_feature_documentation_taxonomy_topic]', array(
	'label' 		=> __('Disable Documentation Categories', 'secretum'),
    'description' 	=> __('Check to disable the Documentation Taxonomy: Topics (categories)', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Documentation Tags
$wp_customize->add_setting('secretum[feature_documentation_taxonomy_tag]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Disable Documentation Tags
$wp_customize->add_control('secretum_feature_documentation_taxonomy_tag]', array(
	'label' 		=> __('Disable Documentation Tags', 'secretum'),
    'description' 	=> __('Check to disable the Documentation Taxonomy: Tags', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'checkbox'
));


// Setting :: Body Container Type
$wp_customize->add_setting('secretum[documentation_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Container Type
$wp_customize->add_control('secretum_documentation_container]', array(
	'label' 		=> __('Body Container Type', 'secretum'),
	'description' 	=> __('The primary container within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'radio',
	'choices' 		=> array(
		'fixed' 		=> __('Responsive, fixed-width', 'secretum'),
		'' 				=> __('Fluid, full-width (default)', 'secretum')
	)
));


// Setting :: Body Wrapper Padding
$wp_customize->add_setting('secretum[documentation_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Wrapper Padding
$wp_customize->add_control('secretum_documentation_wrapper_padding]', array(
	'label' 		=> __('Body Wrapper Padding', 'secretum'),
	'description' 	=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'select',
	'choices' 		=> array(
		'py-0' 			=> __('No Padding', 'secretum'),
		'py-1' 			=> __('4px or .25em Padding', 'secretum'),
		'py-2' 			=> __('8px or .5em Padding', 'secretum'),
		'py-3' 			=> __('16px or 1em Padding', 'secretum'),
		'py-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'' 				=> __('48px or 3em Padding (default)', 'secretum'),
	)
));


// Setting :: Body Container Padding
$wp_customize->add_setting('secretum[documentation_container_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Container Padding
$wp_customize->add_control('secretum_documentation_container_padding]', array(
	'label' 		=> __('Body Container Padding', 'secretum'),
	'description' 	=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('15px Padding (default)', 'secretum'),
		'px-0' 			=> __('No Padding', 'secretum'),
		'px-1' 			=> __('4px or .25em Padding', 'secretum'),
		'px-2' 			=> __('8px or .5em Padding', 'secretum'),
		'px-3' 			=> __('16px or 1em Padding', 'secretum'),
		'px-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Body Top Margin
$wp_customize->add_setting('secretum[documentation_wrapper_margin_top]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Top Margin
$wp_customize->add_control('secretum_documentation_wrapper_margin_top]', array(
	'label' 		=> __('Body Top Margin', 'secretum'),
	'description' 	=> __('Increases the spacing before the body wrapper.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Top Margin (default)', 'secretum'),
		'mt-1' 			=> __('4px or .25em Top Margin', 'secretum'),
		'mt-2' 			=> __('8px or .5em Top Margin', 'secretum'),
		'mt-3' 			=> __('16px or 0em Top Margin', 'secretum'),
		'mt-4' 			=> __('24px or 1.5em Top Margin', 'secretum'),
		'mt-5' 			=> __('48px or 3em Top Margin', 'secretum'),
	)
));


// Setting :: Body Bottom Margin
$wp_customize->add_setting('secretum[documentation_wrapper_margin_bottom]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Bottom Margin
$wp_customize->add_control('secretum_documentation_wrapper_margin_bottom]', array(
	'label' 		=> __('Body Bottom Margin', 'secretum'),
	'description' 	=> __('Increases the spacing after the body wrapper.', 'secretum'),
	'section' 		=> 'secretum_feature_documentation',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Bottom Margin (default)', 'secretum'),
		'mb-1' 			=> __('4px or .25em Bottom Margin', 'secretum'),
		'mb-2' 			=> __('8px or .5em Bottom Margin', 'secretum'),
		'mb-3' 			=> __('16px or 0em Bottom Margin', 'secretum'),
		'mb-4' 			=> __('24px or 1.5em Bottom Margin', 'secretum'),
		'mb-5' 			=> __('48px or 3em Bottom Margin', 'secretum'),
	)
));
