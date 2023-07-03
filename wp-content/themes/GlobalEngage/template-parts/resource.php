<?php

echo $product_id = $post->ID;
die;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
        $terms = get_the_terms( $post->ID, 'resource-type' );

        if($terms[0]->slug == 'blog'){
        ?>
        <div class="resource-content-heading">
            <img src="<?php  echo $image[0]; ?>" alt="">
            <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_excerpt(); ?>
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
                        <img class="icons-download"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrorplay.svg" alt="">
                        <div class="overlay">
                            <a class="video-link icon" href="https://www.youtube.com/watch?v=07d2dXHYb94" data-width="383px"
                                data-height="246px">
                                <img src="<?php  echo $image[0]; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <?php the_excerpt(); ?>
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
                    <div class="resource-center-content-overlay">
                        <img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt="">
                        <div class="overlay">                         
                                <img src="<?php  echo $image[0]; ?>" alt="">                            
                        </div>
                    </div>
                    <h4><?php the_title(); ?></h4>
                     <p><?php the_excerpt(); ?></p>
                     <?php if(get_field('popup_form') == 'noform'){?>
                    <a class="read-more-btn" href="<?php echo get_field('pdf_upload');?>">Download here</a>
                    <?php }else{?>
                        <a class="read-more-btn" href="<?php the_permalink(); ?>">Download here</a>
                    <?php }?>
                </div>
            </div>
            
        </div>
    <?php }

    ?>