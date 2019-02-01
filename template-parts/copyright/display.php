<?php
/**
 * Display Copyright Area
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Copyright
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/copyright/display.php
 * @since      1.0.0
 */

namespace Secretum;

// If Active.
if ( ! secretum_mod( 'copyright_status' ) ) {
?>
<div class="wrapper copyright<?php secretum_copyright_wrapper(); ?>" id="wrapper-copyright">
	<div class="container<?php secretum_copyright_container(); ?>">
		<div class="row"><div class="col-md">
			<footer id="colophon"><div class="site-info<?php secretum_copyright_textuals(); ?><?php secretum_copyright_text_alignment(); ?>">
				<?php
				// Custom Copyright Statement.
				if ( secretum_mod( 'copyright_text' ) ) {
					echo wp_kses_post( secretum_mod( 'copyright_text', 'html', false ) );
				} else {
					// Default Copyright Statement.
					secretum_copyright_statement();
				}
				?>
			</div></footer><!-- .site-info #colophon -->
		</div><!-- .col-md -->

		<?php get_template_part( 'template-parts/copyright/navbar' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
}
