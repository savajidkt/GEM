<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>

<?php 
$banner_img = get_field('post_detail_page', $post->ID);
$banner_img_mobile = get_field('post_detail_image_mobile_view', $post->ID);
?>
<section class="Banner-section">
  <div class="mob_banner_img">
      <div class="mobile-view">
        <div class="social-mobile" style="background-image:url(<?php echo $banner_img_mobile['url'];?>);">
           <?php
            $facebook = get_field('facebook','option');
            $youtube = get_field('youtube','option');
            $linkedin = get_field('linkedin','option'); 
              if(!empty($facebook)) { ?>
                  <a href="<?php echo $facebook;?>" target="_blank"><img class="social-icon" src="<?php echo get_stylesheet_directory_uri();?>/Images/Facbook Top.svg" alt="fb"></a>
              <?php } if(!empty($youtube)) { ?>
                  <a href="<?php echo $youtube;?>" target="_blank"><img class="social-icon" src="<?php echo get_stylesheet_directory_uri();?>/Images/Youtube Top.svg" alt="ytb"></a>
              <?php } if(!empty($linkedin)) { ?>
                <a href="<?php echo $linkedin;?>" target="_blank"><img class="social-icon" src="<?php echo get_stylesheet_directory_uri();?>/Images/Linkedin Top.svg" alt="Ins"></a>
              <?php } ?>
        </div>
        <div class="container post-single">
           <h1><?php the_title();?></h1>
        </div>
      </div>
  </div>

   <div class="main-banner" style="background-image:url(<?php echo $banner_img['url'];?>) ;">
      <div class="top-banner top-post-data">
         <div class="top-text-banner" style="background-image:url(<?php echo get_stylesheet_directory_uri();?>/Images/Path 972.png) ;">
            <div class="container top-banner-div">
             <div class="top-line-icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/Images/Group 1359.png" alt="icon">
               </div>
               <div class="top-banner-text-left">
                  <h1><?php the_title();?></h1>
               </div>
               </div>
         </div>
      </div>
      
      <div class="bottom-banner bootom-post-data">
         <div class="container bottom-banner-div post-data">
           
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container blogs-post-data-info">
      <div class="left-blogs-back">
         <div class="blogs-current-page">
            <a href="<?php echo get_permalink(595);?>">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Path-1163.svg" alt="arrow"/>
               <h3>BACK TO OUR POSTS</h3>
            </a>
         </div>
          <?php echo do_shortcode('[addtoany]');?>
      </div>
      <div class="right-blogs-info">
         <?php while(have_posts()):the_post();
            the_content();
            endwhile;?>

         <div class="blogs-left-right">
          <?php
              //$prev_post = get_previous_post();
          $prev_post = get_next_post();  //print_r($prev_post);
          if($prev_post) { ?>
            <div class="blog-PREVIOUS">
               <a href="<?php echo get_permalink($prev_post->ID);?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Path-1163.svg" alt="arrow"/>
                  <h3>PREVIOUS ARTICLE</h3>
               </a>
            </div>
          <?php } 
          $next_post = get_previous_post();  //print_r($next_post);
          if($next_post) { ?>
            <div class="blog-NEXT">
               <a href="<?php echo get_permalink($next_post->ID);?>">
                  <h3>NEXT ARTICLE</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Path-1165-1.svg" alt="arrow"/>
               </a>
            </div>
          <?php } ?>
         </div>

      </div>
   </div>
</section>


<?php
    $orders = get_field('sections_order');
      foreach($orders as $order):
          if(!empty($order)):
              set_query_var( 'section_data', $order );
              echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
          endif;
      endforeach;
?>



<?php get_footer();
