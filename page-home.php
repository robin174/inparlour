<?php
/*
Template Name: Page - Home
*/
get_header(); ?>

<section class="area--logo">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-logo_22-pink-new.png" alt="InParlour - Logo">
	</figure>
</section>

<section class="area--main">
	<div id="content">
		<div class="row">
			<div class="small-12 medium-11 medium-centered large-10 columns">
				<h1 class="signpost--page" style="text-align:center;margin-bottom:50px;"><?php the_field('homepage_headline'); ?></h1>
			</div>
		</div><!-- end .row -->
		<div class="row">
			<main id="main" class="small-12 medium-12 large-12 columns" role="main"> 

				<!-- Show for medium, large -->
				<section class="block--main-services show-for-medium">
					<div class="row small-up-1 medium-up-2 large-up-2">
						
						<div class="column"><!-- InParlour at Home -->
							<?php $the_query = new WP_Query( 'page_id=12' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
							    <section class="home-shadow" style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-at-home/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-AtHome.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

						<div class="column"><!-- InParlour Tanning -->
							<?php $the_query = new WP_Query( 'page_id=314' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
						    	<section class="home-shadow" style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-tanning/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-Tanning.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

						<div class="column"><!-- InParlour Bridal -->
							<?php $the_query = new WP_Query( 'page_id=14' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
							    <section class="home-shadow" style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-bridal/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-Bridal.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

						<div class="column"><!-- InParlour Creative -->
							<?php $the_query = new WP_Query( 'page_id=1007' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
						    	<section class="home-shadow" style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-creative/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-Creative.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

					</div><!-- end .row -->
				</section>

				<!-- Show for small // Do we need this? -->
				<section class="block--main-services hide-for-medium">
					<div class="row small-up-1 medium-up-2 large-up-2">

						<div class="column"><!-- InParlour at Home -->
							<?php $the_query = new WP_Query( 'page_id=12' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
								<section style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-at-home/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-AtHome.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

						<div class="column"><!-- InParlour Tanning -->
							<?php $the_query = new WP_Query( 'page_id=314' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
						    	<section style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-tanning/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-Tanning.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						
						<div class="column"><!-- InParlour Bridal -->
							<?php $the_query = new WP_Query( 'page_id=14' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
						    	<section style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-bridal/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-Bridal.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

						<div class="column"><!-- InParlour Creative -->
							<?php $the_query = new WP_Query( 'page_id=1007' );
						    while ( $the_query->have_posts() ) : 
						    $the_query->the_post(); ?>
						    	<section style="background-image:url(<?php the_field('homepage_image');?>);background-position:center;background-size:contain;">
									<figure style="background-color: rgba(0,0,0,0.3);">
										<a href="https://www.inparlour.co.uk/inparlour-creative/" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/use-InParlour-Logo22-Creative.png" alt="<?php the_title();?>"></a>
									</figure>
								</section>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

					</div><!-- end .row -->
				</section>

			</main>
		</div><!-- end .row -->
	</div>
</section>


<?php /*
<section class="area--voucher">
	<div id="content">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">

				<section class="block--summer">
					<div class="row">
						<div class="small-12 medium-12 large-12 columns">

							<a href="/gift-vouchers" title="InParlour - Gift Vouchers"><img style="border:1px solid #E7D2B5;" src="<?php echo get_template_directory_uri(); ?>/images/ip-gift-voucher-1200x350feb20.jpg" title="InParlour Gift Voucher 2019"></a>

						</div>
					</div><!-- end .row -->
				</section>

			</div>
		</div><!-- end .row -->
	</div>
</section>
*/?>

<?php /*
<section class="area--social">
	<div class="row">

		<div class="small-12 medium-12 large-12 columns">		
			<section class="block--social-instagram">

				<section>
					<?php dynamic_sidebar("Instagram"); ?>
				</section>
				
				//
					<!-- Adapted from http://www.mattboldt.com/demos/social-buttons/ -->
					<a class="button--outline button--svg button--social" href="https://www.instagram.com/inparlour/">
						<span class="button--icon">
							<?php get_template_part('svg/ip-instagram') ?>
						</span>
						<span class="button--text">
							Follow InParlour on Instagram</a>
						</span>
					</a>
				//

			</section>
		</div>
	</div><!-- end .row -->
</section>
*/ ?>

<?php get_footer(); ?>