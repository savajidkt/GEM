<?php if(!empty($section_data)): 
	$main_heading = $section_data['main_heading'];
	$background_color = $section_data['background_color']; 
?>
<section id="wbs" <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
    <div class="container">
        <div class="wbs-main-text">
            <?php if(!empty($main_heading)) { ?>
        <h2><?php echo $main_heading;?></h2>
      <?php } ?>
            <div class="wbs-row">
             <?php
            if(!empty($section_data['sponsor_block'])) { 
               foreach($section_data['sponsor_block'] as $sponsor) {
                  $sponsor_text = $sponsor['sponsor_text']; 
                  $sponsor_content = $sponsor['sponsor_content'];
                   $button1 = $section_data['button'];
                    $button_text = $button1['button_label'];
                    $link = $button1['button_link'];
                       $internal_link = $button1['internal_link'];
                       $external_link = $button1['external_link'];
                        if($link == 'internal_link'){
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
                        if($link2 == 'internal_link'){
                            $btnurl2 = $internal_link2;
                            $target2 = '_self';
                        } else {
                            $btnurl2 = $external_link2;
                            $target2 = '_blank';
                        }
            ?>
                
            <div class="wbs-item-block">
                    <?php if(!empty($sponsor_text) && (!empty($sponsor_content))) { ?>
                  <div class="wbs-block">
                      <h2>
                         <?php echo $sponsor_text;?> 
                      </h2>
                      <p>
                         <?php echo $sponsor_content;?> 
                      </p>
                  </div>
                  <?php } ?>
            </div>
            <?php }} ?>
             </div>
            <div class="wbs-button">
             <?php if(!empty($button_text) && !empty($link)) { ?>
                <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>" class="btn"><?php echo $button_text;?></a>
                <?php } if(!empty($button_text2) && !empty($link2)) {?>
                <a href="<?php echo $btnurl2;?>" target="<?php echo $target2;?>" class="wot-btn"><?php echo $button_text2;?></a>
            <?php } ?>
            </div>
            
            
           
        </div>
        
    </div>
</section>
<?php endif; ?>