<?php
function cyoa_loading_assets() {
    /*-------------------------------------
    | Styles
    -------------------------------------*/
    wp_register_style( 'css-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.2', 'screen' );
    wp_enqueue_style( 'css-bootstrap' );

    // wp_enqueue_style( 'css-theme' ); // if we are using the style.css in the theme dir
    wp_register_style( 'css-author', get_template_directory_uri() . '/style.css', array('css-bootstrap'), '1.0', 'screen' );
    wp_enqueue_style( 'css-author' ); //our own custom css file


    /*-------------------------------------
    | JavaScript
    -------------------------------------*/
    /* Use my own Jquery -------------------------------*/
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4', false); //load default jquery as dependency
    wp_enqueue_script( 'jquery' );

    /* Bootstrap -------------------------------*/
    wp_register_script( 'js-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' , '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '3.0', true); //load default jquery as dependency
    wp_enqueue_script( 'js-bootstrap' );


    /* Author -------------------------------*/
    wp_register_script( 'js-author', get_template_directory_uri() . '/script.js', array('js-bootstrap'), '1.0', true);
    wp_enqueue_script( 'js-author' );
}

add_action( 'wp_enqueue_scripts', 'cyoa_loading_Assets' );

/*-------------------------------------
| Body Class Slug
-------------------------------------*/
function add_slug_body_class( $classes ){
    global $post;
    if (isset( $post ) ){
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class' );

/*-------------------------------------
| WP Menus
-------------------------------------*/
add_theme_support( 'menus' ); //this enables DB > Appearence > Menus (menus does not show otherwise)

function register_my_menus() {
    register_nav_menus(
    array(
        'main_menu' => __( 'Main Menu' ),
        'social_links' => __( 'Social Links' ),
    )

    );
}
add_action( 'init', 'register_my_menus' );











