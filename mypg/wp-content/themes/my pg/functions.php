<?php 

add_theme_support('menus');
register_nav_menus(array(
    'top-menu' => __('Top Menu','theme')
));

function load_scripts(){
    wp_enqueue_style( 'templats', get_template_directory_uri() . '/css/templats.css', array(), '1.0', 'all' );


add_action( 'wp_enqueue_scripts', 'load_scripts' );




add_theme_support('post-thumbnails');

}
add_action( 'after_setup_theme', 'load_scripts', 0);

// register_nav_menus(
//     array(
//         'my_main_menu' => 'Nav Bar'
//     )
    
    
//     );