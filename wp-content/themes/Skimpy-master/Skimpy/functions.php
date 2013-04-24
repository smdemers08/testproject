<?php
// I've included some basic functionality here just to save you some time from having to add all this yourself.

// thumbnails
add_theme_support( 'post-thumbnails' );
// custom menus
add_theme_support( 'menus' );
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}
// registers the sidebar
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<li class="widget">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
// A little credit on the dashboard footer... You can get rid of this or change it if you'd like. But if you feel like you want to support the creator, please leave it. I'd appreciate it. It's not like anyone is really going to see it anyways.
function remove_footer_admin () {
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.levigideon.com" target="_blank">Levi Gideon Design</a></p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
// enables threaded comments
function enable_threaded_comments(){
if (!is_admin()) {
if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
wp_enqueue_script('comment-reply');
}
}
add_action('get_header', 'enable_threaded_comments');


// I've also included a few useful functions that you may or may not use. 

// This one changes the length of post summaries
// function new_excerpt_length($length) {
// return 100;
// }
// add_filter('excerpt_length', 'new_excerpt_length');

?>