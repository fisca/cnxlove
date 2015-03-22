<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Cnxlove
 * @since Cnxlove 1.0
 */
define('WP_USE_THEMES', false);
get_header();
?>


<div class="container" style="padding-right: 0; padding-left: 0;">
    <div class="row">

        <!-- 
        <div class="col-md-4">
            <ul class="post-list">
        <?php if (have_posts()) : ?>
            <?php $the_query = new WP_Query('cat=2'); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                                                                                                                <li>                            
                                                                                                                                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                            
                <?php the_content(); ?>                            
                                                                                                                                                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
            </ul>
        </div>
        -->

        <div class="col-md-8">
            <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>
            <?php $the_query = new WP_Query('posts_per_page=5&paged=' . $paged); ?>
            <?php if ($the_query->have_posts()): ?>               

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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
                                <br><small>&nbsp;</small>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php next_posts_link('Older Entries', $the_query->max_num_pages); ?>
                <?php previous_posts_link('Newer Entries'); ?>

            <?php else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


        </div> <!-- /.col-md-8 -->

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
</div> <!-- /.container -->



<?php
get_footer();
