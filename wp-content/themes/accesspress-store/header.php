<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccessPress Store
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<div class="preloader">
    	<div class="logo">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/loader.svg" alt="" width="100" height="100">
        </div>
    </div>
	<div class="main-head-sec">
	<i class="fa fa-phone" aria-hidden="true"></i><span>Order On</span>
	<h4><a href="tel:8866545451" title="Call">886 654 5451</a> , <a href="tel:8866549495" title="Call">886 654 9495</a></h4>
	</div>
<?php
    $header_layout = esc_attr( get_theme_mod( 'accesspress_header_layout_type', 'headertwo' ) );
    if( $header_layout == 'headerone' ){
        get_template_part('header/header', 'one');
    }else{
        get_template_part('header/header', 'two');
    }
?>


<div id="content" class="site-content">