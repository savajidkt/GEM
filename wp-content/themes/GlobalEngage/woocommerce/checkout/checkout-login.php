<div class="lrm-signin-section <?php echo !$users_can_register || $is_inline && $default_tab == 'login' ? 'is-selected' : ''; ?>"> <!-- log in form -->
    <form class="lrm-form js-lrm-form" action="#0" data-action="login">
        <h1 class="heading">Do you have an online account?</h1>
        <h2 class="subheading">
          If you already have an account please sign in below
        </h2>
        <div class="internal_form">
          <div>
        <div class="lrm-fieldset-wrap">
        
            <p class="lrm-form-message lrm-form-message--init"></p>

            <div class="fieldset">
                <?php $username_label = esc_attr( lrm_setting('messages/login/username', true) ); ?>
                <input name="username" class="full-width has-padding has-border" type="text" aria-label="<?= $username_label; ?>" placeholder="<?= $username_label; ?>" <?= $fields_required; ?> value="" autocomplete="username" data-autofocus="1">
                <span class="lrm-error-message"></span>
            </div>

            <div class="fieldset">
                <?php $pass_label = esc_attr( lrm_setting('messages/login/password', true) ); ?>
                <input name="password" class="full-width has-padding has-border" type="password" aria-label="<?= $pass_label; ?>" placeholder="<?= $pass_label; ?>" <?= $fields_required; ?> value="">
                <span class="lrm-error-message"></span>
           
            </div>

        </div>

        <div class="fieldset fieldset--submit <?= esc_attr($fieldset_submit_class); ?>">
            <button class=" login full-width has-padding" type="submit">
               Login
            </button>
        </div>
        <div class="fieldset">
           
            <p class="lrm-form-bottom-message"><a href="#0" class="lrm-switch-to--reset-password"><?php echo lrm_setting('messages/login/forgot-password', true); ?></a></p>
        </div>

        <div class="lrm-fieldset-wrap">
            <div class="lrm-integrations lrm-integrations--login">
                <?php do_action( 'lrm/login_form/after' ); ?>
            </div>
        </div>

        <input type="hidden" name="redirect_to" value="<?= $redirect_to; ?>">
        <input type="hidden" name="lrm_action" value="login">
        <input type="hidden" name="wp-submit" value="1">
        <!-- Fix for Eduma WP theme-->
        <input type="hidden" name="lp-ajax" value="login">

        <?php wp_nonce_field( 'ajax-login-nonce', 'security-login' ); ?>
</div></div>
    </form>

    
</div> <!-- lrm-login -->
