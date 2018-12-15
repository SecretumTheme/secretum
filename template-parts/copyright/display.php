<?php
/**
 * Display Copyright Area
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Active
if(!secretum_mod('copyright_status')) {
?>
<div class="wrapper copyright<?php echo secretum_copyright_wrapper(); ?>" id="wrapper-copyright">
	<div class="container<?php echo secretum_copyright_container(); ?>">
		<div class="row"><div class="col-md">
			<footer id="colophon"><div class="site-info<?php echo secretum_copyright_textuals(); echo secretum_copyright_text_alignment(); ?>">
				<?php
					// Custom Copyright Statement
					if (secretum_mod('copyright_text')) {
						echo secretum_mod('copyright_text', 'html', false);

					// Default Copyright Statement
					} else {
						echo sprintf('<p>%1$s %2$s &copy; <a href="%3$s">%4$s</a> - %5$s<br /><small>%6$s</small></p>',
						    __('Copyright', 'secretum'),
						    date("Y", time()),
						    get_home_url('/'),
						    get_bloginfo('name'),
						    __('All Rights Reserved.', 'secretum'),
						    __('Code is Poetry | Proudly Powered by WordPress!', 'secretum')
						);
					}
				?>
			</div></footer><!-- .site-info #colophon -->
		</div><!-- .col-md -->

		<?php get_template_part('template-parts/copyright/navbar'); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
}
