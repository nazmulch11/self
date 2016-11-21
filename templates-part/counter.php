<div class="fun-fact-area fix area-margin">
    <div class="head-overly"></div>
    <div class="container">
        <div class="row">

<?php 
$q = new WP_Query(array(
    'post_type' => 'self_counter',
    'posts_per_page'    => 4
));

while( $q->have_posts() ) : $q->the_post();

$icon = get_post_meta(get_the_id(), 'self-counter-icon', true);

?>
            <div class="col-md-3 col-sm-3">
                <div class="fun_text text-center">
                    <a href="#"><i class="fa fa-<?php echo $icon; ?>"></i></a>
                    <span class="counter"><?php the_content(); ?></span>
                    <h6><?php the_title(); ?></h6>
                </div>
            </div>

<?php endwhile; ?>


        </div>
    </div>
</div>