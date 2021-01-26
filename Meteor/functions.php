<?php 
	
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(array(
	'topmenu'=>__('Main Menu','metor')
));



function meteor_custom_posts(){
	register_post_type('slider',array(
		'public' => true,
		'labels' => array(
			'name'    			=> __("Slider","meteor"),
			'add_new' 			=> __("Add New","meteor"),
			'add_new_item'  	=> __("Add New Slider","meteor"),
			'edit_item'      	=> __("Edit Slider","meteor"),
			'all_items'     	=> __("All Sliders","meteor"),
			'featured_image'	=> __("Slider Image","meteor"),
			'set_featured_image'=> __("Set Slider Image","meteor"),				
		),
		'supports'		=> array('title','editor','thumbnail'),
		'menu_position'	=>10,
		'menu_icon' 	=> 'dashicons-images-alt2',
		'taxonomies'	=> array('category','post_tag')
	));
}
add_action("init","meteor_custom_posts");

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

