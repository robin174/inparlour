<?php get_header(); ?>
			
<!-- TO UPDATE AS EXACTLY LIKE PAGE TEMPLATE - This is Foundation 6 -->
<section class="area--head-image" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center fixed;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-4 large-4 columns">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="small-12 medium-8 large-8 columns">
			<h1><?php the_title(); ?></h1>
			<section class="block--template">
				<?php get_template_part('templates/template'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>

<?php get_footer(); ?>