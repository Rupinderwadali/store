<?php
 /**glg template file        
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
<main id="main" class="site-main <?php do_action('store_main-class') ?>" role="main">te_part( 'content', 'area' );

<?php

   $args = array('cat' => blog post);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
         $category_posts->the_post();
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>

<?php
endwhile;
else:
?>

Oops, there are no posts.
                                                                                                                             1,3           Top
<?php
   endif;
?>

  </main><!-- #main -->
        </div><!-- #primary -->

<?php get_sidebar; ()?>
<?php get_footer; ()?>


