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
<script src="//use.typekit.net/alb1myg.js"></script>
<script>try{Typekit.load();}catch(e){}</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div id="masthead" class="">
		<div class="small-12 columns">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Jason Dorn</a>
			<small>Calgary, Alberta</small>
			</h1>
			<nav id="main">
			<div class="hamburger">
					<a id="menu-toggle" href="#">
						<span class="icon-hamburger"></span>
					</a>
				</div>
			
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>

		</div>
	</div>





