<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dxlm
 */ ?>

<?php get_header('new-inv'); ?>
<style>
    .wp-post-image {
    filter: blur(10px);
    }
@media all and (min-width: 1024px) {
	.entry-shifted-r {
	    margin-left: 19.5em;
	    margin-right: 19.5em;
	}
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main entry-shifted-r">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-post', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
