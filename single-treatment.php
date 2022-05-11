<?php get_header(); ?>
			
<!-- TO UPDATE AS EXACTLY LIKE PAGE TEMPLATE - This is Foundation 6 -->
<section class="area--head-image" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center fixed;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-11 large-10 medium-centered columns">
			<section class="block--treatments">
				<div class="isotope">
					<div class="element-item">
						<section class="unit--treatment">
		                	<div class="row">
		                		<div class="small-12 medium-4 large-4 columns">
		                		<figure class="featured--treatment">
									<?php the_post_thumbnail('full'); ?>
								</figure>
		                			<h2><?php the_title(); ?></h2>
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
                </div>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>

<?php get_footer(); ?>