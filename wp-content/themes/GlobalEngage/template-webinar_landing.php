<?php

/* 
Template Name: Webinar Landing
*/
get_header();?>
<?php

$banner_title = get_field('banner_title',$post->ID);

$content = get_field('content',$post->ID);

?>

<div class="container site_banner_text tr">

    <div class="header-banner-text traning_block">
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
                            <li></li>
                    </ul>
                     <ul>
                         <li>Location:</li>
                            <li></li>
                    </ul>
                     <ul>
                         <li>Location:</li>
                            <li></li>
                    </ul>
                 </div>
                
        </div>
        <div class="banner_product_items_block">
            <a href="#"><button class="btn_color" id="btnOpenForm">Download agenda</button></a>
             <a href="#"><button class="without_btn_color">Register for free now</button></a>
            
        </div>

    </div>

</div>

<?php
    $orders = get_field('section_order');
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
?>

<?php get_footer();?>