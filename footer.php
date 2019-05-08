<?php
/**
 * The template for displaying the footer
 *
 * @package    Secretum
 * @subpackage Theme\Footer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/footer.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Hook: secretum_footer_before
 *
 * @since 1.0.0
 */
do_action( 'secretum_footer_before' );

// Display Footer Area.
get_template_part( 'template-parts/footer/display' );

/**
 * Hook: secretum_footer_after
 *
 * @since 1.0.0
 */
do_action( 'secretum_footer_after' );

// Copyright Area.
get_template_part( 'template-parts/copyright/display' );

/**
 * Hook: secretum_copyright_after
 *
 * @since 1.0.0
 */
do_action( 'secretum_copyright_after' );

// Scroll To Top Icon.
get_template_part( 'template-parts/extras/scrolltop' );
?>
</div><!-- #page -->
<?php
// Customizer Refresh Icon.
if ( true === is_customize_preview() ) {
	secretum_customizer_refresh();
}

wp_footer();
?>
</body>
</html>
