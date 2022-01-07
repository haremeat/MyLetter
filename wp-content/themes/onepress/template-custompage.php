<?php
/**
<<<<<<< HEAD
 *Template Name: Custom Page
=======
 *Template Name: Full Width - Contained Content
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
?>

<?php
// oh wow 드디어 커스텀 페이지를 만들 수 있겠구만 킄킄

$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
echo "<p>User count is {$user_count}</p>";
?>

<p>heheheheh22</p>

<?php //get_footer(); ?>
