<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jasondorn.com
 */

get_header(); ?>


	<section class="row animsition" id="content">
		<div class="medium-4 columns">
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/bio.jpg" alt="Jason Dorn - Calgary Alberta" class="bio-pic"/>
		</div>	

		<div class="medium-6 medium-offset-1 end columns">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
			
				<div class="row">
					<div class="medium-6 columns">
						<h4>Get in touch</h4>
						<ul>
							<li><a href="mailto:work@jasondorn.com">work@jasondorn.com</a></li>
							<li><a href="tel:1.403.467.7047">403.467.7047</a></li>
						</ul>
					</div>
					<div class="medium-6 columns">
						<h4>Find me on:</h4>
						<ul class="small-block-grid-5 medium-block-grid-6 large-block-grid-9" id="social-links">
							<li><a href="https://twitter.com/jaydorn" class="icon-twitter" target="_blank"></a></li>
							<li><a href="http://instagram.com/jaydorn" class="icon-instagram" target="_blank"></a></li>
							<li><a href="https://dribbble.com/jaydorn" class="icon-dribbble" target="_blank"></a></li>
							<li><a href="https://www.flickr.com/photos/dornoforpyro/" class="icon-flickr" target="_blank"></a></li>
							<li><a href="https://www.linkedin.com/in/jasondorn" class="icon-linkedin" target="_blank"></a></li>
						</ul>	
					</div>		
				</div>
		</div>
	</section>


<?php get_footer(); ?>
