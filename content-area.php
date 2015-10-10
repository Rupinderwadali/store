<div class="area">
<?php
$terms = get_terms('area');
foreach($terms as $term) : ?>
	<div class = "<?php echo $term->name ?>">
		<?php
		$posts = new WP_Query(array('area' => $term->slug));
        
		if( $posts->have_posts() ):?> 
                <div class="room">
			<?php
			while( $posts->have_posts() ) : 
				$posts->the_post();?>
	<div class="post_title">
		<a href ="<?php the_permalink();?>"><?php the_title();?></a>
	<?php the_post_thumbnail();?>
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

