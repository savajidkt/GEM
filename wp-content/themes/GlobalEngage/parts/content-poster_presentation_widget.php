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

<section id="poster_presentation" class="poster_block" <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
    <div class="container">
        
       
        <div class="left_right_poster_block">
            <div class="right_poster_block_img">
                <div class="img_our_commitment">
                     <?php if(!empty($image)) { ?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
                    <?php } ?>
                </div>
               
            </div>
            
             <div class="left_poster_block_text">
                 <div class="poster_block_text_left">
                     <?php if(!empty($heading)) { ?>

                <h2><?php echo $heading;?></h2>

            <?php } if(!empty($description)) { ?>

                <p class="event-sub-text"><?php echo $description;?></p>

            <?php } ?>
            <?php if(!empty($button_text)) { ?> 

            <div class="featured_event_slider_button">

                <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>" class="poster_block_btn"><?php echo $button_text;?></a>

            </div>

            <?php } ?>

                 </div>
            </div>
            
             </div>
       
    </div>
</section>


<?php endif;?>