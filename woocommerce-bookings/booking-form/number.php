<?php
/**
 * The template used for number fields in the booking form, such as persons or durations.
 *
 * @package    Secretum
 * @subpackage Theme\WooCommerce-Bookings\Booking-Form
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    1.8.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce-bookings/booking-form/number.php
 * @since      1.1.2
 */

namespace Secretum;

$secretum_after = isset( $field['after'] ) ? $field['after'] : null;
$secretum_class = $field['class'];
$secretum_label = $field['label'];
$secretum_max   = isset( $field['max'] ) ? $field['max'] : null;
$secretum_min   = isset( $field['min'] ) ? $field['min'] : null;
$secretum_name  = $field['name'];
$secretum_step  = isset( $field['step'] ) ? $field['step'] : null;
?>
<p class="form-field form-field-wide form-inline <?php echo esc_attr( implode( ' ', $secretum_class ) ); ?>">
	<label for="<?php echo esc_html( $secretum_name ); ?>" class="w-100"><?php esc_html_e( 'Number of Players', 'secretum' ); ?>: <input 
		type="number" 
		value="<?php echo absint( ( ! empty( $secretum_min ) ) ? $secretum_min : 0 ); ?>" 
		step="<?php echo absint( ( isset( $secretum_step ) ) ? $secretum_step : '' ); ?>" 
		min="<?php echo absint( ( isset( $secretum_min ) ) ? $secretum_min : '' ); ?>" 
		max="<?php echo absint( ( isset( $secretum_max ) ) ? $secretum_max : '' ); ?>" 
		name="<?php echo esc_html( $secretum_name ); ?>" 
		id="<?php echo esc_html( $secretum_name ); ?>" 
		class="form-control ml-1 w-30" /> <?php echo wp_kses_post( ( ! empty( $secretum_after ) ) ? $secretum_after : '' ); ?>
	</label>
</p>
