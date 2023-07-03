<?php
/*
Template Name: Training Course Landing Page
*/
get_header();?>




<?php

$banner_title = get_field('banner_title',$post->ID);

$content = get_field('content',$post->ID);

?>

<div class="container site_banner_text tr">

    <div class="header-banner-text traning_block">
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
                            <li></li>
                    </ul>
                     <ul>
                         <li>Location:</li>
                            <li></li>
                    </ul>
                     <ul>
                         <li>Location:</li>
                            <li></li>
                    </ul>
                 </div>
                
        </div>
        <div class="banner_product_items_block">
            <a href="#"><button class="btn_color" id="btnOpenForm">Download agenda</button></a>
             <a href="#"><button class="without_btn_color">Register for free now</button></a>
            
        </div>

    </div>

</div>

<div class="form-popup-bg">
    <div class="container">
  <div class="form-container">
    <span id="btnCloseForm" class="close-button">X</span>
    <h3>Please enter your details to access this resource</h3>
    <form action="" class="book-popup-form">
        <div class="book_top_tag_popup">
             <div class="form-group">
                <input type="text" class="form-control" placeholder="First name*" required/>
              </div>
               <div class="form-group">
                <input type="text" class="form-control" placeholder="Last name*" required/>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Job title*" required/>
              </div>
        </div>
       <div class="col_data_popup">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Company*" required//>
              </div>
              <div class="form-group">
                <input class="form-control" type="tel" id="phone" name="phone" placeholder="Telephone number*"
          pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
              </div>
       </div>
       
        <div class="col_data_popup">
            <div class="form-group">
                <input class="form-control" type="email" placeholder="Email address*"/>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" placeholder="Country*"/>
              </div>
        </div>
     
      
       <input type="submit" class="btn_color">
     
    </form>
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


<?php
    $orders = get_field('section_order');
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
?>
<!--<section id="after-oef-text">-->
<!--    <div class="container" style="background-color: #fffffff;">-->
       
<!--                 <div class="after-breadcrumb-text">-->
<!--           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>-->
<!--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor.</p>-->
 
<!--         </div>-->
              
        
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
<!--                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/fusion-medical-animation-EAgGqOiDDMg-unsplash.png" alt="fusion" />-->
<!--                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/fusion-medical-animation-EAgGqOiDDMg-unsplash.png" alt="fusion" />-->
<!--                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/fusion-medical-animation-EAgGqOiDDMg-unsplash.png" alt="fusion" />-->
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
<!--            <?php //echo do_shortcode( '[contact-form-7 id="63" title="Contact form 1"]' );?>-->
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


<!--end-->

<script>
    function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });

</script>


<?php get_footer();?>






