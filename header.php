<?php
/**
 * HTML <head> and document body heading
 *
 * @package Secretum
 */

namespace Secretum;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<?php
// @about Top Navbar Above Header
get_template_part( 'template-parts/header/header-top' );

// @about Hookable Action
do_action( 'secretum_before_header' );

// @about Navbar Menu Above Header
get_template_part( 'template-parts/primary-nav/navbar-above' );

// @about Display Header Area
get_template_part( 'template-parts/header/display' );

// @about Secretum Custom Headers & Footers Plugin
if ( secretum_mod( 'custom_headers' ) ) {
	do_action( 'secretum_hf', 'headers' );
}

// @about Navbar Menu Below Header
get_template_part( 'template-parts/primary-nav/navbar-below' );

// @about Hookable Action
do_action( 'secretum_after_header' );
