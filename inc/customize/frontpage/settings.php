<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Frontpage
 */
$wp_customize->add_section('secretum_frontpage_settings' , array(
	'panel' 	=> 'secretum_frontpage',
    'title' 	=> __('Settings', 'secretum'),
    'priority' 	=> 10,
));


// Setting :: Enable Frontpage Heading Area
$wp_customize->add_setting('secretum[frontpage_header_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Enable Frontpage Heading Area
$wp_customize->add_control('secretum[frontpage_header_status]', array(
	'label' 	=> __('Enable Frontpage Heading Area', 'secretum'),
	'section' 	=> 'secretum_frontpage_settings',
	'type' 		=> 'checkbox'
));


// Setting :: Heading Background Image
$wp_customize->add_setting('secretum[frontpage_heading_bg]' , array(
	'sanitize_callback' => 'absint',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Heading Background Image
$wp_customize->add_control(new WP_Customize_Media_Control( 
	$wp_customize, 'image_control', array( 
		'label' 		=> __('Heading Background Image', 'secretum'),
		'description' 	=> __('Image will expand from center. 1900px or wider will limit the stretch.', 'secretum'),
		'settings' 		=> 'secretum[frontpage_heading_bg]',
		'mime_type' 	=> 'image',
	    'flex_width' 	=> true,
	    'flex_height' 	=> true,
	    'width' 		=> 1900,
	    'height' 		=> 400
	)
));


// Setting :: Frontpage Heading HTML
$wp_customize->add_setting('secretum[frontpage_heading_html]' , array(
	'default' => '<div class="container p-5" id="container-heading">

	<div class="row">

		<div class="col">
			<h1 class="text-center text-uppercase">Big Title Area</h1>
		</div>

	</div><!-- .row -->

	<br />

	<div class="row">

		<div class="col mt-1 text-center">
			<a href="#" class="btn btn-secondary"><span class="screen-reader-text">Click Here!</span>Click Here!</a>
		</div>

	</div><!-- .row -->

</div><!-- .container -->',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));

// Control :: Frontpage Heading HTML
$wp_customize->add_control('secretum[frontpage_heading_html]', array(
	'label' 		=> __('Frontpage Heading HTML', 'secretum'),
	'description' 	=> __('Full HTML control of the heading area. HTML will not display until a modification is made and published.', 'secretum'),
	'section' 		=> 'secretum_frontpage_settings',
	'type' 			=> 'textarea'
));


// Setting ::Select A Page To Use
$wp_customize->add_setting('secretum[frontpage_page_id]' , array(
	'type' 				=> 'option',
	'capability' 		=> 'edit_theme_options',
	'sanitize_callback' => 'secretum_sanitize_dropdown_pages'
));

// Control :: Select A Page To Use
$wp_customize->add_control('secretum[frontpage_page_id]', array(
	'label' 		=> __('Front-page Body Section', 'secretum'),
	'description' 	=> __('Select a page that will be used to display the content body area of the front-page.', 'secretum'),
	'section' 		=> 'secretum_frontpage_settings',
	'type' 			=> 'dropdown-pages'
));


// Setting :: Enable Frontpage Google Map Are
$wp_customize->add_setting('secretum[frontpage_map_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Enable Frontpage Google Map Are
$wp_customize->add_control('secretum[frontpage_map_status]', array(
	'label' 	=> __('Enable Frontpage Google Map Area', 'secretum'),
	'section' 	=> 'secretum_frontpage_settings',
	'type' 		=> 'checkbox'
));


// Setting :: Google Map Business Name & Address
$wp_customize->add_setting('secretum[frontpage_map_address]' , array(
	'type' 				=> 'option',
	'default' 			=> '',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_text_field'
));

// Control :: Google Map Business Name & Address
$wp_customize->add_control('secretum[frontpage_map_address', array(
	'label' 		=> __('Google Map Business Name & Address', 'secretum'),
	'description' 	=> __('Use the exact address that Google has for your business in this format: Business Name, 000 W Something St Suite 1, City, ST 00000', 'secretum'),
	'section' 		=> 'secretum_frontpage_settings',
	'type' 			=> 'text'
));
