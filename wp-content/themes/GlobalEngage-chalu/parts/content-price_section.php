<?php if(!empty($section_data)):
    $background_color = $section_data['background_color'];
    $image = $section_data['image'];
    $heading = $section_data['heading'];
    $description = $section_data['description'];
   global $product;

?>
<?php if(get_post_meta($post->ID,'is_free_webinar',true) != 'free'){?>
<section class="featured_event_slider smb-section" id="price-section">
        <div class="container">
            <div class="traning_inside-both-sider_img_text">
                <div class="left_sider_ind_traning">
                    <div class="sub_under_amount-data">
                        <h2><?php echo $heading;?></h2>
                        <hr>
                        <div class="amount_data_inds">
                            <ul class="amount-dat-traning-list">
                                <li>You Pay:</li>
                                <li class="regular-price"><?=wc_price($product->get_regular_price());?></li>
                                <?php 
                                    if($product->is_on_sale()) {?>
                                        <li class="tran_all_amount"><?=wc_price($product->get_sale_price());?></li>
                                    <?php }
                                ?>
                                
                            </ul>
                            <?php 
                                    if($product->is_on_sale()) {?>
                            <ul class="amount-dat-traning-list-text">
                                <li>Early bird discount</li>
                            </ul>
                        <?php }?>
                        </div>
                        <hr>
                        <?php 
                             $_pricing_rules = get_post_meta($post->ID,'_pricing_rules',true);
                           if(count($_pricing_rules)>0){
                        ?>
                        <div class="second_amount_text-data">
                            <h2>Multibuy Discounts</h2>
                            <ul class="amount-dat-traning-list">
                                <?php 
                            
                            foreach($_pricing_rules as $key=> $price){

                                 foreach($price['rules'] as $key=> $p){?>

                                <li>Buy <?=$p['from']?> places pay <?php echo wc_price($p['amount']);?></li>
                            <?php }
                            } ?>

                            </ul>
                        </div>
                    <?php }?>
                        <hr>
                        <div class="btn_text">
                            <a href="?add-to-cart=<?php echo $post->ID;?>" data-quantity="1" class="btn add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $post->ID;?>" data-product_sku="<?php echo $post->title;?>" aria-label="<?php echo $post->title;?>" rel="nofollow">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="right_sider_ind_traning_img">
                    <img src="<?php echo $image['url'];?>" alt="img">
                </div>
            </div>
            
        </div>
    </section>
<?php }?>

<?php endif;?>