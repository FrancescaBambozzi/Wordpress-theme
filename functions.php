<?php

if ( ! function_exists( 'vanilla_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vanilla_setup() {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'vanilla', get_template_directory() . '/languages' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'vanilla' ),
        'secondary' => __('Secondary Menu', 'vanilla' )
    ) );

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

endif; // vanilla_setup
add_action( 'after_setup_theme', 'vanilla_setup' );


// Custom Logo
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

function vanilla_custom_logo_setup() {
    $defaults = array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'vanilla_custom_logo_setup' );

// To register style and font https://developer.wordpress.org/reference/functions/wp_enqueue_style/
//wp_enque_style ('normalize.css', get_template_directory_uri() . 'css/normalize.css');
//wp_enqueue_style ( 'google_fonts', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );

/**
 * Load CSS into the website's front-end
 */

function vanilla_enqueue_style() {

  wp_enqueue_style('style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'vanilla_enqueue_style' );






//  function vanilla_enqueue_scripts () {

//wp_enqueue_script ('filename', 'get_template_directory_uri' . 'pathofthefile', '', '', 'false');
// }
 // add_action ('wp_enqueue_scripts', 'vanilla_enqueue_script');

?>
