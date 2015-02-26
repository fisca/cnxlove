<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Cnxlove
 * @subpackage Cnxlove
 * @since Cnxlove 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() . '?v=' . time(); ?>">

        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script>
            (function () {
                document.documentElement.className = 'js';
            })();
        </script>        

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="container">
            <a href="<?php bloginfo('url') ?>"><h1><?php bloginfo('name'); ?></h1></a>
            <p><?php bloginfo('description'); ?></p>            
        </header>
