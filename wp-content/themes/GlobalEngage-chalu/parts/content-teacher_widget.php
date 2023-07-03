<?php if(!empty($section_data)): 
    $title=$section_data['title'];
   $teacher_block = $section_data['teacher_block'];
?>
<section class="ourpeople">
    <div class="container">
        <?php if(!empty($title)) { ?>
        <h2><?php echo $title;?></h2>
        <?php } ?>
        <div class="our-people-member">
            <?php if(!empty($teacher_block)) { ?>
                <?php foreach($teacher_block as $team) { 
            $image = get_field('image',$team->ID);
            $name = get_field('name',$team->ID);
            $job_title = get_field('job_title',$team->ID);
            $button_text=get_field('button_text',$team->ID);
            $heading=get_field('heading',$team->ID);
            $description=get_field('description',$team->ID);
            $button_label=get_field('button_label',$team->ID);
        ?>
        
        <?php if (!empty($image)) { ?>
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php if (!empty($name) && (!empty($job_title))) { ?>
                                    <div class="overlay">
                                        <div class="team-details text-center">
                                            <h2><?php echo $name; ?></h2>
                                            <p><?php echo $job_title; ?></p>
                                            <div class="socials mt-20">
                                               <button class="btn" onclick="sponPopup('main-img-popup-<?php echo $team->ID;?>')"><?php echo $button_text; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                  
            
<?php }}?>
        
        <?php if (!empty($teacher_block)) { ?>
        <?php foreach ($teacher_block as $team) {
           
            $popup_image = get_field('popup_image', $team->ID);
            $popup_heading =get_field('popup_heading', $team->ID);
            $popup_job_title = get_field ('popup_job_title', $team->ID);
            $bio_description =get_field('bio_description', $team->ID);
        ?>
        <div id="main_img_popup" class="main-img-popup-<?php echo $team->ID;?>" style="display: none;">
            <div class="container">
                <div id="main_sub_img_popup">
                    <div id="close_popup_spon">
                    <img src="<?php echo site_url();?>/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupClose('main-img-popup-<?php echo $team->ID;?>')">
                </div>
                
            <div class="left_img_popup_spon">
                 <?php if (!empty($popup_image)) { ?>
                <img src="<?php echo $popup_image['url']; ?>" alt="<?php echo $popup_image['url']; ?>">
                <?php } ?>
            </div>
            <div class="right_text_popup_spon">
                 <?php if(!empty($popup_heading) && !empty($bio_description)) { ?>
                <h2><?php echo $popup_heading ;?></h2>
                <span class="teacher-job-title"><?php echo $popup_job_title;?></span>
                <?php echo $bio_description;?>
                <?php } ?>
               
            </div>
            
            </div>
            
            </div>
        </div>
        <?php }} ?>
    </div>
    

           
</section>

<?php endif;?>