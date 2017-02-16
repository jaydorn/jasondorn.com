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
	<div class="row">
		<div class="small-12 medium-6 large-6 medium-offset-1  columns animsition ">
					<h1>Hi, I'm Jason.</h1>
					<p>I'm an interactive designer in Calgary Alberta. I've been handcrafting digital experiences for over 10 years, and taking lots of pictures along the way.</p>
					<p><a href="/about" class="button">Learn more</a></p>
		</div>
		
		
		
	</div>
</div>

	<section id="leaders">
		<div class="row" >
			
			<div class="small-4 columns">
				<a href="/work" class="home-lead work">
					<figure>
						<figcaption>
							<h2>Work</h2>
							<p>Take a look at some of my past projects.</p>
							<p><span class="button small">View my work</span></p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="small-4 columns">
				<a href="/services" class="home-lead services">
					<figure>
						<figcaption>
							<h2>Services</h2>
							<p>UX, responsive web design, web development, illustration, and photography.</p>
							<p><span class="button small">View services</span></p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="small-4 columns">
				<a href="/contact" class="home-lead contact">
					<figure>
						<figcaption>
							<h2>Contact</h2>
							<p>Ready to make something great together?</p>
							<p><span class="button small">Get in touch</span></p>
						</figcaption>
					</figure>
				</a>
			</div>		
		</div>
	</section>

	<section class="collapse" id="content">
	

			<ul class="small-block-grid-2 medium-block-grid-3 " id="portfolio-grid">
					<?php $args = array( 'post_type' => 'design', 'posts_per_page' => 6 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>		
					<li>
						<a href="<?php the_permalink(); ?>">
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
