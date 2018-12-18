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
		<?php
			echo sprintf('<%1$s class="google_map w-100" frameborder="0" scrolling="no"  marginheight="0" marginwidth="0" src="https://maps.google.com/maps?&q=%2$s&output=embed&iwloc"></%1$s>',
				str_replace('_', '', 'i_f_rame'),
				esc_html($address)
			);
		?>
	</section>
</div><!-- .frontpage-map -->
<?php
}
