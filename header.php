<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package PlanetG
 * @since PlanetG 1.0
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed site">
	
		<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'planetg' ); ?>"><?php esc_html_e( 'Skip to main content', 'planetg' ); ?></a></div>

		<div id="headercontainer">
			<header id="masthead" class="site-header row" role="banner">
				<div class="col grid_12_of_12 site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img src="<?php bloginfo('stylesheet_url'); ?>/../images/logo.png" height="60px" width="387px" alt="GIZIPP's Inspiration Zone of Idea, Passion and Productivity" />
						</a>
				</div> <!-- /.col.grid_12_of_12 -->
			</header> <!-- /#masthead.site-header.row -->
<div class="adv">
</div>
			<div class="tersesat">
				<a href="#bannercontainer"><img src="<?php bloginfo('stylesheet_url'); ?>/../images/tersesat.png"/></a>
			</div>
		</div> <!-- /#headercontainer -->

		<div id="bannercontainer">
			<?php if ( is_front_page() ) { ?>
				<h1>GIZIPP's Inspiration Zone of Idea, Passion and Productivity</h1>
			<?php } else { ?>
				<div id="menubanner">
					<a href="#">ZONA INDUK</a> 
					<i class="fa fa-circle-o"></i>
					<a href="#">KENTANG PLANET</a>
					<i class="fa fa-circle-o"></i>
					<a href="#">PETA SEMESTA</a>
					<i class="fa fa-circle-o"></i>
					<a href="#">JADI ALIEN?</a>
				</div>
			<?php } ?> 
		</div> <!-- /#bannercontainer -->

		<?php if ( is_front_page() ) { ?>
			<div id="footerdamned" class="section-style-1" style="text-align:center">
				<img src="wp-content/themes/planetg/images/component.png"  />
			</div>
			<?php } ?>

	<div id="maincontentcontainer">