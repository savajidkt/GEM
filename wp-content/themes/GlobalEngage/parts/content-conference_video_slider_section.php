<?php

if (!empty($section_data)) :
    $title = $section_data['title'];
    $button1 = $section_data['button_1'];
    $button_text = $button1['button_label'];
    $link = $button1['button_link'];
    $internal_link = $button1['internal_link'];
    $external_link = $button1['external_link'];
    if ($link == 'internal_link') {
        $btnurl = $internal_link;
        $target = '_self';
    } else {
        $btnurl = $external_link;
        $target = '_blank';
    }
    $button2 = $section_data['button_2'];
    $button_text2 = $button2['button_label'];
    $link2 = $button2['button_link'];
    $internal_link2 = $button2['internal_link'];
    $external_link2 = $button2['external_link'];
    if ($link2 == 'internal_link') {
        $btnurl2 = $internal_link2;
        $target2 = '_self';
    } else {
        $btnurl2 = $external_link2;
        $target2 = '_blank';
    }
    $slider_images = $section_data['slider_images'];

?>



    <div class="gallery-slider-video video_image-slider">
        <div class="page-width">
            <div class="container">
                <section class="splide" aria-labelledby="carousel-heading">
                    <div class="gallery_title_content">
                        <?php if (!empty($title)) { ?>
                            <div>
                                <h3><?php echo $title; ?></h3>
                            </div>
                        <?php } ?>
                        <div class="gallery-left-btn">
                            <?php if (!empty($button_text) && !empty($link)) { ?>
                                <a href="<?php echo $btnurl; ?>" target="<?php echo $target; ?>" class="btn new-btn gal-btn"><?php echo $button_text; ?></a>
                            <?php }
                            
                            ?>
                        </div>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php

                            if (is_array($section_data['slider_videos']) && count($section_data['slider_videos']) > 0) {
                                foreach ($section_data['slider_videos'] as $key => $value) {
                                    $type = $value['video_type'];

                                    if ($type == "External") {
                                       

                                        ?>
                                        <li class="DesktopSlidercarousel splide__slide">
                                        <a href="<?php echo $value['external_video']['url']; ?>" data-lity>
                                            <img src="<?php echo $value['desktop_thumbnail']['url']; ?>" alt="Video Testimonial">
                                            <div class="iconss-download">
                                                         <img  src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt="">
                                            </div>
                                           
                                        </a>
                                    </li>

                                    
                                        <?php
                                       
                                    } else if ($type == "You Tube") {                                        
                                        ?>
                                        <li class="DesktopSlidercarousel splide__slide">
                                        <a href="<?php echo 'https://www.youtube.com/watch?v='.$value['video_url_link']; ?>" data-lity>
                                            <img src="<?php echo $value['desktop_thumbnail']['url']; ?>" alt="Video Testimonial">
                                         <div class="iconss-download">
                                                         <img  src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt="">
                                            </div>
                                        </a>
                                    </li>

                                    
                                        
                                        <?php
                                      
                                    } else if ($type == "Vimeo") {                                     
            
                                       ?>
                                       <li class="DesktopSlidercarousel splide__slide">
                                        <a href="<?php echo 'https://vimeo.com/'.$value['video_url_link']; ?>" data-lity>
                                            <img src="<?php echo $value['desktop_thumbnail']['url']; ?>" alt="Video Testimonial">
                                           <div class="iconss-download">
                                                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt="">
                                            </div>
                                        </a>
                                    </li>

                                    
                                       <?php 
                                    }

                            ?>                                 

                                <?php } ?>
                            <?php } ?>
                           
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php endif; ?>