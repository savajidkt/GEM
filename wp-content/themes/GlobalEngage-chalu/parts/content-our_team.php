<?php if (!empty($section_data)) :
    $heading = $section_data['heading'];
    $our_people = $section_data['our_people'];
?>
<section class="ourpeople">
    <div class="container">
        <?php if (!empty($heading)) { ?>
            <h2><?php echo $heading; ?></h2>
        <?php } ?>
        <div class="our-people-member">
            <?php if (!empty($our_people)) { ?>
                <?php foreach ($our_people as $people) {
                    $image = $people['image'];
                    $name = $people['name'];
                    $job_title = $people['job_title'];
                    $button_text = $people['button_text'];
                    $title = $people['title'];
                    $description = $people['description'];
                    $button_label = $people['button_label'];
                    
            ?>
                    <?php if (!empty($image)) { ?>
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php if (!empty($name) && (!empty($job_title))) { ?>
                                    <div class="overlay">
                                        <div class="team-details text-center">
                                            <h2><?php echo $name; ?></h2>
                                            <p><?php echo $job_title; ?></p>
                                            <div class="socials mt-20">
                                                <button class="btn" onclick="sponPopup()"><?php echo $button_text; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (!empty($title) && (!empty($description))) { ?>
                        <div class="our_member_img text">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $description; ?></p>
                            <button class="btn" onclick="sponPopup()"><?php echo $button_label; ?></button>
                        </div>
                    <?php } ?>
                    
        <!--             <div id="main_img_popup">-->
        <!--    <div class="container">-->
                
                
        <!--    <div id="main_sub_img_popup">-->
        <!--            <div id="close_popup_spon">-->
        <!--            <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/close.svg" alt="img" onclick="sponPopupClose()">-->
        <!--        </div>-->
                
        <!--    <div class="left_img_popup_spon">-->
        <!--        <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash.png" alt="img">-->
        <!--    </div>-->
        <!--    <div class="right_text_popup_spon">-->
               
        <!--       <h2>Sponsors Name</h2>-->
        <!--       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.-->
        <!--       <p>-->
        <!--    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor-->
        <!--        sit amets. </p>-->
                
        <!--        </p>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--</div>-->

            <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<script>
function sponPopup() {
  document.getElementById("main_img_popup").style.display = "block";
 
}
function sponPopupClose() {
  
  document.getElementById("main_img_popup").style.display = "none";
}
</script>
<?php endif; ?>
