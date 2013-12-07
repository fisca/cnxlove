<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php wp_title('-', true, 'right'); ?>
            <?php bloginfo('name'); ?>
        </title>

        <link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo bloginfo('template_url'); ?>/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/jquery-ui-1.10.3/ui/jquery-ui.js"></script>

    </head>

    <body class="container">
        
        <div class="row">

            <div class="bannernav"><a href="#" >Privacy Policy</a> &bull; <a href="#" >Contact Us</a> &bull; <a href="#" >Site Map</a></div>

            <!--Title and description start-->    

            <a href="<?php echo get_option('home'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/blog_head.png"  width="300" height="83" alt="CNX Love"  border="0"></a>

            <!--Title and description end-->    

            <div style="clear:both;"></div>

        </div> <!-- /.row -->

        <!--Navbar start-->

        <nav  style="background: rgba(204,204,204,0.5)" class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
            </div>
        </nav>


        <!--Navbar end-->
