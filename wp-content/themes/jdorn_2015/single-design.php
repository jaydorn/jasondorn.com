<?php
/**
 * The template for displaying all single posts.
 *
 * @package jasondorn.com
 */

get_header(); ?>

<div class="banner">
	<div>
		<h1 class="text-center">
			<?php the_field('project_name'); ?> 
			<?php if( get_field('project_url') ): ?>  
				<a href="<?php the_field('project_url'); ?>" class="icon-link" target="_blank"></a>
			<?php endif; ?>			
		</h1>
		<p class="text-center"><strong>Role:</strong> <?php the_field('role'); ?></p>
		<?php if( get_field('agency') ): ?>
				<p class="text-center"><strong>Agency:</strong>
				<?php if( get_field('agency_url') ): ?>
						<a href="<?php the_field('agency_url'); ?>" target="_blank"><?php the_field('agency'); ?></a>
					<?php else: ?>
						<?php the_field('agency'); ?>
				<?php endif; ?>
				
				
				</p>
			<?php endif; ?>		
	</div>
</div>
	<section class="row" id="content">
		<?php while ( have_posts() ) : the_post(); ?>
		
			
			
			
			<div class="medium-9 medium-centered columns" id="design-samples">
			
						
			<?php if( have_rows('screenshots') ): ?>
			
					<?php if( get_field('project_url') ): ?> 
					
					    <?php while( have_rows('screenshots') ): the_row(); ?>
					    <?php $image = get_sub_field('image'); 
						      $size = 'large';
						      $large = $image['sizes'][ $size ]; ?>					    
					    
					    	<figure>
						    	<a href="<?php the_field('project_url'); ?>" target="_blank">
						       		<img src="<?php echo $large; ?>" alt="<?php the_sub_field('image_alt'); ?>"/>
						    	</a>
					    	</figure>
					    <?php endwhile; ?>
					
					
					
					<?php else: ?>
					
				
					
			  		
			  	
					    <?php while( have_rows('screenshots') ): the_row(); ?>
					    <?php $image = get_sub_field('image'); 
						      $size = 'large';
						      $large = $image['sizes'][ $size ]; ?>					    
					    
					    	<figure>
					       		<img src="<?php echo $large; ?>" alt="<?php the_sub_field('image_alt'); ?>"/>
					    	</figure>
					    <?php endwhile; ?>
				    
				    <?php endif; ?>
				    
				    
		
			    
			<?php endif; ?>
			
			
			</div>



		<?php endwhile; // end of the loop. ?>


	</section>






<!--
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.photo-column').slick({
		    infinite: true,
		    arrows: true,
		});      
	  
	});
	</script>
-->


<?php get_footer(); ?>
