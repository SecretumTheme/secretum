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
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="archive-wrapper">
	<div class="container<?php secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_before_content' );

					if ( have_posts() ) { ?>
						<header class="page-header border-bottom mb-5">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php while ( have_posts() ) { the_post(); ?>
							<div class="content-archive mb-5">
								<?php get_template_part( 'template-parts/post/content', 'excerpt' ); ?>
							</div><!-- .content-archive -->
						<?php }
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

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'right-blog' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer();
