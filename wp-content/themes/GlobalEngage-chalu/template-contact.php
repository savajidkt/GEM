<?php

/**

 ** Template Name: Contact Template

 **/

get_header();

?>

<style>

hr {

    border: 1px solid #3333335c;

    width: 100%;

}

.cont_add_info_block {

    display: flex;

    flex-direction: column;

    gap: 30px;

}

.main-count-block_page {

    display: flex;

    gap: 50px;

}

    .left-cont-data {

    display: flex;

    flex-direction: column;

    gap: 30px;

    max-width: 917px;

    width: 100%;

    background-color: #EAEAEA;

    padding: 3.06%;

}

.cont_add_info_block h2{

    font-size: 25px;

    line-height: 40px;

    color: #333333;

}

.cont_add_info_block ul {

    list-style: none;

    display: flex;

    align-items: flex-start;

    padding: 0;

    gap: 50px;

    justify-content: flex-start;

}

.info_cont_pg {

    display: flex;

    gap: 20px;

    align-items: center;

    width: 105px;

}

.right-text-cont-data {

    display: flex;

    flex-direction: column;

    justify-content: space-between;

    gap: 15px;

}

#contact_us_page{

    padding:3.3% 0;

}

.contactus-block-post br{

    display:none;

}

#wpcf7-f171-o1 input.wpcf7-form-control.has-spinner.wpcf7-submit.btn {

    margin-top: 30px;

    padding: 0;

}

/******************/

.accord-bg {

  

    position: relative;

}

.accordition {

    padding: 4% 0;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    gap: 2rem;

}

.accord-center-text {

    text-align: center;

    display: flex;

    flex-direction: column;

    align-items: center;

    gap: 1rem;

    width: 100%;

}

.accordition h2.text-tx-h2 {

    font-size: 45px;

    text-transform: capitalize;

    color: #1a1a1a;

    font-weight: bold;

}

.accord-bg .right-side-icon {

    transform: translate(0%, -50%);

    position: absolute;

    width: 50px;

    right: 0;

    top: 50%;

    height: auto !important;

}





.left-accord img {

    width: 100%;

    border-radius: 15px;

    height: 410px !important;

}



.accordion_main .accordion-content {

    margin-bottom: 30px;

    background: #EAEAEA;

    overflow: hidden;

}

.accordion-content.open {

    padding-bottom: 10px;

}



.accordion-content hedaSection {

    display: flex;

    min-height: 90px;

    padding: 0px 50px;

    cursor: pointer;

    align-items: center;

    justify-content: space-between;

    transition: all 0.2s linear;

}

.accordion-content.open hedaSection {

    min-height: 90px;

}



.accordion-content hedaSection .title {

    font-size: 14px;

    font-weight: 500;

    color: #333;

}



.accordion-content hedaSection i {

    font-size: 15px;

    color: #333;

}



.accordion-content .description {

    height: 0;

    font-size: 12px;

    color: #333;

    font-weight: 400;

    padding: 0 15px;

    transition: all 0.2s linear;

}



</style>

<?php

$banner_title = get_field('banner_title',$post->ID);

$content = get_field('content',$post->ID);

?>

<div class="container sub_banner_title">

   <div class="header-banner-text">

      <?php if(!empty($banner_title)) { ?>

        <h2><?php echo $banner_title;?></h2>

      <?php } else { ?>

        <h2><?php the_title();?></h2>

      <?php } ?>

      <p><?php echo $content; ?></p>

   </div>

</div>



<section id="breadcrumb">

        <div class="container">

        <ul class="breadcrumb">

            <li><a href="<?php echo site_url('/');?>"><strong>Home</strong></a></li>

            <storng>/</storng>

            <li><?php the_title();?></li>

        </ul>

    </div>

</section>

<section id="contact_us_page">

    <div class="container">

         <div class="main-count-block_page">

         

            <div class="left-cont-data cont_bg_color">

                <h2>Contact Us</h2>

                <?php echo do_shortcode('[contact-form-7 id="171" title="Contact Us"]'); ?>

            </div>

            

            <div class="right-text-cont-data">

                <div class="cont_add_info_block">

                    <h2>Head Office</h2>

                    <ul>

                        <div class="info_cont_pg">

                            <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/call.svg" alt="logo"></li>

                            <li><p>Phone:</p>

                        </div>

                        

                        <li><p> <a href="tel:123-456-7890">+44 (0)1865 849841</a></p></li>

                       

                    </ul>

                    <ul>

                        <div class="info_cont_pg">

                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/mail.svg" alt="logo"></li>

                        <li><p>Email:</p>

                        </div>

                        <li><p><a href="mailto:info@globalengage.co.uk">info@globalengage.co.uk</a></p></li>

                    </ul>

                    <ul>

                        <div class="info_cont_pg">

                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/location.svg" alt="logo"></li>

                        <li><p>Location:</p>

                        </div>

                        <li><p>The Kidlington Centre<br>

                                Kidlington<br>

                                Oxfordshire<br>

                                OX5 2DL<br>

                                United Kingdom</p></li>

                    </ul>

                    

                </div>

                <hr>

                <div class="cont_add_info_block">

                    <h2>Asia Pacific Office</h2>

                    <ul>

                        <div class="info_cont_pg">

                            <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/call.svg" alt="logo"></li>

                            <li><p>Phone:</p>

                        </div>

                        

                         <li><p> <a href="tel:123-456-7890">+44 (0)1865 849841</a></p></li>

                    </ul>

                    <ul>

                        <div class="info_cont_pg">

                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/mail.svg" alt="logo"></li>

                        <li><p>Email:</p>

                        </div>

                        <li><p><a href="mailto:info@globalengage.co.uk">info@globalengage.co.uk</a></p></li>

                    </ul>

                    <ul>

                        <div class="info_cont_pg">

                        <li><img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/location.svg" alt="logo"></li>

                        <li><p>Location:</p>

                        </div>

                        <li><p>Level 35-02 (East Wing),<br>

                                Q Sentral 2A, Jalan Stesen Sentral 2,<br>

                                KL Sentral 50470,<br>

                                Kuala Lumpur, MALAYSIA</li>

                    </ul>

                    

                </div>

                 <div class="blog-title-goes-here-left-sub-content">

                        <div class="blog-title-social-icons">
                        <?php //echo do_shortcode('[Sassy_Social_Share]'); ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-4.svg" alt="">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fill-1.svg" alt="">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Exclusion 2.svg" alt="">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 1802.svg" alt="">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group 2304.svg" alt="">

                        </div>

                    </div>

            </div>

           

        </div>

    </div>

   

</section>



 

<!-- Accordition -->



<section class="accord-bg" >

 

  <div class="container">

   <div class="accordition">

      <div class="main-accord">

        

         <div class="right-accord">

           <div class="accordion_main">

        <div class="accordion-content">

            <hedaSection>

                <span class="title">FAQ Question Goes here</span>

                <i class="fa fa-plus"></i>

            </hedaSection>



              <p class="description">

              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 

                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>

        </div>



        <div class="accordion-content">

            <hedaSection>

                <span class="title">FAQ Question Goes here</span>

                <i class="fa fa-plus"></i>

            </hedaSection>



              <p class="description">

              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 

                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>

        </div>

        <div class="accordion-content">

            <hedaSection>

                <span class="title">FAQ Question Goes here</span>

                <i class="fa fa-plus"></i>

            </hedaSection>



             <p class="description">

              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 

                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>

        </div>

        <div class="accordion-content">

            <hedaSection>

                <span class="title">FAQ Question Goes here</span>

                <i class="fa fa-plus"></i>

            </hedaSection>



              <p class="description">

              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 

                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>

        </div>

        <div class="accordion-content">

            <hedaSection>

                <span class="title">FAQ Question Goes here</span>

                <i class="fa fa-plus"></i>

            </hedaSection>



            <p class="description">

              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 

                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>

        </div>

        

        

        

    </div>

         </div>

      </div>

   </div>

   </div>

</section>





  <script>

      // Accordition

 const accordionContent = document.querySelectorAll(".accordion-content");



        accordionContent.forEach((item, index) => {

            let hedaSection = item.querySelector("hedaSection");

            hedaSection.addEventListener("click", () => {

                item.classList.toggle("opens");



                let description = item.querySelector(".description");

                if (item.classList.contains("opens")) {

                    description.style.height = `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin

                    item.querySelector("i").classList.replace("fa-plus", "fa-minus");

                } else {

                    description.style.height = "0px";

                    item.querySelector("i").classList.replace("fa-minus", "fa-plus");

                }

                removeOpen(index); //calling the funtion and also passing the index number of the clicked hedaSection

            })

        })



        function removeOpen(index1) {

            accordionContent.forEach((item2, index2) => {

                if (index1 != index2) {

                    item2.classList.remove("opens");



                    let des = item2.querySelector(".description");

                    des.style.height = "0px";

                    item2.querySelector("i").classList.replace("fa-minus", "fa-plus");

                }

            })

        }

// end

  </script>









<?php get_footer();?>