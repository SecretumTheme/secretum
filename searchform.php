<?php
/**
 * Secretum Theme: Template for displaying search forms
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">

	<div class="input-group">

		<input class="field form-control" id="s" name="s" type="text" placeholder="<?php echo secretum_text('search_button_placeholder'); ?>" value="<?php the_search_query(); ?>">

		<span class="input-group-append">

			<input class="submit btn btn-primary search" id="searchsubmit" name="submit" type="submit" value=" <?php echo secretum_text('search_button_text'); ?> ">

		</span><!-- .input-group-append -->

	</div><!-- .input-group -->

</form><!-- #searchform -->
