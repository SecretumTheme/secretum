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
	get_template_part('template-parts/copyright/display');

	// Hookable Action After Copyright
	do_action('secretum_copyright_after');

	// Scroll To Top Icon
	get_template_part('template-parts/extras/scrolltop');
?>
</div><!-- #page -->

<?php
	// Customizer Refresh Icon
    if (is_customize_preview()) {
    	echo '<a href="JavaScript:Void(0);" onClick="document.location.reload(true)" title="' . __('Refresh Preview', 'secretum') . '"><i style="color:rgba(80,80,80,0.5);position:fixed;bottom:50px;right:8px;z-index:100000;" class="fa fa-refresh"></i></a>';
    }

	wp_footer();
?>

</body>
</html>
