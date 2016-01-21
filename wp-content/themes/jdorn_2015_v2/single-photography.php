<?php
/**
 * The template for displaying all single posts.
 *
 * @package jasondorn.com
 */

get_header(); ?>



	<section class="row collapse animsition" id="content">
		<?php while ( have_posts() ) : the_post(); ?>

		


			<nav id="sub-nav">
				<a href="/photography" class="animsition-link">&#8592; Back to galleries</a>
			</nav>

			<?php if( have_rows('gallery_assets') ): ?>
			  		<div class="small-12 medium-10 medium-centered small-centered columns text-center photo-column">
			  		
			  		
		
			  		
			  	
				    <?php while( have_rows('gallery_assets') ): the_row(); ?>
				    
				    <?php $image = get_sub_field('image'); 
					      $size = 'large';
					      $large = $image['sizes'][ $size ]; ?>
				    
				    	<figure>
				       		<figcaption class="row">
					       		<div class="medium-6 columns">
					       		<h3><?php the_sub_field('image_name'); ?></h3>
					       		</div>
					       		
					       		
					       		<div class="medium-6 columns end cta">
					       		<?php if( get_sub_field('purchase_print') ): ?>
									<a href="<?php the_sub_field('purchase_print'); ?>" class="button" target="_blank">Order Print</a>
								<?php endif; ?>
					       		</div>
				       		</figcaption>				    	
				    	
				       		<img src="<?php echo $large; ?>" alt="<?php the_sub_field('image_name'); ?>"/>

				    	</figure>
				    <?php endwhile; ?>
				    
			    </div>
			    
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>



		<div class="small-12 medium-6 medium-centered columns text-center" id="call-to-action">
			<p>See something you like? <a href="/contact">Let's talk.</a></p>
		</div>
	</section>









<?php get_footer(); ?>
