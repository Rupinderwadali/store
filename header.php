<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package store
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<!--<script src="jquery-1.11.3.min.js"></script>-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'store' ); ?></a>
	<div id="jumbosearch">
		<span class="fa fa-remove closeicon"></span>
		<div class="form">
			<?php get_search_form(); ?>
		</div>
	</div>	
	
	
	<header id="masthead" class="site-header" role="banner">
		<div class="container masthead-container">
			<div class="site-branding">
				<?php if ( get_theme_mod('store_logo') != "" ) : ?>
				<div id="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod('store_logo') ); ?>"></a>
				</div>
				<?php endif; ?>
				<div id="text-title-desc">
				<h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>	
			
	
			<div id="top-bar">
				<div class="top-bar-container">
					<div class="social-icons">
						<?php get_template_part('social', 'fa'); ?>	 
					</div>
			
					<div id="top-search">
						<?php get_template_part('searchform', 'top'); ?>
					</div>
		<!--	<div id="top-menu">
				<?php// wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
			</div>-->
				</div><!--container-->
			</div><!--top-bar-->
	
			
		</div>	
		
		<div id="slickmenu"></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<?php $walker = new Store_Menu_With_Description; ?>
				<?php if (has_nav_menu(  'primary' ) && !get_theme_mod('store_disable_nav_desc') ) :
							wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); 
						else : 
							wp_nav_menu( array( 'theme_location' => 'primary' ) );
					  endif; ?>
			</div>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
	
	<div class="mega-container">
		<?php if (class_exists('woocommerce')) : ?>	
		<?php get_template_part('coverflow', 'product'); ?>
		<?php get_template_part('featured', 'products'); ?>
		<?php endif; ?>
	
		<div id="content" class="site-content container">
