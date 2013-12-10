<?php get_header(); ?>

<div class="row" id="blog-content">

    <div class="col-md-12">
        <!--Here's where the loop starts-->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--Post box begin-->

                <div class="box" style="border-bottom:solid 1px #080808;">
                    <h2 class="posttitle">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="metablock">
                        <span class="meta">
                            Posted on 
                            <?php the_time('F j, Y'); ?> 
                            by
                            <?php the_author_posts_link(); ?>
                        </span>
                        <span class="postcomments">
                            <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments', '', 'Comments are off'); ?>
                        </span>
                    </p>

                    <div class="entry">
                        <?php the_content('<p>Continue reading…</p>'); ?>
                        <?php the_tags('<p>Tags:&nbsp;', ', ', '</p>'); ?>
                    </div>
                    <!--<?php trackback_rdf(); ?>--> 

                    <p>&nbsp;</p>

                </div> <!-- /.box -->

                <!--Post box end--> 

                <!--Next is what happens if no posts are found-->

                <?php
            endwhile;
        else:
            ?>
            <div class="box">
                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
            </div>
        <?php endif; ?>
        <p>
            <?php posts_nav_link(); ?>
        </p>
    </div> <!-- /.col-md-12 -->

    <?php /* get_sidebar(); */ ?>

    <div style="clear:both;"></div>    
</div> <!-- /.row -->

<?php get_footer(); ?>
