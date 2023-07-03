<?php if(!empty($section_data)):
    $contact_form_title = $section_data['contact_form_title'];
    $form_shortcode = $section_data['form_shortcode'];
    $office_addresses = $section_data['office_addresses'];
    ?>
<section id="contact_us_page">

    <div class="container">

         <div class="main-count-block_page">
            <?php if(!empty($contact_form_title) && !empty($form_shortcode)) { ?>
            <div class="left-cont-data cont_bg_color">
                <h2><?php echo $contact_form_title;?></h2>
                <?php echo do_shortcode($form_shortcode); ?>
            </div>

            <?php } if(!empty($office_addresses)) { ?>

            <div class="right-text-cont-data">
                <?php foreach($office_addresses as $address) { 
                     $location_heading = $address['location_heading'];
                      $phone_number = $address['phone_number'];
                       $email_address = $address['email_address'];
                        $address= $address['address'];
                     ?>
                <div class="cont_add_info_block">
                     <?php if(!empty($location_heading)) { ?>
                    <h2><?php echo $location_heading;?></h2>
                    <?php } ?>
                    <ul>
                        <div class="info_cont_pg">
                             <?php if(!empty($phone_number)) { ?>
                            <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/call.svg" alt="logo"></li>
                            <li><p>Phone:</p>
                        </div>
                        <li><p> <a href="tel:123-456-7890"><?php echo $phone_number;?></a></p></li>
                        <?php } ?>
                    </ul>

                    <ul>

                        <div class="info_cont_pg">
                         <?php if(!empty($email_address)) { ?>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/mail.svg" alt="logo"></li>

                        <li><p>Email:</p>

                        </div>

                        <li><p><a href="mailto:info@globalengage.co.uk"><?php echo $email_address;?></a></p></li>
                        <?php } ?>
                    </ul>

                    <ul>

                        <div class="info_cont_pg">
                         <?php if(!empty($address)) { ?>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/location.svg" alt="logo"></li>

                        <li><p>Location:</p>

                        </div>

                        <li><p><?php echo $address;?></p></li>
                        <?php } ?>
                    </ul>

                    

                </div>

                <hr>

               

                 
                <?php } ?>
                <div class="blog-title-goes-here-left-sub-content">

                        <div class="blog-title-social-icons">
                        <?php //echo do_shortcode('[Sassy_Social_Share]'); ?>
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-4.svg" alt=""></a>

                            <a target="_blank" href="https://twitter.com/lifesciences_GE"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-1.svg" alt=""></a>

                            <a target="_blank" href="https://www.linkedin.com/company/global-engage-ltd-/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Exclusion 2.svg" alt=""></a>

                            <a target="_blank" href="https://www.youtube.com/user/GlobalEngageTV"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 1802.svg" alt=""></a>

                            

                        </div>

                    </div>
            </div>

           
        <?php } ?>
        </div>

    </div>

   

</section>
<?php endif; ?>