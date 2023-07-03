<?php if(!empty($section_data)): 
    $overview_text = $section_data['overview_text'];
    $speakers_text = $section_data['speakers_text'];
    $sponsors_text = $section_data['sponsors_text'];
    $venue_text =$section_data['venue_text'];
    $poster_presentation_text = $section_data['poster_presentation_text'];
    $download_agenda_pdf = $section_data ['download_agenda_pdf'];
    $download_agenda_text = $section_data['download_agenda_text'];
    $book_now_text = $section_data['book_now_text'];
?>
<section class="web_nav_block" id=conference-overview>
    <div class="container">
        <div class="main_btn_web_block" >
            <div class="left_btn_web_block_top" id="mBtnWeb">
                 <?php 
                if ($overview_text || $speakers_text || $sponsors_text ) {
                    echo '<a href="#" class="btn_web-spon btnactive">' . $overview_text . '</a>';
                    if ($speakers_text) {
                        echo '<a href="#our-speakers" class="btn_web-spon">' . $speakers_text . '</a>';
               
                   if ($sponsors_text) {
                    echo '<a href="#conference_sponsor" class="btn_web-spon">' . $sponsors_text . '</a>';
                    }
                     if ($sponsors_text) {
                    echo '<a href="#venue-image-slider-event" class="btn_web-spon">' . $venue_text . '</a>';
                    }
                     if ($sponsors_text) {
                    echo '<a href="#poster_presentation" class="btn_web-spon">' . $poster_presentation_text . '</a>';
                    }
                    }
                }
                    ?>
                
            </div>
            <div class="right_btn_web_block_top" id="mBtnWeb">
               <?php
              if ($download_agenda_text && !empty($download_agenda_text) && $download_agenda_pdf) {
                 echo '<a target="_blank" href="' . $download_agenda_pdf['url'] . '" class="btn_web-spon download_agenda">' . $download_agenda_text . '</a>';
        }
              ?>
                <?php if(!is_user_logged_in()){?>
         
            <a hreft="<?php echo get_field('register_for_free_now_url');?>>" class="btn_web-spon">Register Now</a>
        <?php }elseif(get_post_meta($product_id,'is_free_webinar',true)=='free' && $event_type=='webinar'){?>
            
            <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>" class="btn_web-spon">Register Now</a>
        <?php }else{?>
              <a href="#price-section" class="btn_web-spon"><?php echo $book_now_text;?></a>
        <?php }?>

                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>