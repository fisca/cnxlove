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
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css">
        <!-- Latest compiled and minified CSS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() . '?v=' . time(); ?>">


        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->              

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>



        <header class="container">
            <a href="<?php bloginfo('url') ?>"><h1><?php bloginfo('name'); ?></h1></a>
            <p><?php bloginfo('description'); ?></p>

        </header>
        <nav class="container navbar navbar-default">
            <div class="">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="color:#a6a1a1;" class="navbar-brand" href="<?php bloginfo('url') ?>">Home</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">                        
                        <?php $q_pages = new WP_Query(array('post_type' => 'page')); ?>
                        <?php if ($q_pages->have_posts()) : ?>
                            <?php while ($q_pages->have_posts()) : $q_pages->the_post(); ?>
                                <li><a style="color:#a6a1a1;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
