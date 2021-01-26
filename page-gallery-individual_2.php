<?php /* Backup of T-T-T-Template Name: Individual Projecto */ ?>
<style>    
    .wp-post-image {
    position: absolute;
    top: -50%;
    filter: blur(10px);
    }
    .entry-title {
    z-index: 100;
    }
</style>
<?php get_header(); ?>
	<div id="primary" class="content-area  page-banner-3">
		<main id="main" class="site-main">
                    
			<?php
			while ( have_posts() ) : the_post();
//  BEGIN GET TEMPLATE PART
//				get_template_part( 'template-parts/content', 'page-about-b' ); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <style>
                header img {
                    width: 100%;
                }
            </style>
            <header class="entry-header page-banner-1">
		<?php
                if ( is_page( $page = '188') ) :
                   the_title( '<h1 class="entry-title page-header-1 b-font">', '</h1>' );
                else :  the_title( '<h1 class="entry-title page-header-1">', '</h1>' );
                endif;
                     the_post_thumbnail('full'); ?>  
            </header><!-- .entry-header -->

            <div class="entry-content entry-shifted-r">
                <div class="showcaser">
                <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) );
		?>
                </div>
            </div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'dxlmtheme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php //END OF GET TEMPLATE PART

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
