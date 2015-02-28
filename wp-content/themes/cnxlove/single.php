<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            <?php while (have_posts()) : the_post(); ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php the_title(); ?></h3>
                    </div>

                    <div class="page-body">                            
                        <div style="padding: 15px;">
                            <small><?php the_time(get_option('date_format')); ?></small>
                            <br><small>&nbsp;</small>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php previous_post_link(); ?> 
                <?php next_post_link(); ?>
            <?php endwhile; ?>
        </div>
    </div>


</div>

<?php get_footer(); ?>