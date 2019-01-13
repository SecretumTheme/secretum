<?php
/**
 * Display Copyright Area
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Active
if ( ! secretum_mod( 'copyright_status' ) ) {
?>
<div class="wrapper copyright<?php secretum_copyright_wrapper(); ?>" id="wrapper-copyright">
	<div class="container<?php secretum_copyright_container(); ?>">
		<div class="row"><div class="col-md">
			<footer id="colophon"><div class="site-info<?php secretum_copyright_textuals(); ?><?php secretum_copyright_text_alignment(); ?>">
				<?php
				// @about Custom Copyright Statement
				if ( secretum_mod( 'copyright_text' ) ) {
					secretum_mod( 'copyright_text', 'html', false );
				} else {
					// @about Default Copyright Statement
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
