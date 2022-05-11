<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	
	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta class="foundation-mq">
	
	<!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
		<![endif]-->
		
		<!-- TO INVESTIGATE -->
		<!-- ////////////// -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
    	<meta name="theme-color" content="#121212">
    <?php } ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	<!-- Adobe Typekit: Nimbus -->
	<script src="https://use.typekit.net/xqu3qhe.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<!-- Google Webmaster Tools -->
	<meta name="google-site-verification" content="WGi3g01oILdrJC0Vzk4WL9ijGFysy5-FxIBapeH_eig" />

	<?php wp_head(); ?>
</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
	<body <?php body_class('contouring'); ?>>
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				<div class="off-canvas-content" data-off-canvas-content>
					<header class="header" role="banner">
						<!-- This navs will be applied to the topbar, above all content 
						To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					</header><!-- end .header -->