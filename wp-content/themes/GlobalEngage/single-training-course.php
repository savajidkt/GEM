<?php
$product_id = $post->ID;
global $product;
$banner_title = get_field('banner_title',$post->ID);

$content = get_field('content',$post->ID);

?>

<div class="container site_banner_text">

    <div class="header-banner-text">
        <div class="banner_section_text_desc_data">
            <?php if(!empty($banner_title)) { ?>
            <h2>
                <?php echo $banner_title;?>
            </h2>

            <?php } else { ?>

            <h2>
                <?php the_title();?>
            </h2>

            <?php } ?>

            <p>
                <?php echo $content; ?>
            </p>
            <div class="p_i_s_i_banner">
                <ul>
                    <li>Location:</li>
                    <li><?php echo get_post_meta($product_id,'WooCommerceEventsLocation',true);?></li>
                </ul>
                <ul>
                    <li>Date:</li>
                    <li><?php echo get_post_meta($product_id,'WooCommerceEventsDate',true);?></li>
                </ul>
                <ul>
                    <li>Price:</li>
                    <li><?php echo wc_price($product->get_regular_price());?> <?php echo wc_price($product->get_price());?></li>
                </ul>
            </div>

        </div>
        <div class="banner_product_items_block">
            <a href="<?php echo get_field('download_agenda_pdf');?>"><button class="btn_color">Download agenda</button></a>
            <a href="#"><button class="without_btn_color">Register for free now</button></a>

        </div>

    </div>

</div>



<section id="breadcrumb">
        <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/');?>"><strong>Home</strong></a></li>
            <storng>/</storng>
            <li><a href="<?php echo get_permalink();?>">
                    <?php the_title();?>
                </a></li>
        </ul>
    </div>
</section>
<!--<section id="after-oef-text">-->
<!--    <div class="container" style="background-color: #fffffff;">-->
       
<!--           <div class="after-breadcrumb-text">-->
<!--           <?php //the_content();?>-->
<!--           </div>-->
              
        
<!--    </div>-->
<!--</section>-->

<!--usp section-->

<!--<section id="usp-section">-->
<!--        <div class="container">-->
            
<!--            <div class="usp-section">-->
<!--                 <div class="usp-items">-->
<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/usp.png" alt="icon"/>-->
<!--                     <p><span>20+ Years</span>Of Producing Events</p>-->
<!--                 </div>-->
<!--                 <div class="usp-items">-->
<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/usp.png" alt="icon"/>-->
<!--                     <p><span>20+ Years</span>Of Producing Events</p>-->
<!--                 </div>-->
<!--                 <div class="usp-items">-->
<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/usp.png" alt="icon"/>-->
<!--                     <p><span>20+ Years</span>Of Producing Events</p>-->
<!--                 </div>-->
<!--                 <div class="usp-items">-->
<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/usp.png" alt="icon"/>-->
<!--                     <p><span>20+ Years</span>Of Producing Events</p>-->
<!--                 </div>-->
<!--            </div>-->
<!--        </div>-->
<!--</section>-->
<!--end -->

<!--<section id="wbs">-->
<!--    <div class="container">-->
<!--        <div class="wbs-main-text">-->
<!--                    <h2>Key Topics Covered</h2>-->
<!--                  <div class="wbs-row">-->
                             
<!--            <div class="wbs-item-block">-->
<!--                                      <div class="wbs-block">-->
<!--                      <h2>-->
<!--                         01 -->
<!--                      </h2>-->
<!--                      <p>-->
<!--                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  -->
<!--                      </p>-->
<!--                  </div>-->
<!--                              </div>-->
                            
<!--            <div class="wbs-item-block">-->
<!--                                      <div class="wbs-block">-->
<!--                      <h2>-->
<!--                         02 -->
<!--                      </h2>-->
<!--                      <p>-->
<!--                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  -->
<!--                      </p>-->
<!--                  </div>-->
<!--                              </div>-->
                            
<!--            <div class="wbs-item-block">-->
<!--                                      <div class="wbs-block">-->
<!--                      <h2>-->
<!--                         03 -->
<!--                      </h2>-->
<!--                      <p>-->
<!--                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  -->
<!--                      </p>-->
<!--                  </div>-->
<!--                              </div>-->
<!--                         </div>-->
<!--            <div class="wbs-button">-->
<!--                         </div>-->
            
            
           
<!--        </div>-->
        
<!--    </div>-->
<!--</section>-->


<!--slider-->
<!--<section class="featured_event_slider">-->
<!--    <div class=" container">-->
<!--    <div class="featured_event_slider_content">-->
<!--        <div class="featured_event_slider_image">-->
<!--            <div class="event-slider-block">-->
// <!--           
<!--                //$attachment_ids = $product->get_gallery_image_ids();-->
                
<!--                //foreach( $attachment_ids as $attachment_id ) {-->
<!--                   // $image_link = wp_get_attachment_url( $attachment_id );?>-->
<!--                    <img src="<?=$image_link;?>" alt="fusion" />-->

<!--                //} ?>-->
                
<!--            </div>-->
<!--        </div>-->
<!--        <div class="featured_event_slider_text">-->
<!--            <h3><?php the_title();?></h3>-->
<!--            <p class="event-sub-text"><?php the_excerpt();?></p>-->
<!--            <div class="featured_event_slider_button">-->
<!--                <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>" class="conference-btn">Book Now</a>-->
<!--                <a hreft="#"><p class="view_events">View all events</p></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--</section>-->


<!--end-->

<!--<section class="featured_event_slider smb-section">-->
<!--    <div class=" container">-->
<!--    <div class="featured_event_slider_content">-->
<!--                <div class="featured_event_slider_text">-->
<!--                            <h3>Multibuy Discounts available</h3>-->
<!--                            <p>Buy 2 places pay £275.99</p>-->
<!--                             <p>Buy 5 places pay £150.99</p>-->

<!--                        <div class="featured_event_slider_button">-->
<!--                <a href="" target="_self" class="btn">Book now</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="featured_event_slider_image">-->
<!--                            <div class="event-slider-blocks">-->
<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/05/national-cancer-institute-uVnRa6mOLOM-unsplash.png" alt="">-->
<!--                </div>-->
<!--                    </div>-->
       
<!--    </div>-->
<!--    </div>-->
    
<!--</section>-->


<!---->
<!--<section class="sign-up-block">-->
<!--    <div class="container">-->
<!--        <div class="form-single-line">-->
<!--            <h2>sign up & stay informed</h2>-->
<!--            <?php echo do_shortcode( '[contact-form-7 id="63" title="Contact form 1"]' );?>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!---->

<!--slider-->
<!--<section class="featured_event_slider">-->
<!--    <div class=" container">-->
<!--    <div class="featured_event_slider_content">-->
<!--        <div class="featured_event_slider_image">-->
<!--            <div class="event-slider-block">-->
<!--                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/05/Screenshot-2023-01-25-at-11.50.03.png" alt="fusion" />-->
<!--                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/05/Screenshot-2023-01-25-at-11.50.03.png" alt="fusion" />-->
<!--                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/05/Screenshot-2023-01-25-at-11.50.03.png" alt="fusion" />-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="featured_event_slider_text">-->
<!--            <h3>Featured Event Title goes here or on two lines</h3>-->
<!--            <p class="event-sub-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod-->
<!--                tempor invidunt ut labore et dolore magna aliquyam</p>-->
<!--            <div class="featured_event_slider_button">-->
<!--                <button class="btn">Find out more</button>-->
<!--                <a hreft="#"><p class="view_events">View all events</p></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--</section>-->

<?php get_footer();?>
