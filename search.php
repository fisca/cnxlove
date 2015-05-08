<?php get_header(); ?>

<div class="container">
    <h2><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h2>
</div>

<?php
get_footer();
