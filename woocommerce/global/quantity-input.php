<?php
/**
 * Product quantity inputs
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    4.0.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/global/quantity-input.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

if ( $max_value && $min_value === $max_value ) { ?>
	<div class="quantity hidden form-group row mb-3">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty form-control form-control-sm mr-1" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	/* Translators: %s number of items in a shopping cart */
	$secretum_label = ! empty( $args['product_name'] ) ? sprintf( __( '%s Quantity', 'secretum' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'secretum' );
	?>
	<div class="quantity form-group row mb-3">
		<?php do_action( 'woocommerce_before_quantity_input_field' ); ?>
		<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php $secretum_label; ?></label>
		<input
			type="number"
			id="<?php echo esc_attr( $input_id ); ?>"
			class="input-text qty text form-control form-control-sm"
			step="<?php echo esc_attr( $step ); ?>"
			min="<?php echo esc_attr( $min_value ); ?>"
			max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
			name="<?php echo esc_attr( $input_name ); ?>"
			value="<?php echo esc_attr( $input_value ); ?>"
			title="<?php echo esc_html_x( 'Qty', 'Product quantity input tooltip', 'secretum' ); ?>"
			size="4"
			placeholder="<?php echo esc_attr( $placeholder ); ?>"
			inputmode="<?php echo esc_attr( $inputmode ); ?>"
		/>
		<?php do_action( 'woocommerce_after_quantity_input_field' ); ?>
	</div>
	<?php
}
