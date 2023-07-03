<?php if(!empty($section_data)): 
   $show_usp_widget = $section_data['show_usp_widget']; 
    if($show_usp_widget[0] == 'show') {
        $usp_widget = get_field('usp_bar_widget','option');  
            if(!empty($usp_widget)) { 
    
?>
<section id="usp-section">
   <div class="container">
      <div class="usp-section">
        <?php foreach($usp_widget as $usp) { 
            $usp_icon = $usp['usp_icon'];
            $usp_text = $usp['usp_text'];
        ?>
             <div class="usp-items">
                <?php if(!empty($usp_icon)) { ?>
                <div class="usp_logo_items">
                    <img src="<?php echo $usp_icon['url'];?>" alt="<?php echo $usp_icon['alt'];?>"/>
                    </div>
                <?php } if(!empty($usp_text)) { ?>
                    <p><?php echo $usp_text;?></p>
                <?php } ?>
             </div>
        <?php } ?>
      </div>
   </div>
</section>
<?php }  
} endif;?>