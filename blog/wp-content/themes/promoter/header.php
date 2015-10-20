<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<!-- stylesheets -->
	<link href="/assets/global.css" rel="stylesheet">
	<link href="/assets/responsive-nav.css" rel="stylesheet">
	<link href="/assets/jquery.tooltipster.css" rel="stylesheet">
	<link href="/assets/animate.css" rel="stylesheet">

	<!-- optimizely -->
	<script src="//cdn.optimizely.com/js/213035289.js"></script>
	<!-- Segment.io -->
	<script type="text/javascript">
		window.analytics=window.analytics||[],window.analytics.methods=["identify","group","track","page","pageview","alias","ready","on","once","off","trackLink","trackForm","trackClick","trackSubmit"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var key=window.analytics.methods[i];window.analytics[key]=window.analytics.factory(key)}window.analytics.load=function(t){if(!document.getElementById("analytics-js")){var a=document.createElement("script");a.type="text/javascript",a.id="analytics-js",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.io/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)}},window.analytics.SNIPPET_VERSION="2.0.9",
		window.analytics.load("kclkrs7sb8");
		window.analytics.page();
	</script>

	<!-- SumoMe -->
        <script src="//load.sumome.com/" data-sumo-site-id="692f65793170ffe1fb10bc864e79434d131054eea677db95166010050b0cddeb" async="async">
        </script>

	<?php wp_head(); ?>
</head>

<body>
<div id="container">
	
	<section id="header-wrap" class="privacy">
		<header id="header" class="clearfix">			
			<nav id="nav" class="nav-collapse">				
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/pricing"<?php if ($section=="pricing") {echo ' class="selected"';} ?>>Pricing</a></li>
					<li><a href="/about"<?php if ($section=="about") {echo ' class="selected"';} ?>>About Us</a></li>
					<li><a href="/blog" class="selected">Blog</a></li>
					<li><a href="https://app.promoter.io/account/login/">Log In</a></li>
					<li><a href="https://app.promoter.io/account/signup/" class="signup">Sign Up</a></li>
				</ul>
			</nav>
			<a href="/" class="logo"></a>
		</header>
	</section>

	<section id="content-wrapper">
