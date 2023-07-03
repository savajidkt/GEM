<?php if (!empty($section_data)) :
    $heading = $section_data['heading'];
    $date_field = $section_data['date_field'];
    $table_heading = $section_data['table_heading'];
    $table_heading_1 = $section_data['table_heading_1'];
    $table_heading_2 = $section_data['table_heading_2'];
    $table_heading_3 = $section_data['table_heading_3'];
    $table_content = $section_data['table_content'];
?>
<section id="conference_agenda">
    <div class="container">
    <div class="agenda_overview">
        <?php if (!empty($heading)) { ?>
            <h1><?php echo $heading; ?></h1>
        <?php } ?>

        <div class="agenda_table">
            <table>
                <thead>
                    <?php if (!empty($date_field) && !empty($table_heading) && !empty($table_heading_1) && !empty($table_heading_2) && !empty($table_heading_3)) { ?>
                        <tr>
                            <th><?php echo $date_field; ?></th>
                            <th><?php echo $table_heading; ?></th>
                            <th><?php echo $table_heading_1; ?></th>
                            <th><?php echo $table_heading_2; ?></th>
                            <th><?php echo $table_heading_3; ?></th>
                        </tr>
                    <?php } ?>
                </thead>
                <?php if (!empty($table_content)) { ?>
                    <tbody>
                        <?php foreach ($table_content as $content) {
                            $date_content = $content['date_content'];
                            $table_content_1 = $content['table_content_1'];
                            $table_content_2 = $content['table_content_2'];
                            $table_content_3 = $content['table_content_3'];
                            $table_content_4 = $content['table_content_4'];
                        ?>
                            <tr>
                                <?php if (!empty($date_content) && !empty($table_content_1) && !empty($table_content_2) && !empty($table_content_3) && !empty($table_content_4)) { ?>
                                    <td><?php echo $date_content; ?></td>
                                    <td><?php echo $table_content_1; ?></td>
                                    <td><?php echo $table_content_2; ?></td>
                                    <td><?php echo $table_content_3; ?></td>
                                    <td><?php echo $table_content_4; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    </div>
    </section>
<?php endif; ?>
