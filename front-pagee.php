<?php 

/*
Template Name: Homepage 
*/
global $self;

get_header(); ?>


<?php 

$layout = $self['self-layout-manager']['enabled'];

if($layout){

    foreach ($layout as $key => $value) {
        switch ($key) {
            case 'about': get_template_part('templates-part/about');
                break;

            case 'add-area': get_template_part('templates-part/add-area'); 
                break;

            case 'skills': get_template_part('templates-part/skills');
                break;

            case 'counter': get_template_part('templates-part/counter');
                break;

            case 'portfolio': get_template_part('templates-part/portfolio');
                break;

            case 'testimonials': get_template_part('templates-part/testimonials');
                break;

            case 'blog-area': get_template_part('templates-part/blog-area');
                break;

            case 'contact-area': get_template_part('templates-part/contact-area');
                break;
            

        }
    }

}


?>


	      
	
<?php get_footer(); ?>    