<?php if(!empty($section_data)):
    $background_color = $section_data['background_color'];
    $image = $section_data['image'];
    $heading = $section_data['heading'];
    $description = $section_data['description'];
    
?>
<section class="featured_event_slider smb-section" id="multibuy-discounts">
    <div class=" container">
    <div class="featured_event_slider_content">
        <div class="featured_event_slider_text">
            <h3><?php echo $heading;?></h3>
            <p class="event-sub-text"></p>
            <?php 
            
           $_pricing_rules = get_post_meta($post->ID,'_pricing_rules',true);
          
            foreach($_pricing_rules as $key=> $price){

                foreach($price['rules'] as $p){?>
                <p>Buy <?=$p['from']?> places pay <?php echo wc_price($p['amount']);?></p>
            <?php }  
                } ?>
            
            
            <div class="featured_event_slider_button">
                <a href="?add-to-cart=<?php echo $post->ID;?>" data-quantity="1" class="btn add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $post->ID;?>" data-product_sku="<?php echo $post->title;?>" aria-label="<?php echo $post->title;?>" rel="nofollow">Book Now</a>

               
            </div>
        </div>
        <div class="featured_event_slider_image">
            <div class="event-slider-blocks">
                 <img src="<?php echo $image['url'];?>" alt="">
            </div>
        </div>
       
    </div>
    </div>
    
</section>
<?php endif;?>