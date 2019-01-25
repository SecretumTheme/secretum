<?php
/**
 * The template for displaying author archives
 *
 * @package    Secretum
 * @subpackage Theme\Author
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/author.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="author-wrapper">
	<div class="container<?php secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'left' ); ?>

			<div class="col-md<?php secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main mb-5" id="main">
					<?php
					/**
					 * Hook: secretum_before_content
					 *
					 * @since 1.0.0
					 */
					do_action( 'secretum_before_content' );
					?>
					<header class="page-header author-header clearfix mb-5">
						<?php $curauth = ( filter_input( INPUT_GET, 'author_name', FILTER_SANITIZE_SPECIAL_CHARS ) ) ? get_user_by( 'slug', filter_input( INPUT_GET, 'author_name', FILTER_SANITIZE_SPECIAL_CHARS ) ) : get_userdata( intval( $author ) ); ?>

						<h1 class="page-title border-bottom pb-3 mb-5"><?php secretum_text( 'author_about_text', true ); ?> <?php esc_html( $curauth->nickname ); ?></h1>

						<?php if ( ! empty( $curauth->ID ) && ( ! empty( $curauth->user_url ) || ! empty( $curauth->user_description ) ) ) { ?>
							<div class="float-left mr-3">
								<?php get_avatar( $curauth->ID ); ?>
							</div>
						<?php } ?>

						<?php if ( ! empty( $curauth->user_url ) || ! empty( $curauth->user_description ) ) { ?>
							<dl>
								<?php if ( ! empty( $curauth->user_url ) ) { ?>
									<dt><?php secretum_text( 'author_website_text', true ); ?></dt>
									<dd><a href="<?php esc_url( $curauth->user_url ); ?>"><?php esc_html( $curauth->user_url ); ?></a></dd>
								<?php } ?>

								<?php if ( ! empty( $curauth->user_description ) ) { ?>
									<dt><?php secretum_text( 'author_profile_text', true ); ?></dt>
									<dd><?php esc_html( $curauth->user_description ); ?></dd>
								<?php } ?>
							</dl>
						<?php } ?>
					</header><!-- .page-header -->

					<?php
					if ( have_posts() ) { ?>
						<h2 class="pb-3 border-bottom"><?php secretum_text( 'author_posts_by_text', true ); ?> <?php esc_html( $curauth->nickname ); ?>:</h2>
						<ul>
							<?php while ( have_posts() ) { the_post(); ?>
								<li class="py-3 border-bottom"><strong><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong> <?php secretum_author_post_list(); ?></li>
							<?php } ?>
						</ul>
					<?php
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
