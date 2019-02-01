<?php
/**
 * Front-page Google Map Display
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Frontpage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/frontpage/map.php
 * @since      1.0.0
 */

namespace Secretum;

// Display Map If Enabled.
if ( true === secretum_mod( 'frontpage_map_status' ) ) {
?>
<div class="frontpage-map w-100" id="frontpage-map">
	<section id="map"><?php secretum_display_google_map(); ?></section>
</div><!-- .frontpage-map -->
<?php
}
