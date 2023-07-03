<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>


<?php
    $orders = get_field('section_order');
   /* echo '<pre>';
    print_r($orders);
    echo '</pre>';*/
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
    ?>
    
    <?php //get_template_part('block-page/block','Our_Latest_Resources');?>
    
    <!---->
    
       





<?php get_footer(); ?>