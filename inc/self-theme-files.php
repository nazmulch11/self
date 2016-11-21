<?php 


add_action('wp_enqueue_scripts', function(){
	
	/**
	*
	*
	* Theme CSS Files
	*
	*
	*/
	wp_register_style('self-Lato', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,300', array(), '1.0.0', 'all');

	wp_register_style('self-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.1', 'all');


	wp_register_style('self-animated', get_template_directory_uri().'/css/animated.css', array(), '1.0.2', 'all');

	wp_register_style('self-owl-carousel', get_template_directory_uri().'/css/owl.carousel.css', array(), '1.0.3', 'all');

	wp_register_style('self-transitions', get_template_directory_uri().'/css/owl.transitions.css', array(), '1.0.4', 'all');

	wp_register_style('self-font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '1.0.5', 'all');

	wp_register_style('self-animate', get_template_directory_uri().'/css/animate.css', array(), '1.0.6', 'all');

	wp_register_style('self-responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0.7', 'all');




	wp_enqueue_style('self-Lato');

	wp_enqueue_style('self-bootstrap');

	wp_enqueue_style('self-animated');

	wp_enqueue_style('self-owl-carousel');

	wp_enqueue_style('self-transitions');

	wp_enqueue_style('self-font-awesome');
	
	wp_enqueue_style('self-animate');	

	wp_enqueue_style('self-style', get_stylesheet_uri() );

	wp_enqueue_style('self-responsive');


	/**
	*
	*
	*  them header js file
	*
	*
	*/
	wp_register_script('self-modernizr', get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js', array(), '2.0.1');


	wp_enqueue_script('self-modernizr');



	/**
	*
	*
	* Footer JS Files
	*
	*/
	wp_register_script('self-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.0.1', true);

	// wp_register_script('self-maps-api', '//maps.googleapis.com/maps/api/js', array('jquery'), '3.0.2', true);

	// wp_register_script('self-custom-map',  get_template_directory_uri().'/js/custom-map.js', array('jquery'), '3.0.3', true);

	wp_register_script('self-owl-carousel',  get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '3.0.4', true);

	wp_register_script('self-easing',  get_template_directory_uri().'/js/easing.js', array('jquery'), '3.0.5', true);

	wp_register_script('self-appear',  get_template_directory_uri().'/js/jquery.appear.js', array('jquery'), '3.0.6', true);

	wp_register_script('self-animated',  get_template_directory_uri().'/js/animated.js', array('jquery'), '3.0.7', true);

	wp_register_script('self-mixitup',  get_template_directory_uri().'/js/jquery.mixitup.min.js', array('jquery'), '3.0.8', true);

	wp_register_script('self-wow',  get_template_directory_uri().'/js/wow.min.js', array('jquery'), '3.0.9', true);

	wp_register_script('self-counterup',  get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery'), '4.0.0', true);

	wp_register_script('self-waypoints',  get_template_directory_uri().'/js/waypoints.js', array('jquery'), '4.0.1', true);

	wp_register_script('self-plugins',  get_template_directory_uri().'/js/plugins.js', array('jquery'), '4.0.2', true);

	wp_register_script('self-main',  get_template_directory_uri().'/js/main.js', array('jquery'), '4.0.3', true);



	wp_enqueue_script('self-bootstrap');
	// wp_enqueue_script('self-maps-api');
	// wp_enqueue_script('self-custom-map');
	wp_enqueue_script('self-owl-carousel');
	wp_enqueue_script('self-easing');
	wp_enqueue_script('self-appear');
	wp_enqueue_script('self-animated');
	wp_enqueue_script('self-mixitup');
	wp_enqueue_script('self-wow');
	wp_enqueue_script('self-counterup');
	wp_enqueue_script('self-waypoints');
	wp_enqueue_script('self-plugins');
	wp_enqueue_script('self-main');

});