<?php
/**
 * Front-page Body Template
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Frontpage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/frontpage/body.php
 */

namespace Secretum;

// If Custom Header Not Active.
if ( ! secretum_mod( 'custom_headers' ) ) {
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="index-wrapper">
	<div class="container<?php secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main" id="main">
					<?php
					// Hookable Action.
					do_action( 'secretum_before_content' );

					// If Posts.
					if ( have_posts() ) {
						while ( have_posts() ) { the_post();
							get_template_part( 'template-parts/post/content', get_post_format() );
						}
					} else {
						// No Content Found.
						get_template_part( 'template-parts/post/content', 'none' );
					}

					// Hookable Action.
					do_action( 'secretum_after_content' );
					?>
				</main><!-- .site-main -->

				<?php get_template_part( 'template-parts/nav/posts', 'pagination' ); ?>

			</div><!-- .content-area -->

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'right' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
}// End if().
