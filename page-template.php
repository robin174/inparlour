<?php
/*
Template Name: Page - Template
*/
get_header(); ?>

<section class="area--logo">
	<figure>
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ip_logo_22-pink-v2.png" alt="InParlour - Logo"></a>
	</figure>
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-9 columns">

			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<h1 class="signpost--page"><?php the_title(); ?></h1>
					<section class="block--template">
						<?php get_template_part('templates/template'); ?>
					</section>
				</div>
			</div>

		</div>
	</div><!-- end .row -->
</section>

<?php if (is_page('Gift Vouchers')) { ?>
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
<?php } ?>
<?php get_footer(); ?>