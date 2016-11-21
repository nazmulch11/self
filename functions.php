<?php 


/**
*
*
* Self Theme Functions
*
*
*/
add_action('after_setup_theme', function(){
	// let wordPress bring a titil automatically
		add_theme_support('title-tag');


	// feature image
	add_theme_support('post-thumbnails');





	// custom post


	/**
	*
	* testimonials
	*
	*/

	register_post_type('self_testimonial', array(
		'label'		=> 'Testimonials',
		'labels'	=> array(
			'name'			=> 'Testimonials',
			'add_new'		=> 'Add New Testimonial',
			'add_new_item'	=> 'Add New Testimonial'	
		),
		'public'	=> true,
		'supports'	=> array('title', 'editor', 'thumbnail', 'custom-post')
	));


	/**
	*
	* portfolio
	*
	*/

	register_post_type('self_portfolio', array(
		'label'			=> 'Portfolios',
		'labels'		=> array(
			'name'		=> 'Portfolios',
			'add_new'	=> 'Add New Portfolio',
			'add_new_item' => 'Add New Portfolio'
		),
		'public'	=> true,
		'supports'	=> array('title', 'editor', 'thumbnail')


	));


	register_taxonomy('self_portfolio_cat', 'self_portfolio', array(
				'label'		=> 'Categorys',
				'labels'	=> array(
					'name'			=> 'Categorys',
					'add_new'		=>  'Add New Category',
					'add_new_item'	=>  'Add New Category',
				)
	));








	/**
	*
	* startegy
	*
	*/
	if( !post_type_exists('self_services') ){


		register_post_type('self_services', array(
			'label'		=> 'services',
			'labels'	=> array(
					'name'	=> 'services',
					'add_new'	=> 'Add New Service',
					'add_new_item'	=> 'Add New Service'
				),
			'public'	=> true,
			'menu_icon' => '',
			'supports'	=> array('title', 'editor')
		));


	}

	/**
	*
	* sliders
	*
	*/
	if( !post_type_exists('self_sliders') ){


		register_post_type('self_sliders', array(
			'label'		=> 'Sliders',
			'labels'	=> array(
					'name'	=> 'Sliders',
					'add_new'	=> 'Add New Slider',
					'add_new_item'	=> 'Add New Slider'
				),
			'public'	=> true,
			'menu_icon'	=> 'dashicons-money',
			'supports'	=> array('title')
		));


	}




});





/**
*
*
* Self Theme css, js and conditional files
*
*
*/
require_once('inc/self-theme-files.php');




/**
*
*
* CMB2 Metabox
*
*
*/
require_once('libs/metabox/init.php');
require_once('libs/metabox/custom-cmb.php');



/**
*
*
* Redux Framework
*
*
*/
require_once('libs/redux/ReduxCore/framework.php');
require_once('libs/redux/sample/barebones-config.php');



/**
*
*
*
* Shortcode Start
*
*/
require_once('inc/self-shortcodes.php');