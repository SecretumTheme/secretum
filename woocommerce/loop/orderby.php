<?php
/**
 * Show options for ordering
 *
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */
?>
<form class="woocommerce-ordering" method="get">
	<div class="form-group">
		<select name="orderby" class="orderby form-control">
			<?php foreach ($catalog_orderby_options as $id => $name) { ?>
				<option value="<?php echo esc_attr($id); ?>" <?php selected($orderby, $id); ?>>
					<?php echo esc_html($name); ?>
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
					'product-page'
				)
			);
		?>
	</div>
</form>
