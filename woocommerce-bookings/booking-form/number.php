<?php
/**
 * The template used for number fields in the booking form, such as persons or durations.
 *
 * @package 	WooCommerce-Bookings/Templates
 * @version 	1.8.0
 * @subpackage 	Secretum
 */

namespace Secretum;

$after = isset( $field['after'] ) ? $field['after'] : null;
$class = $field['class'];
$label = $field['label'];
$max   = isset( $field['max'] ) ? $field['max'] : null;
$min   = isset( $field['min'] ) ? $field['min'] : null;
$name  = $field['name'];
$step  = isset( $field['step'] ) ? $field['step'] : null;
?>
<p class="form-field form-field-wide form-inline <?php echo esc_attr( implode( ' ', $class ) ); ?>">
	<label for="<?php echo esc_html( $name ); ?>" class="w-100"><?php esc_html_e( 'Number of Players', 'secretum' ); ?>: <input 
		type="number" 
		value="<?php echo absint( ( ! empty( $min ) ) ? $min : 0 ); ?>" 
		step="<?php echo absint( ( isset( $step ) ) ? $step : '' ); ?>" 
		min="<?php echo absint( ( isset( $min ) ) ? $min : '' ); ?>" 
		max="<?php echo absint( ( isset( $max ) ) ? $max : '' ); ?>" 
		name="<?php echo esc_html( $name ); ?>" 
		id="<?php echo esc_html( $name ); ?>" 
		class="form-control ml-1 w-30" /> <?php echo wp_kses_post( ( ! empty( $after ) ) ? $after : '' ); ?>
	</label>
</p>
