<?php
/**
 * Template Name: Full Width Template - Title Off
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

get_header();?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="page-wrapper">

	<div class="container<?php echo secretum_body_container(); ?> tpl-fullwidth-title-off" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md content-area" id="primary">

				<main class="site-main" id="main">

					<?php while (have_posts()) { the_post();?>

						<?php get_template_part('template-parts/post/content', 'only');?>

					<?php }?>

				</main><!-- .site-main -->

			</div><!-- .content-area -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php
get_footer();
