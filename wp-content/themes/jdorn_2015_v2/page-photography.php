<?php
/**
 * The template for displaying photography.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jasondorn.com
 */

get_header(); ?>


	<section class="row collapse" id="content">
		<div class="small-10 small-centered medium-8 medium-centered columns text-center" id="banner-intro">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'galleries' ); ?>
			<?php endwhile; // end of the loop. ?>
			
			
		</div>
		
		<ul class="small-block-grid-1 medium-block-grid-3" id="portfolio-grid">
				<?php $args = array( 'post_type' => 'photography', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>		
				<li>
					<a href="<?php the_permalink(); ?> ">
						<figure>
							<?php the_post_thumbnail('large'); ?>
							<figcaption><?php the_title(); ?></figcaption>
						</figure>
					</a>
				</li>
			<?php endwhile; ?>		

		</ul>
	</section>





<?php get_footer(); ?>
