<?php
/*
Template Name: Page - Body Contouring
*/
get_header('contouring'); ?>

<section class="area--head-image text-center" style="background:url(<?php the_field('header_image'); ?>)no-repeat center;background-size: cover;">
	<figure class="head--logo head--animate">
		<img src="<?php the_field('section_logo'); ?>" alt="InParlour Tanning - Logo">
	</figure>
	<?php if (get_field('section_instagram_required')) { ?>
		<a class="button--outline button--svg button--head button--animate" href="<?php the_field('section_instagram_link'); ?>">
			<span class="button--icon">
				<?php get_template_part('svg/ip-instagram') ?>
			</span>
			<span class="button--text show-for-medium">
				<?php the_field('section_instagram_text'); ?>
			</span>
			<span class="button--text show-for-small-only">
				Follow InParlour on Instagram
			</span>
		</a>
	<?php } ?>
</section>

<?php if (get_field('section_booking_required')) { ?>
	<section class="area--booking">
		<div class="row collapse">
			<div class="small-12 medium-12 large-12 columns">
				<?php get_template_part('templates/booking'); ?>
			</div>
		</div>
	</section>
<?php } ?>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-8 columns">
			<h1 class="signpost--page"><?php the_title(); ?></h1>
			<section class="block--template">
				<?php get_template_part('templates/template'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--beforeafter">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-8 columns">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<figure class="general">
						<img src="<?php the_field('image_before'); ?>" alt="">
						<?php if( get_field('caption_before') ): ?>
							<figcaption><?php the_field('caption_before'); ?></figcaption>
						<?php endif; ?>
					</figure>
				</div>
				<div class="small-12 medium-6 large-6 columns">
					<figure class="general">
						<img src="<?php the_field('image_after'); ?>" alt="">
						<?php if( get_field('caption_after') ): ?>
							<figcaption><?php the_field('caption_after'); ?></figcaption>
						<?php endif; ?>
					</figure>
				</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>

<hr>

<section class="area--treatments">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-10 columns">

			<?php
			    $args=array(
			        'post_type' => 'treatment',
			        'p' => 56,
			        'post_status' => 'publish',
			        'orderby'  => 'menu_order',
			        'posts_per_page' => 8,
			        'order' => 'asc',
			    );
			    $my_query = null;
			    $my_query = new WP_Query($args);
			    if( $my_query->have_posts() ) {
			    while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<section class="single--treatment">
						<div class="small-12 medium-4 large-4 columns">
		            		<figure class="featured--treatment">
		            			<img src="https://www.inparlour.co.uk/wp-content/uploads/2016/02/ahewe.jpg">
							</figure>
		            	</div>
		        		<div class="small-12 medium-8 large-8 columns">
		        			<?php if(have_rows('treatment')): ?>
								<?php while( have_rows('treatment') ): the_row(); ?>

			        				<div class="row">
										<div class="small-12 medium-12 large-12 columns">
											<h3><?php the_sub_field('treatment_title'); ?></h3>
											<p class="treatment--descr"><?php the_sub_field('treatment_description'); ?></p>
										</div>
									</div><!-- end .row -->
									<div class="row">
										<div class="small-12 medium-12 large-12 columns">
											<span class="temp--time"><?php the_sub_field('treatment_time'); ?></span>
											<span class="temp--price"><?php the_sub_field('treatment_price'); ?>
										</div>
									</div><!-- end .row -->
									<div class="row">
										<div class="small-12 medium-12 large-12 columns">
											<?php if( get_sub_field('treatment_extra') ): ?>
												<p class="treatment--extra"><?php the_sub_field('treatment_extra'); ?></p>
											<?php endif; ?>
										</div>
									</div><!-- end .row -->

								<?php endwhile; ?>
							<?php endif; ?>
							<div class="row">
								<div class="small-12 medium-12 large-3 columns">
									<a style="margin-top:10px;" href="mailto:bookings@inparlour.co.uk" title="Email InParlour" class="button--svg button--booking">
										<!-- show icon in button on small only -->
										<span class="button--icon hide-for-large">
											<?php get_template_part('svg/ip-booking') ?>
										</span>
										<span class="button--text">
											Book now
										</span>
									</a>
								</div>
							</div><!-- end .row -->
						</div>
					</section>

				<?php endwhile; } wp_reset_query(); ?>

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
		            'taxonomy' => 'bespoke-body-contouring',
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

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-8 columns">
			<section class="block--template">
				<h3 class="subheading"><?php the_field('amanda_title');?></h3>
				<?php the_field('amanda_copy');?>
				<?php the_field('amanda_instagram');?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--testimonial">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-8 columns">
			<blockquote>
				<p><?php /* <?php the_field('testimonial_content'); ?> */?>I see it time after time when I tan someone. I can apply just one layer and suddenly I see the ‘peacock effect’ – the self–assurance and confidence and connection with your body.</p>
				<p class="blockquote--credit"><?php /* <?php the_field('testimonial_credit'); ?> */ ?>Amanda Harrington</p>
			</blockquote>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>