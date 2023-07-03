<?php if(!empty($section_data)):
    $background_color = $section_data['background_color'];
    $image = $section_data['image'];
    $heading = $section_data['heading'];
    $description = $section_data['description'];
   global $product;

  if($product->get_upsell_ids()){  
?>
<?php 

$today = strtotime(date('d F Y H:i:s'));

$args = array(
    'post_type'            => 'product',
    'posts_per_page'       => -1,
    'post__in'=>$product->get_upsell_ids(),
    'meta_query' => array(
                    array(
                        'key' => 'WooCommerceEventsDateTimestamp',
                        'value' => $today,
                        'compare' => '>=',
                    )
                )

);

$related = new WP_Query($args);

if ( $related->have_posts()){?>
<section class="featured_event_slider smb-section" id="related-course">

        <div class="container">
            <h2><?php echo $heading;?></h2>
                        <?php
                    while ( $related->have_posts() ) : $related->the_post();
                       
                        $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );

                        // Get the terms IDs for the current product related to 'collane' custom taxonomy
                        $term_field = wp_get_post_terms($product_id,'field', array('fields' => 'all') );
                        $term_subject = wp_get_post_terms($product_id,'subject', array('fields' => 'all') );

                        
                        if(get_post_meta($product_id,'_sale_price_dates_to',true)){
                            $discountDate = date('d F Y',get_post_meta($product_id,'_sale_price_dates_to',true));  
                        }else{
                            $discountDate = get_post_meta($product_id,'WooCommerceEventsDate',true);
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
                                <div class="conference-details">
                                    <p class="field_title"><strong>Field:</strong></p>
                                    <p class="dield_data"><?php echo $term_field[0]->name;?></p>
                                </div>
                                <div class="conference-details">
                                <p><strong>Subject:</strong></p>
                                    <p><?php echo $term_subject[0]->name;?></p>
                                </div>
                            </div>
                            <div class="conferences-text-content-c">
                                <div class="conferences-text-sub-content-c">
                                    <div class="product-icon_img">
                                    <img src="<?=site_url();?>/wp-content/uploads/2023/05/Group-2571.svg" alt="" >
                                    </div>
                                    <p>Multibuy discount available</p>
                                </div>
                                <div class="conferences-text-sub-content-c">
                                     <div class="product-icon_img">
                                    <img src="<?=site_url();?>/wp-content/uploads/2023/05/Group-2572.svg" alt="" >
                                    </div>
                                    <p>Earlybird discount available
                                        until <strong><?php echo $discountDate;?></strong></p>
                                </div>
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
                                    <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>" class="conference-btn">Register Now</a>
                                <?php }else{?>

                                  
                                    <a href="<?php echo get_permalink($product_id);?>/#price-section" data-quantity="1" class="conference-btn button wp-element-button" data-product_id="<?=$product_id;?>" data-product_sku="<?php the_title();?>" aria-label="<?php the_title();?>" rel="nofollow">Book Now</a>
                                <?php }?>
                                    <a href="<?php echo get_permalink($product_id);?>" class="conferences-btn-2">View details</a></div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;?>
        </div>
    </section>
<?php }?>
<?php }?>
<?php endif;?>