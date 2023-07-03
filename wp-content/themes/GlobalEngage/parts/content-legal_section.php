<?php if(!empty($section_data)): 
   $legal_block = $section_data['legal_block'];
      if(!empty($legal_block)) { ?>
<section>
    <div class="container" >
   <div class="legal_policy ">
      <?php foreach($legal_block as $legal) { 
         $pages = $legal['pages'];
            if(!empty($pages)) {
               foreach($pages as $page) { 
                  $pagename = $page['page_name_&_url'];
                  $button_text = $pagename['button_label'];
                  $link = $pagename['button_link'];
                  $internal_link = $pagename['internal_link'];
                  $external_link = $pagename['external_link'];
                     if($link == 'internal_link'){
                        $btnurl = $internal_link;
                        $target = '_self';
                     } else {
                        $btnurl = $external_link;
                        $target = '_blank';
                     }
                     
      ?>
      <div class="legal-policy-content">
         <?php if(!empty($button_text)) { ?>
            <h4><?php echo $button_text;?></h4>
         <?php } if(!empty($button_text) && !empty($link)) {?>
           <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>" class="legal_btn">
              Read more
            </a>
         <?php } ?>
         
      </div>
      <hr>
   <?php } } }?>
   </div>
   </div>
</section>
<?php } endif;