<?php
/*
Template Name: Demo
*/
get_header(); ?>
<style>
.sub_event_slider_post {
    display: grid !important;
    grid-template-columns: repeat(2,1fr);
    align-items: center;
}
.f_e_slider_image {
    width: min(803px,100%);
}
.left_f_e_slider_text h3{
    font-size: 40px;
    font-weight: bold;
    line-height: 70px;
    font-style: normal;
    text-align: left;
    color: #333333;
    max-width: 606px;
    width: 100%;
    margin-bottom: 30px;
}
.left_f_e_slider_text p{
    font-size: 17px;
   color: #333333;
   
}
.left_f_e_slider_text {
    margin-left: 20%;
}
.main_event_slider_post .slick-dots {
    background-color: #fff;
    position: absolute;
    bottom: -40px;
    width: 100%;
    padding: 0;
    list-style: none;
    text-align: center;
    max-width: 250px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    left: 25%;
    padding: 10px 0;
    transform: translate(-50%, -50%);
}
.main_event_slider_post li.slick-active {
    background-color: #333333;
    width: 18px;
    height: 18px;
    border-radius: 50px;
}
.main_event_slider_post .slick-dots li button {
    font-size: 0;
    line-height: 0;
    display: block;
    width: 18px !important;
    height: 18px;
    cursor: pointer;
    border: 1px solid #333333;
    outline: none;
    border-radius: 50px;
    background: transparent !important;
}
</style>
<section>
    
        <div class="container">
             <div class="main_event_slider_post">
                  <div class="sub_event_slider_post">
                                 <div class="f_e_slider_image">
                                     <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/fusion-medical-animation-EAgGqOiDDMg-unsplash.png" alt="fusion" />
                                 </div>
                                 <div class="left_f_e_slider_text">
                                     <h3>Featured Event Title goes here or on two lines</h3>
                                        <p class="event-sub-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam</p>
                                        <div class="featured_event_slider_button">
                                            <a class="btn">Find out more</a>
                                            <a hreft="#"><p class="view_events">View all events</p></a>
                                         </div>
                                 </div>
                    </div>
                    <div class="sub_event_slider_post">
                                 <div class="f_e_slider_image">
                                     <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/fusion-medical-animation-EAgGqOiDDMg-unsplash.png" alt="fusion" />
                                 </div>
                                 <div class="left_f_e_slider_text">
                                     <h3>Featured Event Title goes here or on two lines</h3>
                                        <p class="event-sub-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam</p>
                                        <div class="featured_event_slider_button">
                                            <a class="btn">Find out more</a>
                                            <a hreft="#"><p class="view_events">View all events</p></a>
                                         </div>
                                 </div>
                    </div>
                    <div class="sub_event_slider_post">
                                 <div class="f_e_slider_image">
                                     <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/fusion-medical-animation-EAgGqOiDDMg-unsplash.png" alt="fusion" />
                                 </div>
                                 <div class="left_f_e_slider_text">
                                     <h3>Featured Event Title goes here or on two lines</h3>
                                        <p class="event-sub-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam</p>
                                        <div class="featured_event_slider_button">
                                            <a class="btn">Find out more</a>
                                            <a hreft="#"><p class="view_events">View all events</p></a>
                                         </div>
                                 </div>
                    </div>
    
               </div>
        </div>
    
</section>

<script>
    jQuery(function ($) {
    jQuery(document).ready(function () {
        jQuery('.main_event_slider_post').slick({
            slidesToShow: 1,
            arrows: false,
            dots: true,
            speed: 300,
            infinite: true,
            autoplaySpeed: 2000,
            autoplay: false,
        });
    });
});
</script>





<!--webinars-->

<style>
  .main_web_timetable {
    display: grid;
    background-color: #EAEAEA;
    grid-template-columns: repeat(2,1fr);
}
.time_table_data_text ul{
    display: flex;
    align-items: center;
    gap: 20px;
    list-style: none;
    padding: 0;
    margin: 0;
}
.left_side_text_web_timetable {
    padding: 50px;
}
.left_side_text_web_timetable h2{
    font-size: 40px;
    line-height: 70px;
    color: #333333;
    margin-bottom: 30px;
}
.left_side_text_web_timetable + p{
   font-size: 40px;
    line-height: 70px;
    color: #333333;
    margin-bottom: 30px;
}
li.time-wb {
    font-size: 17px;
    line-height: 34px;
    color: #333333;
}
li.time-wb_text {
   font-size: 25px;
    color: #333333;
    font-weight: 400;
}
li.sub_text_time_data {
    font-size: 17px;
    color: #333333;
}
li.time-wb_vis_hid {
    visibility: hidden;
}
 
</style>

<section>
    <div class="container">
        <div class="main_web_timetable">
            <div class="left_side_text_web_timetable">
                <h2>
                    Basic Timetable
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                
                <div class="time_table_data_text">
                    <ul>
                        <li class="time-wb">9:00</li>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Ellipse-56.svg" alt="icon"></li>
                        <li class="time-wb_text">ILSI Europe Live Presentation</li>
                    </ul>
                    <ul>
                        <li class="time-wb_vis_hid">9:00</li>
                        <li  class="sub_img_time_data"><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Line-85.svg" alt="icon"></li>
                        <li class="sub_text_time_data">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</li>
                    </ul>
                    <ul>
                        <li class="time-wb">9:05</li>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Ellipse-56.svg" alt="icon"></li>
                        <li class="time-wb_text">Recorded Pitches (Gut Microbiome Cluster)</li>
                    </ul>
                     <ul>
                        <li class="time-wb_vis_hid">9:00</li>
                        <li  class="sub_img_time_data"><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Line-85.svg" alt="icon"></li>
                        <li class="sub_text_time_data">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</li>
                    </ul>
                     <ul>
                        <li class="time-wb">9:30</li>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Ellipse-56.svg" alt="icon"></li>
                        <li class="time-wb_text">Q&A</li>
                    </ul>
                      <ul>
                        <li class="time-wb_vis_hid">9:00</li>
                        <li  class="sub_img_time_data"><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Line-85.svg" alt="icon"></li>
                        <li class="sub_text_time_data">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</li>
                    </ul>
                     <ul>
                        <li class="time-wb">9:40</li>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Ellipse-56.svg" alt="icon"></li>
                        <li class="time-wb_text">Recorded Pitches (Nutrition Cluster)</li>
                    </ul>
                       <ul>
                        <li class="time-wb_vis_hid">9:00</li>
                        <li  class="sub_img_time_data"><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Line-85.svg" alt="icon"></li>
                        <li class="sub_text_time_data">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</li>
                    </ul>
                     <ul>
                        <li class="time-wb">9:30</li>
                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Ellipse-56.svg" alt="icon"></li>
                        <li class="time-wb_text">Q&A</li>
                    </ul>
                       <ul>
                        <li class="time-wb_vis_hid">9:00</li>
                        <li class="sub_img_time_data"><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Line-85.svg" alt="icon"></li>
                        <li class="sub_text_time_data">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</li>
                    </ul>
                </div>
            </div>
            <div class="right_side_text_web_timetable_img">
               <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/web_time.png" alt="img" />
            </div>
        </div>
        
    </div>
</section>




<!--popup-->

<style>
   .top_head_text_spon h2 {
    font-size: 40px;
    line-height: 70px;
    font-family: 'Montserrat' !important;
    color: #333333;
    text-align: center;
    margin-bottom: 50px;
}
    .main_sponsore_images {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 200px;
}

div#main_img_popup {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    background-color: #33333363;
    z-index: 1;
    height: 100%;
}
div#main_sub_img_popup {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-height: 654px;
    height: 100%;
    width:85%;
    gap: 93px;
    padding: 100px;
    background-color: #EAEAEA;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
}
.left_img_popup_spon,.right_text_popup_spon{
    width:50%;
}

.right_text_popup_spon h2 {
    font-size: 25px;
    line-height: 40px;
    font-family: 'Montserrat' !important;
    color: #333333;
    text-align: left;
    margin-bottom: 35px;
}
.right_text_popup_spon p {
    font-size: 17px;
    line-height: 34px !important;
    color: #333333;
}

.left_img_popup_spon img{
    max-width: 508px !important;
    width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    margin-left: auto;
}
#main_img_popup{
    display:none;
}
#close_popup_spon {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50px;
    right: 50px;
}
</style>

<section id="our_sponsors">
    <div class="container">
        <div class="top_head_text_spon">
             <h2>Our Sponsors</h2>
        </div>
               
        <div class="main_sponsore_images">
            <div class="our_ins_img" onclick="sponPopup()">
                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/pall-corporation-logo-big.svg" alt="img">
            </div>
             <div class="our_ins_img">
                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/1548.HK_BIG-10ba18dc.svg" alt="img">
            </div>
        </div>
        
        <div id="main_img_popup">
            <div class="container">
                
                
            <div id="main_sub_img_popup">
                    <div id="close_popup_spon">
                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupClose()">
                </div>
                
            <div class="left_img_popup_spon">
                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/1548.HK_BIG-10ba18dc.svg" alt="img">
            </div>
            <div class="right_text_popup_spon">
               
               <h2>Sponsors Name</h2>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
               <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                sit amet. </p>
                
                </p>
            </div>
            </div>
            </div>
        </div>
        
    </div>
</section>


<script>
function sponPopup() {
  document.getElementById("main_img_popup").style.display = "block";
 
}
function sponPopupClose() {
  
  document.getElementById("main_img_popup").style.display = "none";
}
</script>



<!--end popup-->


<!---->
<style>
section.web_nav_block {
    background-color: #EAEAEA;
    height: 192px;
    display: flex;
    align-items: center;
}
    .main_btn_web_block {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
div#mBtnWeb {
    display: flex;
    gap: 40px;
}
.btn_web-spon {
    padding: 0 33px;
    height: 50px;
    display: flex;
    align-items: center;
    color: #333333;
    border: 1px solid;
}
.btnactive, .mBtnWeb:hover {
  background-color: #F15D23 !important;
  color: white;
}
</style>

<section class="web_nav_block">
    <div class="container">
        <div class="main_btn_web_block" >
            <div class="left_btn_web_block_top" id="mBtnWeb">
                 <a hreft="#" class="btn_web-spon btnactive">Overview</a>
                  <a hreft="#" class="btn_web-spon">Speakers</a>
                   <a hreft="#" class="btn_web-spon">Sponsors</a>
            </div>
            <div class="right_btn_web_block_top" id="mBtnWeb">
                <a hreft="#" class="btn_web-spon">Download agenda</a>
                   <a hreft="#" class="btn_web-spon">Book now</a>
            </div>
        </div>
    </div>
</section>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("mBtnWeb");
var btns = header.getElementsByClassName("mBtnWeb");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("btnactive");
  current[0].className = current[0].className.replace("btnactive", "");
  this.className += " active";
  });
}
</script>





<?php get_footer(); ?>
