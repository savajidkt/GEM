<?php if (!empty($section_data)): 
    $heading = $section_data['heading'];
    $description = $section_data['description'];
    $timetable_details = $section_data['timetable_details'];
    $time_table_right_image = $section_data['time_table_right_image'];
?>
<section>
    <div class="container">
        <div class="main_web_timetable">
            <div class="left_side_text_web_timetable">
                <?php if (!empty($heading)) { ?>
                <h2>
                    <?php echo $heading;?>
                </h2>
                <?php } ?>
                <?php if (!empty($description)) { ?>
                <?php echo $description;?>
                <?php } ?>
                <div class="time_table_data_text">
                    <?php if (!empty($timetable_details)) { ?>
                <?php foreach ($timetable_details as $timetable) {
                    $time = $timetable['time'];
                    $image = $timetable['image'];
                    $image_1 = $timetable['image_1'];
                    $title = $timetable['title'];
                    $description=$timetable['description'];
                    
            ?>
                    <ul>
                         <?php if (!empty($time) && !empty($image) && !empty($title)) { ?>
                        <li class="time-wb">  <?php echo $time;?></li>
                        <li><img src="<?php echo $image['url'];?>" alt="<?php echo $image['url'];?>"></li>
                        <li class="time-wb_text"><?php echo $title;?></li>
                        <?php } ?>
                    </ul>
                     <ul>
                       <?php if (!empty($image_1) && !empty($description)) { ?>
                         <li class="time-wb_vis_hid">9:00</li>
                         <li class="sub_img_time_data"><img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>"></li>
                        <li class="sub_text_time_data"><?php echo $description; ?></li>
                    <?php } ?>
                    </ul>
                   
                    <?php } } ?>
                </div>
            </div>
             <?php if (!empty($time_table_right_image)) { ?>
            <div class="right_side_text_web_timetable_img">
               <img src="<?php echo $time_table_right_image['url'];?>" alt="<?php echo $time_table_right_image['url'];?>" />
            </div>
            <?php } ?>
        </div>
        
    </div>
</section>
<?php endif; ?>
