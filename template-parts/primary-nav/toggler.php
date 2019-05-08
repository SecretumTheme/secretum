<?php
/**
 * Primary Navbar Toggler
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/toggler.php
 * @since      1.0.0
 */

namespace Secretum;

if ( false !== secretum_mod( 'primary_nav_toggler_status' ) ) { ?>
<button class="navbar-toggler<?php secretum_nav_toggler_wrapper( 'primary_nav' ); ?>" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon<?php secretum_nav_toggler_icon( 'primary_nav' ); ?>"></span></button>
	<?php
}
