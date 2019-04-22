<?php
/**
 * Show options for ordering
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/loop/orderby.php
 * @since      1.0.0
 */

namespace Secretum;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form class="woocommerce-ordering" method="get">
	<div class="form-group">
		<select name="orderby" class="orderby form-control">
			<?php foreach ( $catalog_orderby_options as $secretum_id => $secretum_name ) { ?>
				<option value="<?php echo esc_attr( $secretum_id ); ?>" <?php selected( $orderby, $secretum_id ); ?>>
					<?php echo esc_html( $secretum_name ); ?>
				</option>
			<?php } ?>
		</select>
		<input type="hidden" name="paged" value="1" />
		<?php
		wc_query_string_form_fields(
			null,
			array(
				'orderby',
				'submit',
				'paged',
				'product-page',
			)
		);
		?>
	</div>
</form>
