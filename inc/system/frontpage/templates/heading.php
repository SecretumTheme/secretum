<?php
/**
 * Front-page Heading Area Display
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If Custom Heading Enabled
if (secretum_mod('frontpage_header_status')) { ?>

	<div class="frontpage-heading w-100" id="frontpage-heading"<?php echo secretum_frontpage_bg_style(); ?>>

		<?php echo secretum_mod('frontpage_heading_html', 'html'); ?>

	</div><!-- .frontpage-heading -->
	
<?php
}
