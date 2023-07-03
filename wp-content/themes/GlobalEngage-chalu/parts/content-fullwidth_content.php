<?php if(!empty($section_data)): 
	$content = $section_data['content'];
	$background_color = $section_data['background_color']; 
?>
<section id="after-oef-text" >
    <div class="container" <?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
        <!--<div class="after-oef-text" >-->
         <?php if(!empty($content)) { ?>
        <div class="after-breadcrumb-text">
           <?php echo $content;?> 
         </div>
        <?php } ?>
       <!--</div>-->
        
    </div>
</section>

<?php endif;?>



