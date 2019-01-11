<?php
/**
 * The template for displaying all pages
 *
 * @package Secretum
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="page-wrapper">
	<div class="container<?php secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main" id="main">
					<?php
					// @about Hookable Action
					do_action( 'secretum_before_content' );

					while ( have_posts() ) { the_post();
						// @about Page Content
						get_template_part( 'template-parts/page/content', 'page' );

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
