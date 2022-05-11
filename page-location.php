<?php
/*
Template Name: Page - Location
*/
get_header(); ?>

<section class="area--head-image text-center" style="background:url(<?php the_field('header_image'); ?>)no-repeat center;background-size: cover;">
	<figure>
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ip-logo-bl.png" alt="InParlour - Logo"></a>
	</figure>
</section>

<!-- removed the cannes booking part... too in-your-face. Have a separate block-->


<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--template">
				<?php get_template_part('templates/template'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--location-cannes">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<?php
                $args=array(
                    'post_type' => 'location',
                    'post_status' => 'publish',
                    'orderby'  => 'menu_order',
                    'order' => 'asc',
                    'post__in' => array(86),
                );
                $my_query = null;
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php the_title(); ?>
                <?php endwhile; }  wp_reset_query(); ?>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--location">
	<section class="block--main-locations">
		<div class="row">
			<div class="small-12 medium-10 medium-centered large-10 columns">

				<div class="row small-up-1 medium-up-2 large-up-3">
					<!-- New Code -->
					<!-- http://www.wearefuterra.com -->
						
							<?php
				                $args=array(
				                    'post_type' => 'location',
				                    'post_status' => 'publish',
				                    'orderby'  => 'menu_order',
				                    'order' => 'asc',
				                    'post__not_in' => array(86),
				                );
		                $my_query = null;
		                $my_query = new WP_Query($args);
		                if( $my_query->have_posts() ) {
		                while ($my_query->have_posts()) : $my_query->the_post(); ?>
		                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		                	<div class="column">
								<section class="slidecon">
									<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $url ?>);">
										<div class="slidetextbox"></div>
										<div class="slidetext">
											<h1 class="slidetitle">
												<?php the_title(); ?>
											</h1>
											<p class="slidecopy">
												<?php while(has_sub_field("page_template")): ?>
													<?php the_sub_field('key_intro'); ?>
												<?php endwhile; ?>
											</p>
										</div>
									</a>
								</section>
							</div>
						<?php endwhile; } wp_reset_query(); ?>
						
					<?php /*
					<?php
		                $args=array(
		                    'post_type' => 'location',
		                    'post_status' => 'publish',
		                    'orderby'  => 'menu_order',
		                    'order' => 'asc',
		                    'post__not_in' => array(86),
		                );
		                $my_query = null;
		                $my_query = new WP_Query($args);
		                if( $my_query->have_posts() ) {
		                while ($my_query->have_posts()) : $my_query->the_post(); ?>
		                    <div class="column">
								<figure class="effect-bubba">
									<?php the_post_thumbnail('full'); ?>
									<figcaption>
										<h2><?php the_title(); ?></h2>
										<p>Content that appears as part of hover</p>
										<a href="<?php the_permalink(); ?>">View more</a>
									</figcaption>
								</figure>
							</div>
					<?php endwhile; }  wp_reset_query(); ?>
					*/ ?>

					<!-- AND ONE MORE AS AN ADVERT -->
					
					<div class="column">
		            	Advert - we travel the world...
						<figure class="effect-bubba">
							<?php the_post_thumbnail('full'); ?>
							<figcaption>
								<h2><?php the_title(); ?></h2>
								<p>InParlour also travel on request</p>
								<a href="<?php the_permalink(); ?>">View more</a>
							</figcaption>
						</figure>
					</div>
				</div><!-- end .row -->

			</div>
		</div><!-- end .row -->
	</section>
</section>

<section class="area--testimonial">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-8 columns">
			Quote re. travel or an event...etc
			<?php $post_object = get_field('pick_testimonial');
			if( $post_object ): 
				// override $post
				$post = $post_object;
				setup_postdata( $post );
			?>
			<blockquote>
				<?php the_field('testimonial_content'); ?>
				<p class="blockquote--credit">
				<?php if(get_field('testimonial_credit') ): ?><?php the_field('testimonial_credit'); ?><?php endif; ?>
				<?php if(get_field('testimonial_credit' && 'testimonial_publication')): ?>| <?php the_field('testimonial_publication'); ?><?php endif; ?> 
				<?php if(get_field('testimonial_credit' && 'testimonial_date')): ?>| <?php the_field('testimonial_date'); ?><?php endif; ?>
				</p>
			</blockquote>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>