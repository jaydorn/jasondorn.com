<?php
/**
 * The template for displaying all single posts.
 *
 * @package jasondorn.com
 */

get_header(); ?>



	<section class="row animsition" id="content">
		<?php while ( have_posts() ) : the_post(); ?>
		
			

			<div class="medium-10 medium-centered columns" id="illustration-samples">
			
				<nav id="sub-nav">
				<a href="/illustration" class="animsition-link">&#8592; Back to illustration</a>
			
			</nav>	

			<div class="medium-6 columns">	
				<h1><?php the_field('name'); ?></h1>
			
				
				
				<?php if( get_field('project_type') ): ?>
					<p><strong>Project Type:</strong> <?php the_field('project_type'); ?></p>
				<?php endif; ?>
			</div>

	
			<div class="medium-6 columns" id="cta">
				<?php if( get_field('purchase_url') ): ?>
					<p><a href="<?php the_field('purchase_url'); ?>" class="button" target="_blank">Buy now</a></p>
				<?php endif; ?>
			</div>
			<hr />
			
			
			
						
			<?php if( have_rows('illustration_assets') ): ?>
			
		
			  		
			  	
				    <?php while( have_rows('illustration_assets') ): the_row(); ?>
				    <?php $image = get_sub_field('illustration_image'); 
					      $size = 'large';
					      $large = $image['sizes'][ $size ]; ?>					    
				    
				    	<figure>
				       		<img src="<?php echo $large; ?>" alt="<?php the_sub_field('image_alt'); ?>"/>
				    	</figure>
				    <?php endwhile; ?>
				    
				    
				    
				    
		
			    
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
