<?php if(!empty($section_data)): 
    $background_color = $section_data['background_color'];
    $image = $section_data['image'];
    $heading = $section_data['heading'];
    $description = $section_data['description'];

?>

<section class="our_commitment_block">
    <div class="container">
        <div class="img_text_block_our_commitment">
            <div class="left_our_commitment_img">
                <?php if(!empty($image)) { ?>
                <div class="img_our_commitment">
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                </div>
               <?php } ?>
            </div>
            
             <div class="right_our_commitment_img" <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
                 <div class="text_right_our_commitment">
                     <?php if(!empty($heading) && !empty($description)) { ?>
                     <h2><?php echo $heading;?> </h2>
                     <?php echo $description;?>
                     <?php }?>
                 </div>
            </div>
        </div>
        
    </div>
</section>
<?php endif;?>