<?php


//Set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

//Includes
include (get_template_directory() .'/includes/front/enqueue.php');
include (get_template_directory() .'/includes/setup.php');
include (get_template_directory() .'/includes/widget.php');
include (get_template_directory() .'/includes/activate.php');

//Action & Filter Hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');
add_action('after_setup_theme','ju_setup_theme');
add_action('widgets_init','ju_widgets');
add_action('after_switch_theme','ju_activate');

//Shortcodes