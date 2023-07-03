<?php if(!empty($section_data)): 
   $background_image_or_video = $section_data['background_image_or_video'];
    if($background_image_or_video == 'image') {
        $banner_section = $section_data['banner_image'];
    
?>
  
<!--slider header home page-->
<?php if(!empty($banner_section)) { ?>
<div class="bg-img-header-slider">
   <div class="header-slider">
    <?php foreach($banner_section as $banner) { 
        $image = $banner['image'];
        $text = $banner['text'];
        $button = $banner['button'];
        $button_text = $banner['button_label'];
        $link = $banner['button_link'];
           $internal_link = $banner['internal_link'];
           $external_link = $banner['external_link'];
            if($link == 'internal_link'){
                $btnurl = $internal_link;
                $target = '_self';
            } else {
                $btnurl = $external_link;
                $target = '_blank';
            }
    ?>
      <div class="my-carousel-item">
        <?php if(!empty($image)) { ?>
         <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
        <?php } ?>
         <div class="container ">
            <div class="banner-text-slider">
               <?php if(!empty($text)) { echo  $text; } ?>
               <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>"><button><?php echo $button_text;?></button></a>
            </div>
         </div>
      </div>
    <?php } ?>
      
   </div>
</div>
<?php }  //Slider Section ends

} else { // Video section starts
        
    $video_section = $section_data['video_section'];  //print_r($section_data); die;
            if($video_section == 'upload') {
                $file_upload = $section_data['file_upload']; ?>
                <div class="header-video-banner bg-video-wrap">
                    <video src="<?php echo $file_upload['url'];?>" loop muted autoplay></video>
                </div>

            <?php } else {
                $video_type = $section_data['external_url_option']; 
                $video_id = $section_data['video_url']; //print_r( $video_id);

                    if($video_type == 'youtube') {
                        $videourl ='https://www.youtube.com/embed/'.$video_id;
                    } else {
                        $videourl ='https://player.vimeo.com/video/'.$video_id;
                    } ?>

                    <iframe  class="video-add__video" src="<?php echo $videourl;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php } 
        
    }?>


        <!--close slider-->
        <!--header-video banner-->
        <!--<div class="header-video-banner bg-video-wrap">-->
        <!--     <video src="https://designsupply-web.com/samplecontent/vender/codepen/20181014.mp4" loop muted autoplay></video>-->
        <!--</div>-->
<?php endif;?>