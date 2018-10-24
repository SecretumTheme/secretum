<?php
/**
 * The template for displaying the booking form and calendar with time blocks to customers.
 *
 * @package 	WooCommerce-Bookings/Templates
 * @version 	1.10.8
 *
 * @subpackage 	Secretum/WooCommerce
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

wp_enqueue_script('wc-bookings-date-picker');
wp_enqueue_script('wc-bookings-time-picker');
extract($field);

$month_before_day = strpos(__('F j, Y'), 'F') < strpos(__('F j, Y'), 'j');
?>

<fieldset class="wc-bookings-date-picker <?php echo implode(' ', $class); ?>">

	<div class="picker" data-display="<?php echo $display; ?>" data-availability="<?php echo esc_attr(json_encode($availability_rules)); ?>" data-default-availability="<?php echo $default_availability ? 'true' : 'false'; ?>" data-fully-booked-days="<?php echo esc_attr(json_encode($fully_booked_days)); ?>" data-unavailable-days="<?php echo esc_attr(json_encode($unavailable_days)); ?>" data-partially-booked-days="<?php echo esc_attr(json_encode($partially_booked_days)); ?>" data-restricted-days="<?php echo esc_attr(json_encode($restricted_days)); ?>" data-min_date="<?php echo ! empty($min_date_js) ? $min_date_js : 0; ?>" data-max_date="<?php echo $max_date_js; ?>" data-default_date="<?php echo esc_attr($default_date); ?>"></div>

	<div class="wc-bookings-date-picker-date-fields">

		<?php if ($month_before_day && apply_filters('woocommerce_bookings_mdy_format', true)) { ?>

			<label>
				<input type="text" name="<?php echo $name; ?>_month" placeholder="<?php _e('mm', 'secretum'); ?>" size="2" class="required_for_calculation booking_date_month" />
				<span><?php _e('Month', 'secretum'); ?></span>
			</label> / <label>
				<input type="text" name="<?php echo $name; ?>_day" placeholder="<?php _e('dd', 'secretum'); ?>" size="2" class="required_for_calculation booking_date_day" />
				<span><?php _e('Day', 'secretum'); ?></span>
			</label>
			<?php } else { ?>
			<label>
				<input type="text" name="<?php echo $name; ?>_day" placeholder="<?php _e('dd', 'secretum'); ?>" size="2" class="required_for_calculation booking_date_day" />
				<span><?php _e('Day', 'secretum'); ?></span>
			</label> / <label>
				<input type="text" name="<?php echo $name; ?>_month" placeholder="<?php _e('mm', 'secretum'); ?>" size="2" class="required_for_calculation booking_date_month" />
				<span><?php _e('Month', 'secretum'); ?></span>
			</label>

		<?php } ?>

		/ <label>
			<input type="text" value="<?php echo date('Y'); ?>" name="<?php echo $name; ?>_year" placeholder="<?php _e('YYYY', 'secretum'); ?>" size="4" class="required_for_calculation booking_date_year" />
			<span><?php _e('Year', 'secretum'); ?></span>
		</label>

	</div>

</fieldset>

<div class="form-field form-field-wide">

	<hr />

	<ul class="block-picker">

		<li>
			<ol class="block-help">
				<li><em><?php _e('Select a date from the calendar above', 'secretum'); ?></em></li>
				<li><em><?php _e('When the times appear, select a booking time', 'secretum'); ?></em></li>
				<li><em><?php _e('Enter the number of players', 'secretum'); ?></em></li>
				<li><em><?php _e('Click the continue button', 'secretum'); ?></em></li>
			</ol>
		</li>

	</ul>

	<hr />

	<input type="hidden" class="required_for_calculation" name="<?php echo $name; ?>_time" id="<?php echo $name; ?>" />

</div>
