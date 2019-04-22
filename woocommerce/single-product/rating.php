<?php
/**
 * Single Product Rating
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/rating.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$secretum_rating_count   = $product->get_rating_count();
$secretum_review_count   = $product->get_review_count();
$secretum_review_average = $product->get_average_rating();

if ( $secretum_rating_count > 0 ) {
	?>
	<div class="woocommerce-product-rating">
			<?php echo wp_kses_post( wc_get_rating_html( $secretum_review_average, $secretum_rating_count ) ); ?>
		<?php if ( comments_open() ) { ?>
			<a href="#reviews" class="woocommerce-review-link" rel="nofollow">( <?php echo wp_kses_post( /* Translators: Reivew count %s = count */ sprintf( esc_html_n( '%s review', '%s customer reviews', $secretum_review_count, 'secretum' ), '<span class="count">' . absint( $secretum_review_count ) . '</span>' ) ); ?> )</a>
		<?php } ?>
	</div>
	<?php
}
