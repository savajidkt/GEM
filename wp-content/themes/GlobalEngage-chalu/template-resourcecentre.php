<?php
/**
 ** Template Name: Resource Centre Template
 **/
get_header();
$myPostID = $post->ID;
?>
<style>
    .hide{ display: none !important; }

    .accordionUL .transition, .accordionUL li i:before, .accordionUL li i:after, .accordionUL .childClsUl {
  transition: all 0.25s ease-in-out;
}

.accordionUL .flipIn, .accordionUL , .accordionUL h1 {
  animation: flipdown 0.5s ease both;
}

.accordionUL .no-select, .accordionUL h4 {
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.accordionUL h4 {
  font-size: 16px;
  line-height: 34px;
  font-weight: 300;
  letter-spacing: 1px;
  display: block;
  background-color: #fefffa;
  margin: 0;
  cursor: pointer;
  margin-top: 10px;
}

/*.accordionUL .childClsUl {*/
/*  color: rgba(48, 69, 92, 0.8);*/
/*  font-size: 17px;*/
/*  line-height: 26px;*/
/*  letter-spacing: 1px;*/
/*  position: relative;*/
/*  overflow: hidden;*/
/*  max-height: 800px;*/
/*  opacity: 1;*/
/*  transform: translate(0, 0);*/
/*  margin-top: 14px;*/
/*  z-index: 2;*/
/*  margin-left: 30px;*/
/*}*/
.accordionUL .childClsUl {
    color: rgba(48, 69, 92, 0.8);
    font-size: 17px;
    line-height: 26px;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    max-height: 800px;
    opacity: 1;
    transform: translate(0, 0);
    z-index: 2;
}

.accordionUL {
  list-style: none;
  perspective: 900;
  padding: 0;
  margin: 0;
}
/*.accordionUL li {*/
/*  position: relative;*/
/*  padding: 0;*/
/*  margin: 0;*/
/*  padding-bottom: 4px;*/
/*  padding-top: 18px;*/
/*}*/
.accordionUL li {
    position: relative;
    padding: 0;
    margin: 0;
    padding-bottom: 30px;
    padding-top: 18px;
    border-bottom: 1px solid #33333382;
}
ul.children.childClsUl li{
    border-bottom: 0px solid #33333382;
}
.accordionUL li:nth-of-type(1) {
  animation-delay: 0.5s;
}
.accordionUL li:nth-of-type(2) {
  animation-delay: 0.75s;
}
.accordionUL li:nth-of-type(3) {
  animation-delay: 1s;
}
/*.accordionUL li:last-of-type {*/
/*  padding-bottom: 0;*/
/*}*/
.accordionUL i {
  position: absolute;
  transform: translate(-6px, 0);
  margin-top: 20px;
  right: 0;
}
.accordionUL i:before, .accordionUL i:after {
  content: "";
  position: absolute;
  background-color: rgb(188 188 188);
  width: 3px;
  height: 9px;
}



.accordionUL i:before {
  transform: translate(-2px, 0) rotate(45deg);
}
.accordionUL i:after {
  transform: translate(2px, 0) rotate(-45deg);
}
.accordionUL .checkInput {
  position: absolute;
  cursor: pointer;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  color: inherit !important;
  background-color: inherit !important;
  border: 0 !important;
}
.accordionUL .accordionLI .checkInput::after{
    background: inherit !important;
    border: 0 !important;
}
.accordionUL .checkInput:checked ~ .childClsUl {
  margin-top: 0;
  max-height: 0;
  opacity: 0;
  transform: translate(0, 50%);
}
.accordionUL .checkInput:checked ~ i:before {
  transform: translate(2px, 0) rotate(45deg);
}
.accordionUL .checkInput:checked ~ i:after {
  transform: translate(-2px, 0) rotate(-45deg);
}

.resource-left-content  .searchandfilter .accordionUL li.accordionLI  {
    margin-bottom: 0;
    border-bottom: 1px solid rgb(188 188 188);
    padding: 10px 0;
}
@keyframes flipdown {
  0% {
    opacity: 0;
    transform-origin: top center;
    transform: rotateX(-90deg);
  }
  5% {
    opacity: 1;
  }
  80% {
    transform: rotateX(8deg);
  }
  83% {
    transform: rotateX(6deg);
  }
  92% {
    transform: rotateX(-3deg);
  }
  100% {
    transform-origin: top center;
    transform: rotateX(0deg);
  }
}
</style>
<?php
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container sub_banner_title">
    <div class="header-banner-text ">
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
    </div>
</div>
<?php
$breadcrumb_text= get_field('breadcrumb_text', $post->ID)
?>
<section id="breadcrumb">
        <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/');?>"><strong>Home</strong></a></li>
            <storng>/</storng>
            <?php if(!empty($breadcrumb_text)){?>
            <li><?php echo $breadcrumb_text;?></li>
           <?php } ?>
        </ul>
    </div>
</section>

<section>
    <div class="main-content container">
        <form id="misha_filters" action="#">
        <div class="resource-center-content">
            <div class="resource-left-content">
                   <div class="filter_sidebar">
                     <h4>Filter By:</h4>
                     <?php
                    if($_GET['_sft_resource-type']==''){
                        $_GET['_sft_resource-type']='blog';
                    }
                    $isFilterCls = "";
                    //if (!isset($_GET['_sft_resource-type'])) {
                        $isFilterCls = "hide";
                   // }
                    ?>
                    <spen id="xclearResourceCentre" class="<?php echo $isFilterCls; ?>"><a href="javascript:void(0);" class="clear-filter-reset" data-search-form-id="483" data-sf-submit-form="always">X Clear</a></spen>
                </div>
                <hr>
                <?php
                    $args = array(
                    'descendants_and_self'  => 0,
                    'selected_cats'         => false,
                    'popular_cats'          => false,
                    'walker'                => 'My_Walker_Category_Checklist',
                    'taxonomy'              => 'resource-category',
                    'checked_ontop'         => true
                );
                
               
                 ?>
                <ul class="accordionUL">
                    <?php wp_terms_checklist(0, $args); ?>
                </ul>


                 

                <?php //echo do_shortcode('[searchandfilter id="483"]');?>
            </div>
            <div class="resource-right-content">
                <div class="button-content">
                       
                        <ul>
                        <li class="resource-type" data-sf-field-name="_sft_resource-type" data-sf-field-type="taxonomy"
                            data-sf-field-input-type="radio">
                            <ul class="top-bar-type-category">
                                   <?php
                                       $args = array(
                                                   'taxonomy' => 'resource-type',
                                                   'orderby' => 'name',
                                                   'order'   => 'ASC',
                                                   'hide_empty' => 0,
                                                   'hierarchical' => 1,
                                               );
                            
                                       $cats = get_categories($args);
                                        if(empty($_GET['back'])){
                                            $_GET['back'] = 'blog';
                                        }
                                       foreach($cats as $cat) {

                                        if($_GET['back'] == $cat->slug){
                                            $active='sf-option-active';
                                        }else{
                                            $active='';
                                        }
                                    ?>
                                     <li class="sf-level-0 sf-item-<?=$cat->term_id?> <?=$active;?>" data-sf-count="1" data-sf-depth="0"><input class="sf-input-radio" type="radio"
                                            value="<?php echo $cat->slug;?>" name="_sft_resource-type[]" id="sf-input-<?=$cat->term_id;?>">
                                            <label
                                            class="sf-label-radio btn_resource" data-id="<?=$cat->term_id?>" for="sf-input-<?=$cat->term_id?>"><?php echo $cat->name; ?></label>
                                        </li>
                            
                                    <?php
                                       }
                                    ?>
                            
                                </ul>
                            </li>
                        </ul>
                </div>

                <div id="resource-append" class="resource-content">
                    <?php 
                             $categoryData = $_POST['categoryData'];
                        $resourceType = $_POST['resourceType'];
                        $tax_query = array( 'relation' => 'AND' );
                        $tax_query[] = array(
                                    'taxonomy' => 'resource-type',
                                    'field' => 'slug',
                                    'terms' => $_GET['back']
                                );

                        if( $categoryData ){
                            $tax_query[] = array(
                                        'taxonomy' => 'resource-category',
                                        'field' => 'term_id',
                                        'terms' => $categoryData
                                    );
                         }
                         

                        $args = array(
                            'post_type' => 'resource-center',
                            'posts_per_page' => 9,
                            'orderby'   => 'ID',
                            'order' => 'DESC',
                            'tax_query' => $tax_query
                        );

                        $uposts = new WP_Query($args);

                    if($uposts->have_posts()){
                      while ( $uposts->have_posts() ) : $uposts->the_post();
                        $product_id = $post->ID;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
                        $terms = get_the_terms( $post->ID, 'resource-type' );
                        ?>
                       <div class="resource-content-heading">
                           <a href="<?php the_permalink(); ?>"> <img src="<?php  echo $image[0]; ?>" alt=""></a>
                            <h4>
                              <?php 
                              if(strlen(get_the_title()) > 49){
                                echo substr(get_the_title(), 0, 48).'...';
                              } else {
                                ?>                                
                                <?php the_title(); ?>
                                <?php
                              }
                              
                              ?>
                                 
                            </h4>
                            <?php $excerpt= get_the_excerpt();

if(strlen($excerpt) > 80){
  echo substr($excerpt, 0, 80).'...';
} else {
  echo $excerpt;
}

                            ?>
                            <a href="<?php the_permalink(); ?>" class="readmore_rs">Read more</a>
                        </div>
                    <?php endwhile;?>
                    <?php }?>
                </div>
                <div id="resource-remove">

                <?php //echo do_shortcode('[searchandfilter id="483" show="results"]');?>
                </div>
                <?php
                if ( $uposts->max_num_pages > 1 ){?>
                    <input type="hidden" name="current_page" id="current_page" value="2">
                   <div id="misha_loadmore">Load more</div>
                <?php }?>

            </div>
        </div>
    </form>
    </div>
</section>
<script> 
jQuery( document ).ready(function() {
    //$inputs.prop("disabled", false);
  jQuery(".resource-type input[value='about']").trigger('click');
  jQuery(".accordionUL input").prop("disabled", false);
});   
    
</script>
<?php

$orders = get_field('section_order', $myPostID);
foreach ($orders as $order) :
    if (!empty($order)) :
        set_query_var('section_data', $order);
        
        echo get_template_part('parts/content', $order['acf_fc_layout']);
    endif;
endforeach;
?>
<?php get_footer();?>