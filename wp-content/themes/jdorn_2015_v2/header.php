<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package jasondorn.com
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Typekit -->
<script src="https://use.typekit.net/bug8zwc.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<div id="masthead">
				<div class="row">
					<div class="small-12 columns">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a></h1>
						<nav id="main">
						
						<div class="hamburger">
								<a id="menu-toggle" class="top-off-canvas-toggle" href="#">
									<span class="icon-hamburger"></span>
								</a>
								
							</div>
							
							<aside class="top-off-canvas-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</aside>
						</nav>
			
					</div>
				</div>
				
			</div>
	
<a class="exit-off-canvas"></a>
		



