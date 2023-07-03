<?php if(!empty($section_data)): 
    $heading = $section_data['heading'];
    $our_event = $section_data['our_event'];
?>
<section class="our-event-fild-block">
   <div class="container">
    <?php if(!empty($heading)) { ?>
      <h2><?php echo $heading;?></h2>
    <?php } if(!empty($our_event)) { ?>
      <div class="event-item-img-text">
        <?php foreach($our_event as $event) { 
            $bg_img = $event['background_image'];
            $event_type = $event['event_type']; //print_r($event_type);
            $event_text = $event_type['event_label'];
            $link = $event_type['event_link'];
               $internal_link = $event_type['internal_link'];
             
        ?>
         <div class="img-text">
            <?php if(!empty($bg_img)) { ?>
              <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>?yith_wcan=1&continent=<?php echo $internal_link->slug;?>">
                <img src="<?php echo $bg_img['url'];?>" alt="<?php echo $bg_img['alt'];?>">
                 </a>
            <?php } ?>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>?yith_wcan=1&continent=<?php echo $internal_link->slug;?>">
               <h2><?php echo $event_text;?></h2>
            </a>
         </div>
        <?php } ?>    
      </div>
    <?php } ?> 
   </div>
</section>
<?php endif;?>