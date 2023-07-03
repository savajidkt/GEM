<?php
if (!empty($section_data)) :
    $slider = $section_data['slider'];
    $background_color = $section_data['background_color'];
    ?>
    <section id="venue-image-slider-event">
        <?php if (!empty($slider)) : ?>
            <div class="container">
                <div class="main_event_slider_post">
                    <?php foreach ($slider as $slide) :
                        $image = $slide['image'];
                        $heading = $slide['heading'];
                        $description = $slide['description'];
                        $button1 = $slide['button'];
                        $button_text = $button1['button_label'];
                        $link = $button1['button_link'];
                        $internal_link = $button1['internal_link'];
                        $external_link = $button1['external_link'];
                        if ($link == 'internal_link') {
                            $btnurl = $internal_link;
                            $target = '_self';
                        } else {
                            $btnurl = $external_link;
                            $target = '_blank';
                        }
                        $button2 = $slide['button2'];
                        $button_text2 = $button2['button_label'];
                        $link2 = $button2['button_link'];
                        $internal_link2 = $button2['internal_link'];
                        $external_link2 = $button2['external_link'];
                        if ($link2 == 'internal_link') {
                            $btnurl2 = $internal_link2;
                            $target2 = '_self';
                        } else {
                            $btnurl2 = $external_link2;
                            $target2 = '_blank';
                        }
                        ?>
                        <div class="sub_event_slider_post">
                            <?php if (!empty($image)) : ?>
                                <div class="f_e_slider_image">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="left_f_e_slider_text"<?php if (!empty($background_color)) : ?>style="background-color: <?php echo $background_color; ?>;"<?php endif; ?>>
                                <?php if (!empty($heading) && !empty($description)) : ?>
                                    <h3><?php echo $heading; ?></h3>
                                    <p class="event-sub-text"><?php echo $description; ?></p>
                                <?php endif; ?>
                                <div class="featured_event_slider_button">
                                    <?php if (!empty($button_text) && !empty($link)) : ?>
                                        <a href="<?php echo $btnurl; ?>" target="<?php echo $target; ?>" class="btn"><?php echo $button_text; ?></a>
                                    <?php endif; ?>
                                    <?php if (!empty($button_text2) && !empty($link2)) : ?>
                                        <a href="<?php echo $btnurl2; ?>" target="<?php echo $target2; ?>"><p class="view_events"><?php echo $button_text2; ?></p></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                           
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>



<script>
    jQuery(function ($) {
    jQuery(document).ready(function () {
        jQuery('.main_event_slider_post').slick({
            slidesToShow: 1,
            arrows: false,
            dots: true,
            speed: 300,
            infinite: true,
            autoplaySpeed: 2000,
            autoplay: false,
        });
    });
});
</script>
<?php endif; ?>
