<?php
/**
 * Display Copyright Area
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/copyright/display.php
 * @since      1.0.0
 */

namespace Secretum;

// If Active.
if ( false !== secretum_mod( 'copyright_status' ) ) { ?>
<div class="wrapper copyright<?php secretum_wrapper( 'copyright' ); ?>" id="wrapper-copyright">
	<div class="container<?php secretum_container( 'copyright' ); ?>">
		<div class="row"><div class="col-md">
			<footer id="colophon"><div class="site-info<?php secretum_textual( 'copyright' ); ?>">
				<?php
				// Custom Copyright Statement.
				if ( true === secretum_mod( 'copyright_text' ) ) {
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
