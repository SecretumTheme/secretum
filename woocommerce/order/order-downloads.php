<?php
/**
 * Order Downloads.
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.3.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/order/order-downloads.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

?>
<section class="woocommerce-order-downloads">
	<?php if ( isset( $show_title ) ) { ?>
		<h2 class="woocommerce-order-downloads__title"><?php esc_html_e( 'Downloads', 'secretum' ); ?></h2>
	<?php } ?>
	<div class="table-responsive-md">
	<table class="woocommerce-table woocommerce-table--order-downloads order_details table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<?php foreach ( wc_get_account_downloads_columns() as $secretum_column_id => $secretum_column_name ) { ?>
					<th class="<?php echo esc_attr( $secretum_column_id ); ?>"><span class="nobr"><?php echo esc_html( $secretum_column_name ); ?></span></th>
				<?php } ?>
			</tr>
		</thead>
		<?php
		foreach ( $downloads as $secretum_download ) {
			?>
			<tr>
				<?php foreach ( wc_get_account_downloads_columns() as $secretum_column_id => $secretum_column_name ) { ?>
					<td class="<?php echo esc_attr( $secretum_column_id ); ?>" data-title="<?php echo esc_attr( $secretum_column_name ); ?>">
					<?php
					if ( has_action( 'woocommerce_account_downloads_column_' . $secretum_column_id ) ) {
						do_action( 'woocommerce_account_downloads_column_' . $secretum_column_id, $secretum_download );
					} else {
						switch ( $secretum_column_id ) {
							case 'download-product':
								if ( $secretum_download['product_url'] ) {
									echo '<a href="' . esc_url( $secretum_download['product_url'] ) . '">' . esc_html( $secretum_download['product_name'] ) . '</a>';
								} else {
									echo esc_html( $secretum_download['product_name'] );
								}
								break;
							case 'download-file':
								echo '<div class="text-center"><a href="' . esc_url( $secretum_download['download_url'] ) . '" class="woocommerce-MyAccount-downloads-file btn btn-primary">' . esc_html( $secretum_download['download_name'] ) . '</a></div>';
								break;
							case 'download-remaining':
								echo is_numeric( $secretum_download['downloads_remaining'] ) ? esc_html( $secretum_download['downloads_remaining'] ) : esc_html__( '&infin;', 'secretum' );
								break;
							case 'download-expires':
								if ( ! empty( $secretum_download['access_expires'] ) ) {
									echo '<time datetime="' . esc_html( date( 'Y-m-d', strtotime( $secretum_download['access_expires'] ) ) ) . '" title="' . esc_html( strtotime( $secretum_download['access_expires'] ) ) . '">' . esc_html( date_i18n( get_option( 'date_format' ), strtotime( $secretum_download['access_expires'] ) ) ) . '</time>';
								} else {
									esc_html_e( 'Never', 'secretum' );
								}
								break;
						}
					}
					?>
					</td>
				<?php } ?>
			</tr>
			<?php
		}
		?>
	</table>
	</div><!-- .table-responsive -->
</section>
