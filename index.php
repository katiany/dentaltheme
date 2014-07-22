<?php
/**
 * The main template file.
 *
 * @package Dental
 */
 
//Gets the file header.php from the theme's directory and includes it in the structure of the page.
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php
		//The method have_posts() checks if there are posts in the current WordPress query.
		if ( have_posts() )  :
			//If this line is executed, the conditional if before resulted in true, meaning there are posts in the query.
			/* The loop while executes repeatedly while the query has posts to be shown. */
			while ( have_posts() ) :
					//The method the_post() displays the post content in the page
					the_post();
					//Loads a specialized or specific template into the current template.
					get_template_part( 'content', get_post_format() );
			endwhile; //end of the loop
		
		//The alternative condition: in case the methos have_posts() returns false because there are no posts to be shown.
		else :
			//Loads the template 'none' to the current template with the WP method get_template_part()
			get_template_part( 'content', 'none' );
		//End of the conditional section.
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); /* Gets the file sidebar.php from the theme's directory to include it in the structure of the page. */ ?>
<?php get_footer(); /* Gets the file footer.php from the theme's directory to include it in the structure of the page */ ?>
