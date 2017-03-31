<?php

function music_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() .'/css/music.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle1', get_template_directory_uri() .'/css/shortcodes.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle2', get_template_directory_uri() .'/css/responsive.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle3', get_template_directory_uri() .'/css/prettyPhoto.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle4', get_template_directory_uri() .'/css/layerslider.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle5', get_template_directory_uri() .'/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs10', get_template_directory_uri().'/js/jquery.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs3', get_template_directory_uri().'/js/jquery-migrate.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs19', get_template_directory_uri().'/js/jquery.validate.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs2', get_template_directory_uri().'/js/jquery-easing-1.3.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs16', get_template_directory_uri().'/js/jquery.sticky.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs12', get_template_directory_uri().'/js/jquery.nicescroll.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs8', get_template_directory_uri().'/js/jquery.inview.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs24', get_template_directory_uri().'/js/validation.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs18', get_template_directory_uri().'/js/jquery.tipTip.minified.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs5', get_template_directory_uri().'/js/jquery.bxslider.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs14', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs13', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs23', get_template_directory_uri().'/js/shortcodes.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/custom.js', array(), '1.0.0', true);

	/*---------------------------------------------------------------------------------------------------
	*
	*							Layer Slider
	*----------------------------------------------------------------------------------------------------*/
	
	
	
	wp_enqueue_script('customjs4', get_template_directory_uri().'/js/jquery-transit-modified.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs21', get_template_directory_uri().'/js/layerslider.kreaturamedia.jquery.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs1', get_template_directory_uri().'/js/greenstock.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs21', get_template_directory_uri().'/js/layerslider.transitions.js', array(), '1.0.0', true);
	
	wp_enqueue_script('customjs6', get_template_directory_uri().'/js/jquery.carouFredSel-6.2.0-packed.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs7', get_template_directory_uri().'/js/jquery.gmap.min.js', array(), '1.0.0', true);
	
	wp_enqueue_script('customjs9', get_template_directory_uri().'/js/jquery.isotope.min.js', array(), '1.0.0', true);
	
	wp_enqueue_script('customjs11', get_template_directory_uri().'/js/jquery.meanmenu.min.js', array(), '1.0.0', true);
	
	
	
	wp_enqueue_script('customjs15', get_template_directory_uri().'/js/jquery.smartresize.js', array(), '1.0.0', true);
	
	wp_enqueue_script('customjs17', get_template_directory_uri().'/js/jquery.tabs.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs20', get_template_directory_uri().'/js/jquery.viewport.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs22', get_template_directory_uri().'/js/modernizr-2.6.2.min.js', array(), '1.0.0', true);
	
	
}

add_action('wp_enqueue_scripts', 'music_script_enqueue');
