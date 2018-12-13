<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Secretum
 */

	// Hookable Action Before Footer
	do_action('secretum_footer_before');

	// Display Footer Area
	get_template_part('template-parts/footer/display');

	// Secretum Custom Headers & Footers Plugin
	if (secretum_mod('custom_footers')) {
		echo do_action('secretum_hf', 'footers');
	}

	// Hookable Action After Footer
	do_action('secretum_footer_after');

	// Copyright Area
	get_template_part('template_parts/copyright/display');

	// Hookable Action After Copyright
	do_action('secretum_copyright_after');

	// Scroll To Top Icon
	get_template_part('template_parts/copyright/scroll-top');
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
