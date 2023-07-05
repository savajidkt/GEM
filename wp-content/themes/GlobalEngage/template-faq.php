<?php

/**
 ** Template Name: FAQ Template
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
    color: #333333;
    font-size: 17px;
    line-height: 26px;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    z-index: 2;
}


.accordionUL {
  list-style: none;
  perspective: 900;
  padding: 0;
  margin: 0;
}
.accordionUL li {
    position: relative;
    padding: 0;
    margin: 0;
    padding-bottom: 30px;
    padding-top: 30px;
    border-bottom: 1px solid rgba(51,51,51, 0.10) !important;
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
    transform: translate(-10px, 0);
    margin-top: 9px;
    right: 0;
}
.accordionUL i:before, .accordionUL i:after {
    content: "";
    position: absolute;
    background-color: #333333;
    width: 2px;
    height: 16px;
}
.accordionUL i:before {
  transform: translate(-8px, 0) rotate(45deg);
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
    background-color: inherit !important;
    border: 0 !important;
    font-weight: 600;
    font-size: 17px;
    line-height: 34px;
    color: #333333 !important;
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
  transform: translate(-8px, 0) rotate(-45deg);
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
$banner_title = get_field('banner_title', $post->ID);
$content = get_field('content', $post->ID);
?>
<div class="container sub_banner_title ">
    <div class="header-banner-text ">
        <?php if (!empty($banner_title)) { ?>
            <h2><?php echo $banner_title; ?></h2>
        <?php } else { ?>
            <h2><?php the_title(); ?></h2>
        <?php } ?>
        <p><?php echo $content; ?></p>
    </div>
</div>

<section class="faq-bg">
    <div class="faq-bg-heading container">
        <div class="faq-first-heading">
            
                        <ul>
                        <li class="faq-type" data-sf-field-name="_sft_faq-type" data-sf-field-type="taxonomy"
                            data-sf-field-input-type="radio">
                            <ul class="top-bar-type-category">
                                   <?php
                                       $args = array(
                                                   'taxonomy' => 'faq-type',
                                                   'orderby' => 'name',
                                                   'order'   => 'ASC',
                                                   'hide_empty' => 0,
                                                   'hierarchical' => 1,
                                               );
                            
                                       $cats = get_categories($args);
                                            if($_GET['_sft_faq-type']==''){
                                                $_GET['_sft_faq-type']='about';
                                            }
                                       foreach($cats as $cat) {
                                        if($_GET['_sft_faq-type'] == $cat->slug){
                                            $active='sf-option-active';
                                        }else{
                                            if(!empty($_GET['_sft_faq-type'])){
                                                $active='';
                                            }
                                            
                                        }
                                    ?>
                                     <li class="sf-level-0 sf-item-<?=$cat->term_id?> <?=$active;?>" data-sf-count="1" data-sf-depth="0"><input class="sf-input-radio" type="radio"
                                            value="<?php echo $cat->slug;?>" name="_sft_faq-type[]"" id="sf-input-<?=$cat->term_id;?>"><label
                                            class="sf-label-radio btn_resource" for="sf-input-<?=$cat->term_id?>"><?php echo $cat->name; ?></label></li>
                            
                                    <?php
                                       }
                                    ?>
                            
                                </ul>
                            </li>
                        </ul>
            
        </div>
    </div>
</section>

<section id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/'); ?>"><strong>Home</strong></a></li>
            <storng>/</storng>
            <li><?php the_title(); ?></li>
        </ul>
    </div>
</section>




<section id="resource-center-conten_faq">
    <div class="main-content container">
        <div class="resource-center-content ">
            <div class="resource-left-content">
                <div class="filter_sidebar">
                    <h4>Filter By:</h4>
                    <?php
                   
                   if($_GET['_sft_faq-type']==''){
                        $_GET['_sft_faq-type']='about';
                    }

                    $isFilterCls = "";
                    if (!isset($_REQUEST['_sft_faq-type'])) {                    
                        $isFilterCls = "hide";
                                      
                    } ?>
                   
                    <spen id="xclearFaq" class="<?php echo $isFilterCls; ?>"><a href="javascript:void(0);" class="clear-filter-faq">X Clear</a></spen>
                </div>
                <hr>
                <?php
                    $args = array(
                    'descendants_and_self'  => 0,
                    'selected_cats'         => false,
                    'popular_cats'          => false,
                    'walker'                => 'My_Walker_Category_Checklist',
                    'taxonomy'              => 'faq-category',
                    'checked_ontop'         => true,
                    'hide_empty'            => true,
                );
                
               
                 ?>
                <ul class="accordionUL">
                    <?php wp_terms_checklist(0, $args); ?>
                </ul>
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
    </div>
</section>





<script> 
jQuery( document ).ready(function() {
  jQuery(".accordionUL input").prop("disabled", false);
  jQuery(".faq-type input[value='about']").trigger('click');
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