<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/frontpage.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'frontpage',
	__( 'Frontpage', 'secretum' )
);


// Section.
$customizer->section(
	'frontpage_display',
	'frontpage',
	__( 'Display Settings', 'secretum' ),
	__( 'A static frontpage must be set to use this feature.', 'secretum' )
);


// Checkbox.
$customizer->checkbox(
	'frontpage_display',
	'frontpage_page_title_status',
	__( 'Page Title Display', 'secretum' ),
	__( 'This is the actual <h2>heading title</h2> of the page, often titled Front Page. A static frontpage must be set to use this feature. Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['frontpage_page_title_status']
);


// Checkbox.
$customizer->checkbox(
	'frontpage_display',
	'frontpage_header_status',
	__( 'Jumbo Heading Display', 'secretum' ),
	__( 'A large heading HTML/Background Image area below the website header. Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['frontpage_header_status']
);


// Wrapper.
$wrapper->settings(
	[
		'section'     => 'frontpage',
		'title'       => __( 'Frontpage Wrapper', 'secretum' ),
		'description' => __( 'Overrides "Body > Wrapper" settings for the frontpage only.', 'secretum' ),
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'frontpage_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section'     => 'frontpage',
		'title'       => __( 'Frontpage Container', 'secretum' ),
		'description' => __( 'Overrides (Body > Container) settings for the frontpage only.', 'secretum' ),
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'frontpage_container',
	]
);



// Wrapper.
$wrapper->settings(
	[
		'section'     => 'frontpage_heading',
		'panel'       => 'frontpage',
		'title'       => __( 'Jumbo Heading Wrapper', 'secretum' ),
		'description' => __( 'Feature must be enabled to use. (Frontpage > Display Settings) A large heading HTML/Background Image area below the website header.', 'secretum' ),
	]
);

// Wrapper Borders.
$borders->settings(
	[
		'section' => 'frontpage_heading_wrapper',
	]
);


// Content.
$customizer->section(
	'frontpage_heading',
	'frontpage',
	__( 'Jumbo Heading Content', 'secretum' ),
	__( 'A large heading HTML/Background Image area below the website header.', 'secretum' )
);


// Background Image.
$customizer->background_image(
	'frontpage_heading',
	'frontpage_heading_bg',
	1900,
	400,
	__( 'Heading Background Image', 'secretum' ),
	__( 'Image will expand from center. 1900px or wider will limit the stretch.', 'secretum' )
);

// Textarea.
$customizer->textarea(
	'frontpage_heading',
	'frontpage_heading_html',
	__( 'Frontpage Heading HTML', 'secretum' ),
	__( 'HTML will not display until a modification is made and published.', 'secretum' ),
	'<!-- card examples: https://getbootstrap.com/docs/4.0/components/card/ -->
<div class="card rounded-0 border-0 border-bottom border-line bg-transparent">
	<img class="card-img" src="../wp-includes/images/blank.gif" alt="Replace Image and Alt Text, Set Height In Style Tag..." style="height: 270px">
	<div class="card-img-overlay">
	<h5 class="card-title display-4 text-capitalize text-center font-weight-bold color-whitish">Secretum Theme</h5>
		<p class="card-text text-22 text-capitalize text-center color-secondary">Just another WordPress site</p>
		<div class="mt-1 text-center"><a href="#" class="btn btn-primary" role="button">Code is Poetry!</a></div>
	</div>
</div>',
	$defaults['frontpage_heading_html']
);
