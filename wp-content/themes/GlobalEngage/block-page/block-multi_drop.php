<section class="search_drop">
<div class="container">
    <div class="main-drop-box">
        <div class="drop-filter-main">
            <div class="drop-item">
                <h2>Show me</h2>
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
                    );

                    $product_categories = get_terms( 'product_cat', $cat_args );

                    if( !empty($product_categories) ){                        
                        foreach ($product_categories as $key => $category) {?>
                           <option value="<?php echo $category->slug; ?>"><?php echo $category->name;?></option>
                        <?php }                        
                    }?>
                </select>
             
            </div>
            <div class="drop-item">
                <h2>Field</h2>
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
                    );

                    $product_categories = get_terms('field',$cat_args);

                    if( !empty($product_categories) ){                        
                        foreach ($product_categories as $key => $category) {?>
                           <option value="<?php echo $category->slug; ?>"><?php echo $category->name;?></option>
                        <?php }                        
                    }?>
                </select>
            </div>
            <div class="drop-item">
                <h2>Subject</h2>
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
            <div class="drop-search-btn">
                <button class="btn">go</button>
                <span>or</span>
                <button class="btn-event">Browse all events</button>
            </div>
        </div>
</div>
</section>