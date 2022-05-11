<?php
/*
Template Name: Page - About
*/
get_header(); ?>

<section class="area--logo">
	<figure>
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ip_logo_22-pink-v2.png" alt="InParlour - Logo"></a>
	</figure>
</section>

<!-- Amanda's Story -->
<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-8 columns">

			<div class="row">
				<?php /*
				<div class="small-12 medium-3 large-3 columns show-for-medium">
					<p><?php the_field('page_line_introduction'); ?></p>
				</div>
				*/ ?>
				<div class="small-12 medium-12 large-12 columns">
					<h1 class="signpost--page">Amanda's Story</h1>
					<section class="block--template">
						<?php get_template_part('templates/template'); ?>
					</section>
				</div>
			</div>

		</div>
	</div><!-- end .row -->
</section>

<?php /*
<section class="area--display-press">
	<div class="row">
		<div class="small-12 medium-12 medium-centered large-12 columns">

			<div class="row small-up-2 medium-up-2 large-up-5">
			<?php
		        $args=array(
		        	'posts_per_page' => 5,
		            'post_type' => 'press',
		            'taxonomy' => 'amandas-story',
		            'post_status' => 'publish',
		            'orderby'  => 'date',
		            'order' => 'desc',
		        );
		        $my_query = null;
		        $my_query = new WP_Query($args);
		        if( $my_query->have_posts() ) {
		        while ($my_query->have_posts()) : $my_query->the_post(); ?>

		        	<div class="column">
		        		<figure class="cover--press">
		        			<?php the_post_thumbnail('full'); ?>
		        			<figcaption class="highlight">&ldquo;<?php the_field('cover_image_caption');?>&rdquo;</figcaption>
		        		</figure>
		        	</div>
		        <?php endwhile; }
			    wp_reset_query(); ?>
			</div><!-- end .row -->

		</div>
	</div><!-- end .row -->
</section>
*/ ?>

<!-- Why InParlour -->
<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-8 columns">

			<?php $the_query = new WP_Query( 'page_id=10' );
			    // "loop" through query (even though it's just one page) 
			    while ( $the_query->have_posts() ) : 
			    	$the_query->the_post(); ?>

			    	<div class="row">
						<?php /*
						<div class="small-12 medium-3 large-3 columns show-for-medium">
							<p><?php the_field('page_line_introduction'); ?></p>
						</div>
						*/ ?>
						<div class="small-12 medium-12 large-12 columns">
							<h1 class="signpost--page">Why InParlour</h1>
							<section class="block--template">
								<?php get_template_part('templates/template'); ?>
							</section>
						</div>
					</div>

			<?php endwhile;
			wp_reset_postdata(); ?>

		</div>
	</div><!-- end .row -->
</section>

<section class="area--testimonial">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-8 columns">
			<blockquote>
				<p>Everything about InParlour is clever, discreet, delicious.</p>
			</blockquote>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>