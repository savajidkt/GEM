<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>

		<?php
		do_action( 'woocommerce_review_order_before_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$product_id = $cart_item['product_id'];
			if(empty($product_id)){
				$product_id = $cart_item['parent_id'];
			}
			$image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<div class="card_item">
					<img src="<?php echo $image[0];?>" alt=""/>
					<span class="heading">
					<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ) . '&nbsp;'; ?>
					</span>
					<div class="card_item_qty">
					<span class="heading"><?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );?></span>
					<button>QTY: <?php echo $cart_item['quantity'];?></button>
					</div>
				</div>
				<?php
			}
		}

		do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
		<div class="card_item cart_subtotal">
          <div class="cart_subtotal_sec1">
            <span class="heading">Subtotal:</span>
            <span class="heading"><?php wc_cart_totals_subtotal_html(); ?></span>
          </div>
          <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			
			<div class="cart_subtotal_promo cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
            <div class="cart_subtotal_sec1">
              <span class="heading">Promotion Code:</span>
              <span class="heading"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
            </div>
            <div class="cart_subtotal_sec1">
              <a class="heading" href="">Remove</a>
			  <span><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
            </div>
          </div>
		<?php endforeach; ?>

          
        </div>

        <?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
					<div class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<span><?php echo esc_html( $tax->label ); ?></span>
						<span><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="tax-total">
					<span><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></span>
					<span><?php wc_cart_totals_taxes_total_html(); ?></span>
				</div>
			<?php endif; ?>
		<?php endif; ?>


		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>
		<div class="cart_total">
		  <span class="cart_total_sub">Total</span>
		  <span class="cart_total_amount"><?php wc_cart_totals_order_total_html(); ?></span>
		</div>
     			
<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
