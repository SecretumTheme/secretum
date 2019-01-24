<?php
/**
 * The template for displaying the booking form and calendar with time blocks to customers.
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce-Bookings\Booking-Form
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version 	1.10.8
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce-bookings/booking-form/datetime-picker.php
 */

namespace Secretum;

wp_enqueue_script( 'wc-bookings-date-picker' );
wp_enqueue_script( 'wc-bookings-time-picker' );

$month_before_day = strpos( 'F j, Y', 'F' ) < strpos( 'F j, Y', 'j' );
?>
<fieldset class="wc-bookings-date-picker <?php echo esc_attr( implode( ' ', $class ) ); ?>">
	<div class="picker" data-display="<?php echo esc_attr( $display ); ?>" data-availability="<?php echo esc_attr( wp_json_encode( $availability_rules ) ); ?>" data-default-availability="<?php echo esc_attr( $default_availability ? 'true' : 'false' ); ?>" data-fully-booked-days="<?php echo esc_attr( wp_json_encode( $fully_booked_days ) ); ?>" data-unavailable-days="<?php echo esc_attr( wp_json_encode( $unavailable_days ) ); ?>" data-partially-booked-days="<?php echo esc_attr( wp_json_encode( $partially_booked_days ) ); ?>" data-restricted-days="<?php echo esc_attr( wp_json_encode( $restricted_days ) ); ?>" data-min_date="<?php echo esc_html( ( ! empty( $min_date_js ) ) ? $min_date_js : 0 ); ?>" data-max_date="<?php echo esc_html( $max_date_js ); ?>" data-default_date="<?php echo esc_attr( $default_date ); ?>"></div>
	<div class="wc-bookings-date-picker-date-fields">
		<?php if ( $month_before_day && apply_filters( 'woocommerce_bookings_mdy_format', true ) ) { ?>
			<label>
				<input type="text" name="<?php echo esc_attr( $name ); ?>_month" placeholder="<?php esc_html_e( 'mm', 'secretum' ); ?>" size="2" class="required_for_calculation booking_date_month" />
				<span><?php esc_html_e( 'Month', 'secretum' ); ?></span>
			</label> / <label>
				<input type="text" name="<?php echo esc_attr( $name ); ?>_day" placeholder="<?php esc_html_e( 'dd', 'secretum' ); ?>" size="2" class="required_for_calculation booking_date_day" />
				<span><?php esc_html_e( 'Day', 'secretum' ); ?></span>
			</label>
			<?php } else { ?>
			<label>
				<input type="text" name="<?php echo esc_attr( $name ); ?>_day" placeholder="<?php esc_html_e( 'dd', 'secretum' ); ?>" size="2" class="required_for_calculation booking_date_day" />
				<span><?php esc_html_e( 'Day', 'secretum' ); ?></span>
			</label> / <label>
				<input type="text" name="<?php echo esc_attr( $name ); ?>_month" placeholder="<?php esc_html_e( 'mm', 'secretum' ); ?>" size="2" class="required_for_calculation booking_date_month" />
				<span><?php esc_html_e( 'Month', 'secretum' ); ?></span>
			</label>
		<?php } ?>
		/ <label>
			<input type="text" value="<?php echo esc_html( date( 'Y' ) ); ?>" name="<?php echo esc_attr( $name ); ?>_year" placeholder="<?php esc_html_e( 'YYYY', 'secretum' ); ?>" size="4" class="required_for_calculation booking_date_year" />
			<span><?php esc_html_e( 'Year', 'secretum' ); ?></span>
		</label>
	</div>
</fieldset>

<div class="form-field form-field-wide">
	<hr />
	<ul class="block-picker">
		<li>
			<ol class="block-help">
				<li><em><?php esc_html_e( 'Select a date from the calendar above', 'secretum' ); ?></em></li>
				<li><em><?php esc_html_e( 'When the times appear, select a booking time', 'secretum' ); ?></em></li>
				<li><em><?php esc_html_e( 'Enter the number of players', 'secretum' ); ?></em></li>
				<li><em><?php esc_html_e( 'Click the continue button', 'secretum' ); ?></em></li>
			</ol>
		</li>
	</ul>
	<hr />
	<input type="hidden" class="required_for_calculation" name="<?php echo esc_attr( $name ); ?>_time" id="<?php echo esc_attr( $name ); ?>" />
</div>
