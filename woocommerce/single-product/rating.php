<?php
/**
 * Single Product Rating
 *
 * @package 	WooCommerce/Templates
 * @version     3.1.0
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */
global $product;

if ('no' === get_option('woocommerce_enable_review_rating')) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ($rating_count > 0) {
?>
<div class="woocommerce-product-rating">
	<?php echo wc_get_rating_html($average, $rating_count); ?>
	<?php if (comments_open()) { ?>
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf(_n('%s review', '%s customer reviews', $review_count, 'secretum'), '<span class="count">' . esc_html($review_count) . '</span>'); ?>)</a>
	<?php } ?>
</div>
<?php
}
