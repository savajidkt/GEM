<?php if (!empty($section_data)) :
    $title = $section_data['title'];
    $our_people = $section_data['our_people'];
?>
<style>
    .our-people-member .loadMoreData{ display:none;}
    .our-people-member .our_member_img.text{ display:flex !important;}

</style>

    <section class="ourpeople">
        <div class="container">
            <?php if (!empty($title)) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>
            <div class="our-people-member">
                <?php if (!empty($our_people)) { ?>
                    <?php foreach ($our_people as $people) {
                        $image = get_field('image', $people->ID);
                        $name = get_field('name', $people->ID);
                        $job_title = get_field('job_title', $people->ID);
                        $button_text = get_field('button_text', $people->ID);
                        $join_our_team_heading = get_field('join_our_team_heading', $people->ID);
                        $join_our_team_description = get_field('join_our_team_description', $people->ID);
                        $button = get_field('join_our_team_button', $people->ID);
                        $button_text1 = $button['button_label'];
                        $link = $button['button_link'];
                        $internal_link = $button['internal_link'];
                        $external_link = $button['external_link'];
                        if ($link == 'internal_link') {
                            $btnurl = $internal_link;
                            $target = '_self';
                        } else {
                            $btnurl = $external_link;
                            $target = '_blank';
                        }

                    ?>
                        <?php if (!empty($image)) { ?>
                            
                            
                            <div class="team-member text-center loadMoreData">
                                <div class="team-img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php if (!empty($name) && (!empty($job_title))) { ?>
                                        <div class="overlay">
                                            <div class="team-details text-center">
                                                <h2><?php echo $name; ?></h2>
                                                <p><?php echo $job_title; ?></p>
                                                <div class="socials mt-20">
                                                    <button class="btn" onclick="sponPopup('main-img-popup-<?php echo $people->ID; ?>')"><?php echo $button_text; ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>


                        <?php } ?>
                        <?php if (!empty($join_our_team_heading) && (!empty($join_our_team_description))) { ?>
                            
                            
                            <div class="our_member_img text loadMoreData">
                                <h2><?php echo $join_our_team_heading; ?></h2>
                                <p><?php echo $join_our_team_description; ?></p>
                                <a href="<?php echo $btnurl; ?>" target="<?php echo $target; ?>" class="btn"><?php echo $button_text1; ?></a>
                            </div>


                        <?php } ?>
                    <?php } ?>
                <?php } ?>






                <?php if (!empty($our_people)) { ?>
                    <?php foreach ($our_people as $people) {
                        $popup_image = get_field('popup_image', $people->ID);
                        $popup_heading = get_field('popup_heading', $people->ID);
                        $popup_job_title = get_field('popup_job_title', $people->ID);
                        $bio_description = get_field('bio_description', $people->ID);
                    ?>
                        <div id="main_img_popup" class="main-img-popup-<?php echo $people->ID; ?>" style="display: none;">
                            <div class="container">
                                <div id="main_sub_img_popup">
                                    <div id="close_popup_spon">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupClose('main-img-popup-<?php echo $people->ID; ?>')">
                                    </div>
                                    <div class="left_img_popup_spon">
                                        <?php if (!empty($popup_image)) { ?>
                                            <img src="<?php echo $popup_image['url']; ?>" alt="<?php echo $popup_image['url']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="right_text_popup_spon">
                                        <?php if (!empty($popup_heading) && !empty($bio_description)) { ?>
                                            <h2><?php echo $popup_heading; ?></h2>
                                            <span class="people-job-title"><?php echo $popup_job_title; ?></span>
                                            <?php echo $bio_description; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>


            </div>            
            <div id="aboutloadMore">Load more</div>
    </section>
<?php endif; ?>