	<div id ="skills" class="skill-area page-scroll area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-head">
						    <h3>Skills.</h3>
						</div>
					</div>
				</div>
				<!-- end row -->
                <div class="row second-row">
                    <div class="col-md-6 col-sm-6">
                        <!-- Skills Content -->
                        <div class="skills-content">
                            <div class="skills-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ex blanditiis consequuntur ab odio sed totam in rerum, illum amet facere ipsam quibusdam perferendis odit,Lorem ipsum dolor sit amet, consectetur perspiciatis quaerat </p>
                            </div>
                            <div class="skills-idea">
                                <h4 class="intro-head">Work startegy</h4>
                                <ul>
            <?php 
            $q = new WP_Query(array(
                'post_type' => 'self_startegy',
                'posts_per_page'   => 5
            ));
            while( $q->have_posts() ):$q->the_post();
            $icon = get_post_meta(get_the_ID(), 'self_startegy_icon', true);
            $key = get_post_meta(get_the_ID(), 'self_startegy_keyword', true);
            $desc = get_post_meta(get_the_ID(), 'self_startegy_description', true);

            ?>            

                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-<?php echo $icon; ?>">
                                 </i><?php echo $key; ?> :</a><?php echo $desc; ?>
                            </li>
            <?php endwhile; ?>
                            
                                </ul>
                            </div>
                        </div>
                        <!-- Skills Content -->
                    </div>


                    <div class="col-md-6 col-sm-6">
                       <!-- Skills Progressbar -->

        <?php
        $q = new WP_Query(array(
            'post_type' => 'self_progressbar',
            'posts_per_page'    => 5
        ));
        while( $q->have_posts() ): $q->the_post(); 
            $value = get_post_meta(get_the_id(), 'self_progress_value', true);
        ?>               
                  <div class="skill-progress">
                            <h4 class="web-ex"><?php the_title(); ?></h4>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="<?php echo $value; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value; ?>%;">
                                </div>
                            </div>
                            <span style="left:<?php echo $value; ?>%;" class="web-per  wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php echo $value; ?>%</span>
                        </div>

        <?php endwhile; ?>




                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="skill-edu">
                            <h4 class="intro-head">Education</h4>
                            <!-- edu-result -->

        <?php 
        $q = new WP_Query(array(
            'post_type' => 'self_education',
            'posts_per_page' => 3
        ));

        while( $q->have_posts() ):$q->the_post(); 
            $course = get_post_meta(get_the_ID(), 'name-of-degree', 'true');    
            $year = get_post_meta(get_the_id(), 'year-of-passing', true); 

        ?>                    
                            <div class="edu-result">
                                <h5><span><?php echo $year; ?></span><?php echo $course; ?></h5>
                                <h6><?php the_title(); ?></h6>
                                <?php the_content(); ?>
                            </div>
        <?php endwhile; ?>                    
                   
                        </div>
                    </div>
                    <!-- Start Experince -->
                    <div class="col-md-6 col-sm-6">
                        <div class="skill-edu">
                            <h4 class="intro-head">Expereince</h4>
                            <!-- edu-result -->

<?php
$q = new WP_Query(array(
    'post_type' => 'self_experience',
    'posts_per_page' => 3
));



while( $q->have_posts() ):$q->the_post(); 
$job_status = get_post_meta(get_the_id(), 'name-of-position', true);
$job_join_data = get_post_meta(get_the_id(), 'year-of-joining', true);

?>
                            <div class="edu-result">
                                <h5><span><?php echo $job_join_data; ?></span><?php echo $job_status; ?></h5>
                                <h6><?php the_title(); ?></h6>
                                <?php the_content(); ?>
                            </div>

<?php endwhile; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>