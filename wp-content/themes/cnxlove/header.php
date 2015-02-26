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
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
        <link rel="stylesheet" href="">
        
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
            <h2><?php bloginfo('name'); ?></h2>
            <p><?php bloginfo('description'); ?></p>            
        </header>
        