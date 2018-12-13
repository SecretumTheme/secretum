<?php
/**
 * Front-page Google Map Display
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Map Enabled
if(secretum_mod('frontpage_map_status')) {
	// Get Map Address
	$address = secretum_mod('frontpage_map_address', 'html');
?>
<div class="frontpage-map w-100" id="frontpage-map">
	<section id="map">
		<iframe class="google_map w-100" frameborder="0" scrolling="no"  marginheight="0" marginwidth="0" src="https://maps.google.com/maps?&q=<?php echo esc_html($address);?>&output=embed&iwloc"></iframe>
	</section>
</div><!-- .frontpage-map -->
<?php
}