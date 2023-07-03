<?php

if (!empty($section_data)) {

    $heading = $section_data['heading'];

    $speakers_block = $section_data['speakers_block'];
    ?>

    <section class="ourpeople" id="our-speakers">
        <div class="container">
            <div class="our_people_block_text">
                <div class="left-our_people_block_text">
                    <?php if (!empty($heading)) { ?>
                        <h2><?php echo $heading; ?></h2>
                    <?php } ?>
                </div>
                <div class="right-our_people_block_btn">
                    <a href="#">Featured</a>
                    <a href="#">View all speakers</a>
                </div>
            </div>

            <div class="our-people-member">
                <?php if (!empty($speakers_block)) { ?>
                    <?php foreach ($speakers_block as $speaker) {
                        $image = get_field('image', $speaker->ID);
                        $name = get_field('name', $speaker->ID);
                        $job_title = get_field('job_title', $speaker->ID);
                        $button_text=get_field('button_text',$speaker->ID);
                        
                        ?>

                        <div class="team-member text-center">
                            <?php if (!empty($image)) { ?>
                                <div class="team-img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php if (!empty($name) && !empty($job_title)) { ?>
                                        <div class="overlay">
                                            <div class="team-details text-center">
                                                <h2><?php echo $name; ?></h2>
                                                <p><?php echo $job_title; ?></p>
                                                <div class="socials mt-20">
                                                   
                                                     <button class="btn" onclick="sponPopup('main-img-popup-<?php echo $speaker->ID;?>')"><?php echo $button_text; ?></button>
                                               
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>

                    <?php }
                } ?>
            </div>
        
          <?php if (!empty($speakers_block)) { ?>
        <?php foreach ($speakers_block as $speaker) {
           
            $popup_image = get_field('popup_image', $speaker->ID);
            $popup_heading =get_field('popup_heading', $speaker->ID);
            $popup_job_title = get_field ('popup_job_title',$speaker->ID);
            $bio_description =get_field('bio_description', $speaker->ID);
        ?>
        <div id="main_img_popup" class="main-img-popup-<?php echo $speaker->ID;?>" style="display: none;">
            <div class="container">
                <div id="main_sub_img_popup">
                    <div id="close_popup_spon">
                    <img src="<?php echo site_url();?>/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupClose('main-img-popup-<?php echo $speaker->ID;?>')">
                </div>
                
            <div class="left_img_popup_spon">
                 <?php if (!empty($popup_image)) { ?>
                <img src="<?php echo $popup_image['url']; ?>" alt="<?php echo $popup_image['url']; ?>">
                <?php } ?>
            </div>
            <div class="right_text_popup_spon">
                 <?php if(!empty($popup_heading) && !empty($bio_description)) { ?>
                <h2><?php echo $popup_heading ;?></h2>
                <span class="speaker-job-title"><?php echo $popup_job_title;?></span>
                <?php echo $bio_description;?>
                <?php } ?>
               
            </div>
            
            </div>
            
            </div>
        </div>
        <?php }} ?>
        </div>
    </section>

<?php } ?>

