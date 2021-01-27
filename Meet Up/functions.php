<?php 
if ( ! function_exists( 'meetup_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function meetup_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'meetup', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'meetup' ),
        'secondary' => __('Secondary Menu', 'meetup' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // meetup_setup
add_action( 'after_setup_theme', 'meetup_setup' );

function add_theme_scripts() {
  
  wp_enqueue_style( 'boostrap',     get_template_directory_uri().'/css/bootstrap.min.css',array(),'','all');
  wp_enqueue_style( 'themify-icons',get_template_directory_uri().'/css/themify-icons.css',array(),'','all');
  wp_enqueue_style( 'dosis-font',   get_template_directory_uri().'/css/dosis-font.css',array(),'','all');
  wp_enqueue_style( 'main-style',   get_template_directory_uri().'/css/style.css',array(),'','all');
  wp_enqueue_style( 'style',        get_stylesheet_uri()); 
 
  wp_enqueue_script( 'boot-js',     get_template_directory_uri().'/js/bootstrap.min.js',array( 'jquery' ),true, true);
  wp_enqueue_script( 'easing-js',   get_template_directory_uri().'/js/jquery.easing.min.js',array( 'jquery' ),true, true);
  wp_enqueue_script( 'scrolling-js',get_template_directory_uri().'/js/scrolling-nav.js',array( 'jquery' ),true, true);
  wp_enqueue_script( 'validator-js',get_template_directory_uri().'/js/validator.js',array( 'jquery' ),true, true);
 
   
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


