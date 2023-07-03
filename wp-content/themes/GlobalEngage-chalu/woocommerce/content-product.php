<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
		$product_id = $product->get_id();
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );

        // Get the terms IDs for the current product related to 'collane' custom taxonomy
        $term_field = wp_get_post_terms( get_the_id(),'field', array('fields' => 'all') );
        $term_subject = wp_get_post_terms( get_the_id(),'subject', array('fields' => 'all') );

        
        if(get_post_meta($product_id,'_sale_price_dates_to',true)){
          $discountDate = date('d F Y',get_post_meta($product_id,'_sale_price_dates_to',true));  
      }else{
        //$discountDate = get_post_meta($product_id,'WooCommerceEventsDate',true);
      }

      $event_type = get_post_meta($product_id,'event_type',true);
?>
			<div class="conferences-page-right-side-content" id="<?php echo $product_id;?>">
                    <div class="conferences-page-right-side-subcontent-a">
                        <img src="<?php  echo $image[0]; ?>" alt="">
                    </div>

                    <div class="conferences-page-right-side-subcontent-b">                        
                        <div class="conferences-text-content">
                            <p id="international-heading"><?php the_title();?></p>
                            <p class="product_sub_title"><?php the_excerpt();?></p>
                            
                            <div class="conference-details one_fild">
                                <p><strong>Location: </strong></p>
                                <p><?php echo get_post_meta($product_id,'WooCommerceEventsLocation',true);?></p>
                                
                                <div class="conference-sub-details">
                                    <p><strong>Date:</strong></p>
                                    <p><?php echo get_post_meta($product_id,'WooCommerceEventsDate',true);?></p>
                                </div>
                            </div>
                            <?php if($term_field[0]->name) {?>
                            <div class="conference-details">
                                <p class="field_title"><strong>Field:</strong></p>
                                <p class="dield_data"><?php echo $term_field[0]->name;?></p>
                            </div>
                        <?php }?>
                            <?php if($term_subject[0]->name) {?>
                            <div class="conference-details">
                            <p><strong>Subject:</strong></p>
                                <p><?php echo $term_subject[0]->name;?></p>
                            </div>
                        <?php }?>
                        </div>
                        <div class="conferences-text-content-c">
                            <div class="conferences-text-sub-content-c">
                                <div class="product-icon_img">
                                <img src="<?=site_url();?>/wp-content/uploads/2023/05/Group-2571.svg" alt="" >
                                </div>
                                <p>Multibuy discount available</p>
                            </div>
                            <?php if($discountDate){?>
                            <div class="conferences-text-sub-content-c">
                                 <div class="product-icon_img">
                                <img src="<?=site_url();?>/wp-content/uploads/2023/05/Group-2572.svg" alt="" >
                                </div>
                                <p>Earlybird discount available
                                    until <strong><?php echo $discountDate;?></strong></p>
                            </div>
                            <?php }?>
                            <div class="conferences-text-sub-content-c">
                                 <div class="product-icon_img">
                                <img src="<?=site_url();?>/wp-content/uploads/2023/05/Group-2570.svg" alt="" >
                                </div>
                                <p>Secure payment</p>
                            </div>
                            <div class="conferences-text-sub-content-ca">
                                <?php 
                                    if(get_post_meta($product_id,'is_free_webinar',true)=='free' && $event_type=='webinar'){
                                ?>
                                <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>" class="conference-btn">Register now</a>
                            <?php }else{?>

                                <!-- <a href="?add-to-cart=<?=$product_id;?>" data-quantity="1" class="conference-btn button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?=$product_id;?>" data-product_sku="<?php the_title();?>" aria-label="<?php the_title();?>" rel="nofollow">Book Now</a> -->
                                <a href="<?php echo get_permalink($product_id);?>/#price-section" data-quantity="1" class="conference-btn button wp-element-button" data-product_id="<?=$product_id;?>" data-product_sku="<?php the_title();?>" aria-label="<?php the_title();?>" rel="nofollow">Book now</a>
                            <?php }?>
                                <a href="<?php echo get_permalink($product_id);?>" class="conferences-btn-2">View details</a></div>
                            </div>
                        </div>
                    </div>

