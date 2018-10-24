<?php
/**
 * Product quantity inputs
 *
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version 	0.0.1
 */
if (! defined('ABSPATH')) { exit; } ?>

<?php if ($max_value && $min_value === $max_value) { ?>
	
	<div class="quantity hidden form-group row mb-3">

		<input type="hidden" id="<?php echo esc_attr($input_id); ?>" class="qty form-control form-control-sm mr-1" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($min_value); ?>" /> <label for="<?php echo esc_attr($input_id); ?> class="col-sm-2 col-form-label col-form-label-sm"> <?php esc_html_e('Quantity', 'secretum'); ?></label>

	</div>

<?php } else { ?>

	<?php $labelledby = ! empty($args['product_name']) ? sprintf(__('%s quantity', 'secretum'), strip_tags($args['product_name'])) : ''; ?>

	<div class="quantity form-group row mb-3">

		<label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php esc_html_e('Quantity', 'secretum'); ?></label>

		<input
			type="number"
			id="<?php echo esc_attr($input_id); ?>"
			class="input-text qty text form-control form-control-sm"
			step="<?php echo esc_attr($step); ?>"
			min="<?php echo esc_attr($min_value); ?>"
			max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>"
			name="<?php echo esc_attr($input_name); ?>"
			value="<?php echo esc_attr($input_value); ?>"
			title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'secretum'); ?>"
			size="4"
			pattern="<?php echo esc_attr($pattern); ?>"
			inputmode="<?php echo esc_attr($inputmode); ?>"
			aria-labelledby="<?php echo esc_attr($labelledby); ?>"
		/> <label for="<?php echo esc_attr($input_id); ?>"><?php esc_html_e('Quantity', 'secretum'); ?></label>

	</div>

<?php }
