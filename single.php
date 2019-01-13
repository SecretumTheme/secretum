<?php
/**
 * The template for displaying all single posts
 *
 * @package Secretum
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
					// @about Hookable Action
					do_action( 'secretum_before_content' );

					while ( have_posts() ) { the_post();
						// @about Post Content
						get_template_part( 'template-parts/post/content', get_post_format() );

						// @about Post Navigation Links
						get_template_part( 'template-parts/nav/post', 'navigation' );

						// @about Comments Template
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}

					// @about Hookable Action
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
