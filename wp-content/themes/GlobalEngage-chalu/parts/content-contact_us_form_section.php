<?php if(!empty($section_data)): 
	$image = $section_data['image'];
	$enable_contact_form = $section_data['enable_contact_form'];
?>
<section id="cont-block">
    
    <div class="container">
        <div class="main-count-block">
          <?php  if($enable_contact_form[0]=='enable')  { ?>
            <div class="left-cont-data">
                <h2>Contact Us</h2>
                <?php echo do_shortcode('[contact-form-7 id="171" title="Contact Us"]'); ?>
            </div>
            <?php } if(!empty($image)) { ?>
            <div class="right-img-cont-data">
                <img src="<?php echo $image['url'];?>" alt='img'>
            </div>
            <?php } ?>
        </div>
        
    </div>
    
</section>
<?php endif; ?>
