<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title('-',true,'right'); ?>
<?php bloginfo('name'); ?>
</title>
<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div class="bannerArea">
  <div class="container">
    <div class="bannernav"><a href="#" >Privacy Policy</a> &bull; <a href="#" >Contact Us</a> &bull; <a href="#" >Site Map</a></div>
    
    <!--Title and description start-->    
    
    <a href="<?php echo get_option('home');?>"><img src="<?php bloginfo('template_url'); ?>/images/blog_head.png"  width="300" height="83" alt="CNX Love"  border="0" /></a>
      
     <!--Title and description end-->    

    <div style="clear:both;"></div>
  </div>
</div>

<!--Navbar start-->

<div class="topnavigationArea">
  <div class="container">
    <div class="topnavigationgroup"> 
      navigation goes here 
    </div>
    <div style="clear:both;"></div>
  </div>
</div>

<!--Navbar end-->
