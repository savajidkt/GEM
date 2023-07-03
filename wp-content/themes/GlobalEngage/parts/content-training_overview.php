<?php if(!empty($section_data)): 
    $overview_text = $section_data['overview_text'];
    $speakers_text = $section_data['speakers_text'];
    $sponsors_text = $section_data['sponsors_text'];
    $download_agenda_pdf = $section_data ['download_agenda_pdf'];
    $download_agenda_text = $section_data['download_agenda_text'];
    $book_now_text = $section_data['book_now_text'];
?>
<section class="web_nav_block">
    <div class="container">
        <div class="main_btn_web_block" >
            <div class="left_btn_web_block_top" id="mBtnWeb">
                <?php 
                if ($overview_text || $speakers_text || $sponsors_text ) {
                    echo '<a href="#" class="btn_web-spon btnactive">' . $overview_text . '</a>';
                    if ($speakers_text) {
                        echo '<a href="#teacher" class="btn_web-spon">' . $speakers_text . '</a>';
               
                   if ($sponsors_text) {
                    echo '<a href="#" class="btn_web-spon">' . $sponsors_text . '</a>';
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
               
                   <a href="#multibuy-discounts" class="btn_web-spon"><?php echo $book_now_text;?></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>