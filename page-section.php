<?php
/*
Template Name: Page - Section
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
		<div class="small-12 medium-11 medium-centered large-10 columns">
			<?php /* 
			<h1 class="signpost--page"><?php the_title(); ?></h1>
			*/ ?>
			<section class="block--template">
				<?php get_template_part('templates/template'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<!-- Grid Gallery area -->
<section class="area--inspiration">

	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
		<div class="slides"></div>
		<h3 class="title"></h3>
		<a class="prev">‹</a>
		<a class="next">›</a>
		<a class="close">×</a>
		<a class="play-pause"></a>
		<ol class="indicator"></ol>
	</div>

	<div class="row">
		<div class="small-12 medium-12 medium-centered large-12 columns">
			<section class="block--grid" id="blue-links">
				
				<?php /* https://github.com/desandro/masonry/issues/1006 */ ?> 
				<?php /* https://codepen.io/helmutgranda/pen/Pyjeqd */ ?> 

				<div id="masonryContainer">
					<div class="row">
						
						<div class="small-12 medium-3 large-3 columns grid-sizer"></div>

						<?php while(has_sub_field("section_grid")): ?>
							<?php if(get_row_layout() == 'grid_image'): // Image / Caption ?>
							    <div class="small-12 medium-3 large-3 columns masonry-brick">
							    	<section class="unit--grid-image">
								        <figure class="grid--photo">
								        	<a href="<?php the_sub_field('image_file'); ?>">
								            	<img src="<?php the_sub_field('image_file'); ?>" />
								            	 <?php if( get_sub_field('image_caption') ): ?>
									            	<figcaption><?php the_sub_field('image_caption'); ?></figcaption>
									        	<?php endif; ?>
								        	</a>
								        </figure>
							        </section>
							    </div>
							<?php endif; ?>
							<?php if(get_row_layout() == 'grid_block'): // Image / Caption ?>
							    <div class="small-12 medium-4 large-4 columns masonry-brick">
							    	<section class="unit--grid-text">
									   	<p><?php the_sub_field('block_content'); ?></p>
									</section>
							    </div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>

			</section>
		</div>
	</div><!-- end .row -->

	<script>
	document.getElementById('blue-links').onclick = function (event) {
	    event = event || window.event;
	    var target = event.target || event.srcElement,
	        link = target.src ? target.parentNode : target,
	        options = {index: link, event: event},
	        links = this.getElementsByTagName('a');
	    blueimp.Gallery(links, options);
	};
	</script>

</section>

<section class="area--testimonial">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-8 columns">
			<blockquote>
				<p><?php the_field('testimonial_content'); ?></p>
				<p class="blockquote--credit"><?php the_field('testimonial_credit'); ?></p>
			</blockquote>
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>