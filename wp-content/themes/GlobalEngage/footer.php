<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
  


 <footer>
   <div class="container">
      <div class="footer-top">
        <?php 
        $footer_logo = get_field('footer_logo','option');
        if(!empty($footer_logo)) { ?>
            <div class="footer-logo">
                <a href="<?php echo site_url('/'); ?>">
                    <img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>" />
                </a>
            </div>
        <?php } ?>
        <div class="footer-logo_mobile">
         <h2><?php echo get_bloginfo( 'name' ); ?></h2>
        </div>
         <div class="footer-menu-content">
            <?php 
            $office_address = get_field('office_address','option');
            if(!empty($office_address)) { ?>
                <div class="footer-top-text offices">
                   <h2 class="drop-menu-icon"id="drop-menu-icon1">Our offices</h2>
                   <div>
                   <div class="offices-add" >
                        <?php foreach($office_address as $address) { 
                            $office_address = $address['offices'];
                        ?>
                          <p>
                             <?php echo $office_address;?>
                          </p>
                        <?php } ?>
                   </div>
                   </div>
                </div>
            <?php } ?>
            <div class="footer-top-text helpful">
               <h2 class="drop-menu-icon " id="drop-menu-icon1">Helpful Links</h2>
               <div class="footer-page-link">
                   <?php wp_nav_menu(array('menu'=>'Footer Menu'));?>
               </div>
            </div>
            <div class="mobile_social_media">
            <?php 
            $social_media = get_field('social_media','option');
            if(!empty($social_media)) { ?>
                <div class="social-icon-footer">
                    <?php foreach($social_media as $social) { 
                        $icon = $social['social_media_icon'];
                        $icon_link = $social['social_media_link'];
                        $button = $section_data['button'];
                           $link = $icon_link['button_link'];
                           $internal_link = $icon_link['internal_link'];
                           $external_link = $icon_link['external_link'];
                            if($link == 'internal_link'){
                                $btnurl = $internal_link;
                                $target = '_self';
                            } else {
                                $btnurl = $external_link;
                                $target = '_blank';
                            }
                    ?>
                       <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>">
                           <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>"></a>
                       
                    <?php } ?>
                </div>
            <?php } ?>
            </div>
         </div>
         <div class="footer-top-text join-us">
            <h2>Join our mailing list</h2>
            <div>
               <?php echo do_shortcode('[contact-form-7 id="135" title="Footer Joining Form"]'); ?>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <div class="left-copy-text">
            <h2 class="copy_footer_text_desktop">© <?php echo date('Y');?> - Global Engage - Site Designed & Developed By <a href="https://cda.group/" target="_blank">CDA</a></h2>
            <h2 class="copy_footer_text">© <?php echo date('Y');?> - Global Engage -<br> Site Designed & Developed By <a href="https://cda.group/" target="_blank">CDA</a></h2>
         </div>
         <div class="right-social-icon">
            <?php 
            $social_media = get_field('social_media','option');
            if(!empty($social_media)) { ?>
                <div class="social-icon-footer">
                    <?php foreach($social_media as $social) { 
                        $icon = $social['social_media_icon'];
                        $icon_link = $social['social_media_link'];
                        $button = $section_data['button'];
                           $link = $icon_link['button_link'];
                           $internal_link = $icon_link['internal_link'];
                           $external_link = $icon_link['external_link'];
                            if($link == 'internal_link'){
                                $btnurl = $internal_link;
                                $target = '_self';
                            } else {
                                $btnurl = $external_link;
                                $target = '_blank';
                            }
                    ?>
                       <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>">
                           <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>"></a>
                       
                    <?php } ?>
                </div>
            <?php } ?>
            
            <?php
            $footer_payment_logo = get_field('footer_payment_logos','option');
            if(!empty($footer_payment_logo)) { ?>
            <div class="payment-logo-footer">
                <?php foreach($footer_payment_logo as $payment_logo) { 
                    $logo = $payment_logo['payment_logos']; 
                ?>
                    <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>">
                <?php } ?>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</footer>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Menu
    const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('#menu-main-menu-1')
        toggleBtn.onclick = function(){
            dropDownMenu.classList.toggle('open')
            const isOpen =dropDownMenu.classList.contains('open')
            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
        
        // 
        $(document).ready(function () {
            $(window).bind('scroll', function () {
                var gap = 50;
                if ($(window).scrollTop() > gap) {
                    $('.main-header').addClass('header-fixed');
                    $('.main-header').removeClass('myCls');
        
                } else {
                    $('.main-header').removeClass('header-fixed');
                    $('.main-header').removeClass('myCls');
                }
        
            });


             if(window.matchMedia("(max-width: 767px)").matches){
        
       $('.footer-top-text.offices div:first').css("display", "none");
       $('.footer-top-text.helpful .footer-page-link').css("display", "none");
    }
        
        });
    </script>
    <script>
       
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
      
    }
  });
}

    </script>
    <!--<script src="https://unpkg.com/carbon-components@10.0.0/scripts/carbon-components.min.js"></script>-->
    <script>
var acc = document.getElementsByClassName("panel-heading");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script>
    $(document).ready(function() {
      $('#playButton').click(function() {
        var video = $('#myVideo')[0]; // Get the video element (index 0)
        video.play(); // Play the video
        if(video.play){
           document.getElementById("playButton").style.display = "none";
        }
        else{
             document.getElementById("playButton").style.display = "block";
        }
      });
});
</script>
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--    $('#drop-menu-icon1').click(function() {-->
<!--      $('.offices-add').toggle("slide");-->
        
<!--    });-->
<!--});-->
<!--</script>-->
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--    $('#drop-menu-icon2').click(function() {-->
      
<!--         $('.footer-page-link').toggle("slide");-->
<!--    });-->
<!--});-->
<!--</script>-->
<script>
var accd = document.getElementsByClassName("drop-menu-icon");
var i;

for (i = 0; i < accd.length; i++) {
  accd[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<?php wp_footer(); ?>
<script src='<?=site_url();?>/wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=<?=rand()?>' id='wc-cart-js'></script>



<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
  perPage: 5,
  focus  : 'center',
  pagination : true,
    arrows     : false,
     type    : 'loop',
} );
    splide.mount();
  } );
  
 
</script>

<script>
    $('.filter-item.checkbox').removeClass('disabled');
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js" integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>