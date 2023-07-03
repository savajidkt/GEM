<?php
$product_id = $post->ID;
global $product;
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container site_banner_text">
    <div class="header-banner-text">
        <div class="banner_section_text_desc_data">
            <?php if(!empty($banner_title)) { ?>
            <h2>
                <?php echo $banner_title;?>
            </h2>
            <?php } else { ?>
            <h2>
                <?php the_title();?>
            </h2>
            <?php } ?>
            <p>
                <?php echo $content; ?>
            </p>
            <div class="p_i_s_i_banner">
                <ul>
                    <li>Location:</li>
                    <li><?php echo get_post_meta($product_id,'WooCommerceEventsLocation',true);?></li>
                </ul>
                <ul>
                    <li>Date:</li>
                    <li><?php echo get_post_meta($product_id,'WooCommerceEventsDate',true);?></li>
                </ul>
                <ul>
                    <li>Price:</li>

                    <?php if(!$product->is_on_sale()){?>
                        <li class="regular-price"><?php echo wc_price($product->get_price());?></li>
                    <?php }?>
                    <?php if($product->is_on_sale()){?>
                    <li><?php echo wc_price($product->get_regular_price());?> <?php echo wc_price($product->get_price());?></li>
                    <li>
                     <?php 
                     if(get_post_meta($product_id,'_sale_price_dates_to',true)){
                      $discountDate = date('d F Y',get_post_meta($product_id,'_sale_price_dates_to',true));  
                      }else{
                        $discountDate = get_post_meta($product_id,'WooCommerceEventsDate',true);
                      }?>
                      Earlybird Price until <?php echo $discountDate;?>
                    </li>
                <?php }?>
                     
                </ul>
            </div>
        </div>
        <div class="banner_product_items_block">

        <?php if(strlen(get_field('download_agenda_pdf')) > 0){  ?>
            
            <a target="_blank" href="<?php echo get_field('download_agenda_pdf');?>"><button class="btn_color">Download agenda</button></a>
            <?php } ?>

            
            <a href="#multibuy-discounts"><button class="without_btn_color">Book Now</button></a>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/');?>"><strong>Home </strong></a></li>/
            <li><a href="<?php echo get_permalink();?>">
                    <?php the_title();?>
                </a>
            </li>
        </ul>
    </div>
</section>
    <?php
    $orders = get_field('section_order');
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            //echo $order['acf_fc_layout'];
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
    ?>
