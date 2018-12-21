<?php
/**
 * Front-page Heading Area Display
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Active
if (secretum_mod('frontpage_header_status')) {
?>
<div class="frontpage-heading w-100<?php echo secretum_frontpage_wrapper();?>" id="frontpage-heading"<?php echo secretum_frontpage_bg_style(); ?>>
	<?php echo secretum_mod('frontpage_heading_html', 'html'); ?>
</div><!-- .frontpage-heading -->
<?php
}
