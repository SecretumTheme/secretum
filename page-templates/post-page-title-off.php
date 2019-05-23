<?php
/**
 * Template Name: Post/Page Title Off
 * Template Post Type: post, page
 *
 * @package   Secretum
 * @author    SecretumTheme <author@secretumtheme.com>
 * @copyright 2018-2019 Secretum
 * @license   https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link      https://github.com/SecretumTheme/secretum/blob/master/page-templates/post-page-title-off.php
 * @since     1.7.0
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_wrapper( 'body' ); ?>" id="single-wrapper">
	<div class="container<?php secretum_container( 'body' ); ?>" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md<?php secretum_entry_columns(); ?><?php secretum_wrapper( 'entry' ); ?> content-area  tpl-title-off" id="primary">
				<main class="site-main<?php secretum_container( 'entry' ); ?>" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_before_content' );

					while ( have_posts() ) {
						the_post();

						get_template_part( 'template-parts/post/content', 'only' );

						get_template_part( 'template-parts/nav/post', 'navigation' );

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
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->

<?php
get_footer();

