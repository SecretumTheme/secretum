<?php
/**
 * Default Front-page Template
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
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
