<?php
/**
 * Template Name: Template (Contact Us) Sidebar Right
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

get_header();?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="contact-wrapper">

	<div class="container<?php echo secretum_body_container(); ?> tpl-contact-us" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-8 content-area" id="primary">

				<main class="site-main" id="main">

				<?php while (have_posts()) { the_post();?>

					<?php get_template_part('template-parts/post/content', 'contact');?>

				<?php }?>

				</main><!-- .site-main -->

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right-contact');?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php
get_footer();
