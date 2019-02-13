<?php
/**
 * Site Branding Description
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Header
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/site-description.php
 * @since      1.0.0
 */

namespace Secretum;

// Show Desc If Allowed && Ignore If Left/Right Primary Nav In Use.
if ( true !== secretum_mod( 'site_identity_tagline_status' ) && ( true !== has_nav_menu( 'secretum-navbar-primary-left' ) && true !== has_nav_menu( 'secretum-navbar-primary-right' ) ) ) {
?>
	<p class="site-description<?php secretum_container( 'site_identity_desc', 'echo', [ 'textuals' => true ] ); ?>"><?php echo esc_html( get_bloginfo( 'description', 'display' ) ); ?></p>
<?php
}
