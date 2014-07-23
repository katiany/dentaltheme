<?php
/**
 * Template used for pages that display only content without title and comments.
 *
 * @package Dental
 */
?>
<?php /*The function the_ID() displays the numeric ID of the current post while
the function post_class() adds classes related to the div tag and prints it out. */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); /*The function the_content() from WordPress displays the contents of the current post. */ ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php /* The function edit_post_link() displays a link to edit the current post (if the user is logged in and has permissions.) */ ?>
		<?php edit_post_link( __( 'Edit', 'dental' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
