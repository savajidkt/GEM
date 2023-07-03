<?php if(!empty($section_data)): 
	 $show_signup_form = $section_data['show_signup_form'];
	 if($show_signup_form[0] == 'show') {
?>
<section class="sign-up-block">
    <div class="container">
        <div class="form-single-line">
            <h2>sign up & stay informed</h2>
            <?php echo do_shortcode( '[contact-form-7 id="1615" title="Signup form with two fields"]' );?>
        </div>
    </div>
</section>
<?php } endif;?>