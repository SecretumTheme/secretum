<?php
/**
 * Display Header Area
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Active
if (!secretum_mod('header_status') && !secretum_mod('custom_headers')) {
?>
<div class="header<?php echo secretum_header_wrapper(); ?>" id="wrapper-header" itemscope itemtype="http://schema.org/WebSite">
<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e('Skip to content', 'secretum'); ?></a>

<?php if (has_nav_menu('secretum-navbar-primary-left') || has_nav_menu('secretum-navbar-primary-right')) { ?>
	<nav class="navbar navbar-expand-lg p-0">
<?php } ?>

	<div class="container<?php echo secretum_header_container(); echo secretum_site_identity_title_alignment(); ?>">
		<?php get_template_part('template-parts/primary-nav/navbar-left'); ?>
		<?php get_template_part('template-parts/header/logo'); ?>
		<?php get_template_part('template-parts/primary-nav/navbar-right'); ?>
	</div><!-- .container -->

<?php if (has_nav_menu('secretum-navbar-primary-left') || has_nav_menu('secretum-navbar-primary-right')) { ?>
	</nav><!-- .navbar -->
<?php } ?>

</div><!-- .header -->
<?php
}
