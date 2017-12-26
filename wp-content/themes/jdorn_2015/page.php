<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jasondorn.com
 */

get_header(); ?>

<div class="banner">
	<div class="section-hero">
		<h1 class="text-center"><?php echo get_the_title(); ?></h1>
		<p class="text-center"><a href="mailto:work@jasondorn.com">work@jasondorn.com</a><br />(403) 467-7047</p>
	</div>
</div>


	<div id="primary" class="content-area row">
		<main id="main" class="medium-8 medium-centered columns site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
