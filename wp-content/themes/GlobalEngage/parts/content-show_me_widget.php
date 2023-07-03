<?php if(!empty($section_data)): 
    $show_me_widget = $section_data['show_me_widget'];
    if($show_me_widget[0] == 'enable') {
    
?>
<section class="search_drop">
<form action="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>" method="get" name="" class="">
    <input type="hidden" name="yith_wcan" value="1">
<div class="container">
    <div class="main-drop-box">
        <div class="drop-filter-main">
            <div class="drop-item">
                <h2>Show me</h2>
                <div class="show-me-customselect">
                <select name="product_cat" id="product_cat">
                    <option value="">Select one option</option>
                    <?php 
                    $orderby = 'name';
                    $order = 'asc';
                    $hide_empty = false ;
                    $cat_args = array(
                        'orderby'    => $orderby,
                        'order'      => $order,
                        'hide_empty' => $hide_empty,
                        'parent' => 0
                    );
                    $product_categories = get_terms( 'product_cat', $cat_args );
                    if( !empty($product_categories) ){                        
                        foreach ($product_categories as $key => $category) {?>
                           <option value="<?php echo $category->slug; ?>"><?php echo $category->name;?></option>
                        <?php }                        
                    }?>
                </select>
             
            </div>
            </div>
            <div class="drop-item">
                <h2>About</h2>
                <div class="show-me-customselect1">
                <select name="field" id="field">
                    <option value="">Select one option</option>
                    <?php 
                    $orderby = 'name';
                    $order = 'asc';
                    $hide_empty = false ;
                    $cat_args = array(
                        'orderby'    => $orderby,
                        'order'      => $order,
                        'hide_empty' => $hide_empty,
                        'parent' => 0
                    );
                    $product_categories = get_terms('field',$cat_args);
                    if( !empty($product_categories) ){                        
                        foreach ($product_categories as $key => $category) {?>
                           <option value="<?php echo $category->slug; ?>"><?php echo $category->name;?></option>
                        <?php }                        
                    }?>
                </select>
            </div>
            </div>
            <div class="drop-item">
                <h2>Specifically</h2>
                <div class="show-me-customselect2">
                <select name="subject" id="subject">
                    <option value="">Select one option</option>
                    <?php 
                    $orderby = 'name';
                    $order = 'asc';
                    $hide_empty = false ;
                    $cat_args = array(
                        'orderby'    => $orderby,
                        'order'      => $order,
                        'hide_empty' => $hide_empty,
                        'parent' => 0
                    );
                    $product_categories = get_terms('subject',$cat_args);
                    if( !empty($product_categories) ){                        
                        foreach ($product_categories as $key => $category) {?>
                           <option value="<?php echo $category->slug; ?>"><?php echo $category->name;?></option>
                        <?php }                        
                    }?>
                </select>
            </div>
            </div>
        </div>
            <div class="drop-search-btn">
                <button class="search_btn">Go</button>
                <span>or</span>
                <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>" class="btn-event">Browse all events</a>
            </div>
        </div>
</div>
</form>
</section>
<?php  } endif;?>