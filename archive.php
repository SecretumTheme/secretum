<?php
/**
 * The template for displaying archive pages
 *
 * @package    Secretum
 * @subpackage Theme\Archive
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/arhive.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();

// Display If Allowed.
if ( false !== secretum_mod( 'body_status' ) ) { ?>
<div class="wrapper<?php secretum_wrapper( 'body' ); ?>" id="archive-wrapper">
	<div class="container<?php secretum_container( 'body' ); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<?php if ( false !== secretum_mod( 'entry_status' ) ) { ?>
			<div class="col-md<?php secretum_entry_columns(); ?><?php secretum_wrapper( 'entry' ); ?> content-area" id="primary">
				<main class="site-main<?php secretum_container( 'entry' ); ?>" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_before_content' );

					if ( have_posts() ) {
						?>
						<header class="page-header border-bottom mb-5">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						while ( have_posts() ) {
							the_post();
							?>

							<div class="content-archive mb-5">
								<?php
								if ( true === has_excerpt() ) {
									get_template_part( 'template-parts/post/content', 'excerpt' );
								} else {
									get_template_part( 'template-parts/post/content' );
								}

								?>
							</div><!-- .content-archive -->

							<?php
						}
					} else {
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
			<?php } ?>

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'right-blog' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->

	<?php
}

get_footer();
