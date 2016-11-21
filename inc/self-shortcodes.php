<?php 

/**
*
* Services Shortcode
*
*/


// service wrapper
add_shortcode('self_service_area', 'self_skill_fn');

function self_skill_fn($atts, $content){

ob_start();
?>

		<div id ="about" class="about-area page-scroll area-padding">
			<div class="container">

			<?php echo do_shortcode($content); ?>


			</div>
		</div>

<?php return ob_get_clean();
}


/**
*
*
* service title
*
*
*/
add_shortcode('self_service_title', 'self_service_title_fn');

function self_service_title_fn( $atts, $content){
	extract( shortcode_atts(array(
		'title' => 'What I do.'

	), $atts) );

	ob_start();
?>

			    <!-- section head -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-head">
						    <h3><?php echo $title; ?></h3>
						</div>
					</div>
				</div>
				<!-- end row -->



<?php return ob_get_clean();

}

/**
*
*
* single service
*
*
*/
 
add_shortcode('self_service', 'self_services_fn');


function self_services_fn($atts, $content){
extract( shortcode_atts(array(
	'count'	=> -1

), $atts) );

ob_start();
?>


		<div class="row second-row">
<?php

$q = new WP_Query(array(
	'post_type'	=> 'self_services',
	'posts_per_page' => $count
));


while( $q->have_posts() ):$q->the_post(); 

$service_icon = get_post_meta(get_the_id(), 'self_service_icon', true);

?>

		    <div class="col-md-3 col-sm-4">
		        <div class="about-details text-center">
		            <div class="single-about">
		                <a class="about-icon" href="<?php the_permalink(); ?>">
		                	<i class="fa fa-<?php echo $service_icon; ?>"></i>
		                </a>
		                <h4><?php the_title(); ?></h4>
		                <?php the_content(); ?>
		            </div>
		        </div>
		        
		    </div>
<?php endwhile; ?>

	</div>

                
<?php return ob_get_clean();
}




/**
*
*
* image left and introduction
*
*
*/
 
add_shortcode('self_image_left', 'self_image_left_fn');


function self_image_left_fn($atts, $content){
extract( shortcode_atts(array(
	'self_img'	=> get_template_directory_uri().'/img/background/bg4.jpg',
	'self_img_link' => 'http://facebook.com/tajulislamdu',
	'self_img_name' => 'Md. Tajul Islam',
	'self_title'	=> 'Introduction here',
	'self_bio'		=> 'Hi, there! I am Mohammad Tajul Islam. Currently working as a WordPress Developer. I am always passionate about Website Development, love to create modern Website & provide great client support.',
	'self_birth'	=> '02 June, 1986',
	'self_professional'	=> 'WordPress Developer',
	'self_state'	=> 'Gaibandha',
	'self_country'	=> 'Bangladesh',
	'self_cv_download'	=> 'http://downloadmy.cv',


), $atts) );

ob_start();
?>

		<div class="row fix">
		    <div class="col-md-6 col-sm-6">
		        <div class="self-img">
		            <a href="<?php echo $self_img_link; ?>"><img src="<?php echo $self_img; ?>" alt="<?php echo $self_img_name; ?>"></a>
		        </div>
		    </div>
		    <div class="col-md-6 col-sm-6">
                <!-- about-self -->
		        <div class="about-self">
		            <div class="self-head">
		                <h4 class="intro-head"><?php echo $self_title; ?></h4>
		                <p><?php echo $self_bio; ?></p>
		            </div>
		            <div class="self-text">
		                <ul>
		                    <li>Date Of Birth : <?php echo $self_birth; ?></li>
		                    <li><?php echo $self_professional; ?></li>
		                    <li>State: <?php echo $self_state; ?></li>
		                    <li>Country: <?php echo $self_country; ?></li>
		                </ul>
		            </div>
		            <div class="download-cv">
		                <a href="<?php echo $self_cv_download; ?>">Download CV</a>
		            </div>
		        </div>
		        <!-- end about-self -->
		    </div>
		</div>
                
<?php return ob_get_clean();
}

/**
*
*
* introduction and image right
*
*
*/
 
add_shortcode('self_image_right', 'self_image_right_fn');


function self_image_right_fn($atts, $content){
extract( shortcode_atts(array(
	'self_img'	=> get_template_directory_uri().'/img/background/bg4.jpg',
	'self_img_link' => 'http://facebook.com/tajulislamdu',
	'self_img_name' => 'Md. Tajul Islam',
	'self_title'	=> 'Introduction here',
	'self_bio'		=> 'Hi, there! I am Mohammad Tajul Islam. Currently working as a WordPress Developer. I am always passionate about Website Development, love to create modern Website & provide great client support.',
	'self_birth'	=> '02 June, 1986',
	'self_professional'	=> 'WordPress Developer',
	'self_state'	=> 'Gaibandha',
	'self_country'	=> 'Bangladesh',
	'self_cv_download'	=> 'http://downloadmy.cv',


), $atts) );

ob_start();
?>

		<div class="row fix">

		    <div class="col-md-6 col-sm-6">
                <!-- about-self -->
		        <div class="about-self">
		            <div class="self-head">
		                <h4 class="intro-head"><?php echo $self_title; ?></h4>
		                <p><?php echo $self_bio; ?></p>
		            </div>
		            <div class="self-text">
		                <ul>
		                    <li>Date Of Birth : <?php echo $self_birth; ?></li>
		                    <li><?php echo $self_professional; ?></li>
		                    <li>State: <?php echo $self_state; ?></li>
		                    <li>Country: <?php echo $self_country; ?></li>
		                </ul>
		            </div>
		            <div class="download-cv">
		                <a href="<?php echo $self_cv_download; ?>">Download CV</a>
		            </div>
		        </div>
		        <!-- end about-self -->
		    </div>

		    <div class="col-md-6 col-sm-6">
		        <div class="self-img">
		            <a href="<?php echo $self_img_link; ?>"><img src="<?php echo $self_img; ?>" alt="<?php echo $self_img_name; ?>"></a>
		        </div>
		    </div>
		</div>
                
<?php return ob_get_clean();
}



/**
*
*
*
* Advertisement Section
*
*
*/

add_shortcode('self_add_section', 'self_add_section_fn');

function self_add_section_fn( $atts, $content){
	extract( shortcode_atts(array(
		'title'	=> 'Getting started with us',
		'text'	=> 'Sign up free'

	), $atts) );
ob_start();
?>

<div class="add-area area-margin" style="background: url(<?php echo get_template_directory_uri(); ?>/img/background/bg5.jpg);">
    <div class="head-overly"></div>
    <div class="container">
        <div class="row">
            <div class="add-text">
                <div class="col-md-6 col-sm-6">
                    <div class="add-content">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="add-button text-center">
                        <a class="custom-btn add-btn"><?php echo $text; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php return ob_get_clean();
}


/**
*
*
*
* Skill wrapper shortcode
*
*
*/
add_shortcode('skill_area', 'skill_area_fn');

function skill_area_fn($atts, $content){
extract( shortcode_atts(array(
	'title'		=> 'Skill.'
), $atts) );
ob_start();
?>

		<div id ="skills" class="skill-area page-scroll area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-head">
						    <h3><?php echo $title; ?></h3>
						    
						</div>
					</div>
				</div>

				<?php echo do_shortcode($content); ?>
			</div>
		</div>

				


<?php return ob_get_clean();
}



/**
*
*
*
* idea and progressbar wrapper shortcode
*
*
*/
add_shortcode('idea_progressbar_area_wrapper', 'idea_progressbar_area_fn');

function idea_progressbar_area_fn($atts, $content){
extract( shortcode_atts(array(
	'title'		=> 'Skill.'
), $atts) );
ob_start();
?>

		<div class="row second-row">

		<?php echo do_shortcode($content); ?>	

		</div>

<?php return ob_get_clean();
}




/**
*
* work startegy
*
*/
add_shortcode('self_work_startegy', 'self_work_startegy_fn');

function self_work_startegy_fn($atts, $content){
	extract( shortcode_atts(array(
		'title'	=> 'Work startegy',
		'work_startegy_one_title' => 'Ideaa',
		'work_startegy_one_text' => 'I have an Special Idea Web Developmenta',
		'work_startegy_two_title' => 'Approve',
		'work_startegy_two_text' => 'I have an Special Idea Web Development',
		'work_startegy_three_title' => 'Brand Identify',
		'work_startegy_three_text' => 'I have an Special Idea Web Developmenta',
		'work_startegy_four_title' => 'Live Work',
		'work_startegy_four_text' => 'I have an Special Idea Web Developmenta',
	), $atts) );
ob_start();
?>
<div class="col-md-6 col-sm-6">
    <!-- Skills Content -->
    <div class="skills-content">
        <div class="skills-details">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ex blanditiis consequuntur ab odio sed totam in rerum, illum amet facere ipsam quibusdam perferendis odit,Lorem ipsum dolor sit amet, consectetur perspiciatis quaerat </p>
        </div>
    <div class="skills-idea">
        <h4 class="intro-head"><?php echo $title; ?></h4>
        <ul>
            <li><a href="#"><i class="fa fa-lightbulb-o"></i><?php echo $work_startegy_one_title; ?> :</a><?php echo $work_startegy_one_text; ?></li>
            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><?php echo $work_startegy_two_title; ?> :</a><?php echo $work_startegy_two_text; ?></li>
            <li><a href="#"><i class="fa fa-pencil"></i><?php echo $work_startegy_three_title; ?> :</a><?php echo $work_startegy_three_text; ?></li>
            <li><a href="#"><i class="fa fa-line-chart"></i><?php echo $work_startegy_four_title; ?> :</a><?php echo $work_startegy_four_text; ?></li>
        </ul>
    </div>
    </div>
    </div>


<?php return ob_get_clean();
}


/**
*
* skill progress
*
*/
add_shortcode('self_progress', 'self_progress_fn');

function self_progress_fn($atts, $content){
	extract( shortcode_atts(array(
		'title'	=> 'Work startegy',
		'progress_one_title' => 'HTML',
		'progress_one_text' => 50,
		'progress_two_title' => 'CSS',
		'progress_two_text' => 70,
		'progress_three_title' => 'WordPress Tj',
		'progress_three_text' => 90,
		'progress_four_title' => 'Joomla',
		'progress_four_text' => 76,	
		'progress_five_title' => 'PHP',
		'progress_five_text' => 76,
	), $atts) );
ob_start();
?>
	<div class="col-md-6 col-sm-6">
        <!-- Skills Progressbar -->
        <div class="skill-progress">
            <h4 class="web-ex"><?php echo $progress_one_title; ?></h4>
            <div class="progress">
                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="<?php echo $progress_one_text; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_one_text; ?>%;"></div>
            </div>
            <span class="web-per bar-2 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php echo $progress_one_text; ?>%</span>
        </div>

        <!-- Skills Progressbar -->
        <div class="skill-progress">
            <h4 class="web-ex"><?php echo $progress_two_title; ?></h4>
            <div class="progress">
                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="<?php echo $progress_two_text; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_two_text; ?>%;"></div>
            </div>
            <span class="web-per bar-2 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php echo $progress_two_text; ?>%</span>
        </div>
        <!-- Skills Progressbar -->
        <div class="skill-progress">
            <h4 class="web-ex"><?php echo $progress_three_title; ?></h4>
            <div class="progress">
                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="<?php echo $progress_three_text; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_three_text; ?>%;">
                </div>
            </div>
            <span class="web-per bar-3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php echo $progress_three_text; ?>%</span>
        </div>
        <div class="skill-progress">
            <h4 class="web-ex"><?php echo $progress_four_title; ?></h4>
            <div class="progress">
                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="<?php echo $progress_four_text; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_four_text; ?>%;">
                </div>
            </div>
            <span class="web-per bar-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php echo $progress_four_text; ?>%</span>
        </div>
        <!-- Skills Progressbar -->
        <div class="skill-progress">
            <h4 class="web-ex"><?php echo $progress_five_title; ?></h4>
            <div class="progress">
                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="<?php echo $progress_five_text; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_five_text; ?>%;">
                </div>
            </div>
            <span class="web-per bar-5 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php echo $progress_five_text; ?>%</span>
        </div>
    </div>    

<?php return ob_get_clean();
}







/**
*
* education
*
*/
add_shortcode('self_education', 'self_education_fn');

function self_education_fn($atts, $content){
	extract( shortcode_atts(array(
		'title'	=> 'Educational Qualification',
		'education_year' => '2008',
		'education_degree' => 'Master Degree',
		'education_institute' => 'University Of Oxford',
		'education_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptates, reprehenderit! Tempore porro nesciunt, cupiditate quasi omnis. Quaerat.',		

		'education_year_two' => '2006',
		'education_degree_two' => 'BSC',
		'education_institute_two' => 'University Of Oxford',
		'education_text_two' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptates, reprehenderit! Tempore porro nesciunt, cupiditate quasi omnis. Quaerat.',
		'education_year_three' => '2004',
		'education_degree_three' => 'Master Degree',
		'education_institute_three' => 'University Of Oxford',
		'education_text_three' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptates, reprehenderit! Tempore porro nesciunt, cupiditate quasi omnis. Quaerat.',
	
	), $atts) );
ob_start();
?>
<div class="col-md-6 col-sm-6">
    <div class="skill-edu">
        <h4 class="intro-head"><?php echo $title; ?></h4>
        <!-- edu-result -->
        <div class="edu-result">
            <h5><span><?php echo $education_year; ?></span><?php echo $education_degree; ?></h5>
            <h6><?php echo $education_institute; ?></h6>
            <p><?php echo $education_text; ?></p>
        </div>
        <!-- edu-result -->
        <div class="edu-result">
            <h5><span><?php echo $education_year_two; ?></span><?php echo $education_degree_two; ?></h5>
             <h6> <?php echo $education_institute_two; ?></h6>
            <p><?php echo $education_text_two; ?></p>
        </div>
        <!-- edu-result -->
        <div class="edu-result last-result">
           <h5><span><?php echo $education_year_three; ?></span> <?php echo $education_degree_three; ?></h5>
            <h6><?php echo $education_institute_two; ?></h6>
            <p><?php echo $education_text_three; ?></p>
        </div>
    </div>
</div>

<?php return ob_get_clean();
}






/**
*
* experience
*
*/
add_shortcode('self_experience', 'self_experience_fn');

function self_experience_fn($atts, $content){
	extract( shortcode_atts(array(
		'title'	=> 'Work Expereince',
		'experience_year' => '2016',
		'experience_position' => 'Present CEO',
		'experience_institute' => 'SpellBit',
		'experience_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptates, reprehenderit! Tempore porro nesciunt, cupiditate quasi omnis. Quaerat.',		

		'experience_year_two' => '2012',
		'experience_position_two' => 'Senior Web Developer',
		'experience_institute_two' => 'University Of Oxford',
		'experience_text_two' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptates, reprehenderit! Tempore porro nesciunt, cupiditate quasi omnis. Quaerat.',

		'experience_year_three' => '2004',
		'experience_position_three' => 'Master Degree',
		'experience_institute_three' => 'University Of Oxford',
		'experience_text_three' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, voluptates, reprehenderit! Tempore porro nesciunt, cupiditate quasi omnis. Quaerat.',
	
	), $atts) );
ob_start();
?>
<div class="col-md-6 col-sm-6">
	<div class="skill-edu">
        <h4 class="intro-head"><?php echo $title; ?></h4>
        <!-- edu-result -->
        <div class="edu-result">
            <h5><span><?php echo $experience_year; ?></span><?php echo $experience_position; ?></h5>
            <h6><?php echo $experience_institute; ?></h6>
            <p><?php echo $experience_text; ?></p>
        </div>
        <!-- edu-result -->
        <div class="edu-result">
            <h5><span><?php echo $experience_year_two; ?></span><?php echo $experience_position_two; ?></h5>
             <h6><?php echo $experience_institute_two; ?></h6>
            <p><?php echo $experience_text_two; ?></p>
        </div>
        <!-- edu-result -->
        <div class="edu-result last-result">
           <h5><span><?php echo $experience_year_three; ?></span><?php echo $experience_position_three; ?></h5>
            <h6><?php echo $experience_institute_three; ?></h6>
            <p><?php echo $experience_text_three; ?></p>
        </div>
    </div>
</div>    

<?php return ob_get_clean();
}




/**
*
*
*
* Countdown Section
*
*
*/
add_shortcode('self_countdown', 'self_countdown_fn');

function self_countdown_fn($atts, $content){
extract( shortcode_atts(array(
	'icon_one'		=> 'coffee',
	'count_num_one'	=> 65622,
	'count_text_one'=> 'CUP OF COFFEE CONSUMEND tj',
	'count_url_one'=> '#',	
	'icon_two'		=> 'user',
	'count_num_two'	=> 65622,
	'count_text_two'=> 'CUP OF COFFEE CONSUMEND tj',
	'count_url_two'=> '#',	
	'icon_three'		=> 'clock-o',
	'count_num_three'	=> 65622,
	'count_text_three'=> 'CUP OF COFFEE CONSUMEND tj',
	'count_url_three'=> '#',	
	'icon_four'	=> 'question',
	'count_num_four'=> 65622,
	'count_text_four'=> 'CUP OF COFFEE CONSUMEND tj',
	'count_url_four'=> '#',
), $atts) );
ob_start();
?>

<div class="fun-fact-area fix area-margin">
    <div class="head-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <!-- fun_text  -->
                <div class="fun_text text-center">
                    <a href="#"><i class="fa fa-<?php echo $icon_one; ?>"></i></a>
                    <span class="counter"><?php echo $count_num_one; ?></span>
                    <h6><?php echo $count_text_one; ?></h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- fun_text  -->
                <div class="fun_text text-center">
                    <a href="<?php echo $count_url_two; ?>"><i class="fa fa-<?php echo $icon_two; ?>"></i></a>
                    <span class="counter"><?php echo $count_num_two; ?></span>
                    <h6><?php echo $count_text_two; ?></h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- fun_text  -->
                <div class="fun_text text-center">
                    <a href="<?php echo $count_url_three; ?>"><i class="fa fa-<?php echo $icon_three; ?>"></i></a>
                    <span class="counter"><?php echo $count_num_three; ?></span>
                    <h6><?php echo $count_text_three; ?></h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- fun_text  -->
                <div class="fun_text text-center">
                    <a href="<?php echo $count_url_four; ?>"><i class="fa fa-<?php echo $icon_four; ?>"></i></a>
                    <span class="counter"><?php echo $count_num_four; ?></span>
                    <h6><?php echo $count_text_four; ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>


<?php return ob_get_clean();
}



/**
*
*
*
* single countdown
*
*
*/

add_shortcode('single-countdown', 'single_countdown_fn');

function single_countdown_fn($atts, $content){
extract( shortcode_atts(array(
	'icon'		=> 'coffee',
	'number'	=> 768,
	'text'		=> 'Web Development'
), $atts) );
ob_start();
?>


	<div class="fun_text text-center">
	    <a href="#"><i class="fa fa-<?php echo $icon; ?>"></i></a>
	    <span class="counter"><?php echo $number; ?></span>
	    <h6><?php echo $text; ?></h6>
	</div>


<?php return ob_get_clean();
}




/**
*
*
* portfolio section
*
*
*/

add_shortcode('self-portfolio', 'self_portfolio_fn');

function self_portfolio_fn($atts, $content){
extract( shortcode_atts(array(
	'title'		=> 'Our Portfolio.',
	'count'		=> 5
), $atts) );

ob_start();
?>


<div id="portfolio" class="portfolio-area fix area-padding">
    <div class="container">
	    <!-- section-heading start -->
	    <div class="row">
            <div class="col-md-12">
                <div class="section-head">
                    <h3><?php echo $title; ?></h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="col-md-12">
                <!-- awesome-portfolio start -->
                <div class="awesome-portfolio">
                    <div class="awesome-portfolio-menu">
                        <ul>
                            <li class="filter" data-filter="all" >All Items</li>
<?php 
$cats = get_terms('self_portfolio_cat');

foreach ( $cats as $cat ) : ?>
    <li class="filter" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
<?php endforeach; ?>


                           
                        </ul>				
                    </div>
                    <div class="awesome-portfolio-content">


<?php
$q = new WP_Query(array(
    'post_type' => 'self_portfolio',
    'posts_per_page'    => $count
));

while( $q->have_posts() ):$q->the_post();
$terms = get_the_terms(get_the_id(), 'self_portfolio_cat');
?>


    <!-- single-awesome-portfolio start -->
    <div class="single-awesome-portfolio mix all 

    <?php foreach( $terms as $term ){
        echo $term->slug.' ';
        } ?>
   



    ">
        <a href="#">
            <div class="awesome-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="awesome-info">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </a>
    </div>
    <!-- single-awesome-portfolio end -->


<?php endwhile; ?>


                    </div>	
                </div>
                <!-- awesome-portfolio end -->
            </div>
        </div>
    </div>
</div>


<?php return ob_get_clean();
}





/**
*
*
* testimonial section
*
*
*/

add_shortcode('self-testimonial', 'self_testimonial_fn');

function self_testimonial_fn($atts, $content){
extract( shortcode_atts(array(
	'title'		=> 'Our Portfolio.',
	'count'		=> -1
), $atts) );

ob_start();
?>

<div id="reviews" class="Reviews-area">
    <div class="head-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="Reviews-content">
                    <!-- start testimonial carousel -->
                    <div class="testimonial-carousel item-indicator">




<?php 

$q = new WP_Query(array(
    'post_type' => 'self_testimonial',
    'posts_per_page'  => $count
)); 

while( $q->have_posts() ): $q->the_post(); 
$name = get_post_meta( get_the_id(), 'self_client_name', true );
$status = get_post_meta(get_the_ID(), 'self_client_status', true);
$institution_link = get_post_meta(get_the_id(), 'self_client_institution_link', true);
$institution = get_post_meta(get_the_id(), 'self_client_institution', true);
?>
    <div class="single-testi text-center">
        <div class="testi-img">
           <?php the_post_thumbnail(); ?>
        </div>
        <div class="testi-text text-center">
            <?php the_content(); ?>
            <h4><?php echo $name; ?></h4>
            <span class="guest-rev"><?php echo $status; ?> - <a href="<?php echo $institution_link; ?>"><?php echo $institution; ?></a></span>
        </div>
    </div>
    
<?php endwhile; ?>

                           
                        


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php return ob_get_clean();
}





/**
*
*
* testimonial section
*
*
*/

add_shortcode('self-blog', 'self_blog_fn');

function self_blog_fn($atts, $content){
extract( shortcode_atts(array(
	'title'		=> 'Latest blog.',
	'count'		=> -1
), $atts) );

ob_start();
?>
<div id="blog" class="blog-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-head">
                    <h3><?php echo $title; ?></h3>
                </div>
            </div>
        </div>

        <div class="row">
			<div class="blog-item">





<?php
$p = new WP_Query(array(
	'post_type'			=> 'post',
	'posts_per_page'	=> -1
));


while( $p->have_posts() ): $p->the_post(); ?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-blog">
						<div class="single-blog-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							    <span class="overly"></span>
							</a>
						</div>
						<div class="blog-content">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<?php the_excerpt(); ?>
						</div>
						<div class="blog-meta">
							<span class="date-type">
								<i class="fa fa-calendar"></i><?php the_time('Y-m-d'); ?> / <?php the_time('g:i a'); ?>
							</span>
							<span class="comments-type">
								<i class="fa fa-comment-o"></i>
								<?php comments_popup_link('No Comment', '1 Comment', '% Comments', '', 'Comments are disallowed' ); ?>
							</span>
						</div>
					</div>
				</div>

<?php endwhile; ?>


			</div>
		</div>
    </div>
</div>

<?php return ob_get_clean();
}