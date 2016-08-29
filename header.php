<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xawichita
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xawichita' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<!-- temporary code until I fix it so the header can work in the cms dashboard -->
		<nav class="navigation navbar-fixed-top" role="navigation">
<div class="container">
<ul class="nav nav-tabs">
	<li class="dropdown hidden-md hidden-lg"><button aria-expanded="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" type="button"></button>
	<ul aria-labelledby="dropdownMenu1" class="dropdown-menu" role="menu">
		<li role="presentation"><a href="index.html" role="menuitem" tabindex="-1">Home</a></li>
		<li role="presentation"><a href="about.html" role="menuitem" tabindex="-1">About</a></li>
		<li role="presentation"><a href="blog.html" role="menuitem" tabindex="-1">Blog</a></li>
		<li role="presentation"><a href="lookbook.html" role="menuitem" tabindex="-1">Lookbook</a></li>
		<li role="presentation"><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>
	</ul>
	</li>
	<li><a class="navbar-brand" href="index.html" id="brand">XA Wichita</a></li>
	<li class="hidden-xs"><a href="index.html">Home</a></li>
	<li class="hidden-xs"><a href="about.html">About</a></li>
	<li class="hidden-xs"><a href="blog.html">Blog</a></li>
	<li class="hidden-xs"><a href="lookbook.html">Lookbook</a></li>
	<li class="hidden-xs"><a href="contact.html">Contact</a></li>
</ul>
</div>
</nav>
<!-- the temporary header end here-->

<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'xawichita' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> -->
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->


