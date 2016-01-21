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

	<div class="banner-image animsition">
		<?php  echo get_the_post_thumbnail(5, 'full'); ?>
	</div>
	
	<section class="collapse animsition" id="content">
		<div class="small-10 small-centered medium-8 medium-centered columns text-center" id="banner-intro">

			<h1><?php echo get_the_title(5); ?> </h1>
			<hr />
			 <p><?php $page_id = 5;
				 	$page_object = get_page( $page_id );
				 	echo $page_object->post_content; ?>
			</p>
			
		</div>
		
		<ul class="small-block-grid-2 medium-block-grid-3" id="portfolio-grid">
				<?php $args = array( 'post_type' => 'design', 'posts_per_page' => 10 );
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
