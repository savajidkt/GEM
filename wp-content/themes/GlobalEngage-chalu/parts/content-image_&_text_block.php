<?php if(!empty($section_data)): 
    $background_color = $section_data['background_color'];
    $image = $section_data['image'];
    $heading = $section_data['heading'];
    $description = $section_data['description'];
    $button = $section_data['button'];
        $button_text = $button['button_label'];
        $link = $button['button_link'];
           $internal_link = $button['internal_link'];
           $external_link = $button['external_link'];
            if($link == 'internal_link'){
                $btnurl = $internal_link;
                $target = '_self';
            } else {
                $btnurl = $external_link;
                $target = '_blank';
            }

?>
<section class="featured_event_slider smb-section" <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
    <div class=" container">
    <div class="featured_event_slider_content">
        <?php 
        $swap_image_left_or_right = $section_data['swap_image_left_or_right'];
            if($swap_image_left_or_right == 'right') {  // image right side
        ?>
        <div class="featured_event_slider_text">
            <?php if(!empty($heading)) { ?>
                <h3><?php echo $heading;?></h3>
            <?php } if(!empty($description)) { ?>
                <p class="event-sub-text"><?php echo $description;?></p>
            <?php } ?>
             <?php if(!empty($button_text)) { ?> 
            <div class="featured_event_slider_button">
                <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>" class="btn"><?php echo $button_text;?></a>
            </div>
            <?php } else { ?>
                     
             <?php }?>
        </div>
        <div class="featured_event_slider_image">
            <?php if(!empty($image)) { ?>
                <div class="event-slider-blocks">
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="featured_event_slider_image">
            <?php if(!empty($image)) { ?>
                <div class="event-slider-blocks">
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
                </div>
            <?php } ?>
        </div>
        <div class="featured_event_slider_text">
            <?php if(!empty($heading)) { ?>
                <h3><?php echo $heading;?></h3>
            <?php } if(!empty($description)) { ?>
                <p class="event-sub-text"><?php echo $description;?></p>
            <?php } ?>
              <?php if(!empty($button_text)) { ?> 
                    <div class="featured_event_slider_button">
                         <a href="<?php echo $btnurl;?>" type="button" target="<?php echo $target;?>" class="btn"><?php echo $button_text;?></a>
                     </div>
            <?php } else { ?>
                      text
             <?php }?>
        </div>
    <?php } ?>   
    </div>
    </div>
    
</section>
<?php endif;?>