<?php if(!empty($section_data)):
    $title = $section_data['title'];
     $button1 = $section_data['button'];

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
   $show_on_contact_page = $section_data['show_on_contact_page'];
    if($show_on_contact_page[0] == 'show') {
?>
<section id="contact-us-faq">
<div class="container">
    <div class="right-contact_faq_block_btn">
    <?php if(!empty($title)) { ?>
      <h2><?php echo $title;?></h2>
    <?php } ?>
    <?php if (!empty($button_text)) { ?>
             <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>"><?php echo $button_text;?></a>
             <?php } ?>
    </div>
    
<div class="resource-right-content">
                    <?php
                        $tax_query = array( 'relation' => 'AND' );
                        $tax_query[] = array(
                                    'taxonomy' => 'faq-type',
                                    'field' => 'slug',
                                    'terms' =>'about'
                                );

                        $args = array(
                            'post_type' => 'faqs',
                            'posts_per_page' =>-1,
                            'orderby'   => 'ID',
                            'order' => 'DESC',
                            'tax_query' => $tax_query
                        );

                        $uposts = new WP_Query($args);

                    if($uposts->have_posts()){
                      
                        ?>
                           <section class="accord-bg faq-main">
                                <div class="accordition">
                                    <div class="main-accord">
                                        <div class="right-accord">
                                            <div class="accordion_main">
                                                <div id="resource-append" class="tabs accordion-content">
                                                    <?php
                                                    $i = 0;
                                                    while ($uposts->have_posts()) {
                                                        $i++;
                                                        $uposts->the_post();
                                                        $product_id = $post->ID;
                                                    ?>
                                                        <div class="tab">
                                                            <input type="checkbox" id="rd<?php echo $i; ?>" name="rd" class="faqCheck">
                                                            <label class="tab-label" for="rd<?php echo $i; ?>"><?php the_title() ?> </label>
                                                            <div class="tab-content">
                                                                <p class="tab-text">
                                                                    <?php echo get_the_content() ?> 
                                                                </p>
                                                            </div>
                                                        </div>

                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    <?php }?>
                
                
            </div>
    </div>
</section>
<?php } endif;?>
