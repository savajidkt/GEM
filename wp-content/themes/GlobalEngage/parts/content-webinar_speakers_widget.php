<?php
if (!empty($section_data)) :
     $heading = $section_data['heading'];
     $button_text = $section_data['button_text'];
     
    ?>
<section id="webinar_speakers">
    <div class="container">
        <div class="speaker_container">
            <div class="speaker_top">
                <div class="left-our_people_block_text">
                    <h2><?php echo $heading; ?></h2>
                </div>
                <div class="btn_group tab">
                    <?php
                    $args = array(
                    'taxonomy' =>'speaker-type', 
                    'orderby' => 'term_id', 
                    'order' => 'asc', 
                    'hide_empty' => 0, 
                    'hierarchical' => 1, ); 
                    $types = get_terms($args);
                    $types_count = count($types);
                    $i = 0; 
                    foreach ($types as $type) { $i++; ?>
                    <button class="btn <?php echo ($i == 1) ? 'active triggerClick' : '' ?>" onclick="clickHandle(event, '<?php echo 'tab_' . $type->term_id; ?>')"><?php echo $type->name; ?></button>
                    <?php
                    }
                    ?>
                    <button class="speakerslink custom_new_button_secondary" onclick="clickHandle(event, 'tab_all')"><?php echo $button_text; ?></button>
                </div>
            </div>
            <div class="Speakers">
                <div class="Speakers_section">
                    <?php
                    $j = 1;
                    foreach ($types as $spe_type) { ?>
                    <div id="<?php echo 'tab_' . $spe_type->term_id; ?>" class="speakers_tab" style="display:<?php echo ($j == 1) ? 'block' : 'none'  ?>;">
                        <div class="our-people-member">
                            <?php
                                $tax_query = array(
                            'relation' =>'AND',
                            array( 
                            'taxonomy' => 'speaker-type', 
                            'field' => 'slug', 
                            'terms' => $spe_type->slug ) ); 
                            $args = array( 
                            'post_type' => 'speakers', 
                            'orderby' => 'ID', 
                            'order' => 'DESC', 
                            'posts_per_page' => 4, 
                            'tax_query' =>$tax_query ); 
                            $sposts = new WP_Query($args); 
                            if ($sposts->have_posts()) {
                            while ($sposts->have_posts()) : $sposts->the_post(); 
                            $speaker_id = $post->ID; 
                            $image = get_field('image', $speaker_id); 
                            $name = get_field('name', $speaker_id); 
                            $job_title = get_field('job_title', $speaker_id); 
                            $button_text = get_field('button_text', $speaker_id); 
                            $featured_speaker = get_field('featured_speaker', $speaker_id); ?>

                            <div class="speakers-member text-center loadMoreDataA">
                                <?php if (isset($image['url']) && strlen($image['url']) >
                                0) { ?>
                                <div class="team-img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php if (!empty($name) && !empty($job_title)) { ?>
                                    <div class="overlay">
                                        <div class="team-details text-center">
                                            <h2><?php echo $name; ?></h2>
                                            <p><?php echo $job_title; ?></p>
                                            <div class="socials mt-20">
                                                <button class="btn" onclick="sponPopups('main-img-popups-<?php echo $speaker_id; ?>')"><?php echo $button_text; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                            </div>

                            <?php
                                     
                                    endwhile;
                                    wp_reset_query();
                                }
                                ?>
                        </div>
                    </div>
                    <?php $j++;
                    } ?>
                    <div id="tab_all" class="speakers_tab" style="display: none;">
                        <div class="our-people-member">
                            <?php
                            $args = array(
                                'post_type' =>'speakers',
                                'orderby' => 'ID', 
                                'order' => 'DESC', 
                                'posts_per_page' => -1 ); 
                            $sposts = new WP_Query($args); 
                            if ($sposts->have_posts()) { 
                                while ($sposts->have_posts()) : $sposts->the_post(); 
                            $speaker_id = $post->ID; 
                            $image = get_field('image', $speaker_id); 
                            $name = get_field('name', $speaker_id); 
                            $job_title = get_field('job_title', $speaker_id); 
                            $button_text = get_field('button_text', $speaker_id);
                            $featured_speaker = get_field('featured_speaker', $speaker_id); ?>

                            <div class="speakers-member text-center loadMoreDataA">
                                <?php if (isset($image['url']) && strlen($image['url']) >
                                0) { ?>
                                <div class="team-img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php if (!empty($name) && !empty($job_title)) { ?>
                                    <div class="overlay">
                                        <div class="team-details text-center">
                                            <h2><?php echo $name; ?></h2>
                                            <p><?php echo $job_title; ?></p>
                                            <div class="socials mt-20">
                                                <button class="btn" onclick="sponPopups()"><?php echo $button_text; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                            </div>

                            <?php
                                endwhile;
                                wp_reset_query();
                            }
                            ?>
                        </div>
                    </div>
                 <?php
$args = array(
    'post_type' => 'speakers',
    'orderby' => 'ID',
    'order' => 'DESC',
    'posts_per_page' => -1
);
$sposts = new WP_Query($args);
if ($sposts->have_posts()) {
    while ($sposts->have_posts()) : $sposts->the_post();
        $speaker_id = $post->ID;
        $image = get_field('image', $speaker_id);
        $name = get_field('name', $speaker_id);
        $job_title = get_field('job_title', $speaker_id);
        $button_text = get_field('button_text', $speaker_id);
        $featured_speaker = get_field('featured_speaker', $speaker_id);
        $popup_image = get_field('popup_image', $speaker_id);
        $popup_heading = get_field('popup_heading', $speaker_id);
        $popup_job_title = get_field('popup_job_title', $speaker_id);
        $bio_description = get_field('bio_description', $speaker_id);
?>
        <div class="speakers-member text-center loadMoreDataA">
            <?php if (isset($image['url']) && strlen($image['url']) > 0) { ?>
                <div class="team-img">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php if (!empty($name) && !empty($job_title)) { ?>
                        <div class="overlay">
                            <div class="team-details text-center">
                                <h2><?php echo $name; ?></h2>
                                <p><?php echo $job_title; ?></p>
                                <div class="socials mt-20">
                                    <button class="btn" onclick="sponPopups('<?php echo $speaker_id; ?>')"><?php echo $button_text; ?></button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

        <div id="main_img_popup_sp" class="main-img-popups-<?php echo $speaker_id; ?>" style="display: none;">
            <div class="container">
                <div id="main_sub_img_popup">
                    <div id="close_popup_spon">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupsClose('main-img-popups-<?php echo $speaker_id; ?>')" />
                    </div>
                    <div class="left_img_popup_spon">
                        <?php if (!empty($popup_image)) { ?>
                            <img src="<?php echo $popup_image; ?>" alt="<?php echo $popup_image['url']; ?>" />
                        <?php } ?>
                    </div>
                    <div class="right_text_popup_spon">
                        <?php if (!empty($popup_heading) && !empty($bio_description)) { ?>
                            <h2><?php echo $popup_heading; ?></h2>
                            <span class="speaker-job-title"><?php echo $popup_job_title; ?></span>
                            <?php echo $bio_description; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_query();
}
?>

                    
                   
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function sponPopups() {
  document.getElementById("main_img_popup_sp").style.display = "block";
 
}
function sponPopupsClose() {
  
  document.getElementById("main_img_popup_sp").style.display = "none";
}
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Trigger click on the first speaker type button to show initial speakers
        document.querySelector(".triggerClick").click();
    });

    function clickHandle(evt, tabName) {
        let i, speakers_tab, speakerslink;

        // This is to clear the previous clicked content.
        speakers_tab = document.getElementsByClassName("speakers_tab");
        for (i = 0; i < speakers_tab.length; i++) {
            speakers_tab[i].style.display = "none";
        }

        // Set the tab to be "active".
        speakerslink = document.getElementsByClassName("speakerslink");
        for (i = 0; i < speakerslink.length; i++) {
            speakerslink[i].classList.remove("active");
        }

        // Display the clicked tab and set it to active.
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }
</script>
<?php endif;?>