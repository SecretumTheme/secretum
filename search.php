<?php
/**
 * The template for displaying search results pages
 *
 * @package    Secretum
 * @subpackage Search
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/search.php
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="search-wrapper">
	<div class="container<?php secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main" id="main">
					<?php
					// Hookable Action.
					do_action( 'secretum_before_content' );

					if ( have_posts() ) { ?>
						<header class="page-header border-bottom mb-5">
							<h1 class="page-title">
								<span><?php secretum_text( 'search_results_text', true ); ?> <?php get_search_query(); ?></span>
							</h1>
						</header><!-- .page-header -->

						<?php while ( have_posts() ) { the_post(); ?>
							<div class="content-search mb-5">
								<?php get_template_part( 'template-parts/post/content', 'excerpt' ); ?>
							</div><!-- .content-search -->
						<?php }
					} else {
						get_template_part( 'template-parts/post/content', 'none' );
					}

					// Hookable Action.
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
