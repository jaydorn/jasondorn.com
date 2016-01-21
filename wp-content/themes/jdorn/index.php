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

<div id="home-banner-intro">
	<div class="small-12 medium-7 medium-centered columns text-center animsition">
				<h1>Hi, I'm Jason.</h1>
				<hr />
				<p>I'm a <a href="/design" class="animsition-link">UX designer</a>, occasional <a href="/illustration" class="animsition-link">illustrator</a>, and aspiring <a href="/photography" class="animsition-link">photographer</a> in Calgary Alberta.</p>
				<p><a href="#recent" class="button">View Work</a></p>
	</div>
</div>

<a name="recent"></a>
	<section class="collapse animsition" id="content">
			
		<div class="small-10 small-centered medium-8 medium-centered columns text-center" id="banner-intro">
		
			<h1>Some Recent Work</h1>
			<hr />
		</div>
		
		<ul class="small-block-grid-2 medium-block-grid-3" id="portfolio-grid">
				<?php $args = array( 'post_type' => 'design', 'posts_per_page' => 2 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>		
				<li>
					<a href="<?php the_permalink(); ?> " class="animsition-link">
						<figure>
							<?php the_post_thumbnail('large'); ?>
							<figcaption><?php the_title(); ?></figcaption>
						</figure>
					</a>
				</li>
			<?php endwhile; ?>	
			
				<?php $args = array( 'post_type' => 'illustration', 'posts_per_page' => 2 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>		
				<li>
					<a href="<?php the_permalink(); ?> " class="animsition-link">
						<figure>
							<?php the_post_thumbnail('large'); ?>
							<figcaption><?php the_title(); ?></figcaption>
						</figure>
					</a>
				</li>
			<?php endwhile; ?>
			
				<?php $args = array( 'post_type' => 'photography', 'posts_per_page' => 2 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>		
				<li>
					<a href="<?php the_permalink(); ?> " class="animsition-link">
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
