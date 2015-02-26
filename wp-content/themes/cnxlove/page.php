<?php get_header(); ?>

<div class="container">
    <?php while (have_posts()) : the_post(); ?>    
        <h2><?php the_title(); ?></h2>
        <small><?php the_time(get_option('date_format')); ?></small>
        <p>&nbsp;</p>
        <div><?php the_content(); ?></div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>