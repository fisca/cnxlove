<?php

add_filter('wp_title', 'baw_hack_wp_title_for_home');

function baw_hack_wp_title_for_home($title) {
    if (empty($title) && ( is_home() || is_front_page() )) {
        return __('CNXLove', 'theme_domain') . ' | ' . get_bloginfo('description');
    }
    return $title;
}

add_theme_support('automatic-feed-links');

add_theme_support('post-thumbnails');

/**
 * Register widget area.
 *
 * @since Cnxlove 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cnxlove_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cnxlove_widgets_init' );
