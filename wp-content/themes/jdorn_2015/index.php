<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jasondorn.com
 */

get_header(); ?>

<div class="banner">
	<div  class="row">
		<div class="small-12 medium-8 medium-offset-2  columns animsition " id="home-intro-copy">
					<h1>Hi, I'm Jason.</h1>
					<p>I'm User Experience designer in Calgary Alberta. I've been handcrafting digital experiences for over 13 years, and taking lots of pictures along the way.</p>
					<p><a href="#portfolio-grid" class="button">Learn more</a></p>
		</div>
	</div>
</div>


	<section class="collapse" id="content">
		

		<ul id="portfolio-grid">
				<?php $args = array( 'post_type' => 'design', 'posts_per_page' => 6 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>	
						
						<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );
 ?>	
				<li>
					<a href="<?php the_permalink(); ?>">
						<figure style="background-image:url(<?php echo $thumbnail[0]; ?>);">
							
							<figcaption>
								<p><?php the_field('role'); ?></p>
								<h1><?php the_title(); ?></h1>
								
							</figcaption>
						</figure>
					</a>
				</li>
			<?php endwhile; ?>	
			
						

		</ul>
	</section>
	


<?php get_footer(); ?>
