<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); ?><? bloginfo();?></title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <? wp_head();?>
    <link rel='stylesheet' id='fullpage-css' href='<?=get_stylesheet_directory_uri();?>/assets/js/fullPage.js/jquery.fullpage.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='<?=get_stylesheet_directory_uri();?>/assets/css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='<?=get_stylesheet_directory_uri();?>/assets/css/styles.css' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto:700" rel="stylesheet">
    <!-- REVOLUTION SLIDER -->
    <link href="<?=get_template_directory_uri()?>/assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
    <link href="<?=get_template_directory_uri()?>/assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?=get_template_directory_uri()?>/assets/plugins/slider.layerslider/css/layerslider.css" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=get_stylesheet_directory_uri()?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=get_stylesheet_directory_uri()?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=get_stylesheet_directory_uri()?>/assets/faviconms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-99895023-1', 'auto');
    ga('send', 'pageview');

    </script>
</head>

<!--
AVAILABLE BODY CLASSES:
smoothscroll 			= create a browser smooth scroll
enable-animation		= enable WOW animations
bg-grey					= grey background
grain-grey				= grey grain background
grain-blue				= blue grain background
grain-green				= green grain background
grain-blue				= blue grain background
grain-orange			= orange grain background
grain-yellow			= yellow grain background
boxed 					= boxed layout
pattern1 ... patern11	= pattern background
menu-vertical-hide		= hidden, open on click
BACKGROUND IMAGE [together with .boxed class]
data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation font-helvetica
<?php
global $post;
if(is_home()):
echo " page-home ";
endif;
echo $post->post_type . '-' . $post->post_name;
?>">
<!-- wrapper -->
<div id="wrapper">
    <?php // include 'partials/content-header.php';
