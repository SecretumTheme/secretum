<?php
/**
 * Template part for displaying contact details
 *
 * @package WordPress
 * @subpackage Secretum
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title mb-4">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php secretum_edit_link(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
