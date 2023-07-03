<?php
/**
 * The template for displaying search results pages
 */

get_header(); 
?>

<div class="news-banner-section">


    <div class="wrapper">
        <section class="news-banner-section__content-wrap">
            <div class="news-banner-section__content">
                <h3 class="text-ibm-sb-45 clr-white">Search Results</h3>
                <h5>
                    <?php 
                    global $wp_query;
                    echo $wp_query->found_posts.' results for ';
                    $allsearch = new WP_Query("s=$s&showposts=-1"); 
                    echo  $key = wp_specialchars($s, 1);
                    ?>
                </h5>
            </div>

            <div class="news-banner-section__search-content">
                <div class="banner-search__box">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/'));?>">
                        <input type="search" id="search-form" class="search-field banner-search__input" placeholder="Search again" value="" name="s">
                        <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="breadcrumb__section">
    <div class="wrapper">
        <div class="breadcrumb__wrap">
            <ul class="breadcrumb__list-wrap">
                <li class="breadcrumb__item"><a href="<?php echo get_permalink(5);?>" class="breadcrumb__text">Home</a></li>
                <li class="breadcrumb__item active"><a href="#" class="breadcrumb__text">Search </a></li>
            </ul>
        </div>
    </div>
</div>

<div class="news-filter-section">
    <div class="wrapper">
        <div class="news-filter-section__wrap">
            <div class="news-filter-section__right">
                <span class="news-filter-section__filter-label">Filter</span>
            </div>
            <div class="news-filter-section__left">
                <form method="POST" id="filter-search">
                    <?php 
                        $args = array(
                               'public'   => true,
                               //'_builtin' => false
                            );
                        $output = 'names'; // 'names' or 'objects' (default: 'names')
                        $operator = 'and'; // 'and' or 'or' (default: 'and')
                        $post_types = get_post_types( $args, $output, $operator );
                        unset($post_types['sponsorbanks'] );
                        unset($post_types['testimonial'] );
                        unset($post_types['post'] ); unset($post_types['attachment'] );
                        //unset($post_types['teammember'] );
                    if($post_types ) {   // If there are any custom public post types.
                    ?>
                        <select id="categoryfilter" name="categoryfilter" class="select__box"><option value="">Category</option>   
                    <?php 
                        foreach ( $post_types  as $post_type ) {
                            $typeobj = get_post_type_object($post_type);
                            $name = $typeobj->labels->name;
                            
                            echo '<option value="'.$post_type.'">' . $name . '</option>';
                            //echo '<option value="'.$post_type.'">' . $post_type . '</option>';
        //echo '<li>' . $post_type . '</li>';
                        }
                        echo '</select>';
  
                    }


                     ?>

                   
                    <select name="orderby" class="select__box" id="orderby_serch">
                        <option value="">Select Order</option>
                        <option value="publish_date">Latest post</option>
                        <option value="title">Title</option>
                    </select>
            
                    <input type="hidden" class="action-ajax" name="action-ajax" value="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                    <input type="hidden" name="action" value="myfilter">
                </form>
            </div>
        </div>
    </div>
</div>


<div class="sr__section sr-bg">
    <div class="wrapper">
        <div class="sr__container">
            <div class="sr-box__list-wrap">
                <?php


                if (have_posts()) :
                $i = 1;
                while ( have_posts() ) : the_post();

                 if('news' == get_post_type()) {
                    $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $default_img = get_field('news_image','option');
                        if(!empty($featured_img)) {
                            $img = $featured_img;
                        } else {
                            $img = $default_img['url'];
                        }
                ?>
                    <div class="sr-box">
                        <div class="sr-box__content">
                            <?php 
                            $term_obj_list = get_the_terms( $post->ID, 'news_category' );
                            $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                                if(!empty($terms_string)) { ?>
                                    <h2 class="sr-box__title"><?php echo $terms_string;?></h2>
                            <?php } ?>
                            <h3 class="sr-box__heading"><?php the_title();?></h3>
                            <p class="sr-box__description">
                                <?php echo strip_shortcodes(wp_trim_words( $post->post_content, 20 ));?>
                                <?php //echo apply_filters('the_content', substr($post->post_content, 0, 150));?></p>
                            <a href="<?php echo get_permalink($post->ID); ?>"><span class="sr-box__read-now-link">Read Now</span></a>
                        </div>

                        <div class="sr-box__img-wrap">
                            <img src="<?php echo $img;?>" alt="">
                        </div>

                    </div>

                <?php } elseif('jobroles' == get_post_type()) { 
                   
                    $job_type = get_field('job_type',$post->ID);
                    $job_location = get_field('job_location',$post->ID);
                    $banner_description = get_field('banner_short_description',$post->ID);
                    $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $default_img = get_field('job_role','option');
                        if(!empty($featured_img)) {
                            $img = $featured_img;
                        } else {
                            $img = $default_img['url'];
                        }
                        
                ?>
                    <div class="sr-box">
                        <div class="sr-box__content">
                            <h3 class="sr-box__heading"><?php the_title(); ?></h3>
                                <div class="career-advisor-section__box-time-wrap">
                                    <span class="career-advisor-section__box-time-label"><?php echo $job_type;?></span>
                                    <span class="career-advisor-section__box-time"><?php echo $job_location;?></span>
                                </div>
                            <p class="sr-box__description"><?php echo $banner_description;?></p>

                            <a href="<?php echo get_permalink($post->ID);?>"><span class="sr-box__read-now-link">Read Now</span></a>
                        </div>
                        <div class="sr-box__img-wrap">
                            <img src="<?php echo $img;?>" alt="">
                        </div>
                    </div>
                

                <?php }  elseif('teammember' == get_post_type()) { 
                   
                    //$designation = get_field('designation',$post->ID);
                    $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $default_img = get_field('team_member_image','option');
                        if(!empty($featured_img)) {
                            $img = $featured_img;
                        } else {
                            $img = $default_img['url'];
                        }
                        
                ?>
                    <div class="sr-box">
                        <div class="sr-box__content">
                            <h3 class="sr-box__heading"><?php the_title(); ?></h3>
                            <p class="sr-box__description">
                                <?php echo strip_shortcodes(wp_trim_words( $post->post_content, 20 ));?>
                            </p>
                            <a href="<?php echo get_permalink(12);?>?teamid=<?php echo $post->ID;?>"><span class="sr-box__read-now-link">Read Now</span></a>
                        </div>
                        <div class="sr-box__img-wrap">
                            <img src="<?php echo $img;?>" alt="">
                        </div>
                    </div>
                

                <?php } elseif('wpdmpro' == get_post_type()) { 
                   
                    //$featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $default_img = get_field('downloads_image','option');
                       
                ?>
                    <div class="sr-box">
                        <div class="sr-box__content">
                            <h3 class="sr-box__heading"><?php the_title(); ?></h3>
                            <a href="<?php echo get_permalink($post->ID);?>"><span class="sr-box__read-now-link">Download Now</span></a>
                        </div>
                        <div class="sr-box__img-wrap">
                            <img src="<?php echo $default_img['url'];?>" alt="">
                        </div>
                    </div> 
                

                <?php } elseif(basename(get_page_template()) === 'page.php') { 

                    $default_img = get_field('content_page_image','option');
                ?>

                    <div class="sr-box">
                        <div class="sr-box__content">
                            <h3 class="sr-box__heading"><?php the_title(); ?></h3>
                                
                            <p class="sr-box__description"><?php echo $description;?></p>

                            <a href="<?php echo get_permalink($post->ID);?>"><span class="sr-box__read-now-link">Read Now</span></a>
                        </div>
                        <div class="sr-box__img-wrap">
                            <img src="<?php echo $default_img['url'];?>" alt="">
                        </div>
                    </div>

                <?php }  else {

                    $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        
                ?>
                    <div class="sr-box">
                        <div class="sr-box__content">
                            <h3 class="sr-box__heading"><?php the_title(); ?></h3>
                            <p class="sr-box__description"><?php echo strip_shortcodes(wp_trim_words( $post->post_content, 20 ));?></p>
                            <a href="<?php echo get_permalink($post->ID); ?>"><span class="sr-box__read-now-link">Read Now</span></a>
                        </div>

                        <div class="sr-box__img-wrap">
                            <?php if(!empty($img)) { ?>
                                <img src="<?php echo $img;?>" alt="">
                            <?php } else { ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/how_we_can_help.png" alt="">
                            <?php } ?>
                        </div>

                    </div>
                <?php }?>

                <?php endwhile;?>
            </div>

            <?php  
            else :
                echo '<h2>Not found</h2>';
    
            endif;
             ?>
                
                    <div class="sr__btn-wrap">
                        <a href="#" class="res-btn-primary">Load More</a> 
                    </div>
           
            
        </div>
    </div>
</div>


<?php get_footer(); ?>


<script>
jQuery( document ).ready(function() {
 jQuery('#filter-search select').on('change', function(e) {
  e.preventDefault();

  
   
    var posttypes = jQuery('#categoryfilter').val();
    var orders = jQuery('#orderby_serch').val();
    
    jQuery.ajax({
      url:jQuery('.action-ajax').val(),
       type: 'POST',
      data : {
       action: "get_search_results",
       posttypes: posttypes,
       orders: orders
      }, // POST
      beforeSend:function(xhr){
        //filter.find('button').text('Processing...'); // changing the button label
      },
      success:function(data){
        //filter.find('button').text('Apply filter'); // changing the button label back
         jQuery('.sr__section').html('');
         jQuery('.sr__section').html(data); 

         // insert data

jQuery(".sr__container .sr-box").hide();

    jQuery(".sr__container .sr-box").slice(0, 6).show(); 

if (jQuery(".sr__container .sr-box:hidden").length == 0) {
    jQuery("#load").fadeOut('slow');
    jQuery(".sr__btn-wrap a").hide();
}
    jQuery(".sr__btn-wrap .res-btn-primary").on('click', function (e) {
      e.preventDefault(); 
        jQuery(".sr__container .sr-box:hidden").slice(0, 4).slideDown(); //alert('333');
        if (jQuery(".sr__container .sr-box:hidden").length == 0) {
            jQuery("#load").fadeOut('slow');
            jQuery(".sr__btn-wrap a").hide();
        }
        
    });
         
         setTimeout(function() {
           if(data != ''){
            /* jQuery(".news-box-lg").each(function () {
              jQuery(".news-box-lg__container").html('');
               var ht = jQuery(this).html();
               alert(ht);
             });*/

             jQuery(".sr-box").detach().appendTo('.sr-box__list-wrap');
          }
          }, 1000);
      }
    });
    //return false;
  });
   });
</script>
