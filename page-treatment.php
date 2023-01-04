<?php
/*
Template Name: Page - Treatment
*/
get_header(); ?>

<section class="area--head-image text-center" style="background:url(<?php the_field('header_image'); ?>)no-repeat center;background-size: cover;">
	<figure class="head--logo head--animate">
		<?php if (get_field('section_logo_required')) { ?>
			<img src="<?php the_field('section_logo'); ?>" alt="Logo">
		<?php } else { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/ip-logo.png" alt="InParlour - Logo">
		<?php } ?>
	</figure>
	<?php if (get_field('section_instagram_required')) { ?>
		<a class="button--outline button--svg button--head button--animate" href="<?php the_field('section_instagram_link'); ?>">
			<span class="button--icon">
				<?php get_template_part('svg/ip-instagram') ?>
			</span>
			<span class="button--text">
				<?php the_field('section_instagram_text'); ?>
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
		<div class="small-12 medium-11 medium-centered large-10 columns">
			<h1 class="signpost--page"><?php the_title(); ?></h1>
			<section class="block--template">
				<?php get_template_part('templates/template'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--treatments">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-10 columns">

			<h1 class="signpost--page">Filter</h1>
			<section class="block--filter">
				<div id="filters" class="button-group">
		           	<button class="button is-checked" data-filter="*">Show All</button>
		           	<button class="button" data-filter=".facials">Facials</button>
		           	<button class="button" data-filter=".body">Body</button>
		           	<button class="button" data-filter=".tanning">Tanning</button>
					<button class="button" data-filter=".hair-makeup">Hair &amp; Makeup</button>
					<button class="button" data-filter=".nail-care">Nail Care</button>
					<button class="button" data-filter=".beauty-essentials">Beauty Essentials</button>
					<button class="button" data-filter=".gentlemen">Gentlemen</button>
				</div>
			</section>

			<section class="block--treatments">
	        	<div class="isotope">
                    <?php
                    $args=array(
                        'post_type' => 'treatment',
                        'post_status' => 'publish',
                        'orderby'  => 'menu_order',
                        'order' => 'asc',
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

	                   	<div class="element-item <?php echo $post->post_name; ?>" data-category="<?php echo $post->post_type; ?>">
	                    	<section class="unit--treatment">
	                        	<div class="row">
	                        		<div class="small-12 medium-4 large-4 columns">
	                        		<figure class="featured--treatment">
										<?php the_post_thumbnail('full'); ?>
									</figure>
	                        			<h2 class="treatment--head"><?php the_title(); ?></h2>
	                        			<p class="treatment--intro"><?php the_field('treatment_introduction')?></p>
	                        		</div>
	                        		<div class="small-12 medium-8 large-8 columns">
	                        			<?php if(have_rows('treatment')): ?>
	                        				<?php while( have_rows('treatment') ): the_row(); ?>
			                        			<section class="single--treatment">
			                        				<?php get_template_part('templates/treatment'); ?>
			                        			</section>
		                        			<?php endwhile; ?>
		                        		<?php endif; ?>
	                        			<?php the_field('treatment_conclusion')?>
	                        		</div>
	                        	</div>
	                        </section>
	                    </div>

                    <?php endwhile; } wp_reset_query(); ?>
                </div>
			</section>

		</div>
	</div><!-- end .row -->
</section>

<section class="area--pricelist" style="padding: 40px 0; background-color:#FDEBE4;">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-9 columns">
			<section class="block--template">
				<?php get_template_part('templates/pricelist'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>