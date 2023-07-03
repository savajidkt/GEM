<?php
if (!empty($section_data)) {
    $image_with_button = $section_data['image_with_button'];
    if (!empty($image_with_button)) {
        ?>
        <section class="our-event-fild-block">
            <div class="container">
                <div class="event-item-img-text">
                    <?php foreach ($image_with_button as $img) {
                        $image = $img['image'];
                        $image_link = $img['image_link'];
                        $heading = $img['heading'];
                        $heading_url = $img['heading_url'];
                        ?>
                        <div class="img-text">
                            <?php if (!empty($image) && !empty($image_link)) { ?>
                                <a href="<?php echo esc_url($image_link); ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </a>
                            <?php } ?>
                            <?php if (!empty($heading) && !empty($heading_url)) { ?>
                                <a href="<?php echo esc_url($heading_url); ?>">
                                    <h2><?php echo $heading; ?></h2>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php
    }
}
?>
