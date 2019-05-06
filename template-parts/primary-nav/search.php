<?php
/**
 * Navbar Search Form
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/search.php
 * @since      1.0.0
 */

namespace Secretum;

if ( false !== secretum_mod( 'primary_nav_search_status' ) ) {
	?>
	<form method="get" class="navbar-form navbar-right" id="navbar-searchform" action="<?php echo esc_html( get_home_url( '/' ) ); ?>" role="search">
		<div class="input-group">
			<label for="s" class="screen-reader-text"><?php secretum_text( 'navbar_search_button_text', true ); ?></label>
			<input type="text" class="form-control" name="s" placeholder="<?php secretum_text( 'navbar_search_button_text', true ); ?>" value="<?php echo esc_html( the_search_query() ); ?>" title="<?php secretum_text( 'navbar_search_button_title', true ); ?>" /><button type="submit" class="btn btn-default icon-search"></button>
		</div>
	</form>
	<?php
}
