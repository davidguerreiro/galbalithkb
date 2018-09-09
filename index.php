<?php
/**
 * Main theme file
 * 
 * @package galbalith
 */


 $cover_image   = get_template_directory_uri() . '/assets/img/web_cover.png';
 $page_id       = get_the_ID();
 $nonce         = wp_create_nonce( 'login' );

 if ( isset( $_GET['error-key'] ) ) {
     $notification = dd_get_form_notification( $_GET['error-key'] );
 }

 
 get_header();

 ?>

    <img src="<?php echo esc_url( $cover_image ); ?>" alt="cover" class="main__cover-image">
    <form action="" method="post" class="login-form">
        <input type="hidden" name="page-id" value="<?php echo $page_id; ?>">
        <input type="hidden" name="action" value="login">
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>">
        <?php if ( isset( $notification ) && ! empty( $notification) ) : ?>
            <div class="login-form__row">
                <p class="login-form__nortification">
                    <?php echo esc_html( $notification ); ?>
                </p>
            </div>
        <?php endif; ?>
        <div class="login-form__row">
            <label for="user-mail" class="login-form__text-label">
                Email :
            </label>
            <input type="email" name="user-email" id="user-email" class="login-form__text-input" required>
        </div>
        <div class="login-form__row">
            <label for="user-pass" class="login-form__text-label">
                Contraseña :
            </label>
            <input type="password" name="user-pass" id="user-pass" class="login-form__text-input" required>
        </div>
        <div class="login-form__row">
            <input type="submit" value="Entrar" class="login-form__submit-input">
        </div>
    </form>
    


 <?php get_footer();