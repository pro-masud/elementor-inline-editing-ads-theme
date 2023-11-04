<?php 

/**
 * after setup theme
 * */ 
function protheme_after_setup_theme(){
    load_theme_textdomain('freethemeads');
    
    // add theme supports post thumbnails
    add_theme_support("post-thumbnails");

    // add theme supports title-tag
    add_theme_support('title-tag');

    add_theme_support("custom-header");

    add_theme_support( 'automatic-feed-links' );

    add_theme_support("custom-background");
    // register nav menus header and footer
    register_nav_menus([
        'main-menu' => __("Header Menu", "mistri"),
        'footer-menu' => __("Footer Menu", "mistri"),
    ]);
}

add_action('after_setup_theme', 'protheme_after_setup_theme');


/**
 * enqueue css and js file
 * */ 
function protheme_enqueue_css_js(){
 
    wp_enqueue_style('all-fonts-awesome', get_template_directory_uri() . "/asstes/css/all.css", [], time(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/asstes/css/bootstrap.min.css", [], time(), null);
    wp_enqueue_style('aos', get_template_directory_uri() . "/asstes/css/aos.css", [], time(), null);
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . "/asstes/css/magnific-popup.css", [], time(), null);
    wp_enqueue_style('carousel', get_template_directory_uri() . "/asstes/css/owl.carousel.css", [], time(), null);
    wp_enqueue_style('theme.default', get_template_directory_uri() . "/asstes/css/owl.theme.default.min.css", [], time(), null);
    wp_enqueue_style('template-main', get_template_directory_uri() . "/asstes/css/style.css", [], time(), null);
    wp_enqueue_style('template-main-responsive', get_template_directory_uri() . "/asstes/css/responsive.css", [], time(), null);
    wp_enqueue_style('theme-main', get_stylesheet_uri(), ['template-main-responsive'], time(), null);


    wp_enqueue_script('jquery', get_template_directory_uri() . "/asstes/js/jquery.min.js", array(), time(), true );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/asstes/js/bootstrap.bundle.min.js", array(), time(), true);
    wp_enqueue_script('aos', get_template_directory_uri() . "/asstes/js/aos.js", array(), time(), true);
    wp_enqueue_script('parallax', get_template_directory_uri() . "/asstes/js/parallax.min.js", array(), time(), true);
    wp_enqueue_script('magnific', get_template_directory_uri() . "/asstes/js/jquery.magnific-popup.min.js", array(), time(), true);
    wp_enqueue_script('carousel', get_template_directory_uri() . "/asstes/js/owl.carousel.min.js", array(), time(), true);
    wp_enqueue_script('main', get_template_directory_uri() . "/asstes/js/main.js", array(), time(), true);
}

add_action("wp_enqueue_scripts", "protheme_enqueue_css_js");



/**
 * register widgets 
 * */ 
function ads_widgets_register(){
    register_sidebar([
        'name'              => __('Single Sidebar One', 'mistri'),
        'id'                => 'sidebar_1',
        'description'       =>  __('Sidebar One', 'mistri'),
        'widget_before'     => "<div class='widgets'>",
        'widget_after'      => '</div>',
        'before_title'      => '<h2>',
        'after_title'       => '</h2>',
    ]);
}

add_action('widgets_init', 'ads_widgets_register');


/**
 * post password protected filtering
 * */ 

 function ads_post_password_protected($content){
    if(!post_password_required()){
        return $content;
    }else{
        echo "This Post Password Protected Here, Please Your Password Put Here Now";
    }
 }

 add_filter('the_excerpt', 'ads_post_password_protected');


/**
 * password protected title filering here now
 * */  
function ads_post_title_protected_cheange(){
    return "%s";
}

add_filter('protected_title_format','ads_post_title_protected_cheange');


/**
 * header main menu css class adding
 * */ 

function ads_header_css_class_adding($classcs, $items){
    $classcs[] = "nav-link";
    return $classcs;    
}

add_filter('nav_menu_css_class', 'ads_header_css_class_adding', 10, 2);