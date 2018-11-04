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
$wp_customize->add_section('secretum_copyright_nav_area', array(
	'panel' 		=> 'secretum_copyright_nav',
    'title' 		=> __('Container Settings', 'secretum'),
    'description' 	=> __('Custom navigation menus will only display if the related menu is defined and has a location set.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Menu Alignment
$wp_customize->add_setting('secretum[copyright_nav_alignment]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Alignment
$wp_customize->add_control('secretum[copyright_nav_alignment]', array(
	'label' 	=> __('Menu Alignment', 'secretum'),
	'section' 	=> 'secretum_copyright_nav_area',
	'type' 		=> 'select',
	'choices' 	=> array(
		'' 			=> __('Theme Default', 'secretum'),
		'center' 	=> __('Align Center', 'secretum'),
		'left' 		=> __('Align Left', 'secretum'),
		'right' 	=> __('Align Right', 'secretum')
	)
));


// Setting :: Menu Item Border
$wp_customize->add_setting('secretum[copyright_nav_item_border]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Border
$wp_customize->add_control('secretum[copyright_nav_item_border]', array(
	'label' 		=> __('Menu Item Border', 'secretum'),
	'description' 	=> __('Manage the border color under the Color Settings tab.', 'secretum'),
	'section' 		=> 'secretum_copyright_nav_area',
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


// Setting :: Top & Bottom Item Paddin
$wp_customize->add_setting('secretum[copyright_nav_item_paddingy]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Top & Bottom Item Paddin
$wp_customize->add_control('secretum[copyright_nav_item_paddingy]', array(
	'label' 		=> __('Top & Bottom Item Padding', 'secretum'),
	'description' 	=> __('Controls TOP & BOTTOM padding within item container.', 'secretum'),
	'section' 		=> 'secretum_copyright_nav_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'py-0' 			=> __('No Padding', 'secretum'),
		'py-1' 			=> __('4px or .25em Padding', 'secretum'),
		'py-2' 			=> __('8px or .5em Padding', 'secretum'),
		'py-3' 			=> __('16px or 1em Padding', 'secretum'),
		'py-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Left & Right Item Padding
$wp_customize->add_setting('secretum[copyright_nav_item_paddingx]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Left & Right Item Padding
$wp_customize->add_control('secretum[copyright_nav_item_paddingx]', array(
	'label' 		=> __('Left & Right Item Padding', 'secretum'),
	'description' 	=> __('Controls RIGHT & LEFT padding within item container.', 'secretum'),
	'section' 		=> 'secretum_copyright_nav_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'px-0' 			=> __('No Padding', 'secretum'),
		'px-1' 			=> __('4px or .25em Padding', 'secretum'),
		'px-2' 			=> __('8px or .5em Padding', 'secretum'),
		'px-3' 			=> __('16px or 1em Padding', 'secretum'),
		'px-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Top & Bottom Margins
$wp_customize->add_setting('secretum[copyright_nav_item_margin]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Top & Bottom Margins
$wp_customize->add_control('secretum[copyright_nav_item_margin]', array(
	'label' 		=> __('Top & Bottom Margins', 'secretum'),
	'description' 	=> __('Increases the spacing equally above and below the menu.', 'secretum'),
	'section' 		=> 'secretum_copyright_nav_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Margin (default)', 'secretum'),
		'my-1' 			=> __('4px or .25em Margin', 'secretum'),
		'my-2' 			=> __('8px or .5em Margin', 'secretum'),
		'my-3' 			=> __('16px or 0em Margin', 'secretum'),
		'my-4' 			=> __('24px or 1.5em Margin', 'secretum'),
		'my-5' 			=> __('48px or 3em Margin', 'secretum'),
	)
));
