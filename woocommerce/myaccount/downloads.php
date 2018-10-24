<?php
/**
 * Shows downloads on the account page.
 *
 * @package 	WooCommerce/Templates
 * @version 	3.2.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version 	0.0.1
 */
if (! defined('ABSPATH')) { exit; }

$downloads     = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;

do_action('woocommerce_before_account_downloads', $has_downloads); ?>

<?php if ($has_downloads) { ?>

	<?php do_action('woocommerce_before_available_downloads'); ?>

	<?php do_action('woocommerce_available_downloads', $downloads); ?>

	<?php do_action('woocommerce_after_available_downloads'); ?>

<?php } else { ?>

	<div class="woocommerce-Message woocommerce-Message--info woocommerce-info p-3">

		<a class="woocommerce-Button btn btn-primary btn-lg" href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">

			<?php esc_html_e('Go shop', 'secretum') ?>

		</a>

		<?php esc_html_e('No downloads available yet.', 'secretum'); ?>

	</div>

<?php } ?>

<?php do_action('woocommerce_after_account_downloads', $has_downloads);
