<?php
/**
** Template Name: Sponsor Template
**/
get_header();
?>
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







<?php
    $orders = get_field('section_order');
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
?>


<!--<section>-->
     
<!--     <div class="main-content container">-->
<!--         <div class="resource-center-content">-->
<!--             <div class="resource-left-content">-->
<!--                <div class="filter_sidebar">-->
<!--                     <h4>Filter By:</h4>-->
<!--                     <spen>X Clear</spen>-->
<!--                </div>-->
<!--                <hr>-->
                 
<!--                  <div class="main_panel-body">-->
<!--                <div class="panel-group" id="filter-menu" role="tablist" aria-multiselectable="true">-->
<!--                  <div class="panel panel-default">-->
<!--                    <div class="panel-heading" role="tab" id="headingOne">-->
<!--                      <a class="panel-title accordion-toggle" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">-->
<!--                        Category1-->
<!--                      </a>-->
<!--                    </div>-->
<!--                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">-->
<!--                      <div class="panel-body">-->
<!--                        <div class="checkbox"><label><input type="checkbox" name="career_state[]" value="recent_graduate">Recent Graduate</label>-->
<!--                         <div class="sub_panel-body">-->
<!--                                    <div class="checkbox"><label><input type="checkbox" name="career_state[]" value="recent_graduate">Recent Graduate</label></div>-->
<!--                                    <div class="checkbox"><label><input type="checkbox" name="career_state[]" value="imposter_syndrome">Imposter Syndrome</label></div>-->
<!--                                    <div class="checkbox"><label><input type="checkbox" name="career_state[]" value="wise_old_head">Wise Old Head</label></div>-->
<!--                              </div>-->
<!--                        </div>-->
                               
<!--                        <div class="checkbox"><label><input type="checkbox" name="career_state[]" value="imposter_syndrome">Imposter Syndrome</label></div>-->
<!--                        <div class="checkbox"><label><input type="checkbox" name="career_state[]" value="wise_old_head">Wise Old Head</label></div>-->
<!--                      </div>-->
                      
<!--                    </div>-->
<!--                  </div>-->
<!--                  </div>-->
<!--                  </div>-->
<!--             </div>-->
<!--             <div class="resource-right-content">-->
                 
<!--             </div>-->
             
<!--         </div>-->
         
<!--     </div>-->
             
    
<!--</section>-->




<?php get_footer();