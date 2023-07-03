<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<?php
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container sub_banner_title">
   <div class="header-banner-text">
      <?php if(!empty($banner_title)) { ?>
        <h2><?php echo $banner_title;?></h2>
      <?php } else { ?>
        <h2><?php the_title();?></h2>
      <?php } ?>
      <p><?php echo $content; ?></p>
   </div>
</div>
<section id="breadcrumb">

    <div class="container">

        <ul class="breadcrumb">

            <li><a href="<?php echo site_url('/');?>"><strong>Home </strong></a></li>
            <storng>/</storng>
            <li><a href="<?php echo get_permalink();?>">
                    <?php the_title();?>
                </a>
            </li>

        </ul>

    </div>

</section>

<div class="container">
<div class="u-columns col2-set container" id="customer_login">
   <div class="login_popup_main" id="login_popup">
       
    <div class="u-column1 col-1">
        
        <?php endif; ?>
        <div class="popup_close_test">
            <h2>
            <?php esc_html_e( 'Login', 'woocommerce' ); ?>
        </h2>
        <div id="close_icon_popup" onclick="closeDiv_sign()">
             <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/close.svg" alt="close">
        </div>
       
        </div>
        
        <form class="woocommerce-form woocommerce-form-login login" method="post">
            <?php do_action( 'woocommerce_login_form_start' ); ?>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <!--<label for="username">-->
                <!--    <?php //esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span-->
                <!--        class="required">*</span>-->
                <!--</label>-->
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" placeholder="Username or email address*"
                    id="username" autocomplete="username"
                    value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
                <?php // @codingStandardsIgnoreLine ?>
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <!--<label for="password">-->
                <!--    <?php //esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span>-->
                <!--</label>-->
                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" placeholder="Password*"
                    id="password" autocomplete="current-password" />
            </p>

            <?php do_action( 'woocommerce_login_form' ); ?>

            <p class="form-row">
                <label
                    class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
                        type="checkbox" id="rememberme" value="forever" /> <span>
                        <?php esc_html_e( 'Remember me', 'woocommerce' ); ?>
                    </span>
                </label>
                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                <button type="submit"
                    class="woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"
                    name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">
                    <?php esc_html_e( 'Log in', 'woocommerce' ); ?>
                </button>
            </p>
            <p class="woocommerce-LostPassword lost_password">
                <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">
                    <?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?>
                </a>
            </p>

            <?php do_action( 'woocommerce_login_form_end' ); ?>

        </form>

        <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

    </div>
    </div>
    <section class="account-content">
        <div class="content-block">
            <?php
                $content_block=get_field('content_block');
                if(!empty($content_block)) { ?>
               <?php echo $content_block;?>
                <?php } ?>
           
        </div>
        
    </section>
    <section class="account_login_form_block">
        <div class="u-column2 col-2 new_account-form">
        	<?php 
        	$reg_form_text = get_field('registration_form_content',40);
        	if(!empty($reg_form_text)) { 
	             echo $reg_form_text;
            } ?>
            <h4 class="your_details">Your Details</h4>
            <form method="post" class="woocommerce-form woocommerce-form-register register" <?php
                do_action( 'woocommerce_register_form_tag' ); ?> >
              
                <?php do_action( 'woocommerce_register_form_start' ); ?>
                  <div class="reg_form_input">
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
                        id="reg_username" autocomplete="username" placeholder="Your name*"
                        value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"
                        id="reg_email" autocomplete="email" placeholder="Your email address (Username)*"
                        value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
                </p>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="company"
                        id="company" autocomplete="company" placeholder="Company/Organisation">
                </p>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone"
                        id="company" autocomplete="phone" placeholder="Phone number">
                </p>
                </div>
<hr class="line_buttom">

             <h4>Create A Password</h4>
             
             <div class="pass_conf_block">
                 
             </div>
             
            <div class="change_pass-input">
                <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
                        id="reg_password" autocomplete="new-password" placeholder="Password*" />
                </p>
                <?php else : ?>
                <p>
                    <?php esc_html_e( 'A link to set a new password will be sent to your email address.', 'woocommerce' ); ?>
                </p>
                <?php endif; ?>
               </div>

                <?php do_action( 'woocommerce_register_form' ); ?>
                <div class="woocomerce-subscription-terms">
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                     <lable><input type="checkbox" id="subscribe" name="subscribe"> <span>Subscribe to newsletter</span></label> 
                  </p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> 
                   <lable> <input type="checkbox" id="terms-conditiond" name="terms"><span>I accept terms & conditions</span> <lable></p>
                </div>
                <p class="woocommerce-form-row form-row">
                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    <button type="submit"
                        class="woocommerce-Button woocommerce-button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?> woocommerce-form-register__submit"
                        name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">
                        <?php esc_html_e( 'Create an account', 'woocommerce' ); ?>
                    </button>
                </p>
                
                <?php do_action( 'woocommerce_register_form_end' ); ?>
            </form>
            <hr class="line_buttom">
            <div class="active-account-form">
                <?php
                $heading=get_field('heading');
                if(!empty($heading)) { ?>
                <h2><?php echo $heading;?></h2>
                <?php } ?>
                <!--<span class="hide">Sign in here</span>-->
                 <?php
                $sign_in_text=get_field('sign_in_text');
                if(!empty($sign_in_text)) { ?>
                 <button class="toggle" data-target="myPopup" onclick="showDiv_sign()">Sign in <span class="sign_here"><?php echo $sign_in_text;?></span></button>
                 <?php } ?>
            </div>
        </div>
        <?php
        $registartionform_imge = get_field('registration_form_image',40);
        if(!empty($registartionform_imge)) { ?>
	        <div class="right_img_account_block">
	             <img src="<?php echo $registartionform_imge['url'];?>" alt="">
	        </div>
	    <?php } ?>
    </section>

</div>
</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>


<?php
    $orders = get_field('section_order');
    // echo '<pre>';
    // print_r($orders);
    // echo '</pre>';
    foreach($orders as $order):
        if(!empty($order)):
            set_query_var( 'section_data', $order );
            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );
        endif;
    endforeach;
    ?>
<?php //get_template_part('block-page/block','slider_featured_event');?>
<?php //get_template_part('block-page/block','smb');?>


<script>
    $('.change_pass-input').appendTo('.pass_conf_block');
    $('.confirm_pswd').appendTo('.pass_conf_block');
</script>