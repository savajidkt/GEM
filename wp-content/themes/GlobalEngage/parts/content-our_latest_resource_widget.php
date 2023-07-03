<?php if(!empty($section_data)): 
   $show_blogs_and_webinar_recordings_and_downloads = $section_data['show_blogs_and_webinar_recordings_and_downloads']; 
    if($show_blogs_and_webinar_recordings_and_downloads[0] == 'show') {
    
?>
<style>
    button.let_res_btn {
    margin: 0;
    background-color: #F15D23 !important;
    color: #333333;
    border: 1px solid;
    height: 50px;
    padding: 20px;
    display: flex;
    align-items: center;
}
.our_lr .tablink.active {
    background: #F15D23 !important;
    border: none;
    color: #FFFFFF;
}
</style>
<section class="desktop-blog-sec our_lr">
        <div class="gallery_title container">
            <div class="gallery_title_content">
                <div>
                    <h3>Our Latest Resources</h3>
                </div>
                
                <div class="gallery-left-btn-event">
             
                   
                   
                     
                     <a href="javascript:void(0);" id="BlogsBtn" class="tablink active" onclick="openCity(event,'Blogs')">Blogs</a>
                    <a href="javascript:void(0);" id="WebinarBtn" class="tablink" onclick="openCity(event,'Webinar')">Webinar Recordings</a>
                    <a href="javascript:void(0);" id="DownloadsBtn" class="tablink" onclick="openCity(event,'Downloads')">Downloads</a>
                    <a href="<?php echo site_url('resource-center');?>" class="new-btn btn-x gal-web3">View all events</a>
                 
                      
                </div>
            </div>
                 
                  
                  <div id="Blogs" class="w3-container w3-border city">
                         <div class="gallery-slider">
                      <?php
                        // query category 1 
                        $tax_query[] = array(
                             'taxonomy'      => 'resource-type',
                            'field' => 'slug', 
                            'terms'         =>'blog', // array(12,13,...)

                        );

                        $args = array(
                            'post_type'      => 'resource-center',
                            'posts_per_page' => 12,
                            'tax_query' => $tax_query
                        );  
                     
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                          while ($my_query->have_posts()) : $my_query->the_post();
                            $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                        $terms = get_the_terms( $post->ID, 'resource-type' );
                           ?>
                           <div class="text-event-slider">
                                  <a href="<?php the_permalink(); ?>"><div><img src="<?php  echo $image[0]; ?>" alt=""></div></a>
                                <a href="<?php the_permalink(); ?>">  
                                <h2>
                                 
                                  

                                  <?php 
                              if(strlen(get_the_title()) > 41){
                                echo substr(get_the_title(), 0, 41).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>

                              </h2>
                              </a>
                                  <p><?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 115){
  echo substr($excerpt, 0, 115).'...';
} else {
  echo $excerpt;
}

                            ?></p>
                            </div>
                            <?php
                          endwhile;
                        }
                        wp_reset_query();
                        ?>
                         </div>
                 </div>
                
                  <div id="Webinar" class="w3-container w3-border city" style="display:none">
                   <div class="gallery-slider">
                    <?php
                    $tax_query_webniar[] = array(
                             'taxonomy'      => 'resource-type',
                            'field' => 'slug', 
                            'terms'         =>'webinar-recordings',

                        );

                        $args_webinar = array(
                            'post_type'      => 'resource-center',
                            'posts_per_page' => 12,
                            'tax_query' => $tax_query_webniar
                        );

                       $webinar_query='';
                        $webinar_query = new WP_Query($args_webinar);

                        if( $webinar_query->have_posts() ) {
                          while ($webinar_query->have_posts()) : $webinar_query->the_post();
                            $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                        $terms = get_the_terms( $post->ID, 'resource-type' );
                           ?>                        
                            <div id="Webinar<?=$product_id;?>" class="tabcontent text-event-slider" data-id="<?=$product_id;?>">
                            <div class="resource-content_webinar-recordings">
                                <div class="resource-downloads">
                                    <div class="resource-center-content-overlay">
                                    <a href="<?php the_permalink(); ?>"><img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrorplay.svg" alt=""></a>
                                        <div class="overlay">
                                            <a class="video-link icon" href="<?php the_permalink(); ?>" data-width="383px" data-height="246px">
                                                <img src="<?php  echo $image[0]; ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>">
                                    <h2>
                                    <?php 
                              if(strlen(get_the_title()) > 41){
                                echo substr(get_the_title(), 0, 41).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>
                                    </h2>
                                </a>
                                    <p><?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 115){
  echo substr($excerpt, 0, 115).'...';
} else {
  echo $excerpt;
}

                            ?></p>
                                </div>
                            </div>
                        
                         </div>
                            <?php
                          endwhile;
                        }
                        wp_reset_query();
                        ?>                   
                    </div>
                  </div>
                
                  <div id="Downloads" class="w3-container w3-border city" style="display:none">
                      <div class="gallery-slider">

                        <?php
                    $tax_query_down[] = array(
                             'taxonomy'      => 'resource-type',
                            'field' => 'slug', 
                            'terms'         =>'downloads',

                        );

                        $args_down = array(
                            'post_type'      => 'resource-center',
                            'posts_per_page' => 12,
                            'tax_query' => $tax_query_down
                        );

                       $down_query='';
                        $down_query = new WP_Query($args_down);

                        if( $down_query->have_posts() ) {
                          while ($down_query->have_posts()) : $down_query->the_post();
                            $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                        $terms = get_the_terms( $post->ID, 'resource-type' );
                           ?>   
                           <div id="Downloads" class="tabcontent text-event-slider">
                            <div class="resource-content_download">
                                <div class="resource-content-heading resource-downloads">
                                    <div class="resource-center-content-overlay">
                                        <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="" href="<?php echo get_field('pdf_upload');?>" download>
                    <?php }else{ ?>
                        <a class="" href="javascript:void(0);">
                    <?php }?>
                    <img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt=""></a>
                                        <div class="overlay"> 
                                        <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="" href="<?php echo get_field('pdf_upload');?>" download>
                    <?php }else{ ?>
                        <a class="" href="javascript:void(0);">
                    <?php }?>                                        
                                          <img src="<?php  echo $image[0]; ?>" alt="">
                                      </a>
                                        </div>
                                    </div>
                                    <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="" href="<?php echo get_field('pdf_upload');?>" download>
                    <?php }else{ ?>
                        <a class="" href="javascript:void(0);">
                    <?php }?>
                                    <h2>

                                    <?php 
                              if(strlen(get_the_title()) > 41){
                                echo substr(get_the_title(), 0, 41).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>

                                    </h2>
                                </a>
                                    <p>

                                    <?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 115){
  echo substr($excerpt, 0, 115).'...';
} else {
  echo $excerpt;
}

                            ?>
                                    </p>
            
                                     
                            </div>
                            </div>
                            
                        </div>

                            <?php
                          endwhile;
                        }
                        wp_reset_query();
                        ?>
                </div>
                </div>
               
                  
        </div>
    </section>

    <section class="mobile-blog-sec our_lr">
        <div class="gallery_title container latest_resources-content-outer">
            <div class="gallery_title_content">
                <div>
                    <h3>Our Latest Resources</h3>
                </div>
                
                <div class="gallery-left-btn-event">
                    <a href="javascript:void(0);" id="MBlogsBtn" class="tablink active" onclick="mobileBlog(event,'MBlogs')">Blogs</a>
                    <a href="javascript:void(0);" id="MWebinarBtn" class="tablink" onclick="mobileBlog(event,'MWebinar')">Webinar Recordings</a>
                    <a href="javascript:void(0);" id="MDownloadsBtn" class="tablink" onclick="mobileBlog(event,'MDownloads')">Downloads</a>
                    <a href="<?php echo site_url('resource-center');?>" class="new-btn btn-x gal-web3">View all events</a>
                 
                      
                </div>
            </div>
                 
                  
                  <div id="MBlogs" class="w3-container w3-border m-city">
                         <div id="mblog-sec" class="gallery-slider1">
                      <?php
                        // query category 1 
                        $mtax_query[] = array(
                             'taxonomy'      => 'resource-type',
                            'field' => 'slug', 
                            'terms'         =>'blog', // array(12,13,...)

                        );

                        $margs = array(
                            'post_type'      => 'resource-center',
                            'posts_per_page' => 4,
                            'tax_query' => $mtax_query
                        );  
                     
                        $my_query_mobile = new WP_Query($margs);
                        if( $my_query_mobile->have_posts() ) {
                          while ($my_query_mobile->have_posts()) : $my_query_mobile->the_post();
                            $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                           ?>
                           <div class="text-event-slider">
                                  <a href="<?php the_permalink(); ?>"><div><img src="<?php  echo $image[0]; ?>" alt=""></div></a>
                                <a href="<?php the_permalink(); ?>">  
                                <h2>
                                 
                                  

                                  <?php 
                              if(strlen(get_the_title()) > 41){
                                echo substr(get_the_title(), 0, 41).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>

                              </h2>
                              </a>
                                  <p><?php $excerpt= get_the_excerpt();

                                if(strlen($excerpt) > 115){
                                  echo substr($excerpt, 0, 115).'...';
                                } else {
                                  echo $excerpt;
                                }

                            ?></p>
                            </div>

                            <?php
                          endwhile;
                        }
                        wp_reset_query();
                        ?>
                         </div>
                         <?php
                    if ( $my_query_mobile->max_num_pages > 1 ){?>
                        <input type="hidden" name="blog_current_page" id="blog_current_page" value="2">
                       <div id="m_blog_misha_loadmore">Load more</div>
                    <?php }?>
                 </div>

                
                  <div id="MWebinar" class="w3-container w3-border m-city" style="display:none">
                   <div id="mwebinar-sec" class="gallery-slider1">
                    <?php
                    $mtax_query_webniar[] = array(
                             'taxonomy'      => 'resource-type',
                            'field' => 'slug', 
                            'terms'         =>'webinar-recordings',

                        );

                        $margs_webinar = array(
                            'post_type'      => 'resource-center',
                            'posts_per_page' => 4,
                            'tax_query' => $mtax_query_webniar
                        );

                       $mwebinar_query='';
                        $mwebinar_query = new WP_Query($margs_webinar);

                        if( $mwebinar_query->have_posts() ) {
                          while ($mwebinar_query->have_posts()) : $mwebinar_query->the_post();
                            $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                        $terms = get_the_terms( $post->ID, 'resource-type' );
                           ?>                        
                            <div id="Webinar<?=$product_id;?>" class="tabcontent text-event-slider" data-id="<?=$product_id;?>">
                            <div class="resource-content_webinar-recordings">
                                <div class="resource-downloads">
                                    <div class="resource-center-content-overlay">
                                    <a href="<?php the_permalink(); ?>"><img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrorplay.svg" alt=""></a>
                                        <div class="overlay">
                                            <a class="video-link icon" href="<?php the_permalink(); ?>" data-width="383px" data-height="246px">
                                                <img src="<?php  echo $image[0]; ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>">
                                    <h2>
                                    <?php 
                              if(strlen(get_the_title()) > 41){
                                echo substr(get_the_title(), 0, 41).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>
                                    </h2>
                                </a>
                                    <p><?php $excerpt= get_the_excerpt();

                                    if(strlen($excerpt) > 115){
                                      echo substr($excerpt, 0, 115).'...';
                                    } else {
                                      echo $excerpt;
                                    }

                            ?></p>
                                </div>
                            </div>
                        
                         </div>
                            <?php
                          endwhile;
                        }
                        wp_reset_query();
                        ?>                   
                    </div>
                    <?php
                    if ( $mwebinar_query->max_num_pages > 1 ){?>
                        <input type="hidden" name="webinar_current_page" id="webinar_current_page" value="2">
                       <div id="m_webinar_misha_loadmore">Load more</div>
                    <?php }?>
                  </div>
                
                  <div id="MDownloads" class="w3-container w3-border m-city" style="display:none">
                      <div id="mdonwload-sec" class="gallery-slider1">
                        <?php
                    $mtax_query_down[] = array(
                             'taxonomy'      => 'resource-type',
                            'field' => 'slug', 
                            'terms'         =>'downloads',

                        );

                        $margs_down = array(
                            'post_type'      => 'resource-center',
                            'posts_per_page' => 4,
                            'tax_query' => $mtax_query_down
                        );

                       $mdown_query='';
                        $mdown_query = new WP_Query($margs_down);

                        if( $mdown_query->have_posts() ) {
                          while ($mdown_query->have_posts()) : $mdown_query->the_post();
                            $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                        $terms = get_the_terms( $post->ID, 'resource-type' );
                           ?>   
                           <div id="Downloads" class="tabcontent text-event-slider">
                            <div class="resource-content_download">
                                <div class="resource-content-heading resource-downloads">
                                    <div class="resource-center-content-overlay">
                                        <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="" href="<?php echo get_field('pdf_upload');?>" download>
                    <?php }else{ ?>
                        <a class="" href="javascript:void(0);">
                    <?php }?>
                                        <img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt=""></a>
                                        <div class="overlay">
                                         <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="" href="<?php echo get_field('pdf_upload');?>" download>
                    <?php }else{ ?>
                        <a class="" href="javascript:void(0);">
                    <?php }?>                                         
                                          <img src="<?php  echo $image[0]; ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="" href="<?php echo get_field('pdf_upload');?>" download>
                    <?php }else{ ?>
                        <a class="" href="javascript:void(0);">
                    <?php }?>
                                    <h2>

                                    <?php 
                              if(strlen(get_the_title()) > 41){
                                echo substr(get_the_title(), 0, 41).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>

                                    </h2>
                                </a>
                                    <p>

                                    <?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 115){
  echo substr($excerpt, 0, 115).'...';
} else {
  echo $excerpt;
}

                            ?>
                                    </p>
            
                                     
                            </div>
                            </div>
                            
                        </div>

                            <?php
                          endwhile;
                        }
                        wp_reset_query();
                        ?>
                </div>
                <?php
                    if ( $mdown_query->max_num_pages > 1 ){?>
                        <input type="hidden" name="down_current_page" id="down_current_page" value="2">
                       <div id="m_dow_misha_loadmore">Load more</div>
                    <?php }?>
                </div>
               
                  
        </div>
    </section>
 <script>
        function openCity(evt, cityName) {
          var i, x, tablinks;
          x = document.getElementsByClassName("city");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " ";
        }
        function mobileBlog(evt, cityName) {
          var i, x, tablinks;
          x = document.getElementsByClassName("m-city");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " ";
          if( cityName == "MBlogs" ){
            $('#MBlogsBtn').addClass('active');
            $('#MWebinarBtn').removeClass('active');
            $('#MDownloadsBtn').removeClass('active');

          } else if( cityName == "MWebinar" ){
            $('#MWebinarBtn').addClass('active');
            $('#MBlogsBtn').removeClass('active');
            $('#MDownloadsBtn').removeClass('active');

          } else if( cityName == "MDownloads" ){
            $('#MDownloadsBtn').addClass('active');
            $('#MBlogsBtn').removeClass('active');
            $('#MWebinarBtn').removeClass('active');

          } else {
            $('#MBlogsBtn').removeClass('active');
            $('#MWebinarBtn').removeClass('active');
            $('#MDownloadsBtn').removeClass('active');
          }


        }
</script>
 <?php }  endif;?> 