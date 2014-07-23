<?php
/*
 * Template Name: Content Only
 * Description: Template for pages with content-only. No comments or title are displayed.
 */

//Gets the file header.php from the theme's directory and includes it in the structure of the page.
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			
			/* The loop 'while' executes repeatedly while the query has posts to be shown. 
			The method have_posts() checks if there are posts in the current WordPress query. */
			while ( have_posts() ) :
				//The method the_post() displays the post content in the page
				the_post();
				//Loads the template 'contentonly' into the current template.
				get_template_part( 'content', 'contentonly' );

			endwhile; // end of the loop. ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); /* Gets the file sidebar.php from the theme's directory to include it in the structure of the page. */ ?>
<?php get_footer(); /* Gets the file footer.php from the theme's directory to include it in the structure of the page */ ?>

?>