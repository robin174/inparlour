<?php get_header(); ?>

<section class="area--logo">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/ip-logo.png" alt="InParlour - Logo">
	</figure>
</section>
			
	<div id="content">
		<div id="inner-content" class="row">
	
			<main id="main" class="large-8 medium-8 columns" role="main">
				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e( 'Epic 404 - Article Not Found', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
					</section> <!-- end article section -->
			
				</article>
			</main> <!-- end #main -->

		</div> <!-- end .row -->
	</div> <!-- end #content -->

<?php get_footer(); ?>