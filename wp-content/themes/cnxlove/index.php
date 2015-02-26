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


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
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
                    <?php
                endwhile;
            else:
                ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>

</div>

<?php
get_footer();
