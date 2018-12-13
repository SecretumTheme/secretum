<?php
/**
 * The template for displaying author archives
 *
 * @package WordPress
 * @subpackage Secretum
 */
get_header();
?>
<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="author-wrapper">
	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part('template-parts/sidebar/sidebar', 'left'); ?>

			<div class="col-md<?php echo secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main mb-5" id="main">
					<?php 
						// Hookable Action
						do_action('secretum_before_content');
					?>
						<header class="page-header author-header clearfix mb-5">
							<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

							<h1 class="page-title border-bottom pb-3 mb-5"><?php echo secretum_text('author_about_text'); ?> <?php echo esc_html($curauth->nickname); ?></h1>

							<?php if (! empty($curauth->ID) && (! empty($curauth->user_url) || ! empty($curauth->user_description))) { ?>
								<div class="float-left mr-3">
									<?php echo get_avatar($curauth->ID); ?>
								</div>
							<?php } ?>

							<?php if (! empty($curauth->user_url) || ! empty($curauth->user_description)) { ?>
								<dl>
									<?php if (! empty($curauth->user_url)) { ?>
										<dt><?php echo secretum_text('author_website_text'); ?></dt>
										<dd><a href="<?php echo esc_url($curauth->user_url); ?>"><?php echo esc_html($curauth->user_url); ?></a></dd>
									<?php } ?>

									<?php if (! empty($curauth->user_description)) { ?>
										<dt><?php echo secretum_text('author_profile_text'); ?></dt>
										<dd><?php echo esc_html($curauth->user_description); ?></dd>
									<?php } ?>
								</dl>
							<?php } ?>
						</header><!-- .page-header -->

						<?php if (have_posts()) { ?>
							<h2 class="pb-3 border-bottom"><?php echo secretum_text('author_posts_by_text'); ?> <?php echo esc_html($curauth->nickname); ?>:</h2>
							<ul>
								<?php while (have_posts()) { the_post(); ?>
									<li class="py-3 border-bottom"><strong><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong> <small><?php printf( '%1$s <a href="%2$s" title="Posted %3$s" rel="bookmark"><time class="entry-date published" datetime="%4$s">%5$s</time></a> %6$s %7$s',
										secretum_text('author_posted_text'),
									    esc_url(get_permalink()),
									    esc_attr(get_the_time()),
									    esc_attr(get_the_date('c')),
									    esc_html(get_the_date()),
										secretum_text('author_categories_text'),
									    secretum_categories_list()
									); ?></small></li>
								<?php } ?>
							</ul>

						<?php } else {
							get_template_part('template-parts/post/content', 'none');
						}

						// Hookable Action
						do_action('secretum_after_content');
					?>
				</main><!-- .site-main -->

				<?php get_template_part('template-parts/nav/posts', 'pagination'); ?>

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right-blog'); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer();
