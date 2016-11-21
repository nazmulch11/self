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
    'posts_per_page'  => -1

)); 

while( $q->have_posts() ): $q->the_post(); ?>
    <div class="single-testi text-center">
        <div class="testi-img">
           <?php the_post_thumbnail(); ?>
        </div>
        <div class="testi-text text-center">
            <?php the_content(); ?>
            <h4><?php the_title(); ?></h4>
            <span class="guest-rev"><?php echo get_post_meta(get_the_ID(), 'self_client_status', true); ?> - <a href="<?php echo get_post_meta(get_the_id(), 'self_client_institution_link', true); ?>"><?php echo get_post_meta(get_the_id(), 'self_client_institution', true); ?></a></span>
        </div>
    </div>
    
<?php endwhile; ?>

                           
                        


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>