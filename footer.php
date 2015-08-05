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
		<div class="site-info container">
			<?php printf( __( 'Theme Designed by %1$s.', 'store' ), '<a href="'.esc_url("http://rohitink.com/").'" rel="designer">Rohit</a>' ); ?>
			<span class="sep"></span>
			<?php echo ( get_theme_mod('store_footer_text') == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','store')) : esc_html( get_theme_mod('store_footer_text') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
