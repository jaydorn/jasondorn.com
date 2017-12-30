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
		</h1>		
	</div>
</div>

	<div class="row">
		<div class="medium-12 columns">
			<a href="/work" class="back icon-arrow-left">Back to work</a>
		</div>
	</div>
	<section class="row" id="content">

		
		<div class="medium-3 columns" id="design-sidebar">
			

		<p class=""><strong>Role</strong><br /> <?php the_field('role'); ?></p>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>					
					
		<?php if( get_field('project_url') ): ?> 
		<hr />	
		<h1><a href="<?php the_field('project_url'); ?>" target="_blank" class="button">Visit Live Site</a></h1>
				<br />
		<?php endif; ?>		
			
		</div>
		
		
		<?php while ( have_posts() ) : the_post(); ?>
		
			
			
			
			<div class="medium-9 columns" id="design-samples">
			
						
			<?php if( have_rows('screenshots') ): ?>
			
					<?php if( get_field('project_url') ): ?> 
					
					    <?php while( have_rows('screenshots') ): the_row(); ?>
					    <?php $image = get_sub_field('image'); 
						      $size = 'large';
						      $large = $image['sizes'][ $size ]; ?>					    
					   
					    	<figure>
					    		 <?php echo get_sub_field('video_test'); ?>
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
					    		<?php echo get_sub_field('video_test'); ?>
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
