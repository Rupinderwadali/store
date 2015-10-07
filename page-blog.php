<?php
/**
* The bolg template file	
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

<?php
  query_posts( array ( 'category_name' => 'blog post', 'posts_per_page' => 4 ) ); 
  while (have_posts()) : the_post();
  the_content();
endwhile;
?>

    </main><!-- #main -->
        </div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer();?>
