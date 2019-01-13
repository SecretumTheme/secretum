<?php
/**
 * The template for displaying the footer
 *
 * @package Secretum
 */

namespace Secretum;

// @about Hookable Action
do_action( 'secretum_footer_before' );

// @about Display Footer Area
get_template_part( 'template-parts/footer/display' );

// @about Secretum Custom Headers & Footers Plugin
if ( secretum_mod( 'custom_footers' ) ) {
	do_action( 'secretum_hf', 'footers' );
}

// @about Hookable Action
do_action( 'secretum_footer_after' );

// @about Copyright Area
get_template_part( 'template-parts/copyright/display' );

// @about Hookable Action
do_action( 'secretum_copyright_after' );

// @about Scroll To Top Icon
get_template_part( 'template-parts/extras/scrolltop' );
?>
</div><!-- #page -->
<?php
// @about Customizer Refresh Icon
if ( is_customize_preview() ) {
	secretum_customizer_refresh();
}

wp_footer();
?>
</body>
</html>
