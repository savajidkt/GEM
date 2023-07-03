<?php if(!empty($section_data)):
    $background_color = $section_data['background_color'];
    $image = $section_data['image'];
    $heading = $section_data['heading'];
    $description = $section_data['description'];
   global $product;
//$product_variable = new WC_Product_Variable($product);
   $product_id = $product->get_id();
 
?>
<section id="price-section">
    <div class="container">
        
   
<div class="book_place_main">
         <h1 class="heading">Book Your Places</h1>
         <ul class="cards">
            <?php
            $rulesArray =[];
            foreach ($product->get_available_variations() as $variation) {
                $data ='';
              $variation_id = $variation['variation_id'];
              $product_variation = new WC_Product_Variation( $variation_id );
                                    $data = [
                                        'variation_id'=>$variation_id,
                                        'title'=> ucwords(str_replace('-',' ',$variation['attributes']['attribute_pa_delegate-package'])),
                                        'regular-price'=>$product_variation->get_regular_price(),
                                        'sale-price'=>$product_variation->get_sale_price(),

                                            ];
                                $_pricing_rules = get_post_meta($product_id,'_pricing_rules',true);
                                $priceRules=[];
                                foreach($_pricing_rules as $key => $price){

                                    if($price['variation_rules']['args']['variations'][0] == $variation_id){
                                        $priceRules=[];
                                        if(isset($price['rules']) && count($price['rules'])>0){
                                            
                                            foreach($price['rules'] as $key=> $p){
                                                $priceRules[$key]['places']= $p['from'];
                                                $priceRules[$key]['price']= $p['amount'];
                                                
                                            }

                                        }
                                    }
                                } 
                            $data['multibuy']=$priceRules;
                            $rulesArray[]= $data;

            }

          
            foreach ($rulesArray as $prule) { ?>
              <?php 
              $variation_id = $prule['variation_id'];
              //$variation_object = new WC_Product_Variable($variation_id);
              $product_variation = new WC_Product_Variation( $variation_id );

               ?>  
               
             
            <li class="cards_item">
               <div class="card">
                  <div class="card_content">
                     <h1 class="card_heading">
                        <?php echo $prule['title'];?>
                     </h1>
                     <div class="card_sec_2">
                        <span class="price_heading">You Pay:</span>
                        <div class="card_sec_2_discount">
                           <div class="">
                            <?php 
                                if($prule['sale-price']) {
                                    $class ='regular-price';
                                }else{
                                    $class='';
                                }?>
                            <?php if($prule['sale-price']){?>
                           <span class="card_sec_2_discount_price <?=$class;?>"><?=wc_price($prule['regular-price']);?></span>
                       <?php }else{?>
                         <span class="price_detail"><?=wc_price($prule['regular-price']);?></span>
                       <?php }?>
                           <?php 
                            if($prule['sale-price']) {?>
                                <span class="price_detail"><?=wc_price($prule['sale-price']);?></span>
                            <?php }
                                ?>
                            
                           </div>
                           <?php 
                             if($prule['sale-price']) {?>
                                <span class="early_bird_dicount">Early bird discount</span> 
                            <?php } ?>
                        
                     </div>
                     </div>

                     <div class="card_sec_3">
                        
                        <div class="card_3_innerContent">
                           
                                 <?php if(count($prule['multibuy'])>0){?>
                                        <span class="discount_heading">Multibuy Discounts available</span>
                                        <?php 
                                        foreach($prule['multibuy'] as $key=> $p){?>                                
                                        <div>
                                          <span class="price_heading">Buy <?=$p['places'];?> places pay:</span>
                                          <span class="price_detail"><?php echo wc_price($p['price']);?></span>
                                       </div>
                                    <?php }?>
                                    <?php }else{ ?>
                                        <span class="discount_heading">No Multibuy Discounts</span>
                                        <div>
                                          <span class="price_heading">&nbsp;</span>
                                          <span class="price_detail">&nbsp;</span>
                                       </div>
                                       <div>
                                          <span class="price_heading">&nbsp;</span>
                                          <span class="price_detail">&nbsp;</span>
                                       </div>
                                       <div>
                                          <span class="price_heading">&nbsp;</span>
                                          <span class="price_detail">&nbsp;</span>
                                       </div>
                                    <?php }?>
                                     

                                
                        </div>

                     </div>


                     <div class="card_btn">
                        <button class="btn custom_new_button">Book Now</button>
                     </div>
                  </div>
                  <div class="overlay">
                    <div class="overlay_content">
                     <span class="cross_overlay">X</span>

                     <div class="overlay_inner">
                     <h1>How many would you like?</h1>
                     <div class="product_add">
                       <button class="custom_add_to_cart_button sub">-</button>
                       <input type="text" name="quantity" class="quantity" id="" value="1" onkeyup="this.value = this.value.replace(/^\.|[^\d\.]/g, '')">

                       <button class="custom_add_to_cart_button add">+</button>
                     </div>

                     <a href="javascript:void(0);" data-quantity="1" class="custom_new_button add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $variation_id;?>" data-variation_id="<?php echo $variation_id;?>" data-attribute_venue="<?php echo $variation['attributes']['attribute_pa_delegate-package'];?>" aria-label="<?php echo $post->title;?>" rel="nofollow">Add To Basket</a>

                     <!-- <button class="custom_new_button">Add To Basket</button> -->
                     </div>

                    </div>
                  </div>
                  
               </div>
            </li>
            <?php } ?>
        </ul>
    </div>
     </div>
</section>

<?php endif;?>