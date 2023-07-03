<?php if(!empty($section_data)):
      $title = $section_data['title'];
      $background_color = $section_data['background_color'];
      $sponsorship = $section_data['sponsorship'];
    ?>
<section class="gallery_main-slider">
    <div class="container">
        <?php if (!empty( $title)) { ?>
    <h3><?php echo $title;?></h3>
    <?php } ?>
    <div class="flip-main">
        <div class="flip-main-card container">
           <div class="row">
              <!-- flip card start -->
              <?php if(!empty($section_data['sponsorship'])) { 
               foreach($section_data['sponsorship'] as $sponsor) {
                  $image = $sponsor['image']; 
                  $heading = $sponsor['heading'];
                  $description = $sponsor['description'];
            ?>
              <div class="flip-card">
                 <div class="flip-card-inner">
                     <?php if(!empty($image) && (!empty($heading)) && (!empty($description))) { ?>
                     <div class="flip-card-front">
                        <img src="<?php echo $image['url'];?>" alt="flip-card">
                        <h4><?php echo $heading;?> </h4>
                        <p><?php echo $description;?></p>
                     </div>
                     <?php } ?>
                </div>
              </div>
              <?php }} ?>
              
             <div class="flip-card"  <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
                <div class="flip-card-inner">
                    <?php if(!empty($section_data)):
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
                    <?php if (!empty($heading) && !empty($description)) { ?>
                      <div class="flip-card-front">
                        <h4><?php echo $heading; ?></h4>
                        <div class="flip-card-front-p-text">
                          <p><?php echo $description; ?></p>
                        </div>
                        <?php if (!empty($btnurl) && !empty($target) && !empty($button_text)) { ?>
                          <a href="<?php echo $btnurl; ?>" target="<?php echo $target; ?>" class="btn"><?php echo $button_text; ?></a>
                        <?php } ?>
                      </div>
                    <?php } ?>

                   <?php endif; ?>
                </div>
             </div>
             
           </div>
        </div>
      </div>
      </div>
    </section>
<?php endif;?>