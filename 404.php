<?php
/**
 * Template for displaying 404 pages (not found)asd
 *
 * @package    Secretum
 * @subpackage Theme\404
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/404.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();

// Display If Allowed.
if ( false !== secretum_mod( 'body_status' ) ) { ?>
<div class="wrapper<?php secretum_wrapper( 'body' ); ?>" id="error-wrapper">
	<div class="container<?php secretum_container( 'body' ); ?>" id="content" tabindex="-1">
		<div class="row">
			<?php if ( false !== secretum_mod( 'entry_status' ) ) { ?>
			<div class="col-md<?php secretum_entry_columns(); ?><?php secretum_wrapper( 'error', 'echo', 'borders' ); ?> content-area" id="primary">
				<main class="site-main<?php secretum_container( 'entry' ); ?>" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_before_content' );
					?>

					<section class="error-404 not-found">
						<header class="entry-header">
							<h1 class="page-title text-40"><?php secretum_text( 'error_document_title', true ); ?></h1>
						</header><!-- .entry-header -->

						<div class="page-content">
							<p><?php secretum_text( 'error_document_text', true ); ?></p>

							<?php get_search_form(); ?>

							<hr class="mt-5" />

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<hr />

							<?php the_widget( 'WP_Widget_Archives' ); ?>
						</div><!-- .page-content -->

						<footer class="entry-footer">
							<hr />

							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
						</footer><!-- .entry-footer -->
					</section>

					<?php
					/**
					 * Hook: secretum_after_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_after_content' );
					?>

				</main><!-- .site-main -->
			</div><!-- .content-area -->
			<?php } ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->

	<?php
}

get_footer();
