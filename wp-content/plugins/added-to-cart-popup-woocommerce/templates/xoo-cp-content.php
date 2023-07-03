<?php 



//Exit if accessed directly

if(!defined('ABSPATH')){

	return; 	

}

global $xoo_cp_gl_qtyen_value;

$cart = WC()->cart->get_cart();

$cart_item = $cart[$cart_item_key];

$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

$thumbnail 		= apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

$product_name 	=  apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';					

$product_price 	= apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

$product_subtotal = apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
$product_total = $cart_item['line_total'];


// Meta data
$attributes = '';
//Variation
$attributes .= $_product->is_type('variable') || $_product->is_type('variation')  ? wc_get_formatted_variation($_product) : '';
// Meta data
if(version_compare( WC()->version , '3.3.0' , "<" )){

	$attributes .=  WC()->cart->get_item_data( $cart_item );

}

else{

	$attributes .=  wc_get_formatted_cart_item_data( $cart_item );

}

//Quantity input
$max_value = apply_filters( 'woocommerce_quantity_input_max', $_product->get_max_purchase_quantity(), $_product );

$min_value = apply_filters( 'woocommerce_quantity_input_min', $_product->get_min_purchase_quantity(), $_product );

$step      = apply_filters( 'woocommerce_quantity_input_step', 1, $_product );

$pattern   = apply_filters( 'woocommerce_quantity_input_pattern', has_filter( 'woocommerce_stock_amount', 'intval' ) ? '[0-9]*' : '' );


$applied_coupons = WC()->cart->get_applied_coupons();
$getDetails = new WC_Coupon($applied_coupons[0]);
$discount  =  $getDetails->amount;
    
// Get the terms IDs for the current product related to 'collane' custom taxonomy
        $term_field = wp_get_post_terms($product_id,'field', array('fields' => 'all') );
        $term_subject = wp_get_post_terms($product_id,'subject', array('fields' => 'all') );

$field = $term_field[0]->name;;
$subject = $term_subject[0]->name;
$event_type = get_post_meta($product_id,'event_type',true);


 $event_date = get_post_meta($product_id,'WooCommerceEventsDate',true);
 $event_location = get_post_meta($product_id,'WooCommerceEventsLocation',true);

?>

<div class="popup-cart" data-xoo_cp_key="<?php echo $cart_item_key; ?>" data-event_type="<?php echo $event_type; ?>">
			<div class="conferences-page-right-side-content">
                <div class="conferences-page-right-side-subcontent-a">
                    <?php echo $thumbnail; ?>
                </div>

                <div class="conferences-page-right-side-subcontent-b">
                    <div class="conferences-text-content">
                        <p id="international-heading"><?php echo $product_name; ?></p>
                        <p><strong>Location: </strong> <?php echo $event_location;?>
                        <strong> &nbsp; Date: </strong> <?php echo $event_date;?> </p>
                        <p><strong>Field: </strong> <?php echo $field;?></p>
                        <p><strong>Subject: </strong> <?php echo $subject;?></p>
                    </div>
                </div>

                <div class="conferences-page-right-side-subcontent-c">
                    <div class="conferences-text-content-c">
                        <div class="conferences-text-sub-content-c">
                            <p>Your Places</p>
                        </div>
                        
                            <?php if($event_type != 'conference'){?>
                            <div class="conferences-text-sub-content-c pop-up-content-industry">
                            <div class="conferences-text-sub-content-c-info">
                            <div class="xoo-cp-qtybox">
							<a href="javascript:void(0);" class="xcp-minus xcp-chng minus-btn">-</a>
							<input type="number" class="xoo-cp-qty" max="<?php esc_attr_e( 0 < $max_value ? $max_value : '' ); ?>" min="<?php esc_attr_e($min_value); ?>" step="<?php echo esc_attr_e($step); ?>" value="<?php echo $cart_item['quantity']; ?>" pattern="<?php esc_attr_e( $pattern ); ?>">
							
							<a href="javascript:void(0);" class="xcp-plus xcp-chng minus-btn">+</a>
							</div>
                            </div>
                            </div>
                        <?php }else{?>
                        <?php 
                        $p_subtotal =0;
                        foreach ($cart as $key => $value) {
                           
                            ?>
                            <?php if($value['variation_id']){?>
                            <?php 
                            
                                $p_subtotal = ($p_subtotal + $value['line_subtotal']);
                            ?>
                             <div class="conferences-text-sub-content-c pop-up-content-industry">   
                            <p><?php echo ucwords(str_replace('-',' ',$value['variation']['attribute_pa_delegate-package']));?></p>
                            <div class="conferences-text-sub-content-c-info">
                            <div class="xoo-cp-qtybox">
                            <a href="javascript:void(0);" class="xcp-minus xcp-chng minus-btn" data-xoo_cp_key="<?php echo $key; ?>" data-event_type="<?php echo $event_type; ?>">-</a>
                            <input type="number" class="xoo-cp-qty shiv-<?php echo $key; ?>" max="<?php esc_attr_e( 0 < $max_value ? $max_value : '' ); ?>" min="<?php esc_attr_e($min_value); ?>" step="<?php echo esc_attr_e($step); ?>" value="<?php echo $value['quantity']; ?>" pattern="<?php esc_attr_e( $pattern ); ?>" data-xoo_cp_key="<?php echo $key; ?>" data-event_type="<?php echo $event_type; ?>">
                            
                            <a href="javascript:void(0);" class="xcp-plus xcp-chng minus-btn" data-xoo_cp_key="<?php echo $key; ?>" data-event_type="<?php echo $event_type; ?>">+</a>
                            </div>
                            </div>
                            </div>
                        <?php }?>
                        <?php }
                        $product_subtotal = wc_price($p_subtotal);
                        ?>
                       
                        <?php }?>
                        
                        
                        
                    </div>
                </div>
                
                </div>
        <form class="checkout_coupon woocommerce-cart-form" action="<?php echo wc_get_cart_url(); ?>" method="post">
            <div class="popup-content-a woocommerce-cart-form__contents">
                <p class="heading-popup-content-a">Have You Got A Promotion Code?</p>
                <p>Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor.</p>
                <div class="input-popup-box coupon">
                    <?php if($discount>0){?>
                    <input type="text" id="apply" name="coupon" placeholder="NEWBIE10" value="<?php echo $applied_coupons[0];?>" readonly>
                    <a href="javascript:void(0);" id="remove-btn" class="conference-btn">Remove</a>
                <?php }else{?>
                    <input type="text" id="apply" name="coupon" placeholder="NEWBIE10" value="<?php echo $applied_coupons[0];?>">
                    <a href="javascript:void(0);" id="apply-btn" class="conference-btn">Apply</a>

                <?php }?>
                    
                        
                </div>   
            </div>
            </form>
      
            <?php 
            $pdf = get_field('download_agenda_pdf',$product_id); 
            if($event_type == 'conference' && strlen($pdf) > 0) {?>
            <div class="popup-content-b">
                <p class="heading-popup-content-a mar-a">Would You Like To Take Part In The Poster Presentation?</p>
                <div class="popup-sub-content-b">
                    <div class="popup-sub-content-info-b">
                        <input type="radio" id="checkbox-yes" name="download" value="yes">
                    <span>Yes</span>
                    </div>
                    <div class="popup-sub-content-info-b">
                        <input type="radio" id="checkbox-no" name="download" value="no">
                  <span>No</span>
                    </div>
                    <p class="hide pdf-down">Please download application <a href="<?php echo $pdf;?>" download><span class="popup-sub-content-here">here</span></a></p>
                </div>
                
            </div>
        <?php }?>
            <div class="popup-content-c">
                <p class="popup-form-title">Total:</p>
                <p class="popup-content-price"><?php echo $product_subtotal; ?></p>
                <?php if($discount>0){?>
                <br>
                <p class="popup-form-title">Coupon:</p>
                <p class="popup-content-price cart-discount"><?php echo wc_price($discount); ?></p>
            <?php }?>
            <!-- <p class="popup-form-title">Total:</p>
                <p class="popup-content-price"><?php echo wc_price($product_total); ?></p> -->
            </div>
             
</div>


