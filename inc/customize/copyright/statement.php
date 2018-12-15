<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Copyright Statement
 */
$wp_customize->add_section('secretum_copyright_statement' , array(
	'panel' 	=> 'secretum_copyright',
    'title' 	=> __('Copyright Statement', 'secretum'),
    'priority' 	=> 10,
));

// Setting :: Copyright Text
$wp_customize->add_setting('secretum[copyright_text]' , array(
	'default' 			=> $default['copyright_text'],
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'postMessage',
	'type' 				=> 'option'
));

// Control :: Copyright Text
$wp_customize->add_control('secretum[copyright_text]', array(
	'label' 		=> __('Statement', 'secretum'),
	'description' 	=> sprintf(__('HTML Allowed. Example: &#x3C;p&#x3E;Copyright %s &#x26;copy; &#x3C;a href=&#x22;%s&#x22; target=&#x22;_self&#x22;&#x3E;%s&#x3C;/a&#x3E; - All Rights Reserved.&#x3C;/p&#x3E;', 'secretum'), date("Y", time()), esc_url(get_home_url('/')), get_bloginfo('name')),
	'section' 		=> 'secretum_copyright_statement',
	'type' 			=> 'textarea'
));

// Refresh Partial :: Statement
$wp_customize->selective_refresh->add_partial('copyright_text_partial', array(
	'settings'            => array('secretum[copyright_text]'),
	'selector'            => '.site-info',
	'render_callback'     => function() {
        return $default['copyright_text'];
    },
	'container_inclusive' => false
));
