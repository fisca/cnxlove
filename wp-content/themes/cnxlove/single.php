<?php get_header(); ?>

<div class="container">
    <div class="row">

        <div class="col-md-8">
            <?php while (have_posts()) : the_post(); ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php the_title(); ?></h3>
                    </div>

                    <div class="page-body">                            
                        <div style="padding: 15px;">
                            <small><?php the_time(get_option('date_format')); ?></small>
                            <small>&nbsp;</small>
                            <small>in 
                                <?php
                                $categories = get_the_category();
                                $separator = ' ';
                                $output = '';
                                if ($categories) {
                                    foreach ($categories as $category) {
                                        $output .= '<a href="' . get_category_link($category->term_id) . '" title="' . esc_attr(sprintf(__("View all posts in %s"), $category->name)) . '">' . $category->cat_name . '</a>' . $separator;
                                    }
                                    echo trim($output, $separator);
                                }
                                ?>
                            </small><p>&nbsp;</p>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php previous_post_link(); ?> 
                <?php next_post_link(); ?>
            <?php endwhile; ?>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>


</div>

<?php get_footer(); ?>