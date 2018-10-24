<?php
/**
 * HTML <head> and document body heading
 *
 * @package WordPress
 * @subpackage Secretum_Theme
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

<body <?php body_class(); ?> <?php if (secretum_mod('feature_documentation_display')) { echo 'data-spy="scroll" data-target="#toc"'; } ?>>

<div class="hfeed site" id="page">

<?php
	/**
	 * Display Content Before Header Area
	 * @source inc/system/header/actions.php
	 *
	 * @uses secretum_header_top()
	 * @source inc/system/header/template-parts.php
	 */
	do_action('secretum_header_before');


	/**
	 * Display Header Area, Logo/Brand & Primary Menu
	 * @source inc/system/header/actions.php
	 *
	 * @uses post_type secretum_headers
	 * @source inc/system/header/actions.php
	 *
	 * @uses secretum_header_navbar()
	 * @uses secretum_header_brand_navbar()
	 * @source inc/system/header/template-parts.php
	 */
	do_action('secretum_header');


	/**
	 * Display Content After Header Area
	 * @source system/header/actions.php
	 *
	 * @uses secretum_featured_image()
	 * @source inc/system/header/functions.php
	 */
	do_action('secretum_header_after');
