<?php
$product_id = $post->ID;

?>
<div class="tab">
    <input type="checkbox" id="rd<?php echo $product_id; ?>" name="rd" class="faqCheck">
    <label class="tab-label" for="rd<?php echo $product_id; ?>"><?php the_title() ?></label>
    <div class="tab-content">
        <p class="tab-text">
            <?php echo get_the_content() ?>
        </p>
    </div>
</div>
  