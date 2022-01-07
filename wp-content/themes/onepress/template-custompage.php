<?php
/**
<<<<<<< HEAD
 *Template Name: Letter Page
=======
 *Template Name: Letter Page
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

$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
echo "<p>User count is {$user_count}</p>";
?>


<div class="container">
    <div class="content-area">

    </div>
</div>


