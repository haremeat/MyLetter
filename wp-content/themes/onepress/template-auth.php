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

        <form action="">
            <input type="password" name="" class="index-input input-group">
        </form>
    </div>
</div>


<?php get_footer(); ?>
