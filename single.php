<?php
/**
 * The template for displaying all single posts
 *
 * @package    Secretum
 * @subpackage Theme\Single
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/single.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="single-wrapper">
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

					while ( have_posts() ) { the_post();
						// Post Content.
						get_template_part( 'template-parts/post/content', get_post_format() );

						// Post Navigation Links.
						get_template_part( 'template-parts/nav/post', 'navigation' );

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
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer();
