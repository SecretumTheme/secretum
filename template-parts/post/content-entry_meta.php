<?php
/**
 * Template part for displaying content entra meta details
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Posts
if ('post' == get_post_type()) {
?>
<div class="entry-meta my-4">
	<?php if (is_single()) { ?>
		<?php if (!secretum_mod('entrymeta_published_status') || secretum_mod('entrymeta_updated_status')) { ?>
			<span class="posted-on">
				<?php if (!secretum_mod('entrymeta_published_status')) { ?>
					<?php if (secretum_mod('entrymeta_link', 'raw') == "month") { ?>
						<i class="fa fa-clock-o"></i> <a href="<?php echo esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))); ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time></a>

					<?php } elseif (secretum_mod('entrymeta_link', 'raw') == "day") { ?>
						<i class="fa fa-clock-o"></i> <a href="<?php echo esc_url(get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time></a>

					<?php } elseif (secretum_mod('entrymeta_link', 'raw') == "post") { ?>
						<i class="fa fa-clock-o"></i> <a href="<?php esc_url(get_permalink()); ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time></a>

					<?php } else {?>
						<i class="fa fa-clock-o"></i> <time class="entry-date published updated" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time>
					<?php }?>
				<?php } ?>

				<?php if (secretum_modified_date_check() && secretum_mod('entrymeta_updated_status')) { ?>
					<time class="updated" datetime="<?php echo get_the_modified_date(DATE_W3C); ?>">(<?php echo get_the_modified_date(); ?>)</time>
				<?php } ?>

			</span><!-- .posted-on -->
		<?php } ?>

		<?php if (!secretum_mod('entrymeta_author_status')) { ?>
			<span class="byline">
				<?php if (secretum_mod('entrymeta_author_link', 'raw') == 'author') { ?>
					<i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_the_author(); ?></a></span>

				<?php } else {?>
					<i class="fa fa-user"></i> <span class="author vcard"><?php echo get_the_author(); ?></span>
				<?php } ?>
			</span><!-- .byline -->
		<?php } ?>
	<?php } ?>
</div><!-- .entry-meta -->
<?php
}
