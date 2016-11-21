<?php 

global $self;

?>

<div id ="about" class="about-area page-scroll area-padding">
			<div class="container">
			    <!-- section head -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-head">
						    <h3><?php echo $self['self-services-title']; ?></h3>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row second-row">
<?php

$q = new WP_Query(array(
	'post_type'	=> 'self_services',
	'posts_per_page' => -1
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



				<div class="row fix">
				
				    <div class="col-md-6 col-sm-6">
				        <div class="self-img">
				            <a href="#">
				            	<img src="<?php echo $self['self-my-photo']['url']; ?>">
				            </a>
				        </div>
				    </div>

				    <div class="col-md-6 col-sm-6">
                        <!-- about-self -->
				        <div class="about-self">
				            <div class="self-head">
				                <h4 class="intro-head">
				               		 <?php echo $self['self-introduction-section-title']; ?> 
				               	 </h4>
				                <p><?php echo $self['self-introduction-content-section'] ?></p>
				            </div>

				            <?php if($self['self-short-content-section']): ?>
				            <div class="self-text">
				                <ul>
				                    <?php echo $self['self-short-content-section']; ?>
				                </ul>
				            </div>
				        	<?php endif; ?>

				            <div class="download-cv">
				                <a href="<?php echo $self['self-cv-section']; ?>">Download CV</a>
				            </div>
				        </div>
				        <!-- end about-self -->
				    </div>


				</div>
			</div>
		</div>