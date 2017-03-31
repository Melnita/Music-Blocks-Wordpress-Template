<?php

function music_script_enqueue() {
	wp_enqueue_style('customstyle', get_template_directory_uri() .'/css/music.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle1', get_template_directory_uri() .'/css/shortcodes.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle2', get_template_directory_uri() .'/css/responsive.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle3', get_template_directory_uri() .'/css/prettyPhoto.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle4', get_template_directory_uri() .'/css/layerslider.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle5', get_template_directory_uri() .'/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/custom.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'music_script_enqueue');
