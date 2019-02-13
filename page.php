<?php
/**
 * The template for displaying all pages
 *
 * @package    Secretum
 * @subpackage Theme\Page
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/page.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();

// Display If Allowed.
if ( true !== secretum_mod( 'body_status' ) ) {
?>
<div class="wrapper<?php secretum_wrapper( 'body' ); ?>" id="page-wrapper">
	<div class="container<?php secretum_container( 'body' ); ?>" id="content" tabindex="-1">
	<?php
	if ( true !== secretum_mod( 'entry_status' ) ) {
	?>
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_columns(); ?><?php secretum_wrapper( 'entry' ); ?> content-area" id="primary">
				<main class="site-main" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_before_content' );

					while ( have_posts() ) { the_post();
						// Page Content.
						get_template_part( 'template-parts/page/content', 'page' );

						// Comments Template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}

					/**
					 * Hook: secretum_after_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_after_content' );
					?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'right' ); ?>

		</div><!-- .row -->
	<?php
	}// End if().
	?>
	</div><!-- .container -->
</div><!-- .wrapper -->

<?php
}// End if().

get_footer();
