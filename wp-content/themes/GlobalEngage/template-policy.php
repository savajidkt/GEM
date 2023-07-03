<?php
/**
 ** Template Name: Policy Template
 **/
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
<section>
   <div class="legal-page container">
      <div class="legal-page-content">
         <div class="legal-page-lt">
            <a href="<?php echo get_permalink('279');?>"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/arrow-left-side.svg" >
           <h5>Back to policies</h5></a>
         </div>
         <div class="legal-page-rt">
            <?php while(have_posts()):the_post();
                  the_content();
                endwhile;?>
     <?php
    $orders = get_field('section_order');
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
    ?>
         </div>
      </div>
   </div>
</section>
  




<?php get_footer();