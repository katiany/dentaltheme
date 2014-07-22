<?php
/*
 * Template Name: Content Only
 * Description: Template for pages with content-only. No comments or title are displayed.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'contentonly' ); ?>

			<?php endwhile; // end of the loop. ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


?>