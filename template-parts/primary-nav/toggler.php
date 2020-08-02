<?php
/**
 * Primary Navbar Toggler
 *
 * @package    Secretum
 * @subpackage Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2020 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/toggler.php
 * @since      1.0.0
 */

namespace Secretum;

if ( false === secretum_mod( 'primary_nav_toggler_status' ) ) {
	return;
}
?>
<button class="navbar-toggler<?php secretum_nav_toggler_wrapper( 'primary_nav' ); ?>" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php secretum_text( 'primary_nav_toggler_aria_label_text', true ); ?>"><?php secretum_nav_toggler_text(); ?><span class="navbar-toggler-icon<?php secretum_nav_toggler_icon( 'primary_nav' ); ?>"></span></button>
