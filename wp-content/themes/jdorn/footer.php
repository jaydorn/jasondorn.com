<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jasondorn.com
 */
?>

	<footer class="animsition">
		<div class="medium-3 medium-centered columns">
			<h3>Find me on:</h3>
			<ul class="small-block-grid-5 " id="social-links">
				<li><a href="https://twitter.com/jaydorn" class="icon-twitter" target="_blank"></a></li>
				<li><a href="http://instagram.com/jaydorn" class="icon-instagram" target="_blank"></a></li>
				<li><a href="https://dribbble.com/jaydorn" class="icon-dribbble" target="_blank"></a></li>
				<li><a href="https://www.flickr.com/photos/dornoforpyro/" class="icon-flickr" target="_blank"></a></li>
				<li><a href="https://www.linkedin.com/in/jasondorn" class="icon-linkedin" target="_blank"></a></li>
			</ul>			
		</div>
		
		<div class="medium-12 columns">
			<h5>&copy; copyright Jason Dorn <?php echo date("Y"); ?></h5>
		</div>
		<div class="clear"></div>
	
	</footer>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
	
		$( '#menu-toggle').click(function() {
		  $('.menu, .menu-menu-1-container').toggleClass("on");		  
		  $(this).toggleClass("on");
		});	
		$('.photo-column').slick({
		    infinite: true,
		    arrows: true,
		});      
	  
		$(".animsition").animsition({
			inClass: 'fade-in-up',
			outClass: 'fade-out-up',
			inDuration: 1500,
			outDuration: 700,
			linkElement: '.animsition-link',
			// e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
			loading: true,
			loadingParentElement: 'body', //animsition wrapper element
			loadingClass: 'animsition-loading',
			unSupportCss: [
			  'animation-duration',
			  '-webkit-animation-duration',
			  '-o-animation-duration'
			],
			//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
			//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
			overlay : false,
			overlayClass : 'animsition-overlay-slide',
			overlayParentElement : 'body'
		});	  
	  
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});	  
	});

	</script>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-6467455-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>

</body>
</html>
