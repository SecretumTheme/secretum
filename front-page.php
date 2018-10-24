<?php
/**
 * The frontpage template file
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// Get Theme Settings
$frontpage_header_status 	= secretum_mod('frontpage_header_status');
$frontpage_map_status 		= secretum_mod('frontpage_map_status');
$frontpage_page_id 			= secretum_mod('frontpage_page_id');

// Start Template
get_header();

// If Frontpage Body Page ID Set
if (! empty($frontpage_page_id)) {
	// Heading
	if (! empty($frontpage_header_status)) {
		get_template_part('template-parts/page/front-page', 'heading');
	}

	// Content Body
	get_template_part('template-parts/page/front-page','section');

	// Google Map
	if (! empty($frontpage_map_status)) {
		get_template_part('template-parts/page/front-page','map');
	}

} else {
	// Heading
	if (! empty($frontpage_header_status)) {
		get_template_part('template-parts/page/front-page', 'heading');
	}

?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="index-wrapper">

	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('template-parts/sidebar/sidebar', 'left'); ?>

			<div class="col-md<?php echo secretum_entry_wrapper(); ?> content-area" id="primary">

				<main class="site-main" id="main">

				<?php do_action('secretum_before_content'); ?>

				<?php if (have_posts()) {?>

					<?php while (have_posts()) { the_post(); ?>

						<?php get_template_part('template-parts/post/content', get_post_format()); ?>

					<?php }?>

				<?php } else {?>

					<?php get_template_part('template-parts/post/content', 'none'); ?>

				<?php }?>

				<?php do_action('secretum_after_content'); ?>

				</main><!-- .site-main -->

				<?php get_template_part('template-parts/nav/posts', 'pagination'); ?>

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right'); ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php

	// Google Map
	if (! empty($frontpage_map_status)) {

		get_template_part('template-parts/page/front-page','map');

	}

}

get_footer();
