<?php



/*

Template Name: Questionnaire

*/

get_header();
$event_id = $_GET['event-id'];

?>
<?php
if (strlen($event_id) > 0) {
    echo do_shortcode(get_field('questionnaire_form_short_code', $event_id));
} else {
    echo "Questionnaire not found!";
}
?>

<?php get_footer(); ?>