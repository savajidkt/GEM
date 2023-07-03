<?php
if (!empty($section_data)) :
   $main_heading = $section_data['main_heading'];
   $button_fields = $section_data['button_fields'];
   $sponsors_section = $section_data['sponsors_section'];
?>
   <style>
      .active {
         padding: 14px 33px !important;
         background-color: #F15D23 !important;
         color: white !important;
         border: none !important;
         font-size: 17px !important;
         cursor: pointer !important;
         width: max-content !important;
         height: 50px;
      }
   </style>
   <section id="conference_sponsor">
      <div class="container">
         <div class="sponsoer_container">
            <div class="sponsoer_top">
               <h1 class="sponsoer_top_heading">Our Sponsors</h1>
               <div class="btn_group tab">

                  <?php

                  $args = array(
                     'taxonomy' => 'sponsor-category',
                     'orderby' => 'term_id',
                     'order' => 'asc',
                     'hide_empty' => 0,
                     'hierarchical' => 1,
                  );
                  $cats = get_categories($args);
                  $i = 0;
                  foreach ($cats as $cat) {
                     $i++;
                  ?>
                     <button class="tablinks custom_new_button_secondary <?php echo ($i == 1) ? 'active triggerClick' : ''  ?>" onclick="clickHandle(event, '<?php echo 'tab_' . $cat->term_id; ?>')"><?php echo $cat->name; ?></button>

                  <?php
                  }

                  ?>

               </div>
            </div>
            <div class="Sponsors">
               <div class="Sponsors_section">

                  <?php
                  $j = 1;
                  foreach ($cats as $cat_type) { ?>
                     <div id="<?php echo 'tab_' . $cat_type->term_id; ?>" class="tabcontent" style="display:<?php echo ($j == 1) ? 'block' : 'none'  ?>;">

                     

                           <?php
                           $args = array(
                              'taxonomy' => 'sponsor-status',
                              'orderby' => 'term_id',
                              'order' => 'asc',
                              'hide_empty' => 0,
                              'hierarchical' => 1,
                           );
                           $cats = get_categories($args);

                           foreach ($cats as $cat) { ?>

<div class="Sponsoer_desc">
                           <span><?php echo $cat->name; ?></span>
                              
                                 <?php
                                 $tax_query = [];
                                 $tax_query = array('relation' => 'AND');
                                 $tax_query[] = array(
                                    'taxonomy' => 'sponsor-category',
                                    'field' => 'slug',
                                    'terms' => $cat_type->slug
                                 );

                                 $tax_query[] = array(
                                    'taxonomy' => 'sponsor-status',
                                    'field' => 'term_id',
                                    'terms' => $cat->term_id
                                 );

                                 $args = array(
                                    'post_type' => 'sponsors',
                                    'orderby'   => 'ID',
                                    'order' => 'DESC',
                                    'posts_per_page' => 5,
                                    'tax_query' => $tax_query
                                 );
                                 $uposts = new WP_Query($args);
                                 ?>

                                 <?php

                                 if ($uposts->have_posts()) {
                                    while ($uposts->have_posts()) : $uposts->the_post();

                                       $product_id = $post->ID;

                                       $logos = get_field('logo', $product_id);

                                 ?>
                                       <?php if (isset($logos['url']) && strlen($logos['url']) > 0) { ?>
                                          <th><img src="<?php echo $logos['url']; ?>" alt=""></th>
                                       <?php } ?>

                                 <?php
                                    endwhile;
                                    wp_reset_query();
                                 }


                                 ?>


</div>

                           <?php } ?>

                              </div>
                     
                  <?php $j++;
                  } ?>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <script>
      //   $("document").ready(function() { 
      //      $(".triggerClick").trigger('click');
      //      $(".triggerClick").addClass('test');
      //  }); 

      function clickHandle(evt, animalName) {
         let i, tabcontent, tablinks;
         console.log(evt);

         // This is to clear the previous clicked content.
         tabcontent = document.getElementsByClassName("tabcontent");
         for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
         }

         // Set the tab to be "active".
         tablinks = document.getElementsByClassName("tablinks");
         for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
         }

         // Display the clicked tab and set it to active.
         document.getElementById(animalName).style.display = "block";

         evt.currentTarget.className += " active";
      }
   </script>
<?php endif; ?>