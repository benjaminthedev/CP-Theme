<?php
/**
 * WooCommerce Checkout Coupons Form.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 * @since      5.1.0
 */

global $woocommerce;

if ( ! wc_coupons_enabled() ) {
	return;
}
?>

<form class="woocommerce-content-box full-width checkout_coupon" method="post">

	<h2 class="promo-code-heading fusion-alignleft"><?php esc_attr_e( 'Have A Promotional Code?', 'Avada' ); ?></h2>
	

	<div class="coupon-contents fusion-alignright">
		<div class="form-row form-row-first fusion-alignleft coupon-input">
			<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value=""/>
		</div>

		<div class="form-row form-row-last fusion-alignleft coupon-button">
			<input type="submit" class="fusion-button button-default fusion-button-default-size button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"/>
		</div>

		<div class="clear"></div>
		
	</div>

	
</form>


	<!-- <h3><i class="fas fa-exclamation-circle"></i> Your order payment will <strong>NOT</strong> be processed until your artwork filled are received and the virtual artwork proof is confirmed.</h3> -->

	<h3><i class="fas fa-exclamation-circle"></i> Your card <strong>will NOT</strong> be charged immediately.  One of our representatives will contact you shortly after placing your order to confirm your details before processing your payment.</h3>
