<?php
add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {

	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;

	return $file;
}

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<li>',
		'after_widget' => '</li>', 
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
   register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

?>