<?php

/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */
// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}
if ($query->have_posts()) {
?>

  


    <!-- Accordition -->
    <!-- <section class="accord-bg">
        <div class="container">
            <div class="accordition">
                <div class="main-accord">
                    <div class="right-accord">
                        <div class="accordion_main ">

                            <?php
                            // while ($query->have_posts()) {
                            //     $query->the_post();
                            //     $product_id = $post->ID;


                            ?>
                                <div class="accordion-content">
                                    <hedaSection>
                                        <span class="title"><?php //the_title() 
                                                            ?></span>
                                        <i class="fa fa-plus"></i>
                                    </hedaSection>
                                    <p class="description"><?php //echo get_the_content() 
                                                            ?></p>

                                </div>
                            <?php //} 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="accord-bg faq-main">
        <!--<div class="container">-->
            <div class="accordition">
                <div class="main-accord">
                    <div class="right-accord">
                        <div class="accordion_main">
                            <div class="tabs accordion-content">
                                <?php
                                $i = 0;
                                while ($query->have_posts()) {
                                    $i++;
                                    $query->the_post();
                                    $product_id = $post->ID;
                                ?>
                                    <div class="tab">
                                        <input type="checkbox" id="rd<?php echo $i; ?>" name="rd" class="faqCheck">
                                        <label class="tab-label" for="rd<?php echo $i; ?>"><?php the_title() ?></label>
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
        <!--</div>-->
    </section>

<?php
} else {
    echo "No Results Found";
}
?>