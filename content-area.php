<div class="area">
<?php
$terms = get_terms('area');
foreach($terms as $term) : ?>
	<div class = "<?php echo $term->name ?>">
		<?php
		$posts = new WP_Query(array('area' => $term->slug));
        
		if( $posts->have_posts() ):?>
	        <div class="room"></div>
		<?php	while( $posts->have_posts() ) : 
		       $posts->the_post();?>
	                 <?php the_post_thumbnail();?>
	
	<div class="post_title">
		<a href ="<?php the_permalink();?>"><?php the_title();?></a>
       	      	</div>
		<?php
			endwhile;
		endif;
		?>
	</div><!-- Chheharta -->
<?php
endforeach; ?>

<?php //wp_reset_postdata();
?>
</div>

