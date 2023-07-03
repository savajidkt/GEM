<?php if(!empty($section_data)): 

	$title = $section_data['title'];

	$button1 = $section_data['button_1'];

        $button_text = $button1['button_label'];

        $link = $button1['button_link'];

           $internal_link = $button1['internal_link'];

           $external_link = $button1['external_link'];

            if($link == 'internal_link'){

                $btnurl = $internal_link;

                $target = '_self';

            } else {

                $btnurl = $external_link;

                $target = '_blank';

            }

    $button2 = $section_data['button_2'];

        $button_text2 = $button2['button_label'];

        $link2 = $button2['button_link'];

           $internal_link2 = $button2['internal_link'];

           $external_link2 = $button2['external_link'];

            if($link2 == 'internal_link'){

                $btnurl2 = $internal_link2;

                $target2 = '_self';

            } else {

                $btnurl2 = $external_link2;

                $target2 = '_blank';

            }

	$slider_images = $section_data['slider_images'];

?>

<section>

        <div class="gallery_title container">

            <div class="gallery_title_content">

                <?php if(!empty($title)) { ?>

                <div>

                    <h3><?php echo $title;?></h3>

                </div>

                <?php } ?>

                <div class="gallery-left-btn">

                    <!--<a href="#" class="btn new-btn gal-btn">Enquire now</a>-->

                     <?php if(!empty($button_text) && !empty($link)) { ?>

                        <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>" class="btn new-btn gal-btn"><?php echo $button_text;?></a>

                    <?php } if(!empty($button_text2) && !empty($link2)) {?>

                        <a href="<?php echo $btnurl2;?>" target="<?php echo $target2;?>" class="new-btn btn-x gal-web"><?php echo $button_text2;?></a>

                    <?php } ?>

                </div>

            </div>

            

            <div class="gallery-slider image-slider">

             <?php foreach($slider_images as $image) { 

                        $img = $image['image'];

                        //if(!empty($img)) { 

                    ?>

                <div>

                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" />

                </div>

                <?php  }?>

              </div>

                  

        </div>

    </section>

<?php endif;?>