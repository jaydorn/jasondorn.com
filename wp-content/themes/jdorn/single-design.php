<?php
/**
 * The template for displaying all single posts.
 *
 * @package jasondorn.com
 */

get_header(); ?>



	<section class="row animsition" id="content">
		<?php while ( have_posts() ) : the_post(); ?>
		
			<nav id="sub-nav">
				<a href="/design" class="animsition-link">&#8592; Back to design</a>
			
			</nav>		

			<div class="medium-3 columns" id="design-sidebar">
			<h1><?php the_field('project_name'); ?></h1>
			<hr />
			<p><strong>Role:</strong><br /> <?php the_field('role'); ?></p>
			
			<?php if( get_field('agency') ): ?>
				<p><strong>Agency:</strong><br /> 
				<?php if( get_field('agency_url') ): ?>
						<a href="<?php the_field('agency_url'); ?>" target="_blank"><?php the_field('agency'); ?></a>
					<?php else: ?>
						<?php the_field('agency'); ?>
				<?php endif; ?>
				
				
				</p>
			<?php endif; ?>
			<hr />
			<?php if( get_field('project_url') ): ?>
				<p><a href="<?php the_field('project_url'); ?>" class="icon-link" target="_blank">Visit Site</a></p>
			<?php endif; ?>
			</div>
			
			
			<div class="medium-9 columns" id="design-samples">
			
						
			<?php if( have_rows('screenshots') ): ?>
			
		
			  		
			  	
				    <?php while( have_rows('screenshots') ): the_row(); ?>
				    <?php $image = get_sub_field('image'); 
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
