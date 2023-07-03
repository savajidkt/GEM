<?php if(!empty($section_data)): 
   
   $heading = $section_data['heading'];
   $description = $section_data['description'];
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

    $fullwidth_video_section = $section_data['fullwidth_video_section'];
    $video_thumbnail_for_desktop = $section_data['video_thumbnail_for_desktop']; 
    $video_thumbnail_for_mobile = $section_data['video_thumbnail_for_mobile'];
    
?>
<section class="video-hal">
   <div class="container">
        <?php if($fullwidth_video_section == 'upload') { 
            $file_upload = $section_data['file_upload'];
        ?>
            <div class="video-wrapper">
                 <video id="myVideo" src="<?php echo $file_upload['url'];?>"
                    poster="<?php echo $video_thumbnail_for_desktop['url'];?>"  controls></video>
                     <button id="playButton"><img src="https://gemain.cda-development3.co.uk/wp-content/themes/GlobalEngage/images/Polygon 1.svg" alt="icon"></button>
            </div>
        <?php } else {
                $video_type = $section_data['video_type']; 
                $video_id = $section_data['video_id']; //print_r( $video_id);

                    if($video_type == 'youtube') {
                        $videourl ='https://www.youtube.com/embed/'.$video_id;
                    } else {
                        $videourl ='https://player.vimeo.com/video/'.$video_id;
                    } ?>

                    <iframe class="video-add__video" src="<?php echo $videourl;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php } ?>

      <div class="video-bottom-text">
        <?php if(!empty($heading)) { ?>
           <h2><?php echo $heading;?></h2>
        <?php } if(!empty($description)) { 
            echo $description;
        } ?>
         <div class="two-btn-video">
            <?php if(!empty($button_text) && !empty($link)) { ?>
                <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>" class="btn"><?php echo $button_text;?></a>
            <?php } if(!empty($button_text2) && !empty($link2)) {?>
                <a href="<?php echo $btnurl2;?>" target="<?php echo $target2;?>"><?php echo $button_text2;?></a>
            <?php } ?>
         </div>
      </div>
   </div>
</section>
<?php endif;?>