<?php
/**
 * Customer booking notification email.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce-bookings/emails/customer-booking-notification.php
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/bookings-templates/
 * @author  Automattic
 * @version 1.4.10
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_email_header', $email_heading );
?>
test

<?php do_action( 'woocommerce_email_footer' ); ?>
