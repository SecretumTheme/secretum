<?php
/**
 * Template for displaying search forms
 *
 * @package Secretum
 */

namespace Secretum;

?>
<form method="get" id="searchform" action="<?php echo esc_html( get_home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text" placeholder="<?php secretum_text( 'search_button_placeholder', true ); ?>" value="<?php echo esc_html( the_search_query() ); ?>">
		<span class="input-group-append">
			<input class="submit btn btn-primary search" id="searchsubmit" name="submit" type="submit" value=" <?php secretum_text( 'search_button_text', true ); ?> ">
		</span><!-- .input-group-append -->
	</div><!-- .input-group -->
</form><!-- #searchform -->
