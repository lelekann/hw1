<?php

function ju_enqueue() {
    wp_register_style('ju_bootstrap', get_template_directory_uri() .'/assets/styles/bootstrap.css');
    wp_register_style('ju_main', get_template_directory_uri() .'/assets/styles/main.css');
    wp_register_style('ju_roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900');
    wp_register_style('ju_roboto_mono', 'https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700');

    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_main');
    wp_enqueue_style('ju_roboto');
    wp_enqueue_style('ju_roboto_mono');

    wp_register_script('ju_fastclick', get_template_directory_uri() .'/assets/vendor/fastclick/fastclick.js');
    wp_register_script('ju_modernizr', get_template_directory_uri() .'/assets/vendor/modernizr/modernizr.js');
    wp_register_script('ju_bootstrap', get_template_directory_uri() .'/assets/scripts/bootstrap.min.js', array(), false, true);
    wp_register_script('ju_rippler', get_template_directory_uri() .'/assets/vendor/rippler/rippler.min.js', array(), false, true);
    wp_register_script('ju_slimscroll', get_template_directory_uri() .'/assets/vendor/slimscroll/slimscroll.min.js', array(), false, true);
    wp_register_script('ju_swipebox', get_template_directory_uri() .'/assets/vendor/swipebox/swipebox.min.js', array(), false, true);
    wp_register_script('ju_dotdotdot', get_template_directory_uri() .'/assets/vendor/dotdotdot/dotdotdot.min.js', array(), false, true);
    wp_register_script('ju_app', get_template_directory_uri() .'/assets/scripts/app.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_fastclick');
    wp_enqueue_script('ju_modernizr');
    wp_enqueue_script('ju_bootstrap');
    wp_enqueue_script('ju_rippler');
    wp_enqueue_script('ju_slimscroll');
    wp_enqueue_script('ju_swipebox');
    wp_enqueue_script('ju_dotdotdot');
    wp_enqueue_script('ju_app');
}

