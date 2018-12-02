<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Container Settings
 */
$wp_customize->add_section('secretum_primary_nav_area', array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Container Settings', 'secretum'),
    'description' 		=> __('Set the container type and adjust the margins and paddings.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Menu Alignment
$wp_customize->add_setting('secretum[primary_nav_alignment]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Alignment
$wp_customize->add_control('secretum[primary_nav_alignment]', array(
	'label' 	=> __('Menu Alignment', 'secretum'),
	'section' 	=> 'secretum_primary_nav_area',
	'type' 		=> 'select',
	'choices' 	=> array(
		'' 			=> __('Theme Default', 'secretum'),
		'center' 	=> __('Align Center', 'secretum'),
		'left' 		=> __('Align Left', 'secretum'),
		'right' 	=> __('Align Right', 'secretum')
	)
));


// Setting :: Primary Nav Container Type
$wp_customize->add_setting('secretum[primary_nav_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Primary Nav Container Type
$wp_customize->add_control('secretum[primary_nav_container]', array(
	'label' 			=> __('Primary Nav Container Type', 'secretum'),
	'description' 		=> __('The primary container within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_area',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 					=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 			=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Primary Nav Wrapper Padding
$wp_customize->add_setting('secretum[primary_nav_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Primary Nav Wrapper Padding
$wp_customize->add_control('secretum[primary_nav_wrapper_padding]', array(
	'label' 			=> __('Primary Nav Wrapper Padding', 'secretum'),
	'description' 		=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('No Padding', 'secretum'),
		'py-1' 				=> __('4px or .25em Padding', 'secretum'),
		'py-2' 				=> __('8px or .5em Padding', 'secretum'),
		'py-3' 				=> __('16px or 1em Padding', 'secretum'),
		'py-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Primary Nav Wrapper Bottom Margin
$wp_customize->add_setting('secretum[primary_nav_wrapper_margin]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Primary Nav Wrapper Bottom Margin
$wp_customize->add_control('secretum[primary_nav_wrapper_margin]', array(
	'label' 			=> __('Primary Nav Bottom Margin', 'secretum'),
	'description' 		=> __('Increases the spacing after the Primary Nav container, pushing the body down.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('No Bottom Margin (default)', 'secretum'),
		'mb-1' 				=> __('4px or .25em Bottom Margin', 'secretum'),
		'mb-2' 				=> __('8px or .5em Bottom Margin', 'secretum'),
		'mb-3' 				=> __('16px or 0em Bottom Margin', 'secretum'),
		'mb-4' 				=> __('24px or 1.5em Bottom Margin', 'secretum'),
		'mb-5' 				=> __('48px or 3em Bottom Margin', 'secretum'),
	)
));


// Setting :: Wrapper Border Type
$wp_customize->add_setting('secretum[primary_nav_wrapper_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Wrapper Border Type
$wp_customize->add_control('secretum[primary_nav_wrapper_border_type]', array(
	'label' 		=> __('Wrapper Border Type', 'secretum'),
	'description' 	=> __('Manage the border color under the Color Settings tab.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'all' 			=> __('Solid Border', 'secretum'),
		'top' 			=> __('Top Border', 'secretum'),
		'right' 		=> __('Right Border', 'secretum'),
		'bottom' 		=> __('Bottom Border', 'secretum'),
		'left' 			=> __('Left Border', 'secretum'),
		'none' 			=> __('No Border', 'secretum')
	)
));


// Setting :: Primary Nav Container Padding
$wp_customize->add_setting('secretum[primary_nav_container_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Primary Nav Container Padding
$wp_customize->add_control('secretum[primary_nav_container_padding]', array(
	'label' 			=> __('Primary Nav Container Padding', 'secretum'),
	'description' 		=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('15px Padding (default)', 'secretum'),
		'px-0' 				=> __('No Padding', 'secretum'),
		'px-1' 				=> __('4px or .25em Padding', 'secretum'),
		'px-2' 				=> __('8px or .5em Padding', 'secretum'),
		'px-3' 				=> __('16px or 1em Padding', 'secretum'),
		'px-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));



// Setting :: Container Border Type
$wp_customize->add_setting('secretum[primary_nav_container_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Border Type
$wp_customize->add_control('secretum[primary_nav_container_border_type]', array(
	'label' 		=> __('Container Border Type', 'secretum'),
	'description' 	=> __('Manage the border color under the Color Settings tab.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'all' 			=> __('Solid Border', 'secretum'),
		'top' 			=> __('Top Border', 'secretum'),
		'right' 		=> __('Right Border', 'secretum'),
		'bottom' 		=> __('Bottom Border', 'secretum'),
		'left' 			=> __('Left Border', 'secretum'),
		'none' 			=> __('No Border', 'secretum')
	)
));


// Setting :: Item Padding
$wp_customize->add_setting('secretum[primary_nav_item_py]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Item Padding
$wp_customize->add_control('secretum[primary_nav_item_py]', array(
	'label' 			=> __('Item Padding - TOP & BOTTOM', 'secretum'),
	'description' 		=> __('Controls padding within the item area.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('No Padding', 'secretum'),
		'py-1' 				=> __('4px or .25em Padding', 'secretum'),
		'py-2' 				=> __('8px or .5em Padding', 'secretum'),
		'py-3' 				=> __('16px or 1em Padding', 'secretum'),
		'py-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Primary Nav Container Padding
$wp_customize->add_setting('secretum[primary_nav_item_px]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Primary Nav Container Padding
$wp_customize->add_control('secretum[primary_nav_item_px]', array(
	'label' 			=> __('Item Padding - RIGHT & LEFT', 'secretum'),
	'description' 		=> __('Controls padding within item area.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('15px Padding (default)', 'secretum'),
		'px-0' 				=> __('No Padding', 'secretum'),
		'px-1' 				=> __('4px or .25em Padding', 'secretum'),
		'px-2' 				=> __('8px or .5em Padding', 'secretum'),
		'px-3' 				=> __('16px or 1em Padding', 'secretum'),
		'px-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Item Border Type
$wp_customize->add_setting('secretum[primary_nav_item_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Item Border Type
$wp_customize->add_control('secretum[primary_nav_item_border_type]', array(
	'label' 		=> __('Item Border Type', 'secretum'),
	'description' 	=> __('Manage the border color under the Color Settings tab.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'all' 			=> __('Solid Border', 'secretum'),
		'top' 			=> __('Top Border', 'secretum'),
		'right' 		=> __('Right Border', 'secretum'),
		'bottom' 		=> __('Bottom Border', 'secretum'),
		'left' 			=> __('Left Border', 'secretum'),
		'none' 			=> __('No Border', 'secretum')
	)
));
