<?php 
/* 
Template Name: Legal Page 
*/ 
get_header();
?>

<?php
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container sub_banner_title">
   <div class="header-banner-text">
      <?php if(!empty($banner_title)) { ?>
        <h2><?php echo $banner_title;?></h2>
      <?php } else { ?>
        <h2><?php the_title();?></h2>
      <?php } ?>
      <p><?php echo $content; ?></p>
   </div>
</div>

<section id="breadcrumb">
        <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/');?>"><strong>Home</strong></a></li>
            <storng>/</storng>
            <li><?php the_title();?></li>
        </ul>
    </div>
</section>

<?php
    $orders = get_field('section_order');
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
    ?>



<?php get_footer();