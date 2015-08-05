<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package store
 */

get_header(); ?>

	<div id="primary" class="content-areas <?php do_action('store_primary-width') ?>">
		<main id="main" class="site-main <?php do_action('store_main-class') ?>" role="main">
<select id = "city">
	<option value="none">Select</option>
	<option value ="Amritsar" >Amritsar</option>
	<option value ="TaranTarn">TaranTarn</option>
	<option value ="Ludhiana">Ludhiana</option>
</select>
<select id = "area">
</select>

	<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 */
					do_action('store_blog_layout'); 
					
				?>

			<?php endwhile; ?>

			<?php store_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script type="text/javascript" language="javascript">

	$("#city").change(function(){
		var value= this.value;
		$("#area").empty();
		if(value == "Amritsar"){
  			$("#area").append($('<option>Chheharta</option>'));
			}	 
		else if(value == "Ludhiana"){
			$("#area").append($('<option>Gill_Road</option>'));
			}	
		});
</script>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
