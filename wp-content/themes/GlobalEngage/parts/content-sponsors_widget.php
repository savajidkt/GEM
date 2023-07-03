<?php if(!empty($section_data)): 
    $heading=$section_data['heading'];
   $sponsors = $section_data['sponsors'];
?>
<section id="our_sponsors">
    <div class="container">
        <div class="top_head_text_spon">
            <?php if(!empty($heading)) { ?>
        <h2><?php echo $heading;?></h2>
        <?php } ?>
             
        </div>
               
        <div class="main_sponsore_images">
    <?php if (!empty($sponsors)) { ?>
        <?php foreach ($sponsors as $sponsor) {
            $logo = get_field('logo', $sponsor->ID);
        ?>
            <div class="our_ins_img" onclick="sponPopup('main-img-popup-<?php echo $sponsor->ID;?>')">
                <?php if (!empty($logo)) { ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                <?php } ?>
            </div>
        <?php }
    } ?>
</div>
        
        <?php if (!empty($sponsors)) { ?>
        <?php foreach ($sponsors as $sponsor) {
           
            $popup_image = get_field('popup_image', $sponsor->ID);
            $popup_image_link =get_field('popup_image_link',$sponsor->ID );
            $popup_company_name=get_field('popup_company_name', $sponsor->ID);
            $popup_company_description=get_field('popup_company_description', $sponsor->ID);
        ?>
        <div id="main_img_popup" class="main-img-popup-<?php echo $sponsor->ID;?>" style="display: none;">
            <div class="container">
                <div id="main_sub_img_popup">
                    <div id="close_popup_spon">
                    <img src="<?php echo site_url();?>/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupClose('main-img-popup-<?php echo $sponsor->ID;?>')">
                </div>
                
            <div class="left_img_popup_spon">
                 <?php if (!empty($popup_image)) { ?>
                 <a href="<?php echo $popup_image_link; ?>" target="_blank">
                <img src="<?php echo $popup_image['url']; ?>" alt="<?php echo $popup_image['url']; ?>">
                </a>
                <?php } ?>
            </div>
            <div class="right_text_popup_spon">
                 <?php if(!empty($popup_company_name) && !empty($popup_company_description)) { ?>
                <h2><?php echo $popup_company_name;?></h2>
                <?php echo $popup_company_description;?>
                <?php } ?>
               
            </div>
            
            </div>
            
            </div>
        </div>
        <?php }} ?>
        
    </div>
</section>
<?php endif;?>
