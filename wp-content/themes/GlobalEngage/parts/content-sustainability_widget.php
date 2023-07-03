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
<section class="our_commitment_block" <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
    <div class="container">
        <div class="img_text_block_our_commitment">
            <div class="left_our_commitment_img">
                <div class="img_our_commitment">
                    <?php if(!empty($image)) { ?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" />
                    <?php } ?>
                </div>
               
            </div>
            
             <div class="right_our_commitment_img">
                 <div class="text_right_our_commitment">
                    <?php if(!empty($heading)) { ?>
                        <h2><?php echo $heading;?></h2>
                <?php } if(!empty($description)) { ?>
                    <p class="event-sub-text"><?php echo $description;?></p>
                <?php } ?>
                </div>
            </div>
        </div>
        
    </div>
</section>





<?php endif;?>