<?php 
get_header();?>
<style>
    iframe.video-add__video {
        position: inherit;
    }
    .arrow_blog_img_single {
        display: flex;
        align-items: center;
        gap: 1rem;
        color: #333333;
        font-size: 17px;
        line-height: 34px;
    }
    .wpb-posts-nav {
            display: flex;
            grid-gap: 50px;
            align-items: center;
            justify-content: space-between;
        }
          
.wpb-posts-nav a {
    display: grid;
    grid-gap: 20px;
    align-items: center;
}
  
.wpb-posts-nav h4,
.wpb-posts-nav strong {
    margin: 0;
}
  
.wpb-posts-nav a svg {
    display: inline-block;
    margin: 0;
    vertical-align: middle;
}
  
/*.wpb-posts-nav > div:nth-child(1) a {*/
/*    grid-template-columns: 100px 1fr;*/
/*    text-align: left;*/
/*}*/
  
/*.wpb-posts-nav > div:nth-child(2) a {*/
/*    grid-template-columns: 1fr 100px;*/
/*    text-align: right;*/
/*}*/
  
.wpb-posts-nav__thumbnail {
    display: block;
    margin: 0;
}
  
.wpb-posts-nav__thumbnail img {
    border-radius: 10px;
}
</style>
<?php
$banner_title = get_field('banner_title', $post->ID);
$content = get_field('content', $post->ID);

$term_obj_list = get_the_terms( $post->ID, 'resource-type' );

?>
<div class="container sub_banner_title">
    <div class="header-banner-text">
        <?php if (!empty($banner_title)) { ?>
        <h2><?php echo $banner_title; ?></h2>
        <?php } else { ?>
        <h2><?php the_title(); ?></h2>
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

<?php if(isset($term_obj_list[0]->slug) && $term_obj_list[0]->slug == "webinar-recordings") { ?>
<section>
    <div class="container">
        <div class="single_resource_content" id="webinar-recording">
            <div class="main_left_sidebar_blog">
                <div class="single_resource-page-lt">
                    <div class="arrow_left_side">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left-side.svg" />
                    </div>
                    <a href="<?php echo site_url('resource-centre/?back=webinar-recordings');?>">
                        <h5>Back to Webinar</h5>
                    </a>
                </div>
                
                <div class="blog-title-goes-here-left-sub-content">
                <p class="left-text">Share this article:</p>
                <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                    <!-- <p class="left-text">Share this article:</p>
                    <div class="blog-title-social-icons">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-4.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-1.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Exclusion 2.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 1802.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 2304.svg" alt="">
                    </div> -->
                </div>
            </div>
            <div class="single_resource-page-rt">
                <div class="sub_container">
                     <?php $sub_heading_for_blog_or_webinar_recording = get_field('sub_heading_for_blog_or_webinar_recording', $post->ID); ?>
                    <?php if ($sub_heading_for_blog_or_webinar_recording) : ?>
                        <h2><?php echo $sub_heading_for_blog_or_webinar_recording; ?></h2>
                    <?php endif; ?>

                    <?php //the_content();?>
                    <?php 
                      $blog_or_webinar_recording_description= get_field('blog_or_webinar_recording_description', $post->ID); 
                      echo get_field('blog_or_webinar_recording_description', $post->ID);
                      ?>
                </div>
                <?php
                $webinar_videoArr = get_field('webinar_video', $post->ID);
                if(is_array($webinar_videoArr) && count($webinar_videoArr) > 0){
                    ?>
                                <?php
                    foreach ($webinar_videoArr as $key => $value) {
                        $videourl = "";
                        if($value['video_type'] == 'You Tube') {
                            $video_id = $value['video_url_link'];
                            $videourl = 'https://www.youtube.com/embed/' . $video_id;
                        } else if($value['video_type'] == 'Vimeo'){
                            $video_id = $value['video_url_link'];
                            $videourl ='https://player.vimeo.com/video/'.$video_id;
                        } else if($value['video_type'] == 'External'){
                            $videourl = $external_video['url'];
                        }
                    
                        if( strlen($videourl) > 0 ){?>
                                <section class="video-hal">
                                    <div class="container">
                                        <div class="video-wrapper">
                                            <iframe class="video-add__video" src="<?php echo $videourl;?>" title="video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </section>
                             <video width="320" height="240" controls>
                              <source src="<?php echo $videourl;?>" type="video/mp4">
                            </video> 
                        
                                <?php
                        }
                        ?>
                         
                        <?php        
                    }
                    ?>
                                <?php
                }
                ?>
                 
            </div>
        </div>
    </div>
</section>
<?php } else if(isset($term_obj_list[0]->slug) && $term_obj_list[0]->slug == "blog") {  ?>

    <section>
    <div class="container">
        
            <div class="single_resource_content" id="blog-listing">
                <div class="main_left_sidebar_blog">
                <div class="single_resource-page-lt">
                    
                    <div class="arrow_left_side">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left-side.svg" />
                    </div>
                    <a href="<?php echo site_url('resource-centre');?>"><h5>Back to Blog</h5></a>
                    
                </div>
                 <div class="blog-title-goes-here-left-sub-content">
                 <p class="left-text">Share this article:</p>
                 <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                        <!-- <p class="left-text">Share this article:</p> 
                        <div class="blog-title-social-icons">
                       
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-4.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-1.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Exclusion 2.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 1802.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 2304.svg" alt="">
                        </div> -->
                    </div>
                
                </div>
                <div class="single_resource-page-rt">
                    <div class="sub_container">
                   <?php $sub_heading_for_blog_or_webinar_recording = get_field('sub_heading_for_blog_or_webinar_recording', $post->ID); ?>
                    <?php if ($sub_heading_for_blog_or_webinar_recording) : ?>
                        <h2><?php echo $sub_heading_for_blog_or_webinar_recording; ?></h2>
                    <?php endif; ?>

                    <?php //the_content();?>
                    <?php 
                      $blog_or_webinar_recording_description= get_field('blog_or_webinar_recording_description', $post->ID); 
                      echo get_field('blog_or_webinar_recording_description', $post->ID);
                      ?>
                    <?php
                    
                    $blog_left_image= get_field('blog_left_image', $post->ID); 
                    
                    // $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );

                    ?>
                    <?php 
                      $blog_right_content= get_field('blog_right_content', $post->ID); 
                      $blog_description= get_field('blog_description', $post->ID); 
                    ?>
                    <?php if(strlen($image[0]) > 0) {?>
                        <img src="<?php  echo $image[0]; ?>" alt="img">
                        <?php } ?>
                        <div class="single_post_left_img_right_text">
                            <?php if(strlen($blog_left_image['url'])){?>
                                <div class="single_sub_left_img">
                                     <img src="<?php echo $blog_left_image['url']; ?>" alt="img">
                                </div>
                                <?php } ?>
                                <div class="single_sub_right_text">
                                     <?php echo get_field('blog_right_content', $post->ID); ?>
                                </div>
                         </div>
                         <?php echo get_field('blog_description', $post->ID); ?>
                    </div>
                   
                </div>
            </div>
       
    </div>
</section>
    <?php } ?>
<section>
    <div class="container">
        <div class="single_resource_content single-bg">
            <!--<div class="single_resource-page-lt">-->
            <!--</div>-->
            <div class="single_resource-page-rt">
                <div class="next_priv_block_single_page">
                
                    	
                        <?php wpb_posts_nav(); ?>
                    
                </div>
            </div>
        </div>
</section>
<div id="one_two_form">

<?php if(isset($term_obj_list[0]->slug) && $term_obj_list[0]->slug == "webinar-recordings" && get_field('popup_form') != 'noform') { ?>
<div id="popupForm" class="form-popup">
    <!-- <span id="closeButton" class="close-button">&times;</span> -->
    <?php
    $form = get_field('popup_form');
    
    if ($form === 'form1')  {
        echo do_shortcode('[contact-form-7 id="948" title="Form 1"]');
    } elseif ($form === 'form2') {
        echo do_shortcode('[contact-form-7 id="991" title="Form 2"]');
    }
    ?>
</div>
<?php } ?>
    <?php
    $orders = get_field('section_order', $post->ID);
   
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );           
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );

        endif;
    endforeach;
?>
    <?php get_footer(); ?>

   <script>
    document.addEventListener( 'wpcf7submit', function( event ) {
        //mail_sent
        
    if ('validation_failed' == event.detail.status ) {
       
    }else if ('mail_sent' == event.detail.status ) {
        $("#popupForm").fadeOut();
    }
}, false );
   </script>