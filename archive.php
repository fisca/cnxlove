<?php
define('WP_USE_THEMES', false);
get_header();
?>
<?php if (have_posts()) : ?>    
    <div class="container" style="padding-right: 0; padding-left: 0;">
        <div class="row">

            <div class="col-md-8">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
                ?>

                <?php while (have_posts()) : the_post(); ?>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>

                        <div class="page-body">                            
                            <div style="padding: 15px;">
                                <small><?php the_time(get_option('date_format')); ?></small>
                                in <small>
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
                                </small>
                                <p>&nbsp;</p>
                                <div><?php the_content(); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>

        </div>

    </div>

<?php endif; ?>



<?php
get_footer();
