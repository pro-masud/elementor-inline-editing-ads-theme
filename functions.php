<?php 

/**
 * after setup theme
 * */ 
function protheme_after_setup_theme(){
    load_theme_textdomain('ads');
    
    // add theme supports post thumbnails
    add_theme_support("post-thumbnails");

    // add theme supports title-tag
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'protheme_after_setup_theme');


/**
 * enqueue css and js file
 * */ 
function protheme_enqueue_css_js(){
 
    wp_enqueue_style('all-fonts-awesome', get_template_directory_uri() . "/asstes/css/all.css", [], time(), "all");
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/asstes/css/bootstrap.min.css", [], time(), "all");
    wp_enqueue_style('aos', get_template_directory_uri() . "/asstes/css/aos.css", [], time(), "all");
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . "/asstes/css/magnific-popup.css", [], time(), "all");
    wp_enqueue_style('carousel', get_template_directory_uri() . "/asstes/css/owl.carousel.css", [], time(), "all");
    wp_enqueue_style('theme.default', get_template_directory_uri() . "/asstes/css/owl.theme.default.min.css", [], time(), "all");
    wp_enqueue_style('template-main', get_template_directory_uri() . "/asstes/css/style.css", [], time(), "all");
    wp_enqueue_style('template-main-responsive', get_template_directory_uri() . "/asstes/css/responsive.css", [], time(), "all");
    wp_enqueue_style('theme-main', get_stylesheet_uri(), [], time(), "all");


    wp_enqueue_script('jquery', get_template_directory_uri() . "/asstes/js/jquery.min.js", array(), time(), true );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/asstes/js/bootstrap.bundle.min.js", array(), time(), true);
    wp_enqueue_script('aos', get_template_directory_uri() . "/asstes/js/aos.js", array(), time(), true);
    wp_enqueue_script('parallax', get_template_directory_uri() . "/asstes/js/parallax.min.js", array(), time(), true);
    wp_enqueue_script('magnific', get_template_directory_uri() . "/asstes/js/jquery.magnific-popup.min.js", array(), time(), true);
    wp_enqueue_script('carousel', get_template_directory_uri() . "/asstes/js/owl.carousel.min.js", array(), time(), true);
    wp_enqueue_script('main', get_template_directory_uri() . "/asstes/js/main.js", array(), time(), true);
}

add_action("wp_enqueue_scripts", "protheme_enqueue_css_js");