<?php
/*
Template Name: Conference and training
*/
get_header();?>

<?php
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container ">
   <div class="header-banner-text">
      <?php if(!empty($banner_title)) { ?>
        <h2><?php echo $banner_title;?></h2>
      <?php } else { ?>
        <h2><?php the_title();?></h2>
      <?php } ?>
      <p><?php echo $content; ?></p>
   </div>
</div>

<div class="conferences-main-content container">
        <div class="conferences-content-page">
            <div class="conferences-content-page-left-side">
                <div class="filter_sidebar">
                     <h4>Filter By:</h4>
                     <spen><?php echo do_shortcode('[yith_wcan_reset_button]');?></spen>
                </div>
                
                <hr>
                <?php echo do_shortcode('[yith_wcan_filters slug="default-preset"]');?>
            
                <?php //echo do_shortcode('[yith_wcan_filters slug="default-preset"]');?>
                
            
            </div>
            <div class="conferences-content-page-right-side">
                 <?php echo do_shortcode('[searchandfilter id="497" show="results"]');?>
                    
                 
                </div>
                
            </div>
        </div>
    </div>








<?php get_footer();?>