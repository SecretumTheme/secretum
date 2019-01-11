<?php
/**
 * Front-page Google Map Display
 *
 * @package Secretum
 */

namespace Secretum;

// @about Display Map If Enabled
if ( secretum_mod( 'frontpage_map_status' ) ) {
?>
<div class="frontpage-map w-100" id="frontpage-map">
	<section id="map"><?php secretum_display_google_map(); ?></section>
</div><!-- .frontpage-map -->
<?php
}
