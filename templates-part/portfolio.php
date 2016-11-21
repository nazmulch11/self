<div id="portfolio" class="portfolio-area fix area-padding">
    <div class="container">
	    <!-- section-heading start -->
	    <div class="row">
            <div class="col-md-12">
                <div class="section-head">
                    <h3>Portfolio.</h3>
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
    'posts_per_page'    => -1
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