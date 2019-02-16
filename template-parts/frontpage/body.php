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
 * @since      1.0.0
 */

namespace Secretum;
?>
<div class="wrapper<?php secretum_wrapper( 'body' ); ?>" id="index-wrapper">
	<div class="container<?php secretum_container( 'body' ); ?>" id="content" tabindex="-1">
	<?php
	if ( true !== secretum_mod( 'entry_status' ) ) {
	?>
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_columns(); ?><?php secretum_wrapper( 'entry' ); ?> content-area" id="primary">
				<main class="site-main<?php secretum_container( 'entry' ); ?>" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
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

					/**
					 * Hook: secretum_after_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_after_content' );
					?>
				</main><!-- .site-main -->

				<?php get_template_part( 'template-parts/nav/posts', 'pagination' ); ?>

			</div><!-- .content-area -->

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'right' ); ?>

		</div><!-- .row -->
	<?php
	}// End if().
	?>
	</div><!-- .container -->
</div><!-- .wrapper -->
