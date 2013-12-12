<?php get_header(); ?>

<div class="row">
    <div class="col-md-12 content-1" style="height: 364px;">



    </div>
</div>

<div class="row" style="background-color: rgba(0, 0, 0, 0.40);">
    <div class="col-md-12 content-1">

        <div class="row">
            <?php
            $featuredPosts = new WP_Query();
            $featuredPosts->query('showposts=4');

            while ($featuredPosts->have_posts()) :
                $featuredPosts->the_post();
                ?>

                <div class="col-md-3" 
                     style="padding-top: 10px; 
                     margin: 10px; 
                     background-color: #f2f2f2;
                     border-radius: 0 0 5px 5px">
                    <img style="max-width: 100%; height: auto;" src="<?php echo get_post_meta($post->ID, 'featurethumb', true); ?>">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>                    
                    <p class="readit"><a href="<?php the_permalink() ?>">Read more</a>»</p>
                </div>

            <?php endwhile; ?>

        </div>

    </div>
</div>

<div class="row">

    <div class="col-md-12 content-1">
        <!--Here's where the loop starts-->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--Post box begin-->

                <div style="border-bottom:solid 1px #080808; background-color: white;">
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
