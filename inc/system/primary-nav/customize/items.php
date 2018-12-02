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
$wp_customize->add_section('secretum_primary_nav_items', array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Items Settings', 'secretum'),
    'description' 		=> __('Customize the properties of items within the menu.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Item Alignment
$wp_customize->add_setting('secretum[primary_nav_alignment]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Item Alignment
$wp_customize->add_control('secretum[primary_nav_alignment]', array(
	'label' 	=> __('Item Alignment', 'secretum'),
	'section' 	=> 'secretum_primary_nav_items',
	'type' 		=> 'select',
	'choices' 	=> array(
		'' 			=> __('Theme Default', 'secretum'),
		'center' 	=> __('Align Center', 'secretum'),
		'left' 		=> __('Align Left', 'secretum'),
		'right' 	=> __('Align Right', 'secretum')
	)
));


// Setting :: Menu Item Background Color
$wp_customize->add_setting('secretum[primary_nav_item_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Background Color
$wp_customize->add_control('secretum[primary_nav_item_background_color]', array(
	'label' 	=> __('Menu Item Background Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_items',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Menu Item Background Hover Color
$wp_customize->add_setting('secretum[primary_nav_item_background_hover_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Background Hover Color
$wp_customize->add_control('secretum[primary_nav_item_background_hover_color]', array(
	'label' 	=> __('Menu Item Background Hover Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_items',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_hover_colors()
));


// Setting :: Item Padding
$wp_customize->add_setting('secretum[primary_nav_item_padding_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Item Padding
$wp_customize->add_control('secretum[primary_nav_item_padding_y]', array(
	'label' 			=> __('Item Padding - TOP & BOTTOM', 'secretum'),
	'description' 		=> __('Controls padding within the item area.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_items',
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
$wp_customize->add_setting('secretum[primary_nav_item_padding_x]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Primary Nav Container Padding
$wp_customize->add_control('secretum[primary_nav_item_padding_x]', array(
	'label' 			=> __('Item Padding - RIGHT & LEFT', 'secretum'),
	'description' 		=> __('Controls padding within item area.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_items',
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
	'section' 		=> 'secretum_primary_nav_items',
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


// Setting :: Item Border Color
$wp_customize->add_setting('secretum[primary_nav_item_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Item Border Color
$wp_customize->add_control('secretum[primary_nav_item_border_color]', array(
	'label' 		=> __('Item Border Color (split between items)', 'secretum'),
	'description' 	=> __('Manage border size and location under the Container Settings tab.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_items',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_border_colors()
));


// Setting :: Menu Item Text Color
$wp_customize->add_setting('secretum[primary_nav_item_text_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Text Color
$wp_customize->add_control('secretum[primary_nav_item_text_color]', array(
	'label' 	=> __('Menu Item Text Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_items',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_text_colors()
));


// Setting :: Menu Item Link Color
$wp_customize->add_setting('secretum[primary_nav_item_link_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Link Color
$wp_customize->add_control('secretum[primary_nav_item_link_color]', array(
	'label' 	=> __('Menu Item Link Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_items',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_colors()
));


// Setting :: Menu Item Link Hover Color
$wp_customize->add_setting('secretum[primary_nav_item_link_hover_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Link Hover Color
$wp_customize->add_control('secretum[primary_nav_item_link_hover_color]', array(
	'label' 	=> __('Menu Item Link Hover Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_items',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_hover_colors()
));
