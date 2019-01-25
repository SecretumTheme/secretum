<?php
/**
 * Template for displaying search forms
 *
 * @package    Secretum
 * @subpackage Theme\Searchform
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/searchform.php
 * @since      1.0.0
 */

namespace Secretum;

?>
<form method="get" id="searchform" action="<?php echo esc_html( get_home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<label for="s" class="screen-reader-text"><?php secretum_text( 'search_button_placeholder', true ); ?></label>
		<input class="field form-control" id="s" name="s" type="text" placeholder="<?php secretum_text( 'search_button_placeholder', true ); ?>" value="<?php echo esc_html( the_search_query() ); ?>">
		<span class="input-group-append">
			<input class="submit btn btn-primary search" id="searchsubmit" name="submit" type="submit" value=" <?php secretum_text( 'search_button_text', true ); ?> ">
		</span><!-- .input-group-append -->
	</div><!-- .input-group -->
</form><!-- #searchform -->
