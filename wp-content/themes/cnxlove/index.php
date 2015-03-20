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

        <?php // get_sidebar(); ?>
        <div class="col-md-4">
            <ul class="post-list">
                <?php if (have_posts()) : ?>

                    <?php $the_query = new WP_Query('cat=2'); ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <li style="padding-top: 21px;">
                            <a style="float: left; position: relative; color: #19232d; text-decoration: none; transition: all .4s ease-in-out;" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(60, 60)); ?></a>
                            <div style="  margin-left: 75px; min-height: 0;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>                          

                        </li>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div> <!-- /.col-md-4 -->


        <div class="col-md-4">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
        </div> <!-- /.col-md-4 -->

        <div class="col-md-4">

        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
</div> <!-- /.container -->



<?php
get_footer();
