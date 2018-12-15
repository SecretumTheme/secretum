<?php
/**
 * HTML <head> and document body heading
 *
 * @package WordPress
 * @subpackage Secretum
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<?php
	// Top Navbar Above Header
	get_template_part('template-parts/header/header-top');

	// Navbar Menu Above Header
	get_template_part('template-parts/primary-nav/navbar-above');

	// Hookable Action Before Header
	do_action('secretum_header_before');

	// Display Header Area
	get_template_part('template-parts/header/display');

	// Secretum Custom Headers & Footers Plugin
	if (secretum_mod('custom_headers')) {
		echo do_action('secretum_hf', 'headers');
	}

	// Hookable Action After Header
	do_action('secretum_header_after');

	// Navbar Menu Below Header
	get_template_part('template-parts/primary-nav/navbar-below');

	// Featured Image
	get_template_part('template-parts/header/featured-image');
