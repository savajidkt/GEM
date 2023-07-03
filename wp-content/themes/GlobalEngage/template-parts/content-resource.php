<?php

 $product_id = $post->ID;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
        $terms = get_the_terms( $post->ID, 'resource-type' );

        if($terms[0]->slug == 'blog'){
        ?>
        <div class="resource-content-heading">
        <a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0]; ?>" alt=""></a>
        <a href="<?php the_permalink(); ?>"><h4>
            <?php 
                              if(strlen(get_the_title()) > 49){
                                echo substr(get_the_title(), 0, 48).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>
            </h4>
                            </a>
            <?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 80){
  echo substr($excerpt, 0, 80).'...';
} else {
  echo $excerpt;
}

                            ?>
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
        <?php
        }
    if($terms[0]->slug == 'webinar-recordings'){?>
        <!--Webinar-->
        <div id="Webinar" class="tabcontent">
            <div class="resource-content_webinar-recordings">
                <div class="resource-downloads">
                    <div class="resource-center-content-overlay">
                    <a href="<?php the_permalink(); ?>"><img class="icons-download"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrorplay.svg" alt=""></a>
                        <div class="overlay">
                            <a class="video-link icon" href="<?php the_permalink(); ?>" data-width="383px"
                                data-height="246px">
                                <img src="<?php  echo $image[0]; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                    <h4>
                    <?php 
                              if(strlen(get_the_title()) > 49){
                                echo substr(get_the_title(), 0, 48).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>
                    </h4>
                            </a>
                    <?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 80){
  echo substr($excerpt, 0, 80).'...';
} else {
  echo $excerpt;
}

                            ?>
                    <a class="read-more-btn" href="<?php the_permalink(); ?>">Watch here</a>
                </div>
            </div>
            
        </div>
        <!--end-->
    <?php }
    if($terms[0]->slug == 'downloads'){?>
        <!--download-->
        <div id="Downloads" class="tabcontent">
            <div class="resource-content_download">
                <div class="resource-content-heading resource-downloads">

                <?php if(strlen(get_field('pdf_upload'))){?>
                    <a href="<?php echo get_field('pdf_upload');?>" download>
                    <?php } else{ ?>
                      <a class="" href="javascript:void(0);">
<?php                    } ?>
                    
                    <div class="resource-center-content-overlay">
                        <img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt="">
                        <div class="overlay">                         
                                <img src="<?php  echo $image[0]; ?>" alt="">                            
                        </div>
                    </div>
                </a>
                <?php if(strlen(get_field('pdf_upload'))){?>
                    <a href="<?php echo get_field('pdf_upload');?>" download>
                    <?php } else{ ?>
                      <a class="" href="javascript:void(0);">
<?php                    } ?>
                    <h4>
                    <?php 
                              if(strlen(get_the_title()) > 49){
                                echo substr(get_the_title(), 0, 48).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>
                    </h4>
                            </a>
                     <p><?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 80){
  echo substr($excerpt, 0, 80).'...';
} else {
  echo $excerpt;
}

                            ?></p>
                     <?php if(strlen(get_field('pdf_upload'))){?>
                    <a class="read-more-btn" href="<?php echo get_field('pdf_upload');?>" download>Download here</a>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    <?php }

    ?>