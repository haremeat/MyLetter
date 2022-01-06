<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
//define( 'WP_USE_THEMES', true );
//
///** Loads the WordPress Environment and Template */
//require __DIR__ . '/wp-blog-header.php';

define('G5_THEME_URL','/theme');
define('G5_THEME_PATH','/theme');

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Letter</title>

    <link href="<?php echo G5_THEME_URL ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome for icons -->
    <link href="<?php echo G5_THEME_URL ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- flex slider css -->
    <link href="<?php echo G5_THEME_URL ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="<?php echo G5_THEME_URL ?>/css/animate.css" rel="stylesheet" type="text/css" media="screen">

    <link href="<?php echo G5_THEME_URL ?>/css/main.css" rel="stylesheet" type="text/css" media="screen">

    <!-- Revolution Style-sheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/css/rev-style.css">
    <!--owl carousel css-->
    <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
    <!--mega menu -->
    <link href="<?php echo G5_THEME_URL ?>/css/yamm.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
    <!-- slide -->
    <link href="<?php echo G5_THEME_URL ?>/slide/responsive-slider.css" rel="stylesheet">
    <!--cube css-->
    <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
    <!-- chart -->
    <link href="<?php echo G5_THEME_URL ?>/morris/morris.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo G5_THEME_URL ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- 좌측에 고정되어 있는 메뉴를 사용하지 않을지 아래 스타일시트를 제거하시거나 주석처리 해주세요. -->
    <link href="<?php echo G5_THEME_URL?>/css/socialfloating.css" rel="stylesheet">

    <!-- custom css-->
    <link href="<?php echo G5_THEME_URL ?>/css/style_aqours.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo G5_THEME_URL ?>/css/common.css" rel="stylesheet" type="text/css" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>