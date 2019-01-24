<?php
/**
 * Single Product Rating
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\Single-Product
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version     3.1.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/rating.php
 */

namespace Secretum;

global $product;

if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) {
?>
<div class="woocommerce-product-rating">
		<?php echo wp_kses_post( wc_get_rating_html( $average, $rating_count ) ); ?>
	<?php if ( comments_open() ) { ?>
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">( <?php
			/* Translators: Reivew count %s = count */
			printf( esc_html( _n( '%s review', '%s customer reviews', $review_count, 'secretum' ) ), '<span class="count">' . absint( $review_count ) . '</span>' );
			?> )</a>
	<?php } ?>
</div>
<?php
}
