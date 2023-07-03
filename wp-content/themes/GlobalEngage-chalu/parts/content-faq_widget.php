<?php if(!empty($section_data)): 
    $show_faq = $section_data['show_faq'];
?>

    <section>
        <div class="main-content container">
            <div class="faq-content">
                <div class="faq-left-content">
                    <h4>Filter By:</h4>
                </div>
                <?php if(!empty($show_faq)) { ?>
                <div class="faq-right-content">
                    <?php foreach($show_faq as $faq) { ?>
                    <div class="faq-main-content">
                        <button class="faq-content-accordion"><?php echo $faq->post_title; ?></button>
                        <div  class="faq-content-panel">
                            <hr>
                            <p><?php echo $faq->post_content;?></p>
                        </div>
                    </div>
                <?php }?>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif;?>



  