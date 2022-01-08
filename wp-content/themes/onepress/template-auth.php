<?php
/**
<<<<<<< HEAD
 *Template Name: Auth Page
=======
 *Template Name: Auth
>>>>>>> 98c92ebe16cffdf852114c0f1dd6f0b4f5308ff0
 *
 * @package OnePress
 */

//get_header();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );

get_header();


?>

<div class="container border-black index-container">
    <div class="content-area text-center flex-container">
        <div class="index-bars">
            <div class="index-question">
                <p class="fs-1">당신의 비밀번호는 무엇인가요?</p>
            </div>
            <div class="index-bar"></div>
            <div class="index-bar"></div>
            <div class="index-bar last-bar"></div>
        </div>

        <form action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>" id="IndexPassForm" method="post" name="check_hd_password">
            <input type="hidden" name="action" value="check_hd_password">
            <?php wp_nonce_field( 'index_hd_form' ); ?>
            <input type="password" name="hd_password" class="index-input input-group" id="HdPassword">
            <?php wp_nonce_field( 'hd_password'); ?>
            <button type="button" class="btn btn btn-light index-password-submit-btn" onclick="hd_form_submit(this.form)">OK</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>
