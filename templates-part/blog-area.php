<div id="blog" class="blog-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-head">
                    <h3>Latest blog.</h3>
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