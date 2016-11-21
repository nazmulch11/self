<?php 
add_action('cmb2_admin_init', function(){

	// testimonial Section
	$metabox = new_cmb2_box(array(
		'title'		=> 'Testimonial Info',
		'id'		=> 'testimonial-info',
		'object_types'	=> array('self_testimonial')
	));

	$metabox->add_field(array(
		'name'		=> 'Client Name',
		'desc'		=> 'You can add client name here',
		'id'		=> 'self_client_name',
		'type'		=> 'text'

	));


	$metabox->add_field(array(
		'name'		=> 'Client Status',
		'desc'		=> 'You can add client Status here',
		'id'		=> 'self_client_status',
		'type'		=> 'text'

	));


	$metabox->add_field(array(
		'name'		=> 'Institution Name',
		'desc'		=> 'You can add client Institution name here',
		'id'		=> 'self_client_institution',
		'type'		=> 'text'

	));

	$metabox->add_field(array(
		'name'		=> 'Institution Link',
		'desc'		=> 'You can add client Institution Link here',
		'id'		=> 'self_client_institution_link',
		'type'		=> 'text'

	));

	// counter section
	$metabox = new_cmb2_box(array(
		'title'		=> 'Counter Section Info',
		'id'		=> 'counter-info',
		'object_types'	=> array('self_counter')
	));
 
 	$metabox->add_field(array(
 		'name'	=> 'Counter Icon',
 		'id'	=> 'self-counter-icon',
 		'desc'	=> 'You can add icon here',
 		'type'	=> 'text'

 	));

 	// education
 	$metabox = new_cmb2_box(array(
 		'title'	=> 'Education Section',
 		'id'	=> 'education-section',
 		'object_types'	=> array('self_education')
 	));


 	$metabox->add_field(array(
 		'name'	=> 'Name of Degree',
 		'id'	=> 'name-of-degree',
 		'desc'	=> 'You can add Degree Name',
 		'type'	=> 'text'

 	));

 	$metabox -> add_field(array(
 		'name'	=> 'Year of Passing',
 		'id'	=> 'year-of-passing',
 		'desc'	=> 'The year you passed in the exam',
 		'type'	=> 'text'
 	));


 	// experience
 	$metabox = new_cmb2_box(array(
 		'title'	=> 'Experience Section',
 		'id'	=> 'experience-section',
 		'object_types'	=> array('self_experience')
 	));


 	$metabox->add_field(array(
 		'name'	=> 'Name of Position',
 		'id'	=> 'name-of-position',
 		'desc'	=> 'You can add Degree Name',
 		'type'	=> 'text'

 	));

 	$metabox -> add_field(array(
 		'name'	=> 'Year of Join',
 		'id'	=> 'year-of-joining',
 		'desc'	=> 'The year you passed in the exam',
 		'type'	=> 'text'
 	));



 	// Progress Bar
 	$metabox = new_cmb2_box(array(
 		'title'	=> 'Progress Bar Section',
 		'id'	=> 'progressbar-section',
 		'object_types'	=> array('self_progressbar')
 	));


 	$metabox->add_field(array(
 		'name'	=> 'Progress Value',
 		'id'	=> 'self_progress_value',
 		'desc'	=> 'You can add Progress Value',
 		'type'	=> 'text'

 	));




 	// startegy 
 	$metabox = new_cmb2_box(array(
 		'title'	=> 'Startegy Section',
 		'id'	=> 'self-startegy-section',
 		'object_types'	=> array('self_startegy')
 	));


 	$metabox->add_field(array(
 		'name'	=> 'Startegy Keyword',
 		'id'	=> 'self_startegy_keyword',
 		'desc'	=> 'You can add Startegy Key Word',
 		'type'	=> 'text'

 	));



 	$metabox->add_field(array(
 		'name'	=> 'Startegy Description',
 		'id'	=> 'self_startegy_description',
 		'desc'	=> 'You can add Startegy Description',
 		'type'	=> 'textarea'

 	));


 	$metabox->add_field(array(
 		'name'	=> 'Startegy Icon',
 		'id'	=> 'self_startegy_icon',
 		'desc'	=> 'You can add Startegy Icon',
 		'type'	=> 'text'

 	));


 	// Services 
 	$metabox = new_cmb2_box(array(
 		'title'	=> 'Services Section',
 		'id'	=> 'self-services-section',
 		'object_types'	=> array('self_services')
 	));


 	$metabox->add_field(array(
 		'name'	=> 'Service Icon',
 		'id'	=> 'self_service_icon',
 		'desc'	=> 'You can add Service Icon',
 		'type'	=> 'text'

 	));


 	





}); 

?>