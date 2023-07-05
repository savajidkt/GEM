<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */


?>
<style type="text/css">
  .card_summary #payment{
    display: none !important;
  }
  .card_item img{ width: 22%;}
</style>
<?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>
<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
  <section id="checkout">
    
        <div class="top_checkout">
            <h1>Your Checkout</h1>
            <a class="return_to_basket" href="#">Return to basket</a>
          </div>

            <div class="checkout_bar">
                <ul class="cdetail__bar__row">
                  <li class="step">Your Details</li>
                  <li class="step">Billing info</li>
                  <li class="step">Confirm order</li>
                </ul>
                </div>
                <div class="tab_container">
                  <?php if ( is_user_logged_in() ) {?>
                  <form name="checkout" id="checkout-frm" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
                  <?php }?>
            <div class="tab">
              <div id="your_checkout">
                      <div  class="checkout">
                        <div class="checkout_form">
                          <!-- form design left side -->
                          <div class="left_form">
                            <?php if (!is_user_logged_in() ) {?>
                            <div class="check_form form_1">
                              <?php include('checkout-login.php');?>
                            </div>
                          <?php }?>
                            <div class="check_form form_2">
                                <h1 class="heading">new customers start here</h1>
                                <h2 class="subheading">Your contact details</h2>
                                <div class="internal_form sec_2">
                                <?php
                                $fiedsArray = array('billing_title','billing_first_name','billing_last_name','billing_company','billing_job_title','billing_phone','billing_email');
                                  $fields = $checkout->get_checkout_fields( 'billing' );
                                 
                                  foreach ( $fields as $key => $field ) {
                                    if(in_array($key,$fiedsArray))
                                    woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
                                  }
                                  ?>
                                  
                                  <div class="booking_check">
                                    <h1 class="heading">Booking for youself?</h1>
                                    <div class="checkbox">
                                      <input type="checkbox" id="billing_book_self" name="billing_book_self" value="yes"/>
                                      <label for="billing_book_self">Is the contact above the attendee as well?</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
              
                          <!-- right side card  -->
                          <div class="order_summary">
                            <div class="right_form">
                              <div class="card_summary">
                                <h1>Order summary</h1>
                                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                              </div>
                            </div>
              
                            <div class="pay_all">
                              <img src="assets/Group 2659.png" alt="" />
                              <img src="assets/Group 2660.png" alt="" />
                              <img src="assets/Group 2661.png" alt="" />
                              <img src="assets/Group 2662.png" alt="" />
                              <img src="assets/Group 2663.png" alt="" />
                              <img src="assets//google-pay-mark_800.png" alt="" />
                            </div>
                          </div>
                                      <!-- right side card  end-->
                          <!-- <a href="page_2.html" class="proceed_to_payment"
                            >Proceed to payment</a
                          > -->
                        </div>
                      </div>
                    </div>
            </div>
            <div class="tab">
                <div class="checkout">
                 
          
                    <div class="checkout_form">
                      <!-- form design left side -->
                      <div class="billing_info">
                        <div class="checkout_bill_common billing_detail">
                          <h1 class="heading">Please enter your billing details</h1>
                          <h2 class="subheading">Billing Address</h2>
                          <div class="common_input address_detail">

                            <?php
                              $fiedsArray = array('billing_address_1','billing_address_2','billing_city','billing_postcode','billing_state','billing_country');
                                $fields = $checkout->get_checkout_fields( 'billing' );
                               
                                foreach ( $fields as $key => $field ) {
                                  if(in_array($key,$fiedsArray))
                                  woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
                                }
                                ?>
                          </div>
                        </div>
                        
                        <?php if(count(WC()->cart->get_coupons()) <= 0){?>
                        <div class="checkout_bill_common promotion">
                          <h1 class="heading">Have you got a promotion code?</h1>
                          <h2 class="subheading">
                            Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed
                            do eiusmod tempor.
                          </h2>
                          <div class="common_input address_detail checkout_coupon woocommerce-form-coupon">
                              <label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label>
                              <input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
                            </p>
                            <p class="form-row form-row-last">
                              <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
                            </p>
                            <div class="clear"></div>

                          </div>
                        </div>
                        <?php }else{?>
                        <div class="checkout_bill_common promotion">
                          <h1 class="heading">Have you got a promotion code?</h1>
                          <h2 class="subheading">
                            Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed
                            do eiusmod tempor.
                          </h2>
                          <?php 
                           foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                          <div class="common_input address_detail">
                            <input placeholder="NEWBIE10" type="text" readonly value="<?php echo esc_attr( sanitize_title( $code ) ); ?>" />
                            <button class="common_btn_primary_custom"><?php wc_cart_totals_coupon_html( $coupon ); ?></button>
                          </div>
                        
                          <?php endforeach;?>
                          </div>
                          <?php  
                        }?>
            
                        <div class="checkout_bill_common common_input payment_info">
                          <h1 class="heading">Have you got a promotion code?</h1>
                          <div id="payment1" class="woocommerce-checkout-payment">
                          <?php if ( WC()->cart->needs_payment() ) : ?>
                            <ul class="wc_payment_methods payment_methods methods">
                              <?php
                              $available_gateways = WC()->payment_gateways->get_available_payment_gateways();
                             
                              if ( ! empty( $available_gateways ) ) {
                                foreach ( $available_gateways as $gateway ) {
                                  wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
                                }
                              } else {
                                echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>'; // @codingStandardsIgnoreLine
                              }
                              ?>
                            </ul>
                          <?php endif; ?>
                        </div>
                          
                          
                          <div class="invoice">
                              <input
                              type="checkbox"
                              id=""
                              name=""
                              value=""
                            />
                            <label class="desc">invoice</span>
                          </div>
                        </div>
                      </div>
          
                      <!-- right side card  -->
                      <div class="order_summary">
                        <div class="right_form">
                          <div class="card_summary">
                            <h1>Order summary</h1>
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                          
                          </div>
                        </div>
          
                        <div class="pay_all">
                          <img src="assets/Group 2659.png" alt="" />
                          <img src="assets/Group 2660.png" alt="" />
                          <img src="assets/Group 2661.png" alt="" />
                          <img src="assets/Group 2662.png" alt="" />
                          <img src="assets/Group 2663.png" alt="" />
                          <img src="assets//google-pay-mark_800.png" alt="" />
                        </div>
                      </div>
                      <!-- right side card  end-->
                      <!-- <a href="page_2.html" class="proceed_to_payment"
                        >Proceed to payment</a
                      > -->
                    </div>
                </div>
              </div>
                 
            <div class="tab">
              <div id="tab_3">
                <div class="checkout_form">
                <div class="password_container">
          <h1 class="heading">Please enter a password to confirm your order</h1>
          <div class="pass_box">
            <input type="password" placeholder="Set password*">
            <input type="password" placeholder="Confirm password*">

          </div>
        <h2 class="subheading">Confirm Order</h2>
        <span class="desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </span>
        <div class="check_grp">
          <div class="check">
            <input type="checkbox" id="" name="" value="">
            <span>I agree to the <a class="t_c" href="">terms & conditions*</a></span>
          
          </div>
          <div class="check">
            <input type="checkbox" id="" name="" value="">
            <span>I agree to the <a class="t_c" href="">privacy policy*</a></span>
          
          </div>
        </div>

                </div>
                <div class="right_form">
                  <div class="card_summary">
                    <h1>Order summary</h1>
               
                  </div>
                </div>

              </div>          
         
              
        </div>
                </div>
              <div  class="grp_btn" >
                <button type="button" id="prevBtn">Previous</button>
                <button type="button" id="nextBtn" >Proceed to payment</button>
              </div>
    <?php if ( is_user_logged_in() ) {?>
  </form>
  <?php } ?>
  </section>


<?php //do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

