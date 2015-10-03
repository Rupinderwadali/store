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
<select id = "areas">
</select>

	<?php if ( have_posts() ) : ?>
                        <?php// get_template_part( 'content', 'place' );?>

			<?php /* Start the Loop */ ?>
			<?php //while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 */
			//		do_action('store_blog_layout'); 
			
					 get_template_part( 'content', 'area' );
	?>

			<?php //endwhile; ?>

			<?php store_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		       <?php// get_template_part( 'content', 'area' );?>   					


		</main><!-- #main -->
	</div><!-- #primary -->

<script type="text/javascript" language="javascript">

	$("#city").change(function(){
		var value= this.value;
		$("#areas").empty();
  			$("#areas").append($('<option>Select</option>'));
		if(value == "Amritsar"){
  			$("#areas").append($('<option>Chheharta</option> + <option>Mall_Road</option> + <option>Ranjit_Avenue</option>'));
			}	 
		else if(value == "Ludhiana"){
			$("#areas").append($('<option>Gill_Road</option> + <option>Dugri</option>'));
			}	
		});

	$("#areas").change(function(){
		console.log("running");
	var select= this.value;
			$(".area").children().css({"display":"none"});
		if(select == 'Chheharta'){
        		$(".Chheharta").css({"display": "block"});
		}
	       	else if(select == 'Ranjit_Avenue'){
			$(" .Ranjit_Avenue").css({"display":"block"});
		}
	 	else if(select == 'Gill_Road'){
			$(" .Gill_Road").css({"display":"block"});
		}


	});
</script>  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
