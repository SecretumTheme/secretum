<?php
/**
 * Secretum Theme: WooCommerce Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Remove WooCommerce Generator Tag
 */
remove_action('wp_head', array($GLOBALS['woocommerce'], 'generator'));


/**
 * WooCommerce
 */
add_action('after_setup_theme', function() {
	// Theme Support
    add_theme_support('woocommerce',
		array(
			'thumbnail_image_width' => 250,
			'single_image_width' 	=> 700,
	        'product_grid' => array(
	            'default_rows' 		=> 3,
	            'min_rows' 			=> 2,
	            'max_rows' 			=> 8,
	            'default_columns' 	=> 3,
	            'min_columns' 		=> 2,
	            'max_columns' 		=> 5,
	      ),
		)
	);

    // Product Images
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
});


/**
 * Bootstrap WooCommerce Product Search Form
 */
add_filter('get_product_search_form' , function() {
	return '<form method="get" id="searchform" action="' . esc_url(home_url('/')) . '" role="search">
			<div class="input-group">
				<label class="screen-reader-text" for="s">' . __('Search for', 'secretum') . '</label>
				<input class="field form-control" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __('Search products...', 'secretum') . '" />
				<span class="input-group-append">
					<input class="submit btn btn-primary search" type="submit" id="searchsubmit" value="'. __('Search Us!', 'secretum') .'" />
				</span>
				<input type="hidden" name="post_type" value="product" />
			</div>
		 </form>';
});


/**
 * Modify Password Strengh & Default Message
 */
add_filter('woocommerce_get_script_data', function($params, $handle) {
	switch ($handle) {
		case 'wc-password-strength-meter':
			$params = array(
				'min_password_strength' => apply_filters('woocommerce_min_password_strength', 1),
				'i18n_password_error'   => apply_filters('secretum_password_error_text', esc_attr__('Create a Secure Password You Will Remember.', 'secretum')),
				'i18n_password_hint'    => apply_filters('secretum_password_hint_text', esc_attr__('Passwords should be at least five characters long or longer. We recommend using a mixture of upper and lower case letters, numbers and symbols like ! " ? $ % ^ &).', 'secretum')),
			);

	}

	return $params;
}, 9999, 2);


/**
 * Modify Password Strength Messages
 */
add_action('wp_enqueue_scripts',  function(){
	wp_localize_script('wc-password-strength-meter', 'pwsL10n', array(
		'short' 	=> apply_filters('secretum_password_strength_short_text', esc_attr__('Keep Going!', 'secretum')),
		'bad' 		=> apply_filters('secretum_password_strength_bad_text', esc_attr__('Nice! An Easy To Remember Password!', 'secretum')),
		'good' 		=> apply_filters('secretum_password_strength_good_text', esc_attr__('Wow! The World Needs More Passwords Like That!', 'secretum')),
		'strong' 	=> apply_filters('secretum_password_strength_strong_text', esc_attr__('That Some Mighty Fine Security You Have!', 'secretum')),
		'mismatch' 	=> apply_filters('secretum_password_mismatch_text', esc_attr__('Passwords Do Not Match!', 'secretum'))
	));
}, 9999);


/**
 * WooCommerce Filter Hook - Add Bootstrap Classes To Place Order Button
 */
add_filter('woocommerce_order_button_html', function($args) {
	return str_replace('button alt','btn btn-primary w-100', $args);
}, 10, 1);


/**
 * WooCommerce Filter Hook - Add Cart Icon To Primary Menu
 */
add_filter('wp_nav_menu_items', function($items, $args, $ajax = false) {
	$icon = '';

	if ((isset($ajax) && $ajax) || (property_exists($args, 'theme_location') && $args->theme_location === 'primary')) {

		$active = (is_cart()) ? ' current-menu-item' : '';

		$icon = '<li class="menu-item menu-item-type-cart menu-item-type-woocommerce-cart' . $active . '">';
		$icon .= '<a class="cart-contents" href="' . esc_url(wc_get_cart_url()) . '">';
		$icon .= '<span class="count">' .  wp_kses_data(WC()->cart->get_cart_contents_count()) . '</span>';
		$icon .= '</a>';
		$icon .= '</li>';

	}

	return (WC()->cart->get_cart_contents_count() > 0) ? $items . $icon : $items;
}, 10, 3);


/**
 * WooCommerce Filter Hook - Update Cart Icon
add_filter('woocommerce_add_to_cart_fragments', function($fragments) {

	//$fragments['li.menu-item-type-woocommerce-cart'] = my_wp_nav_menu_items('', new stdClass(), true);

	return $fragments;

}, 10, 1);
 */


/**
 * WooCommerce Custom Variations Dropdown
 */
if (! function_exists('secretum_wc_dropdown_variation_attribute_options'))
{
	function secretum_wc_dropdown_variation_attribute_options($args = array())
	{

		$args = wp_parse_args(apply_filters('woocommerce_dropdown_variation_attribute_options_args', $args), array(
			'options'          => false,
			'attribute'        => false,
			'product'          => false,
			'selected'         => false,
			'name'             => '',
			'id'               => '',
			'class'            => '',
			'show_option_none' => apply_filters('secretum_choose_option_text', __('Choose an option', 'secretum')),
		));

		$options               = $args['options'];
		$product               = $args['product'];
		$attribute             = $args['attribute'];
		$name                  = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title($attribute);
		$id                    = $args['id'] ? $args['id'] : sanitize_title($attribute);
		$class                 = $args['class'];
		$show_option_none      = $args['show_option_none'] ? true : false;
		$show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : apply_filters('secretum_choose_option_text', __('Choose an option', 'secretum'));

		if (empty($options) && ! empty($product) && ! empty($attribute)) {
			$attributes = $product->get_variation_attributes();
			$options    = $attributes[ $attribute ];
		}

		$html  = '<div class="form-group">';

		$html .= '<select id="' . esc_attr($id) . '" class="' . esc_attr($class) . ' form-control" name="' . esc_attr($name) . '" data-attribute_name="attribute_' . esc_attr(sanitize_title($attribute)) . '" data-show_option_none="' . ($show_option_none ? 'yes' : 'no') . '">';

		$html .= '<option value="">' . esc_html($show_option_none_text) . '</option>';

		if (! empty($options)) {

			if ($product && taxonomy_exists($attribute)) {

				$terms = wc_get_product_terms($product->get_id(), $attribute, array(
					'fields' => 'all',
				));

				foreach ($terms as $term) {

					if (in_array($term->slug, $options, true)) {

						$html .= '<option value="' . esc_attr($term->slug) . '" ' . selected(sanitize_title($args['selected']), $term->slug, false) . '>' . esc_html(apply_filters('woocommerce_variation_option_name', $term->name)) . '</option>';

					}

				}

			} else {

				foreach ($options as $option) {

					$selected = sanitize_title($args['selected']) === $args['selected'] ? selected($args['selected'], sanitize_title($option), false) : selected($args['selected'], $option, false);

					$html .= '<option value="' . esc_attr($option) . '" ' . $selected . '>' . esc_html(apply_filters('woocommerce_variation_option_name', $option)) . '</option>';
				}

			}

		}

		$html .= '</select>';

		$html .= '</div>';

		echo apply_filters('woocommerce_dropdown_variation_attribute_options_html', $html, $args);
	}
}


/**
 * WooCommerce Filter Hook - Add Bootstrap Classes To Checkout Form
 */
add_filter('woocommerce_form_field_args', function($args, $key, $value) {
	// Remove Woo Classes
	foreach ($args['class'] as $key => $class) {

		if ($class == 'form-row-wide' || $class == 'form-row-first' || $class == 'form-row-last') {

			unset($args['class'][$key]);

		}

	}

	// Add Bootstrap 4 Classes
	$args['class'][]     = 'form-group';
	$args['label_class'] = array('col-form-label-lg mt-1');
	$args['input_class'] = array('form-control', 'form-control-lg');

    return $args;
}, 10, 3);


/**
 * WooCommerce Remove Order Notes Field & Title
if (! function_exists('secretum_wc_remove_order_notes')) {

	function secretum_wc_remove_order_notes($fields) {

		unset($fields['order']['order_comments']);
		return $fields;

	}

	add_filter('woocommerce_checkout_fields' , 'secretum_wc_remove_order_notes');

}
 */


/**
 * Remove Checkout Fields
 */
add_filter('woocommerce_checkout_fields', function($fields){
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_state']);

	return $fields;
});


/**
 * Remove Sku From All Product Pages
 */
add_filter('wc_product_sku_enabled', function(){
    return (!is_admin() && is_product()) ? false : true;
});


/**
 * Add To Cart Redirect To Checkout Page
add_filter('woocommerce_add_to_cart_redirect', function(){
	return get_permalink( get_option( 'woocommerce_checkout_page_id' ) );
});
 */


/**
 * WooCommerce Remove Order Notes Title
 */
add_filter('woocommerce_enable_order_notes_field', '__return_false');
