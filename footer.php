<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package store
 */
?>

	</div><!-- #content -->

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php/* printf( __( 'Be Organic' )  );*/?>
			<span class="sep"></span>
                   <div class="foot-head">

			<?php echo ( get_theme_mod('store_footer_text') == '' ) ? (get_bloginfo('name')) : esc_html( get_theme_mod('store_footer_text') ); ?>
	  	   </div><!--foot-->
        	</div><!--site-info-->
		<div id="top-bar">		
			<div class="social-icons">
						<?php get_template_part('social', 'fa'); ?>	 
			</div>
			
		</div><!-- top-bar -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
