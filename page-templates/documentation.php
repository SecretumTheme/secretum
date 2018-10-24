<?php
/**
 * Template Name: Documentation Template
 * Template Post Type: secretum_docs
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

get_header();?>

	<div class="wrapper<?php echo secretum_documentation_wrapper(); ?>" id="page-wrapper">

		<div class="container<?php echo secretum_documentation_container(); ?> tpl-documentation" id="content" tabindex="-1">

			<div class="row">

				<div class="sidebar sidebar-docs col-md-2 widget-area<?php echo secretum_sidebar_wrapper(); ?>" id="sidebar">

					<?php
						if(is_active_sidebar('documentation-sidebar-left')) {

							dynamic_sidebar('documentation-sidebar-left');

						}
					?>

				</div><!-- .sidebar -->

				<div class="col-md content-area <?php echo secretum_entry_wrapper(); ?>" id="primary">

					<main class="site-main" id="main">

						<article <?php post_class();?> id="post-<?php the_ID();?>">

							<header class="entry-header">

								<?php the_title('<h1 class="entry-title mb-4">', '</h1>');?>

							</header><!-- .entry-header -->

							<?php echo get_the_post_thumbnail($post->ID, 'large');?>

							<div class="entry-content">

								<?php
									// Get path/filename From Metadata
									$filename = wp_strip_all_tags(get_post_meta(get_the_ID(), 'documentation_include_file', true));

									// If File Exists Then Include
									if (isset($filename) && file_exists(SECRETUM_THEME_DIR . '/docs/' . $filename)) {

										include_once(SECRETUM_THEME_DIR . '/docs/' . $filename);

									// Else Do Posts
									} else {

										while (have_posts()) {

											the_post();
											the_content();

										}

									}

									// Render Breadcrumbs
									echo secretum_breadcrumbs('documentation_topic', true, true, true);
								?>

								<hr class="mb-5" />

							</div><!-- .entry-content -->

							<footer class="entry-footer">

								<?php secretum_edit_link();?>

							</footer><!-- .entry-footer -->

						</article>

					</main><!-- .site-main -->

				</div><!-- .content-area -->

				<div class="sidebar sidebar-toc col-md-2 widget-area<?php echo secretum_sidebar_wrapper()?>" id="sidebar-right">

					<?php if(!get_theme_mod('secretum_feature_documentation_toc')) {?>

						<nav class="sticky-top font-weight-bold" id="toc" data-toggle="toc" role="complementary"><b>Contents</b></nav>

					<?php }elseif(is_active_sidebar('documentation-sidebar-right')){?>

						<?php dynamic_sidebar('documentation-sidebar-right');?>

					<?php }?>

				</div><!-- .sidebar -->

			</div><!-- .row -->

		</div><!-- .container -->

	</div><!-- .wrapper -->

	<div class="wrapper footer<?php echo secretum_footer_wrapper(); ?>" id="wrapper-footer">

		<div class="container<?php echo secretum_footer_container();?>">

			<?php if(is_active_sidebar('documentation-footer-left') || is_active_sidebar('documentation-footer-center') || is_active_sidebar('documentation-footer-right')) {?>

				<div class="row">

					<?php if (is_active_sidebar('documentation-footer-left')) {?>

						<div class="col-md">

							<?php dynamic_sidebar('documentation-footer-left');?>

						</div><!-- .col-md -->

					<?php }?>

					<?php if (is_active_sidebar('documentation-footer-center')) {?>

						<div class="col-md">

							<?php dynamic_sidebar('documentation-footer-center');?>

						</div><!-- .col-md -->

					<?php }?>

					<?php if (is_active_sidebar('documentation-footer-right')) {?>

						<div class="col-md">

							<?php dynamic_sidebar('documentation-footer-right');?>

						</div><!-- .col-md -->

					<?php }?>

				</div><!-- .row -->

			<?php }?>

		</div><!-- .container -->

	</div><!-- .wrapper -->

	<?php
		/**
		 * Display Copyright Content
		 * @source inc/system/footer/actions.php
		 *
		 * @uses secretum_copyright_statement()
		 * @source inc/system/footer/template-parts.php
		 */
		do_action('secretum_copyright');


		/**
		 * Display Content After Copyright
		 * @source inc/system/footer/actions.php
		 *
		 * @uses secretum_scroll_top()
		 * @source inc/system/footer/template-parts.php
		 */
		do_action('secretum_copyright_after');
	?>

</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
