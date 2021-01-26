<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dxlm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--                <div class="main-carousel">
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/revslider/eyre/banner_2.jpg"class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="width:370px;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/DSC_0281-e1515678316546.jpg" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/DSC_0338.jpg" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="width:370px;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/A-DSC_0300-e1515748954716.jpg" class="">
                    </div>
                </div>-->
            <div class="entry-content entry-shifted-r">
                
                    <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) );
		?>
                
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
