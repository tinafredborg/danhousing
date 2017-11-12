<?php

function danhousing_resources() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/danhousing.css',  array(), '1.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/danhousing.js',  array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'danhousing_resources');


// Theme setup
function danhousing_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Header Navigation'),
		'footer' => __( 'Footer Navigation'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnail');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 1024, 210, array('left', 'top'));
}

add_action('init', 'danhousing_setup');


add_theme_support('custom-background');

	//Sidebar function

	function danhousing_widget_setup(){

		register_sidebar(
			array(
				'name' => 'Sidebar',
				'id' => 'sidebar-left',
				'class' => 'custom-sidebar',
				'description' => 'filter search',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' =>'</aside>',
				'before_title' => '<h1 class="widget-title">',
				'after_title' => '</h1>'
			)
		);
	}

	add_action('widgets_init', 'danhousing_widget_setup');
	




