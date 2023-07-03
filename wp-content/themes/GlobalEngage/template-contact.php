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



<!--<section id="breadcrumb">-->

<!--        <div class="container">-->

<!--        <ul class="breadcrumb">-->

<!--            <li><a href="<?php //echo site_url('/');?>"><strong>Home</strong></a></li>-->

<!--            <storng>/</storng>-->

<!--            <li><?php //the_title();?></li>-->

<!--        </ul>-->

<!--    </div>-->

<!--</section>-->
<?php

    $orders = get_field('section_order');

    foreach($orders as $order):

        if(!empty($order)):

            set_query_var( 'section_data', $order );

            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );

        endif;

    endforeach;

?>



 

<!-- Accordition -->



<!--<section class="accord-bg" >-->

 

<!--  <div class="container">-->

<!--   <div class="accordition">-->

<!--      <div class="main-accord">-->

        

<!--         <div class="right-accord">-->

<!--           <div class="accordion_main">-->

<!--        <div class="accordion-content">-->

<!--            <hedaSection>-->

<!--                <span class="title">FAQ Question Goes here</span>-->

<!--                <i class="fa fa-plus"></i>-->

<!--            </hedaSection>-->



<!--              <p class="description">-->

<!--              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore -->

<!--                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>-->

<!--        </div>-->



<!--        <div class="accordion-content">-->

<!--            <hedaSection>-->

<!--                <span class="title">FAQ Question Goes here</span>-->

<!--                <i class="fa fa-plus"></i>-->

<!--            </hedaSection>-->



<!--              <p class="description">-->

<!--              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore -->

<!--                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>-->

<!--        </div>-->

<!--        <div class="accordion-content">-->

<!--            <hedaSection>-->

<!--                <span class="title">FAQ Question Goes here</span>-->

<!--                <i class="fa fa-plus"></i>-->

<!--            </hedaSection>-->



<!--             <p class="description">-->

<!--              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore -->

<!--                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>-->

<!--        </div>-->

<!--        <div class="accordion-content">-->

<!--            <hedaSection>-->

<!--                <span class="title">FAQ Question Goes here</span>-->

<!--                <i class="fa fa-plus"></i>-->

<!--            </hedaSection>-->



<!--              <p class="description">-->

<!--              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore -->

<!--                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>-->

<!--        </div>-->

<!--        <div class="accordion-content">-->

<!--            <hedaSection>-->

<!--                <span class="title">FAQ Question Goes here</span>-->

<!--                <i class="fa fa-plus"></i>-->

<!--            </hedaSection>-->



<!--            <p class="description">-->

<!--              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore -->

<!--                 ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  </p>-->

<!--        </div>-->

        

        

        

<!--    </div>-->

<!--         </div>-->

<!--      </div>-->

<!--   </div>-->

<!--   </div>-->

<!--</section>-->









<?php get_footer();?>