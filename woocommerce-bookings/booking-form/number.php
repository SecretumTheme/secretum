<?php
/**
 * The template used for number fields in the booking form, such as persons or durations.
 *
 * @package 	WooCommerce-Bookings/Templates
 * @version 	1.8.0
 *
 * @subpackage 	Secretum
 * @version     0.0.1
 */
$after = isset($field['after']) ? $field['after'] : null;
$class = $field['class'];
$label = $field['label'];
$max   = isset($field['max']) ? $field['max'] : null;
$min   = isset($field['min']) ? $field['min'] : null;
$name  = $field['name'];
$step  = isset($field['step']) ? $field['step'] : null;
?>
<p class="form-field form-field-wide form-inline <?php echo implode(' ', $class); ?>">
	<label for="<?php echo $name; ?>" class="w-100"><?php _e('Number of Players', 'secretum'); ?>: <input 
		type="number" 
		value="<?php echo (! empty($min)) ? $min : 0; ?>" 
		step="<?php echo (isset($step)) ? $step : ''; ?>" 
		min="<?php echo (isset($min)) ? $min : ''; ?>" 
		max="<?php echo (isset($max)) ? $max : ''; ?>" 
		name="<?php echo $name; ?>" 
		id="<?php echo $name; ?>" 
		class="form-control ml-1 w-30" /> <?php echo (! empty($after)) ? $after : ''; ?>
	</label>
</p>
