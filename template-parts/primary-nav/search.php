<?php
/**
 * Navbar Search Form
 *
 * @package Secretum
 */

namespace Secretum;

if ( secretum_mod( 'primary_nav_search_status' ) ) {
?>
<form method="get" class="navbar-form navbar-right" id="navbar-searchform" action="<?php echo esc_html( get_home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input type="text" class="form-control" name="s" placeholder="<?php secretum_text( 'navbar_search_button_text', true ); ?>" value="<?php echo esc_html( the_search_query() ); ?>" title="<?php secretum_text( 'navbar_search_button_title', true ); ?>" /><button type="submit" class="btn btn-default icon-search"></button>
	</div>
</form>
<?php
}
