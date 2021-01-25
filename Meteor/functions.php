<?php 
	
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(array(
	'topmenu'=>__('Main Menu','metor')
));

function meteor_css_js(){
	wp_enqueue_style('meteor-bootstrap',       get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('meteor-bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css');
	wp_enqueue_style('meteor-fontAwesome',     get_template_directory_uri().'/css/fontAwesome.css');
	wp_enqueue_style('meteor-hero-slider',     get_template_directory_uri().'/css/hero-slider.css');
	wp_enqueue_style('meteor-tooplate-style',  get_template_directory_uri().'/css/tooplate-style.css');
	wp_enqueue_style('meteor-style',           get_stylesheet_uri());
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('meteor-bootstrap-js', get_template_directory_uri().'/js/vendor/bootstrap.min.js',['jquery'],true,true);
	wp_enqueue_script('meteor-plugin-js',    get_template_directory_uri().'/js/plugins.js',['jquery'],true,true);
	wp_enqueue_script('meteor-main-js',      get_template_directory_uri().'/js/main.js',['jquery'],true,true);	
}
add_action("wp_enqueue_scripts","meteor_css_js");

