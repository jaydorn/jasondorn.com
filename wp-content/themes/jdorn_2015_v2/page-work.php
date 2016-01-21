<?php
/*
Template Name: Work Portfolio
*/
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
	</div>
</div>




<section class="collapse">
		<ul class="small-block-grid-2 medium-block-grid-3" id="portfolio-grid">
				<?php $args = array( 'post_type' => 'design', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>		
				<li>
					<a href="<?php the_permalink(); ?> " class="animsition-link">
						<figure>
							<?php the_post_thumbnail('large'); ?>
							<figcaption>
								<h1><?php the_title(); ?></h1>
								<p><?php the_field('role'); ?></p>
							</figcaption>
						</figure>
					</a>
				</li>			
				<?php endwhile; ?>		

		</ul>
</section>
<?php get_footer(); ?>
