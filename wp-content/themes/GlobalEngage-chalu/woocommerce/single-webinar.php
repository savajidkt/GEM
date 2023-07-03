<?php
$product_id = $post->ID;
global $product;
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
$event_type = get_post_meta($post->ID,'event_type',true);
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
                     <li>
                    <?php if(get_post_meta($product_id,'is_free_webinar',true) != 'free'){?>
                   <?php echo wc_price($product->get_regular_price());?> <?php echo wc_price($product->get_price());?>
                <?php }else{?>
                    Free
                <?php }?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="banner_product_items_block">
            <a href="<?php echo get_field('download_agenda_pdf');?>"><button class="btn_color">Download agenda</button></a>
            <?php if(!is_user_logged_in()){?>
            <a href="<?php echo get_field('register_for_free_now_url');?>"><button class="without_btn_color">Register for free now</button></a>
        <?php }elseif(get_post_meta($product_id,'is_free_webinar',true)=='free' && $event_type=='webinar'){?>
            <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>"><button class="without_btn_color">Register Now</button></a>
        <?php }else{?>
            <a href="#price-section"><button class="without_btn_color">Book now</button></a>
        <?php }?>
        </div>
    </div>
</div>
<section class="web_nav_block">
    <div class="container">
        <div class="main_btn_web_block" >
            <div class="left_btn_web_block_top" id="mBtnWeb">
                 <a href="#" class="btn_web-spon btnactive">Overview</a>
                  <a href="#our-speakers" class="btn_web-spon">Speakers</a>
                   <a href="#our_sponsors" class="btn_web-spon">Sponsors</a>
            </div>
            <div class="right_btn_web_block_top" id="mBtnWeb">
                <a href="<?php echo get_field('register_for_free_now_url');?>" class="btn_web-spon">Download agenda</a>
                <?php if(!is_user_logged_in()){?>
         
            <a hreft="<?php echo get_field('register_for_free_now_url');?>>" class="btn_web-spon">Register Now</a>
        <?php }elseif(get_post_meta($product_id,'is_free_webinar',true)=='free' && $event_type=='webinar'){?>
            
            <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>" class="btn_web-spon">Register Now</a>
        <?php }else{?>
            <a href="#price-section" class="btn_web-spon">Book now</a>
        <?php }?>

                
            </div>
        </div>
    </div>
</section>
<!--<section>-->
<!--    <div class="container">-->
<!--        <ul class="breadcrumb">-->
<!--            <li><a href="<?php //echo site_url('/');?>"><strong>Home </strong></a></li>/-->
<!--            <li><a href="<?php //echo get_permalink();?>">-->
<!--                    <?php //the_title();?>-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</section>-->
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
